<?php

include 'conexao.php';

$id = $_POST['id'];
//$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];


$sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`='$quantidade',`fornecedor`='$fornecedor' WHERE id_estoque = $id";

$atualizar = mysqli_query($conexao,$sql);

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> 
<div class="container" style="width: 400px">
	<center>
		<h3>Atualizado com sucesso</h3>
		<div style="margin-top: 10px">
		<a href="listar_produtos.php" class="btn btn-sm btn-primary">Voltar</a>

</div>
	</center>

</div>