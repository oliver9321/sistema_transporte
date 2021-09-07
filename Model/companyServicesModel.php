<?php

class CompanyServices {

    private $pdo;

    public $Id;
    public $CompanyName;
    public $Address;
    public $Phone1;
    public $Phone2;
    public $Email;
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

                $stm = $this->pdo->prepare("SELECT * FROM tbl_company_services");
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
            $stm = $this->pdo->prepare("SELECT *  FROM tbl_company_services WHERE Id = ?");
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
            $sql = "UPDATE tbl_company_services SET
            
     
                CompanyName= ?,
                Address = ?,
                Phone1= ?,
                Phone2= ?,
                Email= ?,
                LastModificationDate= ?,
                UserIdLastModification= ?,
                IsActive= ?,
                WHERE Id = ?";

   $result =  $this->pdo->prepare($sql)
                ->execute(
                    array(
                        
                  
                        $data-> CompanyName,
                        $data-> Address,
                        $data-> Phone1,
                        $data-> Phone2,
                        $data-> Email,
                        (int)$data-> LastModificationDate,
                        (int)$data-> UserIdLastModification,
                        $data-> IsActive,
                        $data->Id
                    )
                );
                return $result;
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Create (Mant_BotonesTurnos $data)
    {
        try
        {
            $sql = "INSERT INTO tbl_company_services (CompanyName,Address,Phone1,Phone2,Email,DateCreation,UserIdCreation,IsActive) VALUES (?,?,?,?,?,?,?,?)";

            $result =  $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data-> CompanyName,
                        $data-> Address,
                        $data-> Phone1,
                        $data-> Phone2,
                        $data-> Email,
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