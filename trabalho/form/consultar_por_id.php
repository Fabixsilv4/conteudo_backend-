<?php
require_once "../banco/conexao.php";

if(isset($_GET["id"])){

$idanimal = $_GET["id"];

$sql = "SELECT * FROM `animal` WHERE  `idanimal`= ?;"; 

$comando = $conexao->prepare($sql);

$comando->bind_param("i", $idanimal); 

$comando->execute();

$resultado = $comando->get_result();

$animal = $resultado->fetch_object();

}