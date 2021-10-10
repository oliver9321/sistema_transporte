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


    //Reactiva un turno que ya habia sido anulado
  /*  public function ActivarTurnoAnulado($TurnoID)
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

    }*/

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