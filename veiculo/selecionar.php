<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php"
?>


<h1>estacionamento-veiculo</h1>
<img src="../img/download.png" width="80">
</h1>
<p>
    <a href="novo.php">Adicionar veiculo</a>
</p>
<h2> Listagem de veiculo</h2>
<table border="1">
    <tr>
        <td>Código</td>
        <td>veiculo</td>
    
        <td>Ações</td>
</tr>
<?php
$sql = "select * from veiculo";
$todos_os_veiculo = mysqli_query($conexao, $sql);
while($um_veiculo = mysqli_fetch_assoc($todos_os_veiculo)):
    ?>
    <tr>
        <td><?php echo $um_veiculo['Id_veiculo'];?></td>
    
    
        <td>
            <a href="Visualizar.php?id=<?php echo $um_veiculo['Id_veiculo'];?>"> 
            "title="Ver completo">Visualizar</a>
            <a href="editar.php?id=<?php echo $um_veiculo['Id_viculo'];?>">
                Editar
            </a>
            <a href="deletar.php?id=<?php echo $um_veiculo['Id_veiculo'];?>">
            Excluir</a>
</td>
</tr>
        <?php
        endwhile;
        ?>

</table>


<?php
include "../includes/rodape.php";