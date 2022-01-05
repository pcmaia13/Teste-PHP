<?php

include 'conexao.php';

$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO fornecedor (nome_forn) values ('$fornecedor')";
$inserir = mysqli_query($conexao,$sql);


?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<div class="container" style="width: 400px">
	<center>
	<h3>Adicionado com sucesso</h3>
	<div style="margin-top: 10px">
		<a href="adicionar_fonecedor.php" class="btn btn-sm btn-primary">Voltar</a>
	</div>
   </center>


</div>