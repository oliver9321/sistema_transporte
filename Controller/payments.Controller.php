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
        if (isset($_REQUEST['PaymentOwnerName']) || isset($_REQUEST['CardHolderName'])) {

            $Payments = new Payments();
            
            //Campos unicos por tabla
            $Payments->Id         = $_REQUEST['Id'];
            $Payments->PaymentOwnerName = $_REQUEST['PaymentOwnerName'];
            $Payments->CardHolderName   = $_REQUEST['CardHolderName'];
            $Payments->ExpDate     = $_REQUEST['ExpDate'];
            $Payments->BilingAddress     = $_REQUEST['BilingAddress'];
            $Payments->Reference     = $_REQUEST['Reference'];
            $Payments->Tel     = $_REQUEST['Tel'];
            $Payments->Email     = $_REQUEST['Email'];
            $Payments->NotePayment     = $_REQUEST['NotePayment'];

            //Campos genericos
            $Payments->DateCreation            = date('Y-m-d');
            $Payments->UserIdCreation          = $_SESSION['UserOnline']->Id;
            $Payments->LastModificationDate    = date('Y-m-d');
            $Payments->UserIdLastModification  = $_SESSION['UserOnline']->Id;
            $Payments->IsActive                = $_REQUEST['IsActive'];

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