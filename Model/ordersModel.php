<?php

class Orders {

    private $pdo;

    public $Id;
    public $IdCustomerOrigin;
    public $IdCustomerDestination;
    public $IdCompanyService;
    public $IdDriver;
    public $OrderStatusID;
    public $IdPayment;
    public $OrderDate;
    public $PickUpDate;
    public $DeliveryDate;
    public $OriginAddress;
    public $OriginCity;
    public $OriginState;
    public $OriginZip;
    public $OriginNote;
    public $DestinationAddress;
    public $DestinationCity;
    public $DestinationState;
    public $DestinationZip;
    public $DestinationNote;
    public $Total;
    public $Deposit;
    public $ExtraTrukerFee;
    public $TrukerOwesUs;
    public $Earnings;
    public $Cod;
    public $TrukerRate;
    public $DateCreation;
    public $UserIdCreation;
    public $LastModificationDate;
    public $UserIdLastModification;
    public $IsActive;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function View()
    {
        try
        {
                $stm = $this->pdo->prepare("SELECT Id, Status, Debemos, NosDeben, CustomerOrigin, CustomerOriginPhone1, CustomerOriginEmail, CustomerDestination, CustomerDestinationPhone1, CustomerDestinationEmail, OrderDate, PickUpDate, DeliveryDate, OriginCity, DestinationCity, Total, Deposit, ExtraTrukerFee, TrukerOwesUs, Earnings, Cod, TrukerRate FROM vw_orders where IsActive = 1");
                $stm->execute();

                $row = $stm->fetchAll();

                $response = array();
                $response['success'] = true;
                $response['aaData'] = $row;
                
                return $response;

        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function OrderPending()
    {
        try
        {
                $stm = $this->pdo->prepare("SELECT Id, CustomerOrigin, CustomerDestination, PickUpDate, DeliveryDate, OriginCity, DestinationCity FROM vw_orders where IsActive = 1 AND Status ='Pending'");
                $stm->execute();

                $row = $stm->fetchAll();

                $response = array();
                $response['success'] = true;
                $response['aaData'] = $row;
                
                return $response;

        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function OrderPickedUp()
    {
        try
        {
                $stm = $this->pdo->prepare("SELECT Id, CustomerOrigin, CustomerDestination, PickUpDate, DeliveryDate, OriginCity, DestinationCity FROM vw_orders where IsActive = 1 AND Status ='Picked Up'");
                $stm->execute();

                $row = $stm->fetchAll();

                $response = array();
                $response['success'] = true;
                $response['aaData'] = $row;
                
                return $response;

        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    
    public function GetOrderById($id)
    {
        try
        {
            $stm = $this->pdo->prepare("SELECT *  FROM tbl_orders WHERE Id = ?");
            $stm->execute(array($id));

            return $stm->fetch(PDO::FETCH_OBJ);

        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Edit($id)
    {
        try
        {
            $OrderData = array();
            $stm = $this->pdo->prepare("SELECT *  FROM tbl_orders WHERE Id = ?");
            $stm->execute(array($id));
            $Order = $stm->fetch(PDO::FETCH_OBJ);

            if($Order){

                $stm2 = $this->pdo->prepare("SELECT *  FROM tbl_order_details WHERE IdOrder = ?");
                $stm2->execute(array($id));
    
                $IdPayment = $Order->IdPayment;
                $stm3 = $this->pdo->prepare("SELECT *  FROM tbl_payments WHERE Id = ?");
                $stm3->execute(array($IdPayment));

                $IdCustomerOrigin = $Order->IdCustomerOrigin;
                $stm4 = $this->pdo->prepare("SELECT *  FROM tbl_payments WHERE Id = ?");
                $stm4->execute(array($IdCustomerOrigin));

                $IdCustomerDestination = $Order->IdCustomerDestination;
                $stm5 = $this->pdo->prepare("SELECT *  FROM tbl_payments WHERE Id = ?");
                $stm5->execute(array($IdCustomerDestination));
               
                $OrderData['order']               = $Order;
                $OrderData['order_details']       = $stm2->fetchAll(PDO::FETCH_ASSOC);
                $OrderData['payments']            = $stm3->fetch(PDO::FETCH_OBJ);
                $OrderData['CustomerOrigin']      = $stm4->fetch(PDO::FETCH_OBJ);
                $OrderData['CustomerDestination'] = $stm5->fetch(PDO::FETCH_OBJ);

                return $OrderData;

            }else{
                return $OrderData;
            }
          
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
  
    public function Update($data)
    {
        try
        {
            $sql = "UPDATE tbl_orders SET
                        IdCustomerOrigin  = ?,
                        IdCustomerDestination  = ?,
                        IdCompanyService  = ?,
                        IdDriver  = ?,
                        OrderStatusID  = ?,
                        IdPayment  = ?,
                        OrderDate  = ?,
                        PickUpDate  = ?,
                        DeliveryDate  = ?,
                        OriginAddress  = ?,
                        OriginCity  = ?,
                        OriginState  = ?,
                        OriginZip  = ?,
                        OriginNote  = ?,
                        DestinationAddress  = ?,
                        DestinationCity  = ?,
                        DestinationState  = ?,
                        DestinationZip  = ?,
                        DestinationNote  = ?,
                        Total  = ?,
                        Deposit  = ?,
                        ExtraTrukerFee  = ?,
                        TrukerOwesUs = ?,
                        Earnings  = ?,
                        Cod  = ?,
                        TrukerRate  = ?,
						LastModificationDate = ?,
						UserIdLastModification = ?,
						IsActive = ?
				    WHERE Id = ?";

$result = $this->pdo->prepare($sql)->execute(
                    array(
                        $data->IdCustomerOrigin,
                        $data->IdCustomerDestination,
                        $data->IdCompanyService,
                        $data->IdDriver,
                        $data->OrderStatusID,
                        $data->IdPayment,
                        $data->OrderDate,
                        $data->PickUpDate,
                        $data->DeliveryDate,
                        $data->OriginAddress,
                        $data->OriginCity,
                        $data->OriginState,
                        $data->OriginZip,
                        $data->OriginNote,
                        $data->DestinationAddress,
                        $data->DestinationCity,
                        $data->DestinationState,
                        $data->DestinationZip,
                        $data->DestinationNote,
                        $data->Total,
                        $data->Deposit,
                        $data->ExtraTrukerFee,
                        $data->TrukerOwesUs,
                        $data->Earnings,
                        $data->Cod,
                        $data->TrukerRate,
                        date("Y-m-d H:i:s") ,
                        (int)$_SESSION['UserOnline']->Id,
                        (int)$data->IsActive,
                        $data->Id
                    )
                );

                return $result;

        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Create (Orders $data)
    {
        try
        {
            $sql = "INSERT INTO tbl_orders(
                IdCustomerOrigin,
                IdCustomerDestination,
                OrderStatusID,
                IdPayment,
                OrderDate,
                PickUpDate,
                DeliveryDate,
                OriginAddress,
                OriginCity,
                OriginState,
                OriginZip,
                OriginNote,
                DestinationAddress,
                DestinationCity,
                DestinationState,
                DestinationZip,
                DestinationNote,
                Total,
                Deposit,
                DateCreation,
                UserIdCreation,
                IsActive) 
                VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

   $this->pdo->prepare($sql)->execute(
                    array(
                        $data->IdCustomerOrigin,
                        $data->IdCustomerDestination,
                        $data->OrderStatusID,
                        $data->IdPayment,
                        $data->OrderDate,
                        $data->PickUpDate,
                        $data->DeliveryDate,
                        $data->OriginAddress,
                        $data->OriginCity,
                        $data->OriginState,
                        $data->OriginZip,
                        $data->OriginNote,
                        $data->DestinationAddress,
                        $data->DestinationCity,
                        $data->DestinationState,
                        $data->DestinationZip,
                        $data->DestinationNote,
                        $data->Total,
                        $data->Deposit,
                        date('Y-m-d H:i:s'),
                        (int)$_SESSION['UserOnline']->Id,
                        1
                    )
                );
               
                return $this->pdo->lastInsertId();

                        // $data->ExtraTrukerFee,
                       // $data->TrukerOwesUs,
                       // $data->Earnings,
                       // $data->Cod,
                       // $data->TrukerRate,
                        // $data->IdCompanyService,
                       //$data->IdDriver,

        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function getCountOrders(){

        $stm2 = $this->pdo->prepare("SELECT COUNT(*) as CountOrders FROM tbl_orders WHERE IsActive = 1");
        $stm2->execute();
        return $stm2->fetch();
    }

    public function getCountOrdersPending(){

        $stm2 = $this->pdo->prepare("SELECT COUNT(*) as CountOrders FROM vw_orders WHERE IsActive = 1 and Status = 'Pending'");
        $stm2->execute();
        return $stm2->fetch();
    }

    public function getCountOrdersCancelled(){

        $stm2 = $this->pdo->prepare("SELECT COUNT(*) as CountOrders FROM vw_orders WHERE IsActive = 1 and Status = 'Cancelled'");
        $stm2->execute();
        return $stm2->fetch();
    }

    public function getCountOrdersDelivered(){

        $stm2 = $this->pdo->prepare("SELECT COUNT(*) as CountOrders FROM vw_orders WHERE IsActive = 1 and Status = 'Delivered'");
        $stm2->execute();
        return $stm2->fetch();
    }

    public function getCountOrdersPickedUp(){

        $stm2 = $this->pdo->prepare("SELECT COUNT(*) as CountOrders FROM vw_orders WHERE IsActive = 1 and Status = 'Picked up'");
        $stm2->execute();
        return $stm2->fetch();
    }

    
    public function getSumEarnings(){

        $stm2 = $this->pdo->prepare("SELECT IFNULL(SUM(Earnings),0) as Earnings FROM tbl_orders WHERE IsActive = 1 AND OrderStatusID != 4 AND MONTH(LastModificationDate) = MONTH(curdate())");
        $stm2->execute();
        return $stm2->fetch();
    }

    public function getSumEarningsToday(){
        // 4-> Canceled
        $stm2 = $this->pdo->prepare("SELECT IFNULL(SUM(Earnings),0) as Earnings FROM tbl_orders WHERE IsActive = 1 AND OrderStatusID != 4  AND DATE(LastModificationDate) = curdate()");
        $stm2->execute();
        return $stm2->fetch();
    }


    public function getSumTotalToday(){

        $stm2 = $this->pdo->prepare("SELECT IFNULL(SUM(Deposit),0) as Total FROM tbl_orders WHERE IsActive = 1 AND OrderStatusID != 4 AND DATE(LastModificationDate) = curdate()");
        $stm2->execute();
        return $stm2->fetch();
    }

    public function getSumTotal(){

        $stm2 = $this->pdo->prepare("SELECT IFNULL(SUM(Deposit),0) as Total FROM tbl_orders WHERE IsActive = 1 AND OrderStatusID != 4 AND MONTH(LastModificationDate) = MONTH(curdate())");
        $stm2->execute();
        return $stm2->fetch();
    }

    public function getSumTrukerOwesUsToday(){

        $stm2 = $this->pdo->prepare("SELECT IFNULL(SUM(TrukerOwesUs),0) as TrukerOwesUs FROM tbl_orders WHERE IsActive = 1 AND OrderStatusID != 4 AND DATE(LastModificationDate) = curdate()");
        $stm2->execute();
        return $stm2->fetch();
    }

    public function getSumTrukerOwesUs(){

        $stm2 = $this->pdo->prepare("SELECT IFNULL(SUM(TrukerOwesUs),0) as TrukerOwesUs FROM tbl_orders WHERE IsActive = 1 AND OrderStatusID != 4 AND MONTH(LastModificationDate) = MONTH(curdate())");
        $stm2->execute();
        return $stm2->fetch();
    }

    public function GetStatusOrderById($data){

        $stm = $this->pdo->prepare("SELECT Id, CustomerOrigin, Status, OrderDate, PickUpDate, DeliveryDate, LastModificationDate FROM vw_orders WHERE Id = ?");
        $stm->execute(array($data->Id));
        return  $stm->fetch(PDO::FETCH_OBJ);
    }

    public function UpdateStatusOrder($data){

        try{
            $sql = "UPDATE tbl_orders SET OrderStatusID  = ? WHERE Id = ?";
            return $this->pdo->prepare($sql)->execute(array($data->OrderStatusID,$data->Id));

    } catch (Exception $e){
        die($e->getMessage());
    }

 }

 public function PayExtraTruckerFee($data){
    
    try{
        $sql = "UPDATE tbl_orders SET ExtraTrukerFee  = ? WHERE Id = ?";
        return $this->pdo->prepare($sql)->execute(array($data->ExtraTrukerFee,$data->Id));
    } catch (Exception $e){
        die($e->getMessage());
    }

 }

 public function PayTruckerOwesUS($data){
    
    try{
        $sql = "UPDATE tbl_orders SET TrukerOwesUs  = ? WHERE Id = ?";
        return $this->pdo->prepare($sql)->execute(array($data->TrukerOwesUs,$data->Id));
    } catch (Exception $e){
        die($e->getMessage());
    }

 }


}