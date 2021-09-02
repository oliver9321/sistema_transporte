<?php
require_once 'Config/Core.php';
require_once 'Model/loginModel.php';

class loginController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new login();
    }

    public function Index(){
        GetRouteView("login", "index");
    }

    public function ValidateUser(){

        if(isset($_REQUEST['Usuario']) && isset($_REQUEST['Password'])){

            $login = new login();

            $login->Usuario  = $_REQUEST['Usuario'];
            $login->Password = $this->encryptIt($_REQUEST['Password'], KEY);
            $login->Password = $_REQUEST['Password'];

            $returnResponse =  $this->model->login($login);

           /* if($returnResponse){

                $_SESSION['DataUserOnline'] = $returnResponse;
                $Perfil = $returnResponse['Usuario']->Perfil;
                $Empresa = $returnResponse['Usuario']->Empresa;

                $SucursalID_File    =  $returnResponse['Usuario']->SucursalID;
                $DepartamentoID_File =  $returnResponse['Usuario']->DepartamentoID;

                $Puesto = $returnResponse['Usuario']->Puesto;

                switch($Perfil){

                    case "Administrador":
                        header('Location: index.php?c=Administracion&a=index');
                        break;

                    case "Oficial":
                        header('Location: index.php?c=dashboard&a=index');
                        break;

                    default:
                        echo '<script>alert("Usuario invalido, No posee permisos o Clave invalida"); setTimeout(function(){ window.location.href = "index.php?c=Login&a=index"; }, 100);</script>';
                        break;
                }


            }else{
                echo '<script>alert("Usuario invalido, No posee permisos o Clave invalida"); setTimeout(function(){ window.location.href = "index.php?c=Login&a=index"; }, 100);</script>';

            }*/
        }else{
            echo '<script>alert("Usuario invalido, No posee permisos o Clave invalida"); setTimeout(function(){ window.location.href = "index.php?c=Login&a=index"; }, 100);</script>';
        }

    }

    public function Logout(){

        if(isset($_SESSION)){
            session_destroy();
        }

        header('Location: index.php?c=login&a=index');

    }


    function encryptIt($string, $key) {

           $result = '';
           for($i=0; $i<strlen($string)*5; $i++) {
              $char = substr($string, $i, 1);
              $keychar = substr($key, ($i % strlen($key))-1, 1);
              $char = chr(ord($char)+ord($keychar));
              $result.=$char;
           }

           return base64_encode($result);
}


}