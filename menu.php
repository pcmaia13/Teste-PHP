<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>

<?php;

session_start();

$usuario = $_SESSION['usuario'];

if(isset($_SESSION['usuario'])) {
  header('Location: index.php');
}


$sql = "SELECT nivel_usuario FROM usuarios WHERE mail_usuario = '$usuario' and status= 'Ativo'";
$buscar = mysqli_query($conexao,$sql);
$array = mysqli_fetch_array($buscar);
$nivel = $array['nivel_usuario'];

?>
<div class="container" style="margin-top: 100px">

<div class="row">

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Produto</h5>
        <p class="card-text">Opção para aadicionar produtos em nosso estoque.</p>
        <a href="_adicionar_produto.php" class="btn btn-primary">Cadastrar Produto</a>
      </div>
    </div>
  </div>
  
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista de produtos</h5>
        <p class="card-text">Opção para adicionar em nosso estoque</p>
        <a href="listar_produtos.php" class="btn btn-primary">Listar Produto</a>
      </div>
    </div>
  </div>
</div>

<div class="col-sm-6" style="margin-top: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Aprovar Usuários</h5>
        <p class="card-text">Aprovar usuarios cadastrados</p>
        <a href="aprovar_usuario.php" class="btn btn-primary">Aprovar Usuários</a>
      </div>
    </div>

       <div style="text-align: right">
    <a href="index.php" role="button"type="submit" id="botao" class="btn btn/sm btn-primary">Voltar</a>
  </div>
  </div>



</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>