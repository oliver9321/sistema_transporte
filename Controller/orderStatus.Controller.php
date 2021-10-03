<?php

require_once 'Config/Core.php'; // Obligatorio en todos los controladores
require_once 'Model/orderStatusModel.php'; //Insertar Modelo correspondiente al controlador

class OrderStatusController
{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new OrderStatus(); // Se instancia el Modelo. Nombre de la clase del modelo
    }

    //Vista Index
    public function Index(){

        if($_SESSION['UserOnline']->Profile == "admin") {

        GetRouteView(null, "header");
        require_once 'View/orderStatus/index.php';
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

          $OrderStatus = new OrderStatus();

        if(isset($_REQUEST['Id'])){
            $OrderStatus =  $this->model->Edit($_REQUEST['Id']);
        }

       GetRouteView(null, "header");
       require_once 'View/orderStatus/edit.php';
       GetRouteView(null, "footer");

        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    //Guardar un registro
    public function Save()
    {
        //Se colocan los campos obligatorios en la tabla.
        if (isset($_REQUEST['Status']) ) {

            $OrderStatus = new OrderStatus();
            
            //Campos unicos por tabla
            $OrderStatus->Status   = $_REQUEST['Status'];
            $OrderStatus->Id       = $_REQUEST['Id'];
           
            //Campos genericos
            $OrderStatus->IsActive  = $_REQUEST['IsActive'];

            //Si viene un Id, es porque quieres hacer un Update, de lo contrario INSERT
            if ($OrderStatus->Id > 0) {

                $Message =  $this->model->Update($OrderStatus);

                if ($Message != "1") {
                    echo '<script>alert("' . $Message . '"); setTimeout(function(){ window.location.href = "/index.php?c=orderStatus&a=Edit&Id="+$OrderStatus->Id+"; }, 100);</script>';
                } else {
                    header('Location:index.php?c=orderStatus&a=index');
                }

            } else {

                $Message = $this->model->Create($OrderStatus);

                if ($Message != "1") {
                    echo '<script>alert("' . $Message . '"); setTimeout(function(){ window.location.href = "../index.php"; }, 100);</script>';
                } else {
                    header('Location:index.php?c=orderStatus&a=index');
                }
            }

        } else {
            header('Location:index.php?c=orderStatus&a=Edit');
        }
    }

}