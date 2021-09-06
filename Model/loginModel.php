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

        $UserOnline = array();

        try
        {

            $myusername = $data->Usuario;
            $mypassword = $data->Password;
            
            $stm = $this->pdo->prepare("SELECT Id, Name, LastName, UserName, Image, Email, Profile FROM vw_users  WHERE UserName = ? AND Password = ? AND IsActive = 1 LIMIT 1");
            $stm->execute(array($myusername,$mypassword));

            $RsArrayUsuario = $stm->fetch(PDO::FETCH_OBJ);

            if($RsArrayUsuario){

                $UserOnline['Usuario'] = $RsArrayUsuario;

                return $RsArrayUsuario;

            }else{
                return $UserOnline;
            }


        } catch (Exception $e)
        {
            print_r($e->getMessage());
            return $UserOnline;
            die($e->getMessage());
        }

    }

}