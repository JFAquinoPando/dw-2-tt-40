<?php

$texto = "Hola";
$valor = 123;
//define("PODER",1510);
$delGet = $_GET["id"];


function cambiarValor($texto, $valor){
    $texto = "chau";
    if (defined("PODER")) {
        return $texto."*".$valor."%".PODER."+".$_GET["id"];
    }
    return $texto."*".$valor;

}

echo cambiarValor($texto, 564);

echo "<hr>";
if (defined("PODER")) {
    # code...
    echo $texto."#".$valor."+".PODER;
}else{
    echo "No esta definida la constante PODER";
}