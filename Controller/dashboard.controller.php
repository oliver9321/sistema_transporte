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

    public function Minipopup(){

      // GetRouteView(null, "header");
        GetRouteView("dashboard", "minipopup");
    // GetRouteView(null, "footer");
    }

    public function GenerarLlamadaTurnoController(){

        if(isset($_POST) && $_POST['Action'] == "GenerarLlamadaTurno"){

                $JsonReturn = $this->model->GenerarLlamadaTurnoModel();

                if(count($JsonReturn) > 0){

                    echo json_encode($JsonReturn, true);

                }else{
                    echo json_encode("false", true);
                }

            }else{
                echo json_encode("false", true);
            }

        }

    public function ActualizarPlayListYoutube(){

        if(isset($_POST) && $_POST['Action'] == "ActualizarPlayListYoutube"){

            $Opcion = $_POST['Opcion'];
            $PlayListYoutube = $_POST['PlayListYoutube'];

            echo json_encode( $this->model->ActualizarPlayListYoutube($PlayListYoutube, $Opcion), true);

        }

    }

//OLIVER - VER
   /* public function GetLastTurnByPuestoController(){

        if(isset($_POST) && $_POST['Action'] == "GetLastTurno"){

            $PuestoID = $_POST['PuestoID'];

            echo json_encode($this->model->GetLastTurnByPuestoModel($PuestoID), true);

        }else{
            echo json_encode("false", true);
        }

    }*/

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

    public function GetListTurnosAnulados(){

        echo json_encode($this->model->GetListTurnosAnulados(), true);
    }

    public function CambiarModoLlamadaPuesto(){

        if(isset($_POST) && $_POST['Action'] == "CambiarModoLlamadaPuesto"){

            $Departamento  = $_POST['Departamento'];
            $PuestoID     = $_POST['PuestoID'];
            $Opcion      = $_POST['Opcion'];

            echo json_encode( $this->model->CambiarModoLlamadaPuesto($Opcion, $PuestoID, $Departamento), true);

        }

    }

    public function GetListPrioridadesBypuesto(){

       // $PuestoID = $_SESSION['UserOnline']->PuestoId;

        if(isset($_POST) && $_POST['Action'] == "GetListPrioridadesBypuesto"){

            $PuestoID = $_POST['PuestoID'];

            echo json_encode( $this->model->GetListPrioridadesBypuesto($PuestoID), true);

        }

    }

    public function IntercambiarPrioridadesPuesto()
    {

        if (isset($_POST) && $_POST['Action'] == "IntercambiarPrioridadesPuesto") {

            $NuevoPuestoIntercambiarID = $_POST['NuevoPuestoIntercambiarID'];
            $PuestoIDActual = $_POST['PuestoIDActual'];

            echo json_encode( $this->model->IntercambiarPrioridadesPuesto($NuevoPuestoIntercambiarID, $PuestoIDActual), true);
        }
    }

    public function ActivarModoDesarrollador(){

    if(isset($_POST) && $_POST['Action'] == "ActivarModoDesarrollador"){

        $Opcion = $_POST['Opcion'];

        echo json_encode( $this->model->ActivarModoDesarrollador($Opcion), true);

    }
}

    public function TransferirTurnoPuesto(){

        if(isset($_POST) && $_POST['Action'] == "TransferirTurnoPuesto"){

            $PuestoIDTransferir = $_POST['PuestoIDTransferir'];
            $ComentarioTransferir = $_POST['ComentarioTransferir'];
            $TurnoID = $_POST['TurnoID'];

            echo json_encode( $this->model->TransferirTurnoPuesto($PuestoIDTransferir, $ComentarioTransferir, $TurnoID), true);

        }

    }

    public function ActivarTurnoAnulado(){

        if(isset($_POST) && $_POST['Action'] == "ActivarTurnoAnulado"){

            $TurnoID  = $_POST['TurnoID'];

            echo json_encode( $this->model->ActivarTurnoAnulado($TurnoID), true);

        }

    }

}