<?php
include "../includes/conexao.php";

$veiculo = $_POST['veiculo'];
$sql = "insert into veiculo(veiculo, ) values('$veiculo')";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php");
?>
