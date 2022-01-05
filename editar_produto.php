<?php

include'conexao.php';

$id = $_GET['id'];

?>
<!DOCTYPE html>
<html>
<head>
  <body>  
    <meta charset="utf-8">
    <title>Formulario de cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> 

<style type="text/css">

#tamanhoContainer {
  width: 500px;
}

#botao {
  background-color: #8DCDB4;
  color: #ffffff;
}

</style>

</head>
<body>

<div class="container" id="tamanhoContainer" style="margin-top: 250px">
<h4>Formulario de Cadastro</h4>
<form action="_atualizar_produto.php" method="post" style="margin-top: 20px">
 
 <?php 

$sql= "SELECT * FROM  estoque WHERE id_estoque = $id";
$buscar = mysqli_query($conexao,$sql);
while ($array = mysqli_fetch_array($buscar)) {


          $id_estoque = $array['id_estoque'];
          $nroproduto = $array['nroproduto'];
          $nomeproduto = $array['nomeproduto'];
          $categoria = $array['categoria'];
          $quantidade = $array['quantidade'];
          $fornecedor = $array['fornecedor'];
      

?>
    <div class="form-group">
    <label>Nro Produto</label>
    <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disable>
    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">

  </div> 

    <div class="form-group">
    <label>Nome Produto</label>
    <input type="text" class="form-control" name="nomeproduto"  value="<?php echo $nomeproduto ?>">
    <div>
  </div> 


    <div class="form-group">
    <label >Categoria</label>
    <select class="form-control" name="categoria">
      <option>Periféricos</option>
      <option>Hardwere</option>
      <option>Softwere</option>
      <option>Celulares</option>
    
    </select>

    <div>
  
    <div class="form-group">
    <label>Quantidade</label>
    <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
    <div>
  </div> 

  </div> 

  <div class="form-group">
    <label >Fornecedor</label>
    <select class="form-control"  name="fornecedor" value="<?php echo $fornecedor ?>">
      <option>Fornecedor A</option>
      <option>Fornecedor B</option>
      <option>Fornecedor C</option> 
      </select>
     
      
</body>

      </option>
      </select>



  <div style="text-align: right;">
  <button href="listar_produtos.php" type="submit" id="botao" class="btn btn-s btn-primary">Atualizar</button>
</form>
</div>
<?php } ?>
</form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
</div>