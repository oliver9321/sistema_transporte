<?php
class Login
{
    private $pdo;

    public $Usuario;
    public $Password;

    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = Database::StartUp();
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function login(Login $data){

        $RsArrayUserInformation = array();

        try
        {

            $myusername = stripslashes($data->Usuario);
            $mypassword = stripslashes($data->Password);
            
            $stm = $this->pdo->prepare("SELECT * FROM tbl_usuarios  WHERE UserName = ? AND Password = ? AND IsActive = 1 LIMIT 1");
            $stm->execute(array($myusername,$mypassword));

            $RsArrayUsuario = $stm->fetch(PDO::FETCH_OBJ);
           
            if($RsArrayUsuario){

                $RsArrayUserInformation['Usuario'] = $RsArrayUsuario;

                return $RsArrayUserInformation;

            }else{
                return $RsArrayUserInformation;
            }


        } catch (Exception $e)
        {
            print_r($e->getMessage());
            return $RsArrayUserInformation;
            die($e->getMessage());
        }

    }

}