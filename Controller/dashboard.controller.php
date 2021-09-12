<?php

require_once 'Config/Core.php';
require_once 'Model/dashboardModel.php';
require_once 'Model/driversModel.php'; 
require_once 'Model/ordersModel.php'; 
require_once 'Model/paymentsModel.php'; 
require_once 'Model/customersModel.php'; 
require_once 'Model/customerTypeModel.php';

class dashboardController{

    private $model;
    private $driversModel;
    private $ordersModel;
    private $paymentsModel;
    private $customersModel;
    private $customerType;

    public function __CONSTRUCT(){

        $this->model          = new dashboard();
        $this->driversModel   = new Drivers();
        $this->ordersModel    = new Orders();
        $this->paymentsModel  = new Payments();
        $this->customersModel = new Customers();
        $this->customerType   = new CustomerType();

    }

    public function Index(){

        if(count($_SESSION) > 0){

             if(isset($_SESSION['UserOnline']) && $_SESSION['UserOnline']->Profile == "admin" || $_SESSION['UserOnline']->Profile == "manager"){

                $CustomerTypeList  =  $this->customerType->GetListCustomerTypes();
            
                $rsDrivers      = $this->driversModel->getCountDrivers();
                $CountDrivers   = $rsDrivers['CountDrivers'];

                $rsCustomers    = $this->customersModel->getCountCustomers();
                $CountCustomers = $rsCustomers['CountCustomers'];

                $rsOrders       = $this->ordersModel->getCountOrders();
                $CountOrders    = $rsOrders['CountOrders'];

                $rsSumEarnings  = $this->ordersModel->getSumEarnings();
                $SumEarnings    = $rsSumEarnings['Earnings'];

                GetRouteView(null, "header");
                require_once 'View/dashboard/index.php';
                require_once 'View/footer.php';

               }else{
                header('Location:index.php?c=login&a=index');
               }
               
         }else{
         header('Location:index.php?c=login&a=index');   
         }

         
    }


    public function ActualizarPlayListYoutube(){

        if(isset($_POST) && $_POST['Action'] == "ActualizarPlayListYoutube"){

            $Opcion = $_POST['Opcion'];
            $PlayListYoutube = $_POST['PlayListYoutube'];

            echo json_encode( $this->model->ActualizarPlayListYoutube($PlayListYoutube, $Opcion), true);

        }

    }


    public function ActualizarEstadoTurnoController(){

        if(isset($_POST) && $_POST['Action'] == "ActualizarEstadoTurno"){

            $DepartamentoID = $_SESSION['UserOnline']->DepartamentoID;
            $PuestoCodigo= $_SESSION['UserOnline']->PuestoCodigo;

            $Estado       = $_POST['Estado'];
            $PuestoID     = $_POST['PuestoID'];
            $TurnoID      = $_POST['TurnoID'];
            $SucursalID   = $_POST['SucursalID'];
            $Turno        = $_POST['Turno'];
            $Puesto       = $_POST['Puesto'];
            $Comentario   = $_POST['Comentario'];
            $DiaHoy = getdate();
            $DiaHoy = $DiaHoy['mday'];

            echo json_encode($this->model->ActualizarEstadoTurnoModel($Estado, $TurnoID, $PuestoID, $Comentario, $PuestoCodigo, $Turno), true);

        }else{
            echo json_encode("false", true);
        }

    }

    public function GetListTurnosBySucursal(){

        echo json_encode($this->model->GetListTurnosBySucursal(), true);
    }


}