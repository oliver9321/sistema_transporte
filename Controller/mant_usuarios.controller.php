<?php

require_once 'Config/Core.php';
require_once 'Model/usuariosModel.php';
require_once 'Model/puestosModel.php';
require_once 'Model/perfilesUsuariosModel.php';


class Mant_usuariosController
{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new Mant_Usuarios();
    }

    public function Index(){

        if($_SESSION['UserOnline']->Profile == "admin") {

        GetRouteView(null, "header");
        require_once 'View/mant_usuarios/mant_usuarios/index.php';
        GetRouteView(null, "footer");

        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    public function View(){
        if($_SESSION['UserOnline']->Profile == "admin") {
         echo json_encode($this->model->View(), true);
        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    public function Edit(){

        if($_SESSION['UserOnline']->Profile == "admin") {

        //Instancias de clases
        $Usuario = new Mant_Usuarios();
        $Puestos = new Mant_Puestos();
        $PuestosByUser = "";
        $PuestosArray = $Puestos->GetListPuestos();

        $PerfilesUsuarios = new Mant_PerfilesUsuarios();
        $PerfilesUsuarios = $PerfilesUsuarios->GetListPerfilesUsuarios();

        if(isset($_REQUEST['Id'])){

            $Usuario =  $this->model->Edit($_REQUEST['Id']);
            $Usuario->Password = trim($this->decryptIt($Usuario->Password, KEY));
            $PuestosByUser =  $Puestos->GetListPuestosByUser($_REQUEST['Id']);
        }

       GetRouteView(null, "header");
       require_once 'View/mant_usuarios/mant_usuarios/edit.php';
       GetRouteView(null, "footer");

        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    public function Save()
    {

        if (isset($_REQUEST['Nombre']) || isset($_REQUEST['Usuario'])) {

            $Usuario = new Mant_Usuarios();

            $Usuario->Id = $_REQUEST['Id'];
            $Usuario->PerfilUsuarioID = $_REQUEST['PerfilUsuarioID'];
            $Usuario->Nombre = $_REQUEST['Nombre'];
            $Usuario->Apellido = $_REQUEST['Apellido'];
            $Usuario->Usuario = $_REQUEST['Usuario'];
            $Usuario->Password = $this->encryptIt($_REQUEST['Password'], KEY);
            $Usuario->PuestoID = $_REQUEST['PuestoID'];
            $Usuario->Email = $_REQUEST['Email'];
            $Usuario->IsActive = $_REQUEST['IsActive'];
            $Usuario->LastModificationDate = date('Y-m-d');
            $Usuario->DateCreation = date('Y-m-d');
            $Usuario->ModificadoPorUsuarioID = $_SESSION['UserOnline']->UsuarioID;
            $Usuario->CreadoPorUsuarioID = $_SESSION['UserOnline']->UsuarioID;

      
            if (!empty($_FILES['Imagen']['name'])) {
                $Imagen2 = date('ymdhis') . '-' . strtolower($_FILES['Imagen']['name']);
                move_uploaded_file($_FILES['Imagen']['tmp_name'], 'uploads/' . $Imagen2);
                $Usuario->Imagen = $Imagen2;
            } else {
                $Usuario->Imagen = $_REQUEST['Imagen'];
            }


            if ($Usuario->Id > 0) {

                $Message =  $this->model->Update($Usuario);

                if ($Message != "1") {
                    echo '<script>alert("' . $Message . '"); setTimeout(function(){ window.location.href = "/index.php?c=mant_usuarios&a=Edit&Id="+$Usuario->Id+"; }, 100);</script>';
                } else {
                    header('Location:index.php?c=mant_usuarios&a=index');
                }

            } else {

                $Message = $this->model->Create($Usuario);

                if ($Message != "1") {
                    echo '<script>alert("' . $Message . '"); setTimeout(function(){ window.location.href = "../index.php"; }, 100);</script>';
                } else {
                    header('Location:index.php?c=mant_usuarios&a=index');
                }
            }

        } else {
            header('Location:index.php?c=mant_usuarios&a=Edit');
        }
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


    function decryptIt($string, $key) {

           $result = '';
           $string = base64_decode($string);
           for($i=0; $i<strlen($string); $i++) {
              $char = substr($string, $i, 1);
              $keychar = substr($key, ($i % strlen($key))-1, 1);
              $char = chr(ord($char)-ord($keychar));
              $result.=$char;
           }
           return $result;
        }

}