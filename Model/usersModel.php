<?php

class Users {

    private $pdo;

    public $Id;
    public $ProfileUserId;
    public $Name;
    public $LastName;
    public $UserName;
    public $Password;   
    public $Email;
    public $Image;
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

                $stm = $this->pdo->prepare("SELECT * FROM tbl_users");
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
            $stm = $this->pdo->prepare("SELECT *  FROM tbl_users WHERE Id = ?");
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
            $sql = "UPDATE tbl_users SET

						ProfileUserId= ?,
                        Name= ?,
                        LastName= ?,
                        UserName= ?,
                        Password= ?,
                        Email= ?,
                        Image = ?,
						LastModificationDate = ?,
						UserIdLastModification = ?,
						IsActive = ?
				    WHERE Id = ?";

$result=  $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->ProfileUserId,
                        $data->Name,
                        $data->LastName,
                        $data->UserName,
                        $data->Password,    
                        $data->Email,
                        $data->Image,
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

    public function Create (Users $data)
    {
        try
        {
            $sql = "INSERT INTO tbl_users (ProfileUserId,Name,LastName,UserName,Password,Email,Image,DateCreation,UserIdCreation,IsActive) VALUES (?,?,?,?,?,?,?,?,?,?)";

            $result= $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->ProfileUserId,
                        $data->Name,
                        $data->LastName,
                        $data->UserName,
                        $data->Password,    
                        $data->Email,
                        $data->Image,
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

    public function GetListBotones()
    {
        try
        {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM tbl_botones_turnos WHERE Activo = 1");
            $stm->execute();


            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $Botones = new Mant_BotonesTurnos();

                $Botones->Id              = $r->Id;
                $Botones->Nombre          = $r->Nombre." - ".$r->TipoBoton;
                $Botones->ValorBoton      = $r->ValorBoton;

                $result[] = $Botones;
            }


            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }


}