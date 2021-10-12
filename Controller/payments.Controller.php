<?php

require_once 'Config/Core.php'; 
require_once 'Model/paymentsModel.php'; 

class PaymentsController
{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new Payments(); 
    }

    //Vista Index
    public function Index(){

        if($_SESSION['UserOnline']->Profile == "admin") {

        GetRouteView(null, "header");
        require_once 'View/payments/index.php';
        GetRouteView(null, "footer");

        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    public function Summary(){

        if($_SESSION['UserOnline']->Profile == "admin") {

        GetRouteView(null, "header");
        require_once 'View/payments/summary.php';
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

          $Payment = new Payments();

        if(isset($_REQUEST['Id'])){
            $Payment =  $this->model->Edit($_REQUEST['Id']);
        }

       GetRouteView(null, "header");
       require_once 'View/payments/edit.php';
       GetRouteView(null, "footer");

        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    //Guardar un registro
    public function Save()
    {
        //Se colocan los campos obligatorios en la tabla.
        if (isset($_REQUEST['CardHolderName']) && $_REQUEST['CardHolderName'] != '') {

            $Payments = new Payments();
            
            //Campos unicos por tabla
            $Payments->Id               = $_REQUEST['Id'];
            $Payments->CardHolderName   = $_REQUEST['CardHolderName'];
            $Payments->CreditCard       = $_REQUEST['CreditCard'];
            $Payments->ExpDate          = $_REQUEST['ExpDate'];
            $Payments->Cvv              = $_REQUEST['Cvv'];
            $Payments->BillingAddress   = $_REQUEST['BillingAddress'];
            $Payments->Reference        = $_REQUEST['Reference'];
            $Payments->Tel1             = $_REQUEST['Tel1'];
            $Payments->Tel2             = $_REQUEST['Tel2'];
            $Payments->PaymentEmail     = $_REQUEST['PaymentEmail'];
            $Payments->PaymentNote      = $_REQUEST['PaymentNote'];
            $Payments->IsActive         = $_REQUEST['IsActive'];

            //Si viene un Id, es porque quieres hacer un Update, de lo contrario INSERT
            if ($Payments->Id > 0) {

                $Message =  $this->model->Update($Payments);

                if ($Message != "1") {
                    echo '<script>alert("' . $Message . '"); setTimeout(function(){ window.location.href = "/index.php?c=payments&a=Edit&Id="+$payments->Id+"; }, 100);</script>';
                } else {
                    header('Location:index.php?c=payments&a=index');
                }

            } else {

                $Message = $this->model->Create($Payments);

                if ($Message != "1") {
                    echo '<script>alert("' . $Message . '"); setTimeout(function(){ window.location.href = "../index.php"; }, 100);</script>';
                } else {
                    header('Location:index.php?c=payments&a=index');
                }
                
            }

        } else {
            header('Location:index.php?c=payments&a=Edit');
        }
    }

}