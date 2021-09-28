<?php

class OrderDetails {

    private $pdo;

    public $Id;
    public $IdOrder;
    public $Brand;
    public $Model;
    public $Color;
    public $Year;
    public $Vin;
    public $Condition;
    public $CarrierType;
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

                $stm = $this->pdo->prepare("SELECT * FROM tbl_order_details");
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
            $stm = $this->pdo->prepare("SELECT *  FROM tbl_order_details WHERE Id = ?");
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
            $sql = "UPDATE tbl_order_details SET
						IdOrder =?,
                        Brand  = ?,
                        Model  = ?,
                        Color = ?,
                        Year =?,
                        Vin =?,
                        Condition =?,
                        CarrierType = ?,
						LastModificationDate = ?,
						UserIdLastModification = ?,
						IsActive = ?
				    WHERE Id = ?";

$result=  $this->pdo->prepare($sql)
                ->execute(
                    array(
                       $data->IdOrder,
                        $data->Brand,
                        $data->Model,
                        $data->Color,
                        $data->Year,
                        $data->Vin,
                        $data->Condition,
                        $data->CarrierType,
                        $data->LastModificationDate,
                        (int)$data->UserIdLastModification,
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

    public function Create (OrderDetails $data)
    {
        try
        {
            $sql = "INSERT INTO tbl_order_details (IdOrder,Brand,Model,Color,Year,Vin,Condition,CarrierType,DateCreation,UserIdCreation,IsActive) VALUES (?,?,?,?,?,?,?,?,?,?,?)";

            $result= $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->IdOrder,
                        $data->Brand,
                        $data->Model,
                        $data->Color,
                        $data->Year,
                        $data->Vin,
                        $data->Condition,
                        $data->CarrierType,
                        date('Y-m-d'),
                        (int)$data->UserIdCreation,
                        1
                    )
                );
                return $result;
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

}