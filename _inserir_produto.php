<?php

include 'conexao.php';

$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];

$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `quantidade`, `fornecedor`) VALUES ($nroproduto,'$nomeproduto', $quantidade,'$fornecedor')";
$inserir = mysqli_query($conexao,$sql);

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> 
<div class="container" style="width: 500px; margin-top: 20px">
	<center>
		<h4>Produto Adicionado com sucesso</h4>
		
		<div style="padding-top: 20px">
<a href="menu.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo ítem</a>	
	</center>
</center>
</div>
</div>
