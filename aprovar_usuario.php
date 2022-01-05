<!DOCTYPE html>
<html>
<head>
	<title>Aprovar Usuario</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>

<div class="container" style="margin-top: 40px">
<h3>Aprovar Usuários</h3>
<br>
<table class="table">
  <thead>
    <tr>
   <th scope="col">Nome</th>
   <th scope="col">E-mail</th>
  <th scope="col">Nível</th>
   <th scope="col"> Ação</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
       <?php
       include 'conexao.php';
       $sql = "SELECT * FROM usuarios WHERE status = 'Inativo'";
       $busca = mysqli_query($conexao,$sql);
       
       while ($array = mysqli_fetch_array($busca)) {
         
          $id_usuario = $array['id_usuario'];
          $nomeusuario = $array['nome_usuario'];
          $mail = $array['mail_usuario'];
          $nivel = $array['nivel_usuario'];


       ?>

       <td><?php echo $nomeusuario ?></td>
       <td><?php echo $mail ?></td>
       <td><?php echo $nivel ?></td>



       </td>

    
		    <td>

          <a class="btn btn-primary btn-sm" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=1"role="button"></i>&nbsp;Administrador</a>
          <a class="btn btn-primary btn-sm" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=2" role="button">Funcionario</a>
          <a class="btn btn-primary btn-sm" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=3" role="button">Conferente</a>
         
          <a class="btn btn-danger btn-sm" href="deletar_produto.php?id=<?php echo $id_usuario ?>" role="button">Excluir</a></td>

       </tr>

<?php } ?>
    <td></td>
    </tr>
    
   <div style="text-align: right">
    <a href="menu.php" role="button"type="submit" id="botao" class="btn btn/sm btn-primary">Voltar</a>
  </div>

</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>