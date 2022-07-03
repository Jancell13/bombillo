<?php


    if (isset($_GET['cb1']) && isset($_GET['cb2'])) {
        $bombillo = "class='w' src='../img/bombilloOn.png'";
    } else if (isset($_GET['cb2']) && isset($_GET['cb3'])) {
        $bombillo = "class='w' src='../img/bombilloOn.png'";
    } else if (isset($_GET['cb1']) && isset($_GET['cb3'])) {
        $bombillo = "class='w' src='../img/bombilloOn.png'";
    } else {
        $bombillo = "src ='../img/bombilloOff.png'";
    }

    if (isset($_GET['cb1'])) {
        $c1 = 'checked';
    } else {
        $c1 = '';
    }
    if (isset($_GET['cb2'])) {
        $c2 = 'checked';
    } else {
        $c2 = '';
    }
    if (isset($_GET['cb3'])) {
        $c3 = 'checked';
    } else {
        $c3 = '';
    }
?>


<!DOCTYPE html>
<html lang="es-co">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Bombillo</title>
</head>
<body>
    <div class="a">
        <?php
                echo'
                <img '. $bombillo .' alt="bombillo Apagado" width="320px">
                <br>
                <br>
                <form action="../controlador/driver.php" method="post">

                <input type="checkbox" name="cb1" id="1"'. $c1 .'>
                <input type="checkbox" name="cb2" id="2"'. $c2 .'>
                <input type="checkbox" name="cb3" id="3"'. $c3 .'>
                
                <br>
                <br>
                <input class="btn" type="submit" name="btn" value="Encerder">
                
                </form>
                ';
            ?>
    </div>
</body>
</html>