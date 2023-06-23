<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
?>
<h1>Nova veiculo</h1>
<p>Vamos cadastrar um veiculo novo no sistema.</p>
<form action="inserir.php" method="post">
    veiculo: <input name="nome" required maxlength="50">
    <br>
    <button type="submit">Salvar</button>
</form>
<?php
include "../includes/rodape.php";
?>