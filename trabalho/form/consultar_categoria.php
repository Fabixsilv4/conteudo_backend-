<?php
require_once "../banco/conexao.php";


$sql = "SELECT distinct raca FROM animal"; 

$comando = $conexao->prepare($sql);

$comando->execute();

$resultado = $comando->get_result();

$formacoes = [];
while ($animal = $resultado->fetch_object()){
    $raca [] = $animal; }