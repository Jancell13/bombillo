<?php

    if (isset($_POST['cb1'])) {
        $cb1 = $_POST['cb1'];
    } else {
        $cb1 = 'off';
    }
    if (isset($_POST['cb2'])) {
        $cb2 = $_POST['cb2'];
    } else {
        $cb2 = 'off';
    }
    if (isset($_POST['cb3'])) {
        $cb3 = $_POST['cb3'];
    } else {
        $cb3 = 'off';
    }
    if ($cb1 == "on" && $cb2 == "on" && $cb3 == "on") {
        header("Location:../vista/bombillo.php?cb1=".$cb1."&cb2=".$cb2."&cb3=".$cb3);
    } else if ($cb1 == "on" && $cb2 == "on") {
        header("Location:../vista/bombillo.php?cb1=".$cb1."&cb2=".$cb2);
    } else if ($cb1 == "on" && $cb3 == "on") {
        header("Location:../vista/bombillo.php?cb1=".$cb1."&cb3=".$cb3);
    } else if ($cb2 == "on" && $cb3 == "on") {
        header("Location:../vista/bombillo.php?cb2=".$cb2."&cb3=".$cb3);
    } else if ($cb1 == "on") {
        header("Location:../vista/bombillo.php?cb1=".$cb1);
    } else if ($cb2 == "on") {
        header("Location:../vista/bombillo.php?cb2=".$cb2);
    } else if ($cb3 == "on") {
        header("Location:../vista/bombillo.php?cb3=".$cb3);
    } else {
        header("Location:../vista/bombillo.php");
    }

?>