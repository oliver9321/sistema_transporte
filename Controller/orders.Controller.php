<?php

require_once 'Config/Core.php'; 
require_once 'Model/ordersModel.php'; 

class OrdersController
{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new Orders(); 
    }

    //Vista Index
    public function Index(){

        if($_SESSION['UserOnline']->Profile == "admin") {

        GetRouteView(null, "header");
        require_once 'View/orders/index.php';
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

          $Order = new Orders();

        if(isset($_REQUEST['Id'])){
            $Order =  $this->model->Edit($_REQUEST['Id']);
        }

       GetRouteView(null, "header");
       require_once 'View/orders/edit.php';
       GetRouteView(null, "footer");

        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    //Guardar un registro
    public function Save()
    {
        //Se colocan los campos obligatorios en la tabla.
        if (isset($_REQUEST['IdCustomerOrigin']) || isset($_REQUEST['IdCustomerDestination'])) {

            $Orders = new Orders();
            
            //Campos unicos por tabla
            $Driver->Id         = $_REQUEST['Id'];
            $Orders->IdCustomerOrigin         = $_REQUEST['IdCustomerOrigin'];
            $Orders->IdCustomerDestination = $_REQUEST['IdCustomerDestination'];
            $Orders->IdCompanayService   = $_REQUEST['IdCompanayService'];
            $Orders->IdDriver     = $_REQUEST['IdDriver'];
            $Orders->IdStatus     = $_REQUEST['IdStatus'];
            $Orders->IdPayment     = $_REQUEST['IdPayment'];
            $Orders->OrderDate   = $_REQUEST['OrderDate'];
            $Orders->PickUpDate     = $_REQUEST['PickUpDate'];
            $Orders->DeliveryDate     = $_REQUEST['DeliveryDate'];
            $Orders->OriginAddress     = $_REQUEST['OriginAddress'];
            $Orders->OriginCity   = $_REQUEST['OriginCity'];
            $Orders->OriginState     = $_REQUEST['OriginState'];
            $Orders->OriginZip     = $_REQUEST['OriginZip'];
            $Orders->OriginNote     = $_REQUEST['OriginNote'];
            $Orders->DestinationAddress   = $_REQUEST['DestinationAddress'];
            $Orders->DestinationCity     = $_REQUEST['DestinationCity'];
            $Orders->DestinationState     = $_REQUEST['DestinationState'];
            $Orders->DestinationZip     = $_REQUEST['DestinationZip'];
            $Orders->DestinationNote     = $_REQUEST['DestinationNote'];
            $Orders->Total     = $_REQUEST['Total'];
            $Orders->Deposit     = $_REQUEST['Deposit'];
            $Orders->ExtraTrukerFee     = $_REQUEST['ExtraTrukerFee'];
            $Orders->Earnings     = $_REQUEST['Earnings'];
            $Orders->Cod     = $_REQUEST['Cod'];
            $Orders->TrukerRate     = $_REQUEST['TrukerRate'];
            $Orders->RequestStatus     = $_REQUEST['RequestStatus'];

            //Campos genericos
            $Orders->DateCreation            = date('Y-m-d');
            $Orders->UserIdCreation          = $_SESSION['UserOnline']->Id;
            $Orders->LastModificationDate    = date('Y-m-d');
            $Orders->UserIdLastModification  = $_SESSION['UserOnline']->Id;
            $Orders->IsActive                = $_REQUEST['IsActive'];

            //Si viene un Id, es porque quieres hacer un Update, de lo contrario INSERT
            if ($Orders->Id > 0) {

                $Message =  $this->model->Update($Orders);

                if ($Message != "1") {
                    echo '<script>alert("' . $Message . '"); setTimeout(function(){ window.location.href = "/index.php?c=orders&a=Edit&Id="+$orders->Id+"; }, 100);</script>';
                } else {
                    header('Location:index.php?c=orders&a=index');
                }

            } else {

                $Message = $this->model->Create($Orders);

                if ($Message != "1") {
                    echo '<script>alert("' . $Message . '"); setTimeout(function(){ window.location.href = "../index.php"; }, 100);</script>';
                } else {
                    header('Location:index.php?c=orders&a=index');
                }
            }

        } else {
            header('Location:index.php?c=orders&a=Edit');
        }
    }

}