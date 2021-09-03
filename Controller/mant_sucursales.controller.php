<?php

require_once 'Config/Core.php';
require_once 'Model/sucursalesModel.php';
require_once 'Model/empresaModel.php';

class Mant_sucursalesController
{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new Mant_Sucursales();
    }

    public function Index(){

        if (isset($_SESSION['DataUserOnline']) && $_SESSION['DataUserOnline']['Usuario']->Perfil == "Administrador") {

            GetRouteView(null, "header");
            GetRouteView("mant_sucursales", "index");
            GetRouteView(null, "footer");

        }else{
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

            $Sucursal = new Mant_Sucursales();
            $Empresa = new Mant_Empresa();
            $Empresa = $Empresa->GetListEmpresas();

            if (isset($_REQUEST['Id'])) {
                $Sucursal = $this->model->Edit($_REQUEST['Id']);
            }

            GetRouteView(null, "header");
            require_once 'View/mant_sucursales/edit.php';
            GetRouteView(null, "footer");

        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    public function Save(){

        $Sucursal = new Mant_Sucursales();

        $Sucursal->Id =                       $_REQUEST['Id'];
        $Sucursal->Codigo =                   $_REQUEST['Codigo'];
        $Sucursal->Nombre =                   $_REQUEST['Nombre'];
        $Sucursal->Descripcion =              $_REQUEST['Descripcion'];
        $Sucursal->Direccion =                $_REQUEST['Direccion'];
        $Sucursal->Telefono =                 $_REQUEST['Telefono'];
        $Sucursal->IsActive =                   $_REQUEST['IsActive'];
        $Sucursal->EmpresaID =                $_REQUEST['EmpresaID'];
        $Sucursal->FechaModificacion =        date('Y-m-d');
        $Sucursal->FechaCreacion =            date('Y-m-d');
        $Sucursal->ModificadoPorUsuarioID =  $_SESSION['DataUserOnline']['Usuario']->UsuarioID;
        $Sucursal->CreadoPorUsuarioID =      $_SESSION['DataUserOnline']['Usuario']->UsuarioID;


        $Sucursal->Id > 0
            ? $this->model->Update($Sucursal)
            : $this->model->Create($Sucursal);

        header('Location:?c=mant_sucursales&a=index');
    }
}