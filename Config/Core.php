<?php

//CONFIGURACIONES DE LA APLICACION

define ("NOMBRE_APLICATION", "Ez autotransportation");
define ("SYSTEM_NAME", "Ez Auto Transportation");
define ("VERSION", "v2.1");
define ("DEBUG", true);
define("COLOR","text-warning");
define ("MODE", "Test mode");
define("USUARIO_DB", "delimar1_logisti");
define("PASSWORD_DB", "logistics_transport123");
//define("SERVIDOR", "127.0.0.1"); //local
define("SERVIDOR", "162.241.216.248"); //Produccion
define("DATABASE", "delimar1_bd_logistics_transport");
define("KEY", "KeyItick4597136940Turnos");


global $PathString;

$Chars = count_chars($_SERVER['PHP_SELF']); 

foreach ($Chars as $Char=>$nChars){ 
  //var_dump($nChars);
   if ($Char==47) {$n=$nChars;break;} 
} 

if ($n==0) $PathString=""; else $PathString=str_pad("",($n-2)*3,"../");


function GetRouteView($Controller = null, $View = null){

    if (file_exists('View/'.$Controller.'/'.$View.'.php')) {

        require_once('View/'.$Controller.'/'.$View.'.php');

    }else{
        echo "No se ha encontrado la ruta parametrizada: View/".$Controller."/".$View.".php<br>";
    }
}



