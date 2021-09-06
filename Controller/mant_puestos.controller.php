<?php

require_once 'Config/Core.php';
require_once 'Model/puestosModel.php';
require_once 'Model/departamentosModel.php';


class Mant_puestosController
{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new Mant_Puestos();
    }

    public function Index(){


        if (isset($_SESSION['UserOnline']) && $_SESSION['UserOnline']->Profile == "admin") {

            GetRouteView(null, "header");
            GetRouteView("mant_puestos", "index");
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

            $Puesto = new Mant_Puestos();
            $Departamento = new Mant_Departamentos();
            $Departamento = $Departamento->GetListDepartamentos();

            if (isset($_REQUEST['Id'])) {
                $Puesto = $this->model->Edit($_REQUEST['Id']);
            }

            GetRouteView(null, "header");
            require_once 'View/mant_puestos/edit.php';
            GetRouteView(null, "footer");

        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

    public function Save(){

        $Puesto = new Mant_Puestos();

        $Puesto->Id = $_REQUEST['Id'];
        $Puesto->Codigo = $_REQUEST['Codigo'];
        $Puesto->Nombre = $_REQUEST['Nombre'];
        $Puesto->Descripcion = $_REQUEST['Descripcion'];
        $Puesto->IsActive = $_REQUEST['IsActive'];
        $Puesto->DepartamentoID = $_REQUEST['DepartamentoID'];
        $Puesto->LastModificationDate = date('Y-m-d');
        $Puesto->DateCreation = date('Y-m-d');
        $Puesto->ModificadoPorUsuarioID =  $_SESSION['UserOnline']->UsuarioID;
        $Puesto->CreadoPorUsuarioID =  $_SESSION['UserOnline']->UsuarioID;


        $Puesto->Id > 0
            ? $this->model->Update($Puesto)
            : $this->model->Create($Puesto);

        header('Location:index.php?c=mant_puestos&a=index');
    }

}