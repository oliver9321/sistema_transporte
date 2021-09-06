<?php

class Mant_Empresa
{
    private $pdo;

    public $Id;
    public $Codigo;
    public $Nombre;
    public $Descripcion;
    public $Direccion;
    public $LogoGrande;
    public $LogoPeq;
    public $Rnc;
    public $Telefono;
    public $DateCreation;
    public $CreadoPorUsuarioID;
    public $ModificadoPorUsuarioID;
    public $LastModificationDate;
    public $IsActive;


    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Edit($id)
    {
        try
        {
            $stm = $this->pdo
                ->prepare("SELECT *  FROM tbl_empresa WHERE Id = ?");


            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Update ($data)
    {
        try
        {
            $sql = "UPDATE tbl_empresa SET
						Codigo  = ?,
						Nombre   = ?,
                        Descripcion  = ?,
						LogoGrande   = ?,
						LogoPeq = ?,
						Telefono = ?,
						Direccion = ?,
						Rnc = ?,
						ModificadoPorUsuarioID = ?,
						LastModificationDate = ?,
						IsActive = ?
				    WHERE Id = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->Codigo,
                        $data->Nombre,
                        $data->Descripcion,
                        $data->LogoGrande,
                        $data->LogoPeq,
                        $data->Telefono,
                        $data->Direccion,
                        $data->Rnc,
                        (int)$data->ModificadoPorUsuarioID,
                        $data->LastModificationDate,
                        (int)$data->IsActive,
                        $data->Id
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Create(Mant_Empresa $data)
    {
        try
        {
            $sql = "INSERT INTO tbl_empresa (Codigo,Nombre,Descripcion,LogoGrande,LogoPeq, Telefono, Direccion, Rnc, CreadoPorUsuarioID, DateCreation, IsActive)
		        VALUES (?, ?, ?, ?, ?, ?,?,?,?,?,?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->Codigo,
                        $data->Nombre,
                        $data->Descripcion,
                        $data->LogoGrande,
                        $data->LogoPeq,
                        $data->Telefono,
                        $data->Direccion,
                        $data->Rnc,
                        (int)$data->CreadoPorUsuarioID,
                        date('Y-m-d'),
                        1
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function View()
    {
        try
        {

                $stm = $this->pdo->prepare("SELECT Id, Codigo, Nombre, Rnc, LogoPeq, Telefono, Descripcion, IsActive FROM tbl_empresa");
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

    public function GetListEmpresas()
    {
        try
        {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM tbl_empresa WHERE IsActive = 1");
            $stm->execute();


            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $Empresa = new Mant_Empresa();

                $Empresa->Id             = $r->Id;
                $Empresa->Nombre         = $r->Nombre;
                $Empresa->Codigo         = $r->Codigo;
                $Empresa->Nombre         = $r->Nombre;
                $Empresa->Descripcion    = $r->Descripcion;
                $Empresa->LogoGrande     = $r->LogoGrande;
                $Empresa->LogoPeq        = $r->LogoPeq;
                $Empresa->Telefono       = $r->Telefono;
                $Empresa->Direccion      = $r->Direccion;
                $Empresa->Rnc            = $r->Rnc;
                $Empresa->ModificadoPorUsuarioID =  (int)$r->ModificadoPorUsuarioID;
                $Empresa->LastModificationDate      =  $r->LastModificationDate;
                $Empresa->IsActive                 =  (int)$r->IsActive;

                $result[] = $Empresa;
            }


            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }


}