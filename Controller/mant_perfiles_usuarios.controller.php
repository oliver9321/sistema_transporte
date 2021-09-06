<?php

require_once 'Config/Core.php';
require_once 'Model/perfilesUsuariosModel.php';


class Mant_perfiles_usuariosController
{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new Mant_PerfilesUsuarios();
    }

    public function Index(){

        if (isset($_SESSION['UserOnline']) && $_SESSION['UserOnline']->Profile == "admin") {
            GetRouteView(null, "header");
            require_once 'View/mant_usuarios/mant_perfiles_usuarios/index.php';
            GetRouteView(null, "footer");
        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    public function View(){

        if (isset($_SESSION['UserOnline']) && $_SESSION['UserOnline']->Profile == "admin") {
            echo json_encode($this->model->View());
        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    public function Edit(){

        if (isset($_SESSION['UserOnline']) && $_SESSION['UserOnline']->Profile == "admin") {
            
            if (isset($_REQUEST['Id'])) {
                $this->model = $this->model->Edit($_REQUEST['Id']);
            }

            GetRouteView(null, "header");
            require_once 'View/mant_usuarios/mant_perfiles_usuarios/edit.php';
            GetRouteView(null, "footer");

        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    public function Save(){

        $this->model->Id = $_REQUEST['Id'];
        $this->model->Perfil = $_REQUEST['Perfil'];
        $this->model->Descripcion = $_REQUEST['Descripcion'];
        $this->model->IsActive = $_REQUEST['IsActive'];
        $this->model->FechaModificacion = date('Y-m-d');
        $this->model->FechaCreacion = date('Y-m-d');
        $this->model->ModificadoPorUsuarioID =  $_SESSION['UserOnline']->UsuarioID;
        $this->model->CreadoPorUsuarioID =  $_SESSION['UserOnline']->UsuarioID;


        $this->model->Id > 0
            ? $this->model->Update($this->model)
            : $this->model->Create($this->model);

        header('Location:?c=mant_perfiles_usuarios&a=index');
    }

}