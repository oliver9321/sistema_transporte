<?php

class UserProfiles {

    private $pdo;

    public $Id;
    public $Profile;
    public $Description;
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

                $stm = $this->pdo->prepare("SELECT * FROM tbl_user_profiles");
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
            $stm = $this->pdo->prepare("SELECT *  FROM tbl_user_profiles WHERE Id = ?");
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
            $sql = "UPDATE tbl_user_profiles SET
						Profile = ?,
                        Description =?,
						LastModificationDate = ?,
						UserIdLastModification = ?,
						IsActive = ?
				    WHERE Id = ?";

$result= $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->Profile,
                        $data->Description,
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

    public function Create (UserProfiles $data)
    {
        try
        {
            $sql = "INSERT INTO tbl_user_profiles (Profile,Description,DateCreation,UserIdCreation,IsActive) VALUES (?,?,?,?,?)";

           $this->pdo->prepare($sql)->execute(
                    array(
                        $data->Profile,
                        $data->Description,
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