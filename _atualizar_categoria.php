<?php

include 'conexao.php';

$id = $_POST['id'];
$nomecategoria = $_POST['nomecategoria'];


$sql = "UPDATE categoria SET nome_categoria ='$nomecategoria' WHERE id_categoria = $id";

$atualizar = mysqli_query($conexao,$sql);

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> 
<div class="container" style="width: 400px">
	<center>
		<h3>Atualizado com sucesso</h3>
		<div style="margin-top: 10px">
		<a href="listar_categoria.php" class="btn btn-sm btn-primary">Voltar</a>

</div>
	</center>

</div>