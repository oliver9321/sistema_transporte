<?php
require_once 'Config/Core.php';
require_once 'Model/administracionModel.php';
require_once 'Model/departamentosModel.php';

class AdministracionController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new Administracion();
    }

    public function Index(){

    if(count($_SESSION) > 0){

        if(isset($_SESSION['DataUserOnline']) && $_SESSION['DataUserOnline']['Usuario']->Perfil == "Administrador"){

         $Departamento = new Mant_Departamentos();
         $Departamentos = $Departamento->GetListDepartamentos();

        GetRouteView(null, "header");
        require_once 'View/Administracion/index.php';
       // GetRouteView(null, "footer");

        }else{
            header('Location:index.php?c=login&a=index');
        }
         
        }else{

           header('Location:index.php?c=login&a=index');
        }
    }


    public function GetTotalTurnosByUsers(){

        if(isset($_POST)) {

            $DepartamentID = $_POST['DepartamentID'];

            if($DepartamentID){
                echo json_encode($this->model->GetTotalTurnosByUsersAndDepartaments($DepartamentID), true);
            }
        }
    }

    public function BackupTablaTurnos(){

        if(isset($_POST) && $_POST['Action'] == "BackupTablaTurnos") {
            //Primero realizar un backup del sistema
            $this->model->BackupTablaTurnos(SERVIDOR, USUARIO_DB, PASSWORD_DB, DATABASE);
        }
}

    public function TruncateTableTurnos(){
        //Primero realizar un backup del sistema
       /// $this->BackupTablaTurnos();
        if(isset($_POST) && $_POST['Action'] == "TruncateTableTurnos") {
            $this->model->TruncateTableTurnos();
         }
    }

    public function FinalizarTurnos(){

        if(isset($_POST) && $_POST['Action'] == "FinalizarTurnos") {
            echo json_encode($this->model->FinalizarTurnos(), true);
           // $this->LimpiarArchivoTurnosSucursal();
        }
    }

  /*  public function LimpiarArchivoTurnosSucursal(){

       $ArchivoTurnosSucursal =  $_SESSION['$RutaTurnos_File'];

        $exist = file_exists($ArchivoTurnosSucursal);

        if ($exist)
        {
            $borrado = unlink($ArchivoTurnosSucursal);
            if ($borrado == True)
            {
                echo "Se borro exitosamente el txt";
            }else{
                echo "error al limpiar el archivo";
            }
        }

    }*/



}