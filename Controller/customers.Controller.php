<?php

require_once 'Config/Core.php'; 
require_once 'Model/customersModel.php'; 
require_once 'Model/customerTypeModel.php';

class CustomersController
{
    private $model;

    public function __CONSTRUCT(){
        $this->model         = new Customers(); 
        $this->customerType  = new CustomerType();
    }

    //Vista Index
    public function Index(){

        if($_SESSION['UserOnline']->Profile == "admin") {

        GetRouteView(null, "header");
        require_once 'View/customers/index.php';
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

          $Customer = new Customers();
          $CustomerTypeList  =  $this->customerType->GetListCustomerTypes();

        if(isset($_REQUEST['Id'])){
            $Customer =  $this->model->Edit($_REQUEST['Id']);
        }

       GetRouteView(null, "header");
       require_once 'View/customers/edit.php';
       GetRouteView(null, "footer");

        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    //Guardar un registro
    public function Save()
    {
        //Se colocan los campos obligatorios en la tabla.
        if (isset($_REQUEST['Name']) && isset($_REQUEST['LastName']) &&  isset($_POST['Phone1'])) {

            $Customers = new Customers();
            
            //Campos unicos por tabla
            $Customers->Id              = $_REQUEST['Id'];
            $Customers->IdCustomerType  = $_REQUEST['IdCustomerType'];
            $Customers->Name            = $_REQUEST['Name'];
            $Customers->LastName        = $_REQUEST['LastName'];
            $Customers->Phone1          = $_REQUEST['Phone1'];
            $Customers->Phone2          = $_REQUEST['Phone2'];
            $Customers->Email           = $_REQUEST['Email'];

            //Campos genericos
            $Customers->IsActive                = $_REQUEST['IsActive'];

            //Si viene un Id, es porque quieres hacer un Update, de lo contrario INSERT
            if ($Customers->Id > 0) {

                $Message =  $this->model->Update($Customers);

                if ($Message != "1") {
                    echo '<script>alert("' . $Message . '"); setTimeout(function(){ window.location.href = "/index.php?c=customers&a=Edit&Id="+$customers->Id+"; }, 100);</script>';
                } else {
                    header('Location:index.php?c=customers&a=index');
                }

            } else {

                $Message = $this->model->Create($Customers);

                if ($Message != "1") {
                    echo '<script>alert("' . $Message . '"); setTimeout(function(){ window.location.href = "../index.php"; }, 100);</script>';
                } else {
                    header('Location:index.php?c=customers&a=index');
                }
            }

        } else {
            header('Location:index.php?c=customers&a=Edit');
        }
    }

        public function NewCustomer()
        {
            //Se colocan los campos obligatorios en la tabla.
            if (isset($_POST['Name']) && isset($_POST['IdCustomerType']) &&  isset($_POST['Phone1'])) {

                if($_POST['Name'] != '' && $_POST['IdCustomerType'] != '' && $_POST['Phone1'] != ''){

                    $Customers = new Customers();

                    $Customers->IdCustomerType  = $_POST['IdCustomerType'];
                    $Customers->Name            = $_POST['Name'];
                    $Customers->LastName        = $_POST['LastName'];
                    $Customers->Phone1          = $_POST['Phone1'];
                    $Customers->Phone2          = $_POST['Phone2'];
                    $Customers->Email           = $_POST['Email'];
    
                    //Campos genericos
                    $Customers->IsActive       = 1;
    
                    echo json_encode($this->model->Create($Customers), true);
                  
                }else{
                    echo "Please, complete the required fields (*)";
                }

        }else{
            echo "Please, complete the required fields (*)";
        }   
    }

        public function GetInfoCustomerById(){

            if(isset($_POST['Id'])){
                $Customer =  $this->model->Edit($_POST['Id']);
                echo json_encode($Customer, true);
            }else{
                echo json_encode(false, true);
            }

        }

        public function GetListCustomers(){

            $response = array(
                    'OriginList' => $this->model->GetListCustomersOrigin(),
                    "DestinationList" => $this->model->GetListCustomersDestination(),
            );
         
            echo json_encode($response, true);
        }

     
}

