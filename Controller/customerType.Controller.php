<?php

require_once 'Config/Core.php'; // Obligatorio en todos los controladores
require_once 'Model/customerTypeModel.php'; //Insertar Modelo correspondiente al controlador

class CustomerTypeController
{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new CustomerType(); // Se instancia el Modelo. Nombre de la clase del modelo
    }

    //Vista Index
    public function Index(){

        if($_SESSION['UserOnline']->Profile == "admin") {

        GetRouteView(null, "header");
        require_once 'View/customerType/index.php';
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

          $CustomerType = new CustomerType();

        if(isset($_REQUEST['Id'])){
            $CustomerType =  $this->model->Edit($_REQUEST['Id']);
        }

       GetRouteView(null, "header");
       require_once 'View/customerType/edit.php';
       GetRouteView(null, "footer");

        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    //Guardar un registro
    public function Save()
    {
        //Se colocan los campos obligatorios en la tabla.
        if (isset($_REQUEST['NameType']) ) {

            $CustomerType = new CustomerType();
            
            //Campos unicos por tabla
            $CustomerType->Id         = $_REQUEST['Id'];
            $CustomerType->NameType = $_REQUEST['NameType'];
           

            //Campos genericos
            $CustomerType->DateCreation            = date('Y-m-d');
            $CustomerType->UserIdCreation          = $_SESSION['UserOnline']->Id;
            $CustomerType->LastModificationDate    = date('Y-m-d');
            $CustomerType->UserIdLastModification  = $_SESSION['UserOnline']->Id;
            $CustomerType->IsActive                = $_REQUEST['IsActive'];

            //Si viene un Id, es porque quieres hacer un Update, de lo contrario INSERT
            if ($CustomerType->Id > 0) {

                $Message =  $this->model->Update($CustomerType);

                if ($Message != "1") {
                    echo '<script>alert("' . $Message . '"); setTimeout(function(){ window.location.href = "/index.php?c=customerType&a=Edit&Id="+$customerType->Id+"; }, 100);</script>';
                } else {
                    header('Location:index.php?c=customerType&a=index');
                }

            } else {

                $Message = $this->model->Create($CustomerType);

                if ($Message != "1") {
                    echo '<script>alert("' . $Message . '"); setTimeout(function(){ window.location.href = "../index.php"; }, 100);</script>';
                } else {
                    header('Location:index.php?c=customerType&a=index');
                }
            }

        } else {
            header('Location:index.php?c=customerType&a=Edit');
        }
    }

}