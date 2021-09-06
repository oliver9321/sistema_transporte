<?php

require_once 'Config/Core.php'; // Obligatorio en todos los controladores
require_once 'Model/driversModel.php'; //Insertar Modelo correspondiente al controlador

class DriversController
{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new Drivers(); // Se instancia el Modelo. Nombre de la clase del modelo
    }

    //Vista Index
    public function Index(){

        if($_SESSION['UserOnline']->Profile == "admin") {

        GetRouteView(null, "header");
        require_once 'View/drivers/index.php';
        GetRouteView(null, "footer");

        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    //Vista
    public function View(){

        if($_SESSION['UserOnline']->Profile == "admin") {

         echo json_encode($this->model->View(), true);

        }else{
            header('Location:index.php?c=login&a=index');
        }

    }

    //Vista Editar
    public function Edit(){

        if($_SESSION['UserOnline']->Profile == "admin") {

          $Driver = new Drivers();

        if(isset($_REQUEST['Id'])){
            $Driver =  $this->model->Edit($_REQUEST['Id']);
        }

       GetRouteView(null, "header");
       require_once 'View/drivers/edit.php';
       GetRouteView(null, "footer");

        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    //Guardar un registro
    public function Save()
    {
        //Se colocan los campos obligatorios en la tabla.
        if (isset($_REQUEST['Name']) || isset($_REQUEST['Phone1'])) {

            $Driver = new Drivers();

            //Campos unicos por tabla
            $Driver->Id         = $_REQUEST['Id'];
            $Driver->Name       = $_REQUEST['Name'];
            $Driver->LastName   = $_REQUEST['LastName'];
            $Driver->Phone1     = $_REQUEST['Phone1'];
            $Driver->Phone2     = $_REQUEST['Phone2'];
 
            //Campos genericos
            $Driver->DateCreation            = date('Y-m-d');
            $Driver->UserIdCreation          = $_SESSION['UserOnline']->Id;
            $Driver->LastModificationDate    = date('Y-m-d');
            $Driver->UserIdLastModification  = $_SESSION['UserOnline']->Id;
            $Driver->IsActive                = $_REQUEST['IsActive'];

            //Si viene un Id, es porque quieres hacer un Update, de lo contrario INSERT
            if ($Driver->Id > 0) {

                $Message =  $this->model->Update($Driver);
           
                if ($Message != "1") {
                    echo '<script> setTimeout(function(){ window.location.href = "index.php?c=Drivers&a=Edit&Id="+$Driver->Id+"; }, 100);</script>';
                } else {
                    header('Location:index.php?c=Drivers&a=index');
                }

            } else {

                $Message = $this->model->Create($Driver);

                if ($Message != "1") {
                    echo '<script> setTimeout(function(){ window.location.href = "index.php?c=Drivers&a=index"; }, 100);</script>';
                } else {
                    header('Location:index.php?c=Drivers&a=index');
                }
            }

        } else {
            header('Location:index.php?c=Drivers&a=Edit');
        }
    }

}