<?php

require_once 'Config/Core.php'; 
require_once 'Model/ordersModel.php'; 
require_once 'Model/paymentsModel.php'; 
require_once 'Model/orderDetailsModel.php'; 


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
        if (isset($_REQUEST['IdCustomerOrigin']) && isset($_REQUEST['IdCustomerDestination'])) {

            $Orders = new Orders();
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

    public function SaveOrder(){

        if(isset($_POST['order']) && isset($_POST['vehicles'])){

            parse_str($_POST['order'], $params);
            $vehicles  = $_POST['vehicles'];
            $responseOrder = array("Error" => false, "Message"=>"", "OrderId"=>"");

            if(count($params) > 0 && count($vehicles) > 0){

                $Payment = new Payments();
                $IdPayment = "";

                $Payment->PaymentOwnerName = $params['PaymentOwnerName'];
                $Payment->CardHolderName   = $params['CardHolderName'];
                $Payment->CreditCard       = $params['CreditCard'];
                $Payment->ExpDate          = $params['ExpDate'];
                $Payment->Cvv              = $params['Cvv'];
                $Payment->BillingAddress   = $params['BillingAddress'];
                $Payment->Reference        = $params['Reference'];
                $Payment->Tel1             = $params['Tel1'];
                $Payment->Tel2             = $params['Tel2'];
                $Payment->PaymentEmail     = $params['PaymentEmail'];
                $Payment->PaymentNote      = $params['PaymentNote'];
                $Payment->IsActive         = 1;
    
                $IdPayment = $Payment->Create($Payment);
            
                //PASO 1: Insertar el pago
                if($IdPayment){

                    $Orders = new Orders();
                    $IdOrder = "";

                    $Orders->IdCustomerOrigin         = $params['IdCustomerOrigin'];
                    $Orders->IdCustomerDestination    = $params['IdCustomerDestination'];
                    $Orders->OrderStatusID            = $params['OrderStatusID'];
                    $Orders->IdPayment = $IdPayment;
                    $Orders->OrderDate                = $params['OrderDate'];
                    $Orders->PickUpDate               = $params['PickUpDate'];
                    $Orders->DeliveryDate             = $params['DeliveryDate'];
                    $Orders->OriginAddress            = $params['OriginAddress'];
                    $Orders->OriginCity               = $params['OriginCity'];
                    $Orders->OriginState              = $params['OriginState'];
                    $Orders->OriginZip                = $params['OriginZip'];
                    $Orders->OriginNote               = $params['OriginNote'];
                    $Orders->DestinationAddress       = $params['DestinationAddress'];
                    $Orders->DestinationCity          = $params['DestinationCity'];
                    $Orders->DestinationState         = $params['DestinationState'];
                    $Orders->DestinationZip           = $params['DestinationZip'];
                    $Orders->DestinationNote          = $params['DestinationNote'];
                    $Orders->Total                    = $params['Total'];
                    $Orders->Deposit                  = $params['Deposit'];
                    $Orders->IsActive                = 1;

                    $IdOrder = $Orders->Create($Orders);
    
                    if($IdOrder){
    
                        foreach ($vehicles as $key => $value) {
    
                            if($value['Brand'] != ''){

                                $OrderDetails = new OrderDetails();
                                $OrderDetailsID = "";

                                $OrderDetails->IdOrder           = $IdOrder;
                                $OrderDetails->Brand             = $value['Brand'];
                                $OrderDetails->Model             = $value['Model'];
                                $OrderDetails->Color             = $value['Color'];
                                $OrderDetails->Year              = $value['Year'];
                                $OrderDetails->Vin               = $value['Vin'];
                                $OrderDetails->ConditionVehicle  = $value['ConditionVehicle'];
                                $OrderDetails->CarrierType       = $value['CarrierType'];
                                $OrderDetailsID                  = $OrderDetails->Create($OrderDetails);
                               
                                if($OrderDetailsID){
                                    $responseOrder['Error'] = false;
                                }else{
                                    $responseOrder['Error'] = true;
                                    $responseOrder['Message'] = "Step [3] - Error order details module. Please check vehicle list";
                                    echo json_encode($responseOrder, true);
                                }
    
                            }
                        
                        }

                        if($responseOrder['Error'] == false){

                            $responseOrder['OrderId'] = $IdOrder;
                            $responseOrder['Message'] = "The order #".$IdOrder." was created successfully";
                            echo json_encode($responseOrder, true);

                        }else{

                            if($IdOrder){
                                $responseOrder['OrderId'] = $IdOrder;
                                $responseOrder['Message'] = "The order #".$IdOrder." was created. but please check all fields";
                                echo json_encode($responseOrder, true);
                            }
                           
                        }
    
                    }else{
                        $responseOrder['Error'] = true;
                        $responseOrder['Message'] = "Step [2] - Error in order module. Please check required fields: [IdCustomerOrigin,IdCustomerOrigin,OrderStatusID,IdPayment,OrderDate,PickUpDate,DeliveryDate,OriginAddress,OriginCity,OriginState,DestinationAddress,DestinationCity,DestinationState,Total,Deposit]";
                        echo json_encode($responseOrder, true);
                    }
    
            }else{
                $responseOrder['Error'] = true;
                $responseOrder['Message'] = "Step [1] - Error in payment module. Please check required fields: [PaymentOwnerName,CardHolderName,CreditCard,ExpDate,Cvv]";
                echo json_encode($responseOrder, true);
            }
                
        }else{
            $responseOrder['Error'] = true;
            $responseOrder['Message'] = "Step [0.2] - Error validation order. Vehicle list empty or order info not completed";
            echo json_encode($responseOrder, true);
        }
       
       
        }else{
            $responseOrder['Error'] = true;
            $responseOrder['Message'] = "Step [0.1] - Error validation order. Vehicle list empty or order info not completed";
            echo json_encode($responseOrder, true);
        }
     


          //Campos unicos por tabla
          //$Orders->IdCompanyService         = $params['IdCompanyService'];
          // $Orders->IdDriver                 = $params['IdDriver'];           // $Orders->ExtraTrukerFee           = $params['ExtraTrukerFee'];
          //  $Orders->TrukerOwesUs             = $params['TrukerOwesUs'];
           // $Orders->Earnings                 = $params['Earnings'];
           // $Orders->Cod                      = $params['Cod'];
           // $Orders->TrukerRate               = $params['TrukerRate'];
           // $Orders->RequestStatus            = $params['RequestStatus'];
    
    }

}