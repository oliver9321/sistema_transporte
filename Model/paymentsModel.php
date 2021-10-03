<?php

class Payments {

    private $pdo;

    public $Id;
    public $PaymentOwnerName;
    public $CardHolderName;
    public $CreditCard;
    public $ExpDate;
    public $Cvv;
    public $BillingAddress;
    public $Reference;
    public $Tel1;
    public $Tel2;
    public $PaymentEmail;
    public $PaymentNote;
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

                $stm = $this->pdo->prepare("SELECT * FROM tbl_payments");
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
            $stm = $this->pdo->prepare("SELECT *  FROM tbl_payments WHERE Id = ?");
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
            $sql = "UPDATE tbl_payments SET
                        PaymentOwnerName= ?,
                        CardHolderName= ?,
                        CreditCard= ?,
                        ExpDate= ?,
                        Cvv = ?,
                        BillingAddress= ?,
                        Reference= ?,
                        Tel1= ?,
                        Tel2= ?,
                        PaymentEmail= ?,
                        PaymentNote= ?,         
						LastModificationDate = ?,
						UserIdLastModification = ?,
						IsActive = ?
				    WHERE Id = ?";

$result=  $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->PaymentOwnerName,
                        $data->CardHolderName,
                        $data->CreditCard,
                        $data->ExpDate,
                        $data->Cvv,
                        $data->BillingAddress,
                        $data->Reference,
                        $data->Tel1,
                        $data->Tel2,
                        $data->PaymentEmail,
                        $data->PaymentNote,
                        $data->date('Y-m-d H:i:s'),
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

    public function Create (Payments $data)
    {
        try
        {
            $sql = "INSERT INTO tbl_payments (
                    PaymentOwnerName,
                    CardHolderName,
                    CreditCard,
                    ExpDate,
                    Cvv,
                    BillingAddress,
                    Reference,
                    Tel1,
                    Tel2,
                    PaymentEmail,
                    PaymentNote,
                    DateCreation,
                    UserIdCreation,
                    IsActive) 
                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $this->pdo->prepare($sql)->execute(array(
                        $data->PaymentOwnerName,
                        $data->CardHolderName,
                        $data->CreditCard,
                        $data->ExpDate,
                        $data->Cvv,
                        $data->BillingAddress,
                        $data->Reference,
                        $data->Tel1,
                        $data->Tel2,
                        $data->PaymentEmail,
                        $data->PaymentNote,
                        date('Y-m-d H:i:s'),
                        (int)$_SESSION['UserOnline']->Id,
                        1
                    )
                );

                return $this->pdo->lastInsertId();
                
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }



}