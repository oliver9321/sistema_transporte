<?php

require_once 'Config/Core.php'; 
require_once 'Model/driversModel.php'; 

class DriversController
{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new Drivers(); // Se instancia el Modelo. Nombre de la clase del modelo
    }

    //Vista Index
    public function Index(){

        if($_SESSION['UserOnline']->Profile == "admin") {

            $data = $this->model->View();

        GetRouteView(null, "header");
        require_once 'View/drivers/index.php';
        GetRouteView(null, "footer");

        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    //Vista
    public function View(){

        if($_SESSION['UserOnline']->Profile == "admin"){

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
        if (isset($_REQUEST['DriverName']) && isset($_REQUEST['DriverPhone1'])) {

            $Driver = new Drivers();

            //Campos unicos por tabla
            $Driver->Id               = $_REQUEST['Id'];
            $Driver->DriverName       = $_REQUEST['DriverName'];
            $Driver->DriverPhone1     = $_REQUEST['DriverPhone1'];
            $Driver->DriverPhone2     = $_REQUEST['DriverPhone2'];
 
            //Campos genericos
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
    public function NewDriver()
    {
        //Se colocan los campos obligatorios en la tabla.
        if (isset($_POST['DriverName']) && isset($_POST['DriverPhone1'])) {

            if($_POST['DriverName'] != '' && $_POST['DriverPhone1'] != ''){

                $driver= new Drivers();

                $driver->DriverName      = $_POST['DriverName'];
                $driver->DriverPhone1    = $_POST['DriverPhone1'];
                $driver->DriverPhone2    = $_POST['DriverPhone2'];

                //Campos genericos
                $driver->IsActive = 1;

                echo json_encode($this->model->Create($driver), true);
              
            }else{
                echo "Please, complete the required fields (*)";
            }

    }else{
        echo "Please, complete the required fields (*)";
    }   
}

    public function GetListDrivers(){
        echo json_encode($this->model->GetListDrivers(), true);
    }

    public function GetInfoDriverById(){

        if(isset($_POST['Id'])){
            echo json_encode($this->model->Edit($_POST['Id']), true);
        }else{
            echo json_encode(false, true);
        }

    }
}