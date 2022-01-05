<?php

include'conexao.php';

$id = $_GET['id'];

?>
<!DOCTYPE html>
<html>
<head>
  <body>  
    <meta charset="utf-8">
    <title>Formulario de Edição</title>
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
<h4>Formulario de Edição</h4>
<form action="_atualizar_categoria.php" method="post" style="margin-top: 20px">
 
 <?php 

$sql= "SELECT * FROM categoria WHERE id_categoria = $id";
$buscar = mysqli_query($conexao,$sql);
while ($array = mysqli_fetch_array($buscar)) {


          $id_categoria = $array['id_categoria'];
          $nomecategoria = $array['nome_categoria'];
      

?>
    <div class="form-group">
    <label>Nome Categoria</label>
    <input type="text" class="form-control" name="nomecategoria" value="<?php echo $nome_categoria ?>">
    <input type="number" class="form-control" name="id" value="<?php echo $id_categoria ?>" style="display: none">

  </div> 

    <div>
     
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