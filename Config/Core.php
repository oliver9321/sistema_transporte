<?php

//CONFIGURACIONES DE LA APLICACION

define ("NOMBRE_APLICATION", "Itick");
define ("VERSION", "-v1");
define ("DEBUG", true);
define("USUARIO_DB", "oliver9321");
define("PASSWORD_DB", "Revilo9321");
define("SERVIDOR", "127.0.0.1"); //local
define("DATABASE", "itick_patria_rivas");
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



