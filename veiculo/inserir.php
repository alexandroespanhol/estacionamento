<?php
include "../includes/conexao.php";

$veiculo = $_POST['veiculo'];
$sql = "insert into veiculos(veiculo, ) values('$veiculo')";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php");
?>
