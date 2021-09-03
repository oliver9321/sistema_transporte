<?php

require_once 'Config/Core.php';
require_once 'Model/estadosTurnosModel.php';


class Mant_estados_turnosController
{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new Mant_EstadosTurnos();
    }

    public function Index(){

        if(isset($_SESSION['DataUserOnline']) && $_SESSION['DataUserOnline']['Usuario']->Perfil == "Administrador") {
        GetRouteView(null, "header");
        require_once 'View/mant_turnos/mant_estados_turnos/index.php';
        GetRouteView(null, "footer");
        }else{header('Location:index.php?c=login&a=index');}
    }

    public function View(){

        if(isset($_SESSION['DataUserOnline']) && $_SESSION['DataUserOnline']['Usuario']->Perfil == "Administrador") {
                      echo json_encode($this->model->View());
            }else{header('Location:index.php?c=login&a=index');}
    }

    public function Edit(){

        if(isset($_SESSION['DataUserOnline']) && $_SESSION['DataUserOnline']['Usuario']->Perfil == "Administrador") {
        $EstadoTurnos = new Mant_EstadosTurnos();

        if(isset($_REQUEST['Id'])){
            $EstadoTurnos = $this->model->Edit($_REQUEST['Id']);
        }

       GetRouteView(null, "header");
       require_once 'View/mant_turnos/mant_estados_turnos/edit.php';
       GetRouteView(null, "footer");

        }else{header('Location:index.php?c=login&a=index');}
    }

    public function Save(){

        $EstadoTurnos = new Mant_EstadosTurnos();

        $EstadoTurnos->Id = $_REQUEST['Id'];
        $EstadoTurnos->Estado = $_REQUEST['Estado'];
        $EstadoTurnos->Descripcion = $_REQUEST['Descripcion'];
        $EstadoTurnos->IsActive = $_REQUEST['IsActive'];
        $EstadoTurnos->FechaModificacion = date('Y-m-d');
        $EstadoTurnos->FechaCreacion = date('Y-m-d');
        $EstadoTurnos->ModificadoPorUsuarioID =  $_SESSION['DataUserOnline']['Usuario']->UsuarioID;
        $EstadoTurnos->CreadoPorUsuarioID =  $_SESSION['DataUserOnline']['Usuario']->UsuarioID;


        $EstadoTurnos->Id > 0
            ? $this->model->Update($EstadoTurnos)
            : $this->model->Create($EstadoTurnos);

        header('Location:?c=mant_estados_turnos&a=index');
    }

}