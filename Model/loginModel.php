<?php
/*
 * VISTA SQL: vw_usuarios
 *
 */

class Login
{
    private $pdo;

    public $Usuario;
    public $Password;
    public $PuestoID;

    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = Database::StartUp();
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function login(Login $data){

        $RsArrayUserInformation = array();

        try
        {
            /*--------------------------------LOGIN-------------------------------------------*/

            $myusername = stripslashes($data->Usuario);
            $mypassword = stripslashes($data->Password);
            
            $stm = $this->pdo
                ->prepare("SELECT Id as UsuarioID, Nombre, Apellido, Usuario, PerfilUsuarioID, Perfil, PuestoCodigo, Puesto, PuestoId, DepartamentoID, DepartamentoCodigo, Departamento, SucursalID, SucursalCodigo, Sucursal, EmpresaCodigo, Empresa, EmpresaDescripcion, EmpresaLogo, Imagen FROM vw_usuarios  WHERE Usuario = ? AND Password = ? AND PuestoId = ? AND Activo = 1 LIMIT 1");

            $stm->execute(array(
                $myusername,
                $mypassword,
                $data->PuestoID
            ));


            $RsArrayUsuario = $stm->fetch(PDO::FETCH_OBJ);
           
            if($RsArrayUsuario){

                $RsArrayUserInformation['Usuario'] = $RsArrayUsuario;
                $PerfilUsuarioID = $RsArrayUsuario->PerfilUsuarioID;
                $PuestoID = $RsArrayUsuario->PuestoId;


                /*--------------------------------PERMISOS-------------------------------------------*/
                $stm2 = $this->pdo
                    ->prepare("SELECT * FROM vw_permisos_modulos_usuarios  WHERE PerfilID = ?");

                $stm2->execute(array(
                    $PerfilUsuarioID
                ));

                $RsArrayModulos = $stm2->fetchAll(PDO::FETCH_OBJ);

                if($RsArrayModulos) {
                    $RsArrayUserInformation['Modulos'] = $RsArrayModulos;
                }

                /*-----------------------------------PRIORIDAD PUESTO----------------------------------------*/
                $stm3 = $this->pdo
                    ->prepare("SELECT * FROM vw_puestos_prioridades  WHERE PuestoID = ?");

                $stm3->execute(array(
                    $PuestoID
                ));

                $RsArrayPrioridadPuesto = $stm3->fetchAll(PDO::FETCH_OBJ);

                if($RsArrayPrioridadPuesto) {
                    $RsArrayUserInformation['PrioridadPuesto'] = $RsArrayPrioridadPuesto;
                }

                /*------------------------------SISTEMA----------------------------------------*/

                $stm4 = $this->pdo
                    ->prepare("SELECT Campo, Valor, Descripcion FROM tbl_system_app");

                $stm4->execute(array());

                $RsArraySystem = $stm4->fetchAll(PDO::FETCH_OBJ);

                if($RsArraySystem) {
                    $RsArrayUserInformation['System'] = $RsArraySystem;
                }

                return $RsArrayUserInformation;

            }else{
                return $RsArrayUserInformation;
            }


        } catch (Exception $e)
        {
                print_r($e->getMessage()); exit;
            return $RsArrayUserInformation;
            die($e->getMessage());
        }

    }

}