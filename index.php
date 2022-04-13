<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="main.css">
</head>

<body class="cuerpo">

    <header center="center">
        <h1 class="titulo">Calculadora</h1>
    </header>

    <form>
        <input class="cuadros" text="Calculadora" name="calculadora" id="num1">
        <input class="cuadros" text="Calculadora" name="calculadora" id="num2">
        
        <button class="boton" type="submit" id="button">Calcular</button>

        <div class="contenedor_panel">
            <select name="lista" id="calcular">
                <option>Sumar</option>
                <option>Restar</option>
                <option>Multiplicar</option>
                <option>Dividir</option>
                <option>Resto de division</option>
            </select>
        </div>

        <div class="resultado" action="calculadora.php">

            <?php

                include("calculadora.php");


            
            ?>

        </div>

    </form>



</body>
</html>