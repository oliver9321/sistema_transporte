<?php

class Drivers {

    private $pdo;

    public $Id;
    public $Name;
    public $LastName;
    public $Phone1;
    public $Phone2;
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

                $stm = $this->pdo->prepare("SELECT * FROM tbl_drivers");
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
            $stm = $this->pdo->prepare("SELECT *  FROM tbl_drivers WHERE Id = ?");
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
            $sql = "UPDATE tbl_drivers SET

                        Name= ?,
                        LastName= ?,
                        Phone1= ?,
                        Phone2= ?,
						LastModificationDate = ?,
						UserIdLastModification = ?,
						IsActive = ?
				    WHERE Id = ?";

          $result =  $this->pdo->prepare($sql)
                ->execute(
                    array(

                        $data->Name,
                        $data->LastName,
                        $data->Phone1,
                        $data->Phone2,
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

    public function Create (Drivers $data)
    {
        try
        {
            $sql = "INSERT INTO tbl_drivers (Name,LastName,Phone1,Phone2,DateCreation,UserIdCreation,IsActive) VALUES (?,?,?,?,?,?,?)";

            $result =  $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->Name,
                        $data->LastName,
                        $data->Phone1,
                        $data->Phone2,
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

    public function getCountDrivers(){

        $stm2 = $this->pdo->prepare("SELECT COUNT(*) as CountDrivers FROM tbl_drivers WHERE IsActive = 1");
        $stm2->execute();
        return $stm2->fetch();
    }


}