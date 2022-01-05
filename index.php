<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<title>Tela de Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style type="text/css">
    #tamanho {
       width: 500px;
    }	
     



    </style>


</head>
<body>

<div class="container" id="tamanho" style="margin-top: 300px;border-radius: 15px; border: 2px solid #f3f3f3">
	<div style="padding: 10px">
	<center>
	<img src="imagem/cadeado.png" width="125px" height="125">
	</center>
	<form action="index1.php" method="post">
		<div class="form-group">
			<label>Usuário</label>
			<input type="text" name="usuario" class="form-control" placeholder="Usuario" autocomplete="off" required>
		</div>
		<div class="form-group">
			<label>Senha</label>
			<input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required>
		</div>
	
	<div style="text-align: right">
		<button type="submit" class="btn btn-sm btn-primary">Entrar</button>
		</div>
	</form>
	</div>
</div>


<div style="margin-top: 10px">
<center>
	
	<small>Você não possui cadastro? Clique <a href="cadastro_usuario_externo.php"> aqui</a></small>
	
</center>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>