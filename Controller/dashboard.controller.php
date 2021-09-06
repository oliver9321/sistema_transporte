<?php
require_once 'Config/Core.php';
require_once 'Model/dashboardModel.php';

class dashboardController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new dashboard();
    }

    public function Index(){

        if(count($_SESSION) > 0){

             if(isset($_SESSION['UserOnline']) && $_SESSION['UserOnline']->Profile == "admin" || $_SESSION['UserOnline']->Profile == "manager"){

                GetRouteView(null, "header");
                require_once 'View/dashboard/index.php';
                GetRouteView(null, "footer");

               }else{
                header('Location:index.php?c=login&a=index');
               }
               
         }else{
         header('Location:index.php?c=login&a=index');   
         }

         
    }


    public function ActualizarPlayListYoutube(){

        if(isset($_POST) && $_POST['Action'] == "ActualizarPlayListYoutube"){

            $Opcion = $_POST['Opcion'];
            $PlayListYoutube = $_POST['PlayListYoutube'];

            echo json_encode( $this->model->ActualizarPlayListYoutube($PlayListYoutube, $Opcion), true);

        }

    }


    public function ActualizarEstadoTurnoController(){

        if(isset($_POST) && $_POST['Action'] == "ActualizarEstadoTurno"){

            $DepartamentoID = $_SESSION['UserOnline']->DepartamentoID;
            $PuestoCodigo= $_SESSION['UserOnline']->PuestoCodigo;

            $Estado       = $_POST['Estado'];
            $PuestoID     = $_POST['PuestoID'];
            $TurnoID      = $_POST['TurnoID'];
            $SucursalID   = $_POST['SucursalID'];
            $Turno        = $_POST['Turno'];
            $Puesto       = $_POST['Puesto'];
            $Comentario   = $_POST['Comentario'];
            $DiaHoy = getdate();
            $DiaHoy = $DiaHoy['mday'];

            echo json_encode($this->model->ActualizarEstadoTurnoModel($Estado, $TurnoID, $PuestoID, $Comentario, $PuestoCodigo, $Turno), true);

        }else{
            echo json_encode("false", true);
        }

    }

    public function GetListTurnosBySucursal(){

        echo json_encode($this->model->GetListTurnosBySucursal(), true);
    }


}