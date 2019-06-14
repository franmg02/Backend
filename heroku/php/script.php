<?php

$arreglo = $_POST["arreglo"];

$respuesta = trim(shell_exec("C:/\"Program Files (x86)\"/\"Microsoft Visual Studio\"/Shared/Python36_64/python NeuralNetwork.py ".($arreglo)." 2>&1;"));

echo '{ "salida": "'.$respuesta.'" }';

die();