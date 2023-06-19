<?php
require_once "../banco/conexao.php";


$sql = "SELECT * FROM animal"; 

$comando = $conexao->prepare($sql);

$comando->execute();

$resultado = $comando->get_result();

$animais = [];
while ($animal = $resultado->fetch_object()){
    $animais[] = $animal; }