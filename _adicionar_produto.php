<!DOCTYPE html>
<html>
<head>
  
    <meta charset="utf-8">
    <title>Crud Basico</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> 

<style type="text/css">

#tamanhoContainer {
  width: 500px;
}

#botao {
  background-color: #8DCDB4
  color: #ffffff
}

</style>

</head>
<body>

<div class="container" id="tamanhoContainer" style="margin-top: 250px">
<h4>Formulario de Cadastro</h4>
<form action="_inserir_produto.php" method="post" style="margin-top: 20px">
  
<form>
    <div class="form-group">
    <label>Nro Produto</label>
    <input type="text" class="form-control" name="nroproduto" placeholder="insira sua senha" required>
    <div>
  </div> 

   <form>
    <div class="form-group">
    <label>Nome Produto</label>
    <input type="text" class="form-control" name="nomeproduto" placeholder="insira o nome do produto">
    <div>
  </div> 


    <form>
    <div class="form-group">
    <label >Categoria</label>
    <select class="form-control" name="nome_categoria">
      
      <?php

      include 'conexao.php';
      $sql = "SELECT * FROM categoria order by nome_categoria ASC";
      $buscar = mysqli_query($conexao,$sql);

      while ($array = mysqli_fetch_array($buscar)) {

        echo $id_categoria = $array['id_categoria'];
        echo $nome_categoria = $array['nome_categoria'];
       
      ?>

      <option><?php echo $nome_categoria ?></option>


      <?php } ?>
  
    
    </select>

    <div>
  
   <form>
    <div class="form-group">
    <label>Quantidade</label>
    <input type="number" class="form-control" name="quantidade" placeholder="insira o nome do produto">
    <div>
  </div> 

  </div> 

    


    <div class="form-group">
    <label >Fornecedor</label>
    <select class="form-control"  name="fornecedor">
      <?php
      include 'conexao.php';
      $sql2 = "SELECT * FROM fornecedor";
      $buscar2 = mysqli_query($conexao, $sql2);

      while ($array2 = mysqli_fetch_array($buscar2)) {
            $id_fornecedor = $array2['id_forn'];
            $nome_fornecedor = $array2['nome_forn'];

        ?>
    

      <option><?php echo $nome_fornecedor ?></option>
        
        <?php } ?>
      

      </select>

        
        
  <div style="text-align: right;">
    <a href="menu.php" role="button"type="submit" id="botao" class="btn btn-sm btn-primary">Voltar</a>
  <button type="submit" id="botao" class="btn btn-sm btn-primary">Cadastrar</button>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
</div>