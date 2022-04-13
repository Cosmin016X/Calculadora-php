<?php

if (isset($_POST ['button'])){

    $num1 = ($_POST['num1']);
    $num2 = ($_POST['num2']);
    $calcular = ($_POST['calcular']);

    calcular($resultado);

}

function calcular($calcular){

    if(!strcmp("Sumar", $calcular)){

        global $num1;
        global $num2;

        $resultado = $num1+$num2;

        echo "<p class='resultado'> El resultado es: $resultado</p>";

    }



}






?>