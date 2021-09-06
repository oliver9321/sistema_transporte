<?php

require_once 'Config/Core.php';
require_once 'Model/prioridadTurnosPuestosModel.php';
require_once 'Model/prioridadesTurnosModel.php';
require_once 'Model/puestosModel.php';
require_once 'Model/botonesTurnosModel.php';

class mant_prioridad_turnos_puestosController
{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new Mant_PrioridadTurnosPuestos();
    }

    public function Index(){

        if (isset($_SESSION['UserOnline']) && $_SESSION['UserOnline']->Profile == "admin") {

            GetRouteView(null, "header");
            require_once 'View/mant_turnos/mant_prioridad_turnos_puestos/index.php';
            GetRouteView(null, "footer");

        }else{
            header('Location:index.php?c=login&a=index');
        }

    }

    public function View(){

        if (isset($_SESSION['UserOnline']) && $_SESSION['UserOnline']->Profile == "admin") {
            echo json_encode($this->model->View());
        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    public function Edit(){

        if (isset($_SESSION['UserOnline']) && $_SESSION['UserOnline']->Profile == "admin") {

            $Prioridades = new Mant_PrioridadesTurnos();
            $Prioridades = $Prioridades->GetListPrioridades();

            $Botones = new Mant_BotonesTurnos();
            $Botones = $Botones->GetListBotones();

            $Puestos = New Mant_Puestos();
            $Puestos = $Puestos->GetListPuestos();

            if (isset($_REQUEST['Id'])) {
                $this->model = $this->model->Edit($_REQUEST['Id']);
            }

            GetRouteView(null, "header");
            require_once 'View/mant_turnos/mant_prioridad_turnos_puestos/edit.php';
            GetRouteView(null, "footer");
        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    public function Save(){

        $this->model->Id = $_REQUEST['Id'];
        $this->model->PrioridadID = $_REQUEST['PrioridadID'];
        $this->model->BotonTurnoID = $_REQUEST['BotonTurnoID'];
        $this->model->PuestoID = $_REQUEST['PuestoID'];
        $this->model->IsActive = $_REQUEST['IsActive'];
        $this->model->FechaModificacion = date('Y-m-d');
        $this->model->FechaCreacion = date('Y-m-d');
        $this->model->ModificadoPorUsuarioID =  $_SESSION['UserOnline']->UsuarioID;
        $this->model->CreadoPorUsuarioID =  $_SESSION['UserOnline']->UsuarioID;


        $this->model->Id > 0
            ? $this->model->Update($this->model)
            : $this->model->Create($this->model);

        header('Location:?c=mant_prioridad_turnos_puestos&a=index');
    }

}