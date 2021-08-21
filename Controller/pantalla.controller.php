<?php

require_once 'Config/Core.php';
require_once 'Model/pantallaModel.php';

class PantallaController
{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new Pantalla();
    }

    public function Index(){

        if (isset($_SESSION['DataUserOnline'])) {
            GetRouteView("pantalla", "index");
        }else{
            header('Location:index.php?c=login&a=index');
        }
    }

}