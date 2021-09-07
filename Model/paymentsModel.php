<?php

class Payments {

    private $pdo;

    public $Id;
    public $PaymentOwnerName;
    public $CardHolderName;
    public $CreditCard;
    public $ExpDate;
    public $BilingAddress;
    public $Reference;
    public $Tel;
    public $Email;
    public $NotePayment;
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
                        BilingAddress= ?,
                        Reference= ?,
                        Tel= ?,
                        Email= ?,
                        NotePayment= ?,         
						LastModificationDate = ?,
						UserIdLastModification = ?,
						IsActive = ?
				    WHERE Id = ?";

$result=  $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data-> $PaymentOwnerName,
                        $data-> $CardHolderName,
                        $data-> $CreditCard,
                        $data-> $ExpDate,
                        $data-> $BilingAddress,
                        $data-> $Reference,
                        $data-> $Tel,
                        $data-> $Email,
                        $data-> $NotePayment,
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

    public function Create (Mant_BotonesTurnos $data)
    {
        try
        {
            $sql = "INSERT INTO tbl_payments (
                
                    PaymentOwnerName,
                    CardHolderName,
                    CreditCard,
                    ExpDate,
                    BilingAddress,
                    Reference,
                    Tel,
                    Email,
                    NotePayment,
                    DateCreation,
                    UserIdCreation,
                    IsActive) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

$result=   $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data-> $PaymentOwnerName,
                        $data-> $CardHolderName,
                        $data-> $CreditCard,
                        $data-> $ExpDate,
                        $data-> $BilingAddress,
                        $data-> $Reference,
                        $data-> $Tel,
                        $data-> $Email,
                        $data->  $NotePayment,
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