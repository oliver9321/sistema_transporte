<?php

require_once 'Config/Core.php';
require_once 'Model/prioridadesTurnosModel.php';


class mant_prioridad_turnosController
{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new Mant_PrioridadesTurnos();
    }

    public function Index(){

        if (isset($_SESSION['DataUserOnline']) && $_SESSION['DataUserOnline']['Usuario']->Perfil == "Administrador") {
            GetRouteView(null, "header");
            require_once 'View/mant_turnos/mant_prioridad_turnos/index.php';
            GetRouteView(null, "footer");
        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    public function View(){

        if (isset($_SESSION['DataUserOnline']) && $_SESSION['DataUserOnline']['Usuario']->Perfil == "Administrador") {
            echo json_encode($this->model->View());
        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    public function Edit(){

        if (isset($_SESSION['DataUserOnline']) && $_SESSION['DataUserOnline']['Usuario']->Perfil == "Administrador") {

            if (isset($_REQUEST['Id'])) {
                $this->model = $this->model->Edit($_REQUEST['Id']);
            }

            GetRouteView(null, "header");
            require_once 'View/mant_turnos/mant_prioridad_turnos/edit.php';
            GetRouteView(null, "footer");
        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    public function Save(){

        $this->model->Id = $_REQUEST['Id'];
        $this->model->Nivel = $_REQUEST['Nivel'];
        $this->model->Prioridad = $_REQUEST['Prioridad'];
        $this->model->Activo = $_REQUEST['Activo'];
        $this->model->FechaModificacion = date('Y-m-d');
        $this->model->FechaCreacion = date('Y-m-d');
        $this->model->ModificadoPorUsuarioID =  $_SESSION['DataUserOnline']['Usuario']->UsuarioID;
        $this->model->CreadoPorUsuarioID =  $_SESSION['DataUserOnline']['Usuario']->UsuarioID;


        $this->model->Id > 0
            ? $this->model->Update($this->model)
            : $this->model->Create($this->model);

        header('Location:?c=mant_prioridad_turnos&a=index');
    }

}