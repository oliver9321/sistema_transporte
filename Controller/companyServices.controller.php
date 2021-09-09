<?php

require_once 'Config/Core.php'; 
require_once 'Model/companyServicesModel.php'; 

class CompanyServicesController
{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new CompanyServices(); 
    }

    //Vista Index
    public function Index(){

        if($_SESSION['UserOnline']->Profile == "admin") {

        GetRouteView(null, "header");
        require_once 'View/companyServices/index.php';
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

          $CompanyService = new CompanyServices();

        if(isset($_REQUEST['Id'])){
            $CompanyService =  $this->model->Edit($_REQUEST['Id']);
        }

       GetRouteView(null, "header");
       require_once 'View/companyServices/edit.php';
       GetRouteView(null, "footer");

        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    //Guardar un registro
    public function Save()
    {
        //Se colocan los campos obligatorios en la tabla.
        if (isset($_REQUEST['CompanyName']) || isset($_REQUEST['Phone1'])) {

            $CompanyServices = new CompanyServices();
            
            //Campos unicos por tabla
            $CompanyServices->Id         = $_REQUEST['Id'];
            $CompanyServices->CompanyName = $_REQUEST['CompanyName'];
            $CompanyServices->Address   = $_REQUEST['Address'];
            $CompanyServices->Phone1     = $_REQUEST['Phone1'];
            $CompanyServices->Phone2     = $_REQUEST['Phone2'];
            $CompanyServices->Email     = $_REQUEST['Email'];

            //Campos genericos
            $CompanyServices->DateCreation            = date('Y-m-d');
            $CompanyServices->UserIdCreation          = $_SESSION['UserOnline']->Id;
            $CompanyServices->LastModificationDate    = date('Y-m-d');
            $CompanyServices->UserIdLastModification  = $_SESSION['UserOnline']->Id;
            $CompanyServices->IsActive                = $_REQUEST['IsActive'];

            //Si viene un Id, es porque quieres hacer un Update, de lo contrario INSERT
            if ($CompanyServices->Id > 0) {

                $Message =  $this->model->Update($CompanyServices);

                if ($Message != "1") {
                    echo '<script>alert("' . $Message . '"); setTimeout(function(){ window.location.href = "/index.php?c=companyServices&a=Edit&Id="+$companyServices->Id+"; }, 100);</script>';
                } else {
                    header('Location:index.php?c=companyServices&a=index');
                }

            } else {

                $Message = $this->model->Create($CompanyServices);

                if ($Message != "1") {
                    echo '<script>alert("' . $Message . '"); setTimeout(function(){ window.location.href = "../index.php"; }, 100);</script>';
                } else {
                    header('Location:index.php?c=companyServices&a=index');
                }
            }

        } else {
            header('Location:index.php?c=companyServices&a=Edit');
        }
    }

}