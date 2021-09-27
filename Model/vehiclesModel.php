<?php

class Vehicles {

    private $pdo;

    public $Id;
    public $Brand;
    public $Model;
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

                $stm = $this->pdo->prepare("SELECT * FROM tbl_vehicles");
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
            $stm = $this->pdo->prepare("SELECT *  FROM tbl_vehicles WHERE Id = ?");
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
            $sql = "UPDATE tbl_vehicles SET
						Brand  = ?,
                        Model  = ?,
						LastModificationDate = ?,
						UserIdLastModification = ?,
						IsActive = ?
				    WHERE Id = ?";

$result=  $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->Brand,
                        $data->Model,
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

    public function Create (Vehicles $data)
    {
        try
        {
            $sql = "INSERT INTO tbl_vehicles (Brand,Model,DateCreation,UserIdCreation,IsActive) VALUES (?,?,?,?,?)";

            $result=  $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->Brand,
                        $data->Model,
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

    public function GetListBrands()
    {
        try
        {

            $stm = $this->pdo->prepare("SELECT distinct Brand FROM tbl_vehicles WHERE IsActive = 1");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_ASSOC);
            
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function GetListModels()
    {
        try
        {

            $stm = $this->pdo->prepare("SELECT distinct Model FROM tbl_vehicles WHERE IsActive = 1");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_ASSOC);
            
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

}