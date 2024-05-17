<?php

function randomAleatorio($longitud = 12) {

    $caracteresValidos = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIUEWNDJUAS";
    $codigoRnd = "";

    for($i = 0; $i< $longitud; $i++){

      $codigoRnd .= $caracteresValidos[rand(0, strlen($caracteresValidos) -1)];
    }  

  return $codigoRnd;
}

$codigoAleatorio = randomAleatorio();
echo "El codigo random es de: " . $codigoAleatorio;
?>
