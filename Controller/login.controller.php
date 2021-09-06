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

        if(isset($_POST['username']) && $_POST['username'] != '' &&  isset($_POST['password']) && $_POST['password'] != ''){

            $login = new login();

            $login->Usuario  = stripslashes($_POST['username']);
            $login->Password = stripslashes($this->encryptIt($_POST['password'], KEY));
            $user = $this->model->login($login);

           if($user){

                $Perfil = $user->Profile;
    
                switch($Perfil){

                    case "admin":
                        $_SESSION['UserOnline'] = $user;
                        header('Location: index.php?c=dashboard&a=index');
                        break;

                    case "manager":
                        $_SESSION['UserOnline'] = $user;
                        header('Location: index.php?c=dashboard&a=index');
                        break;

                    default:
                        echo '<script>alert("Invalid user, No posee permisos o Clave invalida"); setTimeout(function(){ window.location.href = "index.php?c=Login&a=index"; }, 100);</script>';
                        break;
                }


            }else{
                echo '<script>alert("Invalid user, No posee permisos o Clave invalida"); setTimeout(function(){ window.location.href = "index.php?c=Login&a=index"; }, 100);</script>';
            }

        }else{
            echo '<script>alert("Ingrese su username and password); setTimeout(function(){ window.location.href = "index.php?c=Login&a=index"; }, 100);</script>';
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