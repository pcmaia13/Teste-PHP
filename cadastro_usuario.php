<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>

  <div class="container" style="width: 400px; margin-top: 200px">
    <div style="text-align: right">
      <a href="menu.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
    </div>
    <h4>Cadastro Usuário</h4>
  <form action="insert_usuario.php" method="post">
    <div class="form-group">
      <label>Nome do Usuário</label>
      <input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder="Nome completo">
    </div>
     <div class="form-group">
      <label>E-mail</label>
      <input type="email" name="mailusuario" class="form-control" required autocomplete="off" placeholder="Seu E-mail">
    </div>
     <div class="form-group">
      <label>Senha do Usuário</label>
      <input id="txtSenha" type="password" name="senhadousuario" class="form-control" required autocomplete="off" placeholder="Senha">
    </div>
     <div class="form-group">
      <label>Repetir Senha</label>
      <input type="password" name="senhadousuario2" class="form-control" required autocomplete="off" placeholder="Repetir Senha" oninput="validaSenha(this)">
      <small>Precisa ser igual a senha digitada acima</small>
    </div>
    <div class="form-group">
      <label>Nível de Acesso</label>
      <select name="nivelusuario" class="form-control">
        <option value="1">Administrador</option>
        <option value="2">Funcionario</option>
        <option value="3">Conferente</option>
       
      

          </option>
        </optgroup>
      </select>
   <div style="text-align: right">
      <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

<script>
function validaSenha (input){ 
  if (input.value != document.getElementById('txtSenha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
} 
</script>
 
</body>
</html>