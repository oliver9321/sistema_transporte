<?php

class Dashboard
{
    private $pdo;

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

   
    public function GenerarLlamadaTurnoModel()
    {
        $Dashboard = new Dashboard();

        $UsuarioID = $_SESSION['UserOnline']->UsuarioID;
        $PuestoID = $_SESSION['UserOnline']->PuestoId;
        $SucursalID = $_SESSION['UserOnline']->SucursalID;
        $DepartamentoID = $_SESSION['UserOnline']->DepartamentoID;

        try
        {

            $RsArray =  $Dashboard->ExecuteStoreProcedure($this->pdo, "SP_GenerarLlamadaTurno",
                array(
                    "InPuestoID"               => $PuestoID,
                    "InCreadoPorUsuarioID"     => $UsuarioID,
                    "InSucursalID"             => $SucursalID,
                    "InDepartamentoID"         => $DepartamentoID,
                    "Turno"                  => "?",
                    "TurnoID"                => "?"
                ));

            if($RsArray[0]->Turno != '0'){
                $Dashboard->GuardarLogFlujoTurnos ($RsArray[0]->TurnoID, "LLAMADA TURNO", $RsArray[0]->Turno, $PuestoID, $DepartamentoID, $SucursalID, $UsuarioID);
            }

            return $RsArray;

        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    // OLIVER - VER
    public function GetLastTurnByPuestoModel($PuestoID){

        $stm2 = $this->pdo
            ->prepare("SELECT Id as TurnoID, TurnoConcatenado as Turno,  Estado, Estatus FROM vw_administracion_turnos WHERE Estado IN ('L','P') AND PuestoID = ? AND  DATE(DateCreation) = DATE(NOW()) LIMIT 1");

        $stm2->execute(array(
            $PuestoID
        ));

        $RsLastTurnoPuesto['data'] = $stm2->fetchAll(PDO::FETCH_OBJ);

        return $RsLastTurnoPuesto;

    }

    // LISTADO DE LAS PRIORIDADES POR PUESTO
    public function GetListPrioridadesBypuesto($PuestoID){

        $stm2 = $this->pdo
            ->prepare("SELECT DISTINCT Nivel, Prioridad, Nombre FROM vw_puestos_prioridades WHERE IsActive = 1 AND PuestoID = ? ORDER BY Nivel");

        $stm2->execute(array(
            $PuestoID
        ));

        return  $stm2->fetchAll(PDO::FETCH_OBJ);

    }

    //Intercambia las prioridades con otro puesto
    public function IntercambiarPrioridadesPuesto($NuevoPuestoIntercambiarID, $PuestoIDActual){

        $Dashboard = new Dashboard();
        $SystemLog = new System();
        $UsuarioID = $_SESSION['UserOnline']->UsuarioID;

        try
        {
            $RsArray =  $Dashboard->ExecuteStoreProcedure($this->pdo, "SP_IntercambiarPrioridadesPuestos",
                array(
                    "InNuevoPuestoIntercambiarID"     => $NuevoPuestoIntercambiarID,
                    "InPuestoIDActual"                => $PuestoIDActual,
                    "InUsuarioID"                     => $UsuarioID
                ));

            $SystemLog->SaveLogSystem("CAMBIO PRIORIDADES ENTRE PUESTOS", "PUESTO #1: ".$PuestoIDActual." | PUESTO #2: ".$NuevoPuestoIntercambiarID, $PuestoIDActual, $UsuarioID);

            return $RsArray;

        } catch (Exception $e)
        {
            die($e->getMessage());
        }


    }

    //Diferntes estados en los que puede estar un turno
    public function ActualizarEstadoTurnoModel($Estado, $TurnoID, $PuestoID, $Comentario, $PuestoCodigo, $Turno){

        $Dashboard      = new Dashboard();
        $UsuarioID      = $_SESSION['UserOnline']->UsuarioID;
        $SucursalID     = $_SESSION['UserOnline']->SucursalID;
        $DepartamentoID = $_SESSION['UserOnline']->DepartamentoID;

        try
        {

            $RsArray =  $Dashboard->ExecuteStoreProcedure($this->pdo, "SP_ActualizarEstadoTurno",
                array(
                    "PuestoID"            => $PuestoID,
                    "PuestoCodigo"        => $PuestoCodigo,
                    "TurnoID"             => $TurnoID,
                    "CreadoPorUsuarioID"  => $UsuarioID,
                    "Estado"              => $Estado,
                    "SucursalID"          => $SucursalID,
                    "Comentario"          => $Comentario,
                    "CantReLlamadas"      => "?",
                    "Turno"               => $Turno

                ));

            $Dashboard->GuardarLogFlujoTurnos ($TurnoID, "ACTUALIZAR ESTADO TURNO", $Estado, $PuestoID, $DepartamentoID, $SucursalID, $UsuarioID);


            return $RsArray;

        } catch (Exception $e)
        {
            die($e->getMessage());
        }

    }

    //Obtiene el listado de turnos en espera por cada puesto
    public function GetListTurnosBySucursal(){ //OLIVER - VER

        try
        {
            $SucursalID = $_SESSION['UserOnline']->SucursalID;
            $DepartamentoID = $_SESSION['UserOnline']->DepartamentoID;
            $PuestoID = $_SESSION['UserOnline']->PuestoId;
            $Puesto = $_SESSION['UserOnline']->PuestoCodigo;

            $stm = $this->pdo->prepare("CALL SP_GetListTurnosEsperaByPuesto(?, ?, ?, ?);");
            $stm->execute(array($SucursalID, $PuestoID, $Puesto, $DepartamentoID));

            $row = $stm->fetchAll();

            $response = array();
            $response['success'] = true;
            $response['aaData'] = $row;
            return $response;

        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }

    }

    //Litado de turnos anulados
    public function GetListTurnosAnulados(){

        try
        {
            $SucursalID = $_SESSION['UserOnline']->SucursalID;
            $DepartamentoID = $_SESSION['UserOnline']->DepartamentoID;
            $PuestoID = $_SESSION['UserOnline']->PuestoId;

            $stm = $this->pdo->prepare("SELECT Id, TurnoConcatenado, Estado, Estatus, Comentario, Puesto, FechaHoraAnulacion  FROM vw_administracion_turnos  WHERE Estado = 'A'  AND IsActive = 1  AND Dia = DAY(NOW())  AND Mes = MONTH(NOW())  AND Ano = YEAR(NOW())  AND SucursalID = ?  AND DepartamentoID = ?  AND PuestoID = ? ");
            $stm->execute(array($SucursalID, $DepartamentoID, $PuestoID));

            $row = $stm->fetchAll();

            $response = array();
            $response['success'] = true;
            $response['aaData'] = $row;
            return $response;

        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }

    }

    //Activar o Desactivar las llamadas por orden de llegada o por prioridad del puesto
    public function CambiarModoLlamadaPuesto($Opcion, $PuestoID, $Departamento){

        $Dashboard = new Dashboard();
        $SystemLog = new System();
        $UsuarioID = $_SESSION['UserOnline']->UsuarioID;

        try
        {
            $RsArray =  $Dashboard->ExecuteStoreProcedure($this->pdo, "SP_CambiarModoLlamadaPuesto",
                array(
                    "InPuestoID"      => $PuestoID,
                    "Opcion"          => $Opcion,
                    "InDepartamento"  => $Departamento,

                ));

            $SystemLog->SaveLogSystem("CAMBIO MODO LLAMADA", $Opcion, null, $UsuarioID);

            return $RsArray;

        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    //Colocar un playList o un video de youtube en la TV
    public function ActualizarPlayListYoutube($PlayListYoutube, $Opcion){

        $SystemLog = new System();
        $UsuarioID = $_SESSION['UserOnline']->UsuarioID;

        $stm = $this->pdo->prepare("UPDATE tbl_system_app SET Valor = ? , Descripcion = ?, LastModificationDate = NOW(), ModificadoPorUsuarioID = ? WHERE Campo = 'PlayListYoutube' ");
        $stm->execute(array($PlayListYoutube, $Opcion, $UsuarioID));
        $SystemLog->SaveLogSystem("ACTUALIZAR PLAYLIST", $PlayListYoutube, null, $UsuarioID);

        return $stm;

    }


    public function ActivarModoDesarrollador($Opcion){

        $SystemLog = new System();
        $UsuarioID = $_SESSION['UserOnline']->UsuarioID;

        $stm = $this->pdo->prepare("UPDATE tbl_system_app SET Valor = ? , LastModificationDate = NOW(), ModificadoPorUsuarioID = ? WHERE Campo = 'Debug' ");
        $stm->execute(array($Opcion, $UsuarioID));
        $SystemLog->SaveLogSystem("CAMBIO MODO DEVELOPER", $Opcion, null, $UsuarioID);

        return $stm;

    }

    //Transfiere un turno de un puesto a otro
    public function TransferirTurnoPuesto($PuestoIDTransferir, $ComentarioTransferir, $TurnoID){

        $Dashboard = new Dashboard();
        $UsuarioID      = $_SESSION['UserOnline']->UsuarioID;
        $PuestoID       = $_SESSION['UserOnline']->PuestoId;
        $DepartamentoID = $_SESSION['UserOnline']->DepartamentoID;
        $SucursalID     = $_SESSION['UserOnline']->SucursalID;

        try
        {
            $RsArray =  $Dashboard->ExecuteStoreProcedure($this->pdo, "SP_TransferirTurnoAPuesto",
                array(
                    "InTurnoID"     => $TurnoID,
                    "NuevoPuestoID"   => $PuestoIDTransferir,
                    "InComentario" => $ComentarioTransferir,
                    "ModificadoPorUsuarioID" => $UsuarioID
                ));

            $Dashboard->GuardarLogFlujoTurnos ($TurnoID, "TRANSFERIR TURNO", "PUESTO: ".$PuestoID." AL PUESTO: ".$PuestoIDTransferir,$PuestoID, $DepartamentoID, $SucursalID, $UsuarioID);

            return $RsArray;

        } catch (Exception $e)
        {
            die($e->getMessage());
        }

        return $stm;

    }

    //Reactiva un turno que ya habia sido anulado
    public function ActivarTurnoAnulado($TurnoID)
    {

    $Dashboard      = new Dashboard();
    $UsuarioID      = $_SESSION['UserOnline']->UsuarioID;
    $PuestoID       = $_SESSION['UserOnline']->PuestoId;
    $DepartamentoID = $_SESSION['UserOnline']->DepartamentoID;
    $SucursalID     = $_SESSION['UserOnline']->SucursalID;

        try
        {
            $RsArray =  $Dashboard->ExecuteStoreProcedure($this->pdo, "SP_ReactivarTurnoAnulado",
                array(
                    "InTurnoID"     => $TurnoID,
                    "InUsuarioID"   => $UsuarioID
                ));

            $Dashboard->GuardarLogFlujoTurnos ($TurnoID, "REACTIVAR TURNO",null, $PuestoID, $DepartamentoID, $SucursalID, $UsuarioID);

            return $RsArray;

        } catch (Exception $e)
        {
            die($e->getMessage());
        }

    }

    //Almacena todas las funcionaliades relacionadas a los turnos
    public function GuardarLogFlujoTurnos ($TurnoID, $Accion, $Descripcion = null, $PuestoID, $DepartamentoID = null, $SucursalID = null, $UsuarioID)
    {

        try
        {
            $sql = "INSERT INTO tbl_log_flujo_turnos (TurnoID,Accion, Descripcion,PuestoID,DepartamentoID, SucursalID, UsuarioID,FechaLog) VALUES (?,?,?,?,?,?,?,?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $TurnoID,
                        $Accion,
                        $Descripcion,
                        $PuestoID,
                        $DepartamentoID,
                        $SucursalID,
                        $UsuarioID,
                        date('Y-m-d')
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    function ExecuteStoreProcedure($po_db, $pv_proc, $pt_args )
    {
        if (empty($pv_proc) || empty($pt_args))
        {
            return false;
        }
        $lv_call   = "CALL `$pv_proc`(";
        $lv_select = "SELECT";
        $lv_log = "";
        foreach($pt_args as $lv_key=>$lv_value)
        {
            $lv_query = "SET @_$lv_key = '$lv_value'";
            $lv_log .= $lv_query.";\n";
            if (!$lv_result = $po_db->query($lv_query))
            {
                /* Write log */
                return false;
            }
            $lv_call   .= " @_$lv_key,";
            $lv_select .= " @_$lv_key AS $lv_key,";
        }

        $lv_call   = substr($lv_call, 0, -1).")";
        $lv_select = substr($lv_select, 0, -1);
        $lv_log .= $lv_call;



        if ($lv_result = $po_db->query($lv_call))
        {
            if($lo_result = $po_db->query($lv_select))
            {
                $lt_result = $lo_result->fetchAll(PDO::FETCH_OBJ);

                return $lt_result;
            }


            return false;
        }

        return false;
    }

}