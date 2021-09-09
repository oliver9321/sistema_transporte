<?php

require_once 'Config/Core.php'; // Obligatorio en todos los controladores
require_once 'Model/usersModel.php'; //Insertar Modelo correspondiente al controlador

class UsersController
{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new Users(); // Se instancia el Modelo. Nombre de la clase del modelo
    }

    //Vista Index
    public function Index(){

        if($_SESSION['UserOnline']->Profile == "admin") {

        GetRouteView(null, "header");
        require_once 'View/users/index.php';
        GetRouteView(null, "footer");

        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    //Vista
    public function View(){

        if($_SESSION['UserOnline']->Profile == "admin") {

         echo json_encode($this->model->View(), true);

        }else{
            header('Location:index.php?c=login&a=index');
        }

    }

    //Vista Editar
    public function Edit(){

        if($_SESSION['UserOnline']->Profile == "admin") {

          $User = new Users();

        if(isset($_REQUEST['Id'])){
            $User =  $this->model->Edit($_REQUEST['Id']);
        }

       GetRouteView(null, "header");
       require_once 'View/users/edit.php';
       GetRouteView(null, "footer");

        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    //Guardar un registro
    public function Save()
    {
        //Se colocan los campos obligatorios en la tabla.
        if (isset($_REQUEST['Name']) || isset($_REQUEST['UserName'])) {

            $Users = new Users();
            
            //Campos unicos por tabla
            $Users->ProfileUserId         = $_REQUEST['ProfileUserId'];
            $Users->Name = $_REQUEST['Name'];
            $Users->LastName   = $_REQUEST['LastName'];
            $Users->UserName     = $_REQUEST['UserName'];
            $Users->Password     = $_REQUEST['Password'];
            $Users->Email     = $_REQUEST['Email'];
          //  $Users->Image     = $_REQUEST['Image'];

            //Campos genericos
            $Users->DateCreation            = date('Y-m-d');
            $Users->UserIdCreation          = $_SESSION['UserOnline']->Id;
            $Users->LastModificationDate    = date('Y-m-d');
            $Users->UserIdLastModification  = $_SESSION['UserOnline']->Id;
            $Users->IsActive                = $_REQUEST['IsActive'];

            //Si viene un Id, es porque quieres hacer un Update, de lo contrario INSERT
            if ($Users->Id > 0) {

                $Message =  $this->model->Update($Users);

                if ($Message != "1") {
                    echo '<script>alert("' . $Message . '"); setTimeout(function(){ window.location.href = "/index.php?c=users&a=Edit&Id="+$users->Id+"; }, 100);</script>';
                } else {
                    header('Location:index.php?c=users&a=index');
                }

            } else {

                $Message = $this->model->Create($Users);

                if ($Message != "1") {
                    echo '<script>alert("' . $Message . '"); setTimeout(function(){ window.location.href = "../index.php"; }, 100);</script>';
                } else {
                    header('Location:index.php?c=users&a=index');
                }
            }

        } else {
            header('Location:index.php?c=users&a=Edit');
        }
    }

}