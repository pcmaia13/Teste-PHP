<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<style type="text/css">


#botao {
  background-color: #FF1168
  color: #ffffff
}


</style>


</head>
<body>


<div class="container" style="margin-top: 40px;width: 500px">
	<h4>Cadastro de Categoria</h4>
	<form action="_inserir_categoria.php" method="post">
		<label>Categoria</label>
	 	<div class="form-group">
	 		<input type="text" name="categoria" class="form-control" placeholder="Digite o nome da Categoria" autocomplete="off">
		</div>
		<button type="submit" id="botao" class="btn btn-primary btn-sm">Cadastrar</button>
		<a href="index.php" role="button"type="submit" id="botao" class="btn btn-sm btn-primary">Voltar</a>
	 </form>
	</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</head>

