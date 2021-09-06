<?php

require_once 'Config/Core.php';
require_once 'Model/botonesDepartamentoModel.php';
require_once 'Model/botonesTurnosModel.php';
require_once 'Model/departamentosModel.php';

class Mant_botones_departamentoController
{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new Mant_BotonesDepartamento();
    }

    public function Index(){

        if(count($_SESSION) > 0){

        if($_SESSION['UserOnline']->Profile == "admin") {

                GetRouteView(null, "header");
                require_once 'View/mant_turnos/mant_botones_departamento/index.php';
                GetRouteView(null, "footer");
        }else{
        header('Location:index.php?c=login&a=index');      
        }
    }else{
      header('Location:index.php?c=login&a=index');
    }
    }

    public function View(){

         if($_SESSION['UserOnline']->Profile == "admin") {

             echo json_encode($this->model->View());

        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    public function Edit(){

    if($_SESSION['UserOnline']->Profile == "admin") {
        $DepartamentosByBoton = "";
        $BotonDept = new Mant_BotonesDepartamento();
        $Botones = new Mant_BotonesTurnos();
        $BotonesArray = $Botones->GetListBotones();

        $Departamentos = new Mant_Departamentos();
        $DepartamentosArray = $Departamentos->GetListDepartamentos();

        if(isset($_REQUEST['BotonTurnoID'])){
            $BotonDept = $this->model->Edit($_REQUEST['BotonTurnoID']);
            $DepartamentosByBoton =  $Departamentos->GetListDepartamentoByBoton($_REQUEST['BotonTurnoID']);
        }

       GetRouteView(null, "header");
       require_once 'View/mant_turnos/mant_botones_departamento/edit.php';
       GetRouteView(null, "footer");

        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    public function Save(){

        $this->model->Id                     = $_REQUEST['Id'];
        $this->model->BotonTurnoID           = $_REQUEST['BotonTurnoID'];
        $this->model->DepartamentoID         = $_REQUEST['DepartamentoID'];
        $this->model->IsActive                 = $_REQUEST['IsActive'];
        $this->model->FechaModificacion      = date('Y-m-d');
        $this->model->FechaCreacion          = date('Y-m-d');
        $this->model->ModificadoPorUsuarioID =  $_SESSION['UserOnline']->UsuarioID;
        $this->model->CreadoPorUsuarioID     =  $_SESSION['UserOnline']->UsuarioID;

        $this->model->Id > 0
            ? $this->model->Update($this->model)
            : $this->model->Create($this->model);

        header('Location:index.php?c=mant_botones_departamento&a=index');
    }

}