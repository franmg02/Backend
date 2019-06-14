<?php

$arreglo = $_POST["arreglo"];

$respuesta = trim(shell_exec("python NeuralNetwork.py ".($arreglo)." 2>&1;"));

echo '{ "salida": "'.$respuesta.'" }';

die();