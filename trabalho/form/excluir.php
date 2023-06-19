<?php
require_once "../banco/conexao.php";

$idanimal = $_GET["id"];

$sql = "DELETE FROM `animal` WHERE  `idanimal`= ?;"; 

echo $sql;

$comando = $conexao->prepare($sql);

$comando->bind_param("i", $idanimal); 

$comando->execute();

header('location: index.php');