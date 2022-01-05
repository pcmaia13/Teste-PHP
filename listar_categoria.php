<!DOCTYPE html>
<html>
<head>
	<title>Listagem de produtos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>

<div class="container" style="margin-top: 40px; width: 500px">
<h3>Lista de Produtos</h3>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome Categoria</th>
      <th scope="col"> Ação</th>
   </tr>
  </thead>
  
       <?php
       include 'conexao.php';
       $sql = "SELECT * FROM `categoria`";
       $busca = mysqli_query($conexao,$sql);
       
       while ($array = mysqli_fetch_array($busca)) {
         
          $id_categoria = $array['id_categoria'];
          $nomecategoria = $array['nome_categoria'];
        
       ?>

       <tr>

		    <td><?php echo $nomecategoria ?></td>
		  
		    <td><a class="btn btn-primary btn-sm" href="editar_categoria.php?id=<?php echo $id_categoria ?>" role="button">Editar</a>
          
          <a class="btn btn-danger btn-sm" href="deletar_categoria.php?id=<?php echo $id_categoria ?>" role="button">Excluir</a></td>

       </tr>

    <?php } ?>
   
    </tr>
    
   <div style="text-align: right">
    <a href="index.php" role="button"type="submit" id="botao" class="btn btn/sm btn-primary">Voltar</a>
  </div>

</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>