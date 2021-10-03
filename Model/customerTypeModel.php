<?php

class CustomerType {

    private $pdo;

    public $Id;
    public $NameType;
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

                $stm = $this->pdo->prepare("SELECT * FROM tbl_customer_type");
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
            $stm = $this->pdo->prepare("SELECT *  FROM tbl_customer_type WHERE Id = ?");
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
            $sql = "UPDATE tbl_customer_type SET

						NameType  = ?,
						LastModificationDate = ?,
						UserIdLastModification = ?,
						IsActive = ?
				    WHERE Id = ?";

$result= $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->NameType,
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

    public function Create (CustomerType $data)
    {
        try
        {
            $sql = "INSERT INTO tbl_customer_type (NameType,DateCreation,UserIdCreation,IsActive) VALUES (?,?,?,?)";

           $this->pdo->prepare($sql)->execute(
                    array(
                        $data->NameType,
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

    public function GetListCustomerTypes()
    {
        try
        {

            $stm = $this->pdo->prepare("SELECT Id, NameType FROM tbl_customer_type WHERE IsActive = 1");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_ASSOC);
            
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

}