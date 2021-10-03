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

                $stm = $this->pdo->prepare("SELECT * FROM tbl_orders");
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

    public function Edit($id)
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
        /*
         IdCompanyService,
         IdDriver,
         ExtraTrukerFee,
          TrukerOwesUs,
          Earnings,
                Cod,
                TrukerRate,
          */
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

    
    public function getSumEarnings(){

        $stm2 = $this->pdo->prepare("SELECT IFNULL(SUM(Earnings),0) as Earnings FROM tbl_orders WHERE IsActive = 1");
        $stm2->execute();
        return $stm2->fetch();
    }


}