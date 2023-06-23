<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";

$id = $_GET["id"];
$veiculo = "";

 $sql = "select * estacionamento where Id_estacionamento = $id";
 $um_veiculo = mysqli_query($conexao, $sql);
 while($ = mysqli_fetch_assoc($veiculo)):
    $um_veiculo = $["Nome"];

endwhile;  
?>

 <h1>Ficha do veiculo</h1>
 <form method="post" action="atualizar.php?id=>">
    Nome: <input name="nome" value="<?php echo $nome;?>"><br>

    <button type="submit">Atualizar</button>
</form>