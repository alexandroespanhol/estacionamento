<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
$id = $_GET["id"];

$veiculo = "";

$sql = "select * from veiculos where Id_veiculo = $id";
$todos_os_veiculo = mysqli_query($conexao, $sql);
while($um_veiculo = mysqli_fetch_assoc($todos_os_veiculo)):
    $veiculo = $um_veiculo["veiculo"];
endwhile;  
?>

<h1>Ficha do veiculo</h1>
veiculo: <?php echo $veiculo . "" ?> <br>
</form>
<?php
mysqli_close($conexao);
include "../includes/rodape.php";