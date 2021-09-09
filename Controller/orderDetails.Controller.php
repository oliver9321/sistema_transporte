<?php

require_once 'Config/Core.php'; // Obligatorio en todos los controladores
require_once 'Model/orderDetailsModel.php'; //Insertar Modelo correspondiente al controlador

class OrderDetailsController
{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new OrderDetails(); // Se instancia el Modelo. Nombre de la clase del modelo
    }

    //Vista Index
    public function Index(){

        if($_SESSION['UserOnline']->Profile == "admin") {

        GetRouteView(null, "header");
        require_once 'View/orderDetails/index.php';
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

          $OrderDetail = new OrderDetails();

        if(isset($_REQUEST['Id'])){
            $OrderDetail =  $this->model->Edit($_REQUEST['Id']);
        }

       GetRouteView(null, "header");
       require_once 'View/orderDetails/edit.php';
       GetRouteView(null, "footer");

        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    //Guardar un registro
    public function Save()
    {
        //Se colocan los campos obligatorios en la tabla.
        if (isset($_REQUEST['Brand']) || isset($_REQUEST['Model'])) {

            $OrderDetails = new OrderDetails();
            
            //Campos unicos por tabla
            $OrderDetails->IdOrder         = $_REQUEST['IdOrder'];
            $OrderDetails->Brand = $_REQUEST['Brand'];
            $OrderDetails->Model   = $_REQUEST['Model'];
            $OrderDetails->Color     = $_REQUEST['Color'];
            $OrderDetails->Year     = $_REQUEST['Year'];
            $OrderDetails->Vin     = $_REQUEST['Vin'];

            //Campos genericos
            $OrderDetails->DateCreation            = date('Y-m-d');
            $OrderDetails->UserIdCreation          = $_SESSION['UserOnline']->Id;
            $OrderDetails->LastModificationDate    = date('Y-m-d');
            $OrderDetails->UserIdLastModification  = $_SESSION['UserOnline']->Id;
            $OrderDetails->IsActive                = $_REQUEST['IsActive'];

            //Si viene un Id, es porque quieres hacer un Update, de lo contrario INSERT
            if ($OrderDetails->Id > 0) {

                $Message =  $this->model->Update($OrderDetails);

                if ($Message != "1") {
                    echo '<script>alert("' . $Message . '"); setTimeout(function(){ window.location.href = "/index.php?c=orderDetails&a=Edit&Id="+$orderDetails->Id+"; }, 100);</script>';
                } else {
                    header('Location:index.php?c=orderDetails&a=index');
                }

            } else {

                $Message = $this->model->Create($OrderDetails);

                if ($Message != "1") {
                    echo '<script>alert("' . $Message . '"); setTimeout(function(){ window.location.href = "../index.php"; }, 100);</script>';
                } else {
                    header('Location:index.php?c=orderDetails&a=index');
                }
            }

        } else {
            header('Location:index.php?c=orderDetails&a=Edit');
        }
    }

}