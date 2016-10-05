<?php
session_start();
//Configurações do sistema
require './_base/Config.dr.php';



$obj = new Bola;
$obj->setCor("Azul");
echo "A cor é: ". $obj->getCor();