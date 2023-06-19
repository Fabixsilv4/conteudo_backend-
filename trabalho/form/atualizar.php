<?php

require_once "../banco/conexao.php";

$idanimal = $_POST["idanimal"];
$nome_dono = $_POST["nome_dono"];
$nome_animal = $_POST["nome_animal"];
$raca = $_POST["raca"];
$peso = $_POST["peso"];
$idade = $_POST["idade"];

$sql = "UPDATE `animal` SET `nome_dono`=?, `nome_animal`=?, `raca`=?, `peso`=?, `idade`=? WHERE  `idanimal`=?;";

echo $sql;

$comando = $conexao->prepare($sql);

$comando->bind_param("sssiii", $nome_dono , $nome_animal , $raca , $peso , $idade , $idanimal); 

$comando->execute();

header('location: index.php');