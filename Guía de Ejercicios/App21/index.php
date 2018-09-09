<?php

    include_once "classAuto.php";

    $autoRed = new Auto("FIAT", "Red");
    $autoBlue = new Auto("FIAT", "Blue");

    $autoCaro = new Auto("Ford", "Green", 18000000);
    $autoVarato = new Auto("Ford", "Green", 180000);

    $autoAllParameter = new Auto("Renault", "Purple", 200000, date_create("2000-06-10"));

    $suma = Auto::Add($autoRed, $autoBlue);

    echo Auto::mostrarAuto($autoAllParameter);
?>