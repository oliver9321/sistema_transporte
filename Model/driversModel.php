<?php

class Drivers {

    private $pdo;

    public $Id;
    public $DriverName;
    public $DriverPhone1;
    public $DriverPhone2;
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
                        DriverName= ?,
                        DriverPhone1= ?,
                        DriverPhone2= ?,
						LastModificationDate = ?,
						UserIdLastModification = ?,
						IsActive = ?
				    WHERE Id = ?";

          $result =  $this->pdo->prepare($sql)
                ->execute(
                    array(

                        $data->DriverName,
                        $data->DriverPhone1,
                        $data->DriverPhone2,
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

    public function Create (Drivers $data)
    {
        try
        {
            $sql = "INSERT INTO tbl_drivers (DriverName,DriverPhone1,DriverPhone2,DateCreation,UserIdCreation,IsActive) VALUES (?,?,?,?,?,?)";

           $this->pdo->prepare($sql)->execute(
                    array(
                        $data->DriverName,
                        $data->DriverPhone1,
                        $data->DriverPhone2,
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

    public function getCountDrivers(){

        $stm2 = $this->pdo->prepare("SELECT COUNT(*) as CountDrivers FROM tbl_drivers WHERE IsActive = 1");
        $stm2->execute();
        return $stm2->fetch();
    }

    public function GetListDrivers()
    {
        try
        {

            $stm = $this->pdo->prepare("SELECT Id, DriverName AS Driver FROM tbl_drivers WHERE IsActive = 1");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_ASSOC);
            
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

}