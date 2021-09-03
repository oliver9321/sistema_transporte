<?php

require_once 'Config/Core.php';
require_once 'Model/modulosModel.php';


class Mant_modulosController
{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new Mant_Modulos();
    }

    public function Index(){

        if (isset($_SESSION['DataUserOnline']) && $_SESSION['DataUserOnline']['Usuario']->Perfil == "Administrador") {
            GetRouteView(null, "header");
            GetRouteView("mant_modulos", "index");
            GetRouteView(null, "footer");
        } else{
            header('Location:index.php?c=login&a=index');

        }
    }


    public function View(){

        if (isset($_SESSION['DataUserOnline']) && $_SESSION['DataUserOnline']['Usuario']->Perfil == "Administrador") {
            echo json_encode($this->model->View());
         }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    public function Edit(){

        if (isset($_SESSION['DataUserOnline']) && $_SESSION['DataUserOnline']['Usuario']->Perfil == "Administrador") {

            $Modulo = new Mant_Modulos();

            if (isset($_REQUEST['Id'])) {
                $Modulo = $this->model->Edit($_REQUEST['Id']);
            }

            GetRouteView(null, "header");
            require_once 'View/mant_modulos/edit.php';
            GetRouteView(null, "footer");

        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    public function Save(){

        $Modulo = new Mant_Modulos();

        $Modulo->Id =                       $_REQUEST['Id'];
        $Modulo->Codigo =                   $_REQUEST['Codigo'];
        $Modulo->Nombre =                   $_REQUEST['Nombre'];
        $Modulo->Descripcion =              $_REQUEST['Descripcion'];
        $Modulo->IsActive =                   $_REQUEST['IsActive'];
        $Modulo->FechaModificacion =        date('Y-m-d');
        $Modulo->FechaCreacion =            date('Y-m-d');
        $Modulo->ModificadoPorUsuarioID =  $_SESSION['DataUserOnline']['Usuario']->UsuarioID;
        $Modulo->CreadoPorUsuarioID =      $_SESSION['DataUserOnline']['Usuario']->UsuarioID;

        $Modulo->Id > 0
            ? $this->model->Update($Modulo)
            : $this->model->Create($Modulo);

        header('Location:?c=mant_modulos&a=index');
    }
}