<?php

require_once 'Config/Core.php';
require_once 'Model/dashboardModel.php';
require_once 'Model/driversModel.php'; 
require_once 'Model/ordersModel.php'; 
require_once 'Model/paymentsModel.php'; 
require_once 'Model/customersModel.php'; 

class dashboardController{

    private $model;
    private $driversModel;
    private $ordersModel;
    private $customersModel;

 
    public function __CONSTRUCT(){

        $this->model          = new dashboard();
      //  $this->paymentsModel  = new Payments();
       
    }

    public function Index(){

        if(count($_SESSION) > 0){

             if(isset($_SESSION['UserOnline']) && $_SESSION['UserOnline']->Profile == "admin" || $_SESSION['UserOnline']->Profile == "manager"){

                $this->driversModel   = new Drivers();
                $rsDrivers      = $this->driversModel->getCountDrivers();
                $CountDrivers   = $rsDrivers['CountDrivers'];

                $this->customersModel = new Customers();
                $rsCustomers    = $this->customersModel->getCountCustomers();
                $CountCustomers = $rsCustomers['CountCustomers'];

                $this->ordersModel    = new Orders();
                $rsOrders       = $this->ordersModel->getCountOrders();
                $CountOrders    = $rsOrders['CountOrders'];

                $rsSumEarnings  = $this->ordersModel->getSumEarnings();
                $SumEarnings    = $rsSumEarnings['Earnings'];

                $rsSumTotal = $this->ordersModel->getSumTotal();
                $SumTotal   = $rsSumTotal['Total'];

                $rsSumTrukerOwesUs = $this->ordersModel->getSumTrukerOwesUs();
                $SumTrukerOwesUs    = $rsSumTrukerOwesUs['TrukerOwesUs'];

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

    public function GetListTurnosBySucursal(){

        echo json_encode($this->model->GetListTurnosBySucursal(), true);
    }


}