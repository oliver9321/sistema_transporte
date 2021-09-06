<?php

class Administracion
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

    public function GetTotalTurnosByUsersAndDepartaments($DepartamentID){

        $RsArray = array();
        //SELECT NombreUsuario as Usuario, count(*) Total FROM vw_administracion_turnos WHERE Estado = 'E' AND Estatus = 'F' AND DepartamentoID = ? group by Usuario
        $stm2 = $this->pdo->prepare("SELECT NombreUsuario as Usuario, count(*) Total FROM vw_administracion_turnos WHERE Estado = 'F' AND Estatus ='F' AND DepartamentoID = ? AND date(FechaHoraSeleccion) = date(NOW())  group by Usuario");
        $stm2->execute(array($DepartamentID));
        $RsArray["TurnosUsuarios"] = $stm2->fetchAll(PDO::FETCH_OBJ);

        $stm2 = $this->pdo->prepare("SELECT a.BotonTurno,  COUNT(a.BotonTurno) Cantidad FROM vw_administracion_turnos a WHERE a.DepartamentoID = ? AND date(a.FechaHoraSeleccion) = date(NOW())  group by a.BotonTurno");
        $stm2->execute(array($DepartamentID));
        $RsArray["CantidadPorTipoTurno"] = $stm2->fetchAll(PDO::FETCH_OBJ);

        $stm2 = $this->pdo->prepare(        "SELECT  X.Fecha, WEEKDAY(Fecha)+1 Dia,X.DIA_SEMANA, COUNT(X.Cantidad) Cantidad FROM (SELECT date(FechaHoraSeleccion) Fecha, (ELT(WEEKDAY(FechaHoraSeleccion) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS DIA_SEMANA, COUNT(Id) Cantidad FROM vw_administracion_turnos WHERE IsActive = 1 AND DepartamentoID = ? GROUP BY FechaHoraSeleccion, Id) X WHERE X.Fecha >= date(date_add(NOW(), INTERVAL -5 DAY)) AND DIA_SEMANA IN ('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes') GROUP BY Fecha,  X.DIA_SEMANA  ORDER BY WEEKDAY(Fecha)+1");
        $stm2->execute(array($DepartamentID));
        $RsArray["CantidadTurnosUltimosCincoDias"] = $stm2->fetchAll(PDO::FETCH_OBJ);


        $TotalTurnos =  $this->GetTotalTurnosByEstadoAndDepartamentID("null", $DepartamentID);
        foreach($TotalTurnos as $v){$TotalTurnos = $v->Total;}
        $RsArray["TotalTurnosDepartamento"] = $TotalTurnos;

        $TotalTurnosEspera =  $this->GetTotalTurnosByEstadoAndDepartamentID("E", $DepartamentID);
        foreach($TotalTurnosEspera as $v){$TotalTurnosEspera = $v->Total;}
        $RsArray["TotalTurnosEspera"] = $TotalTurnosEspera;

        $TotalTurnosEnPuesto =  $this->GetTotalTurnosByEstadoAndDepartamentID("P", $DepartamentID);
        foreach($TotalTurnosEnPuesto as $v){$TotalTurnosEnPuesto = $v->Total;}
        $RsArray["TotalTurnosEnPuesto"] = $TotalTurnosEnPuesto;

        $TotalTurnosFinalizados =  $this->GetTotalTurnosByEstadoAndDepartamentID("F", $DepartamentID);
        foreach($TotalTurnosFinalizados as $v){$TotalTurnosFinalizados = $v->Total;}
        $RsArray["TotalTurnosFinalizados"] = $TotalTurnosFinalizados;

        return $RsArray;

    }

    public function GetTotalTurnosByEstadoAndDepartamentID($Estado, $DepartamentID)
    {
        $Administracion = new Administracion();

        try
        {

            $RsArray =  $Administracion->ExecuteStoreProcedure($this->pdo, "SP_GetTotalTurnosByEstadoToday",
                array(
                    "Estado"               => $Estado,
                    "DepartamentID"        => $DepartamentID,
                    "Total"                => "?"
                ));

            return $RsArray;

        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function ActualizarEstadoTurnoModel($Estado, $TurnoID, $PuestoID){

        $Dashboard = new Dashboard();
        $UsuarioOnlineID = $_SESSION['UserOnline']->UsuarioID;
        $SucursalID = $_SESSION['UserOnline']->SucursalID;

        try
        {

            $RsArray =  $Dashboard->ExecuteStoreProcedure($this->pdo, "SP_ActualizarEstadoTurno",
                array(
                    "PuestoID"            => $PuestoID,
                    "TurnoID"             => $TurnoID,
                    "CreadoPorUsuarioID"  => $UsuarioOnlineID,
                    "Estado"              => $Estado,
                    "SucursalID"          => $SucursalID,
                    "Turno"               => "?"

                ));

            return $RsArray;

        } catch (Exception $e)
        {
            die($e->getMessage());
        }

    }

    public function GetListTurnosBySucursal(){

        try
        {

            $stm = $this->pdo->prepare("SELECT TurnoConcatenado, Estado,  FechaHoraSeleccion FROM vw_administracion_turnos WHERE Estado = 'E' AND SucursalID AND IsActive = 1");
            $stm->execute();

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

    function BackupTablaTurnos($host,$user,$pass,$name,$tables= '*')
    {


       /* $link = mysqli_connect($host,$user,$pass);
        mysqli_select_db($link , $name);
        $return="";

        //get all of the tables
        if($tables == '*')
        {
            $tables = array();
            $result = mysqli_query($link,'SHOW TABLES');
            while($row = mysqli_fetch_row($result))
            {
                $tables[] = $row[0];
            }
        }
        else
        {
            $tables = is_array($tables) ? $tables : explode(',',$tables);
        }

        //cycle through
        foreach($tables as $table)
        {
            $result = mysqli_query($link,'SELECT * FROM '.$table);
            $num_fields = mysqli_num_fields($result);

            $return.= 'DROP TABLE '.$table.';';
            $row2 = mysqli_fetch_row(mysqli_query($link,'SHOW CREATE TABLE '.$table));
            $return.= "\n\n".$row2[1].";\n\n";

            for ($i = 0; $i < $num_fields; $i++)
            {
                while($row = mysqli_fetch_row($result))
                {
                    $return.= 'INSERT INTO '.$table.' VALUES(';
                    for($j=0; $j < $num_fields; $j++)
                    {
                        $row[$j] = addslashes($row[$j]);
                        $row[$j] = preg_replace ("\n","\\n",$row[$j]);
                        if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
                        if ($j < ($num_fields-1)) { $return.= ','; }
                    }
                    $return.= ");\n";
                }
            }
            $return.="\n\n\n";
        }

        //save file
        $handle = fopen('db-backup-'.time().'-'.(md5(implode(',',$tables))).'.sql','w+');
        fwrite($handle,$return);
        fclose($handle);
       */
    }

    
    public function TruncateTableTurnos(){
         
         $Administracion = new Administracion();
         $UsuarioOnlineID = $_SESSION['UserOnline']->UsuarioID;
         $Administracion->ExecuteStoreProcedure($this->pdo, "SP_GuardarLogAdministracionTurnos", array("ModoLog"=> 'COMPLETO', "UsuarioLogID" => $UsuarioOnlineID));

        return $Administracion;

    }

    public function FinalizarTurnos(){

         $Administracion = new Administracion();
         $UsuarioOnlineID = $_SESSION['UserOnline']->UsuarioID;

        try
        {
            $RsArray =  $Administracion->ExecuteStoreProcedure($this->pdo, "SP_FinalizarTurnos", array("Finalizar"=> 'true',));
            $Administracion->ExecuteStoreProcedure($this->pdo, "SP_GuardarLogAdministracionTurnos", array("ModoLog"=> 'PARCIAL', "UsuarioLogID" => $UsuarioOnlineID));

            return $RsArray;

        } catch (Exception $e)
        {
            die($e->getMessage());
        }

    }

}