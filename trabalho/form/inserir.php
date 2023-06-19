<?php
require_once "../banco/conexao.php";

if(isset($_POST["nome_dono"]) && isset($_POST["nome_animal"]) && isset($_POST["raca"]) && isset($_POST["peso"]) && isset($_POST["idade"])){

$nome_dono = $_POST["nome_dono"];
$nome_animal = $_POST["nome_animal"];
$rasca = $_POST["raca"];
$peso = $_POST["peso"];
$idade = $_POST["idade"];

$sql = "INSERT INTO `animal` (`nome_dono`, `nome_animal`, `raca`, `peso`, `idade`) VALUES (?, ?, ?, ?, ?);";

echo $sql;

$comando = $conexao->prepare($sql);

$comando->bind_param("sssss", $nome_dono , $nome_animal , $raca, $peso, $idade); 

$comando->execute();

}
header('location: index.php');
?>