<!DOCTYPE html>
<html>
<head>
	<title>Listagem de produtos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>

<div class="container" style="margin-top: 40px">
<h3>Lista de Produtos</h3>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nro produto</th>
      <th scope="col">Nome Produto</th>
      <th scope="col">Categoria</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Fornecedor</th>
      <th scope="col"> Ação</th>
    </tr>
  </thead>
  <tbody>
    <tr>
       <?php
       include 'conexao.php';
       $sql = "SELECT * FROM `estoque`";
       $busca = mysqli_query($conexao,$sql);
       
       while ($array = mysqli_fetch_array($busca)) {
         
          $id_estoque = $array['id_estoque'];
          $nroproduto = $array['nroproduto'];
          $nomeproduto = $array['nomeproduto'];
          $categoria = $array['categoria'];
          $quantidade = $array['quantidade'];
          $fornecedor = $array['fornecedor'];
       
       ?>

       <td></td>

    </tr>
		    <td><?php echo $nroproduto ?></td>
		    <td><?php echo $nomeproduto ?></td>
		    <td><?php echo $categoria ?></td>
		    <td><?php echo $quantidade ?></td>
		    <td><?php echo $fornecedor ?></td>
		    <td><a class="btn btn-primary btn-sm" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button">Editar</a>
          <a class="btn btn-danger btn-sm" href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button">Excluir</a></td>

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