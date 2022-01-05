<?php

include 'conexao.php';

$categoria = $_POST['categoria'];

$sql = "INSERT INTO categoria (categoria) values ('$categoria')";
$inserir = mysqli_query($conexao,$sql);

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> 
<div class="container" style="width: 400px">
	<center>
		<h3>Atualizado com sucesso</h3>
		<div style="margin-top: 10px">
		<a href="menu.php" class="btn btn-sm btn-primary">Voltar</a>

</div>
	</center>

</div>
