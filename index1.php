<?php

include 'conexao.php';

include 'script/password.php';


$usuario = $_POST['usuario'];

$senhausuario = $_POST['senha'];


$sql = "SELECT mail_usuario, senha_usuario FROM usuarios WHERE mail_usuario = '$usuario'";


$buscar = mysqli_query($conexao, $sql);



$total = mysqli_num_rows($buscar); 



while ($array = mysqli_fetch_array($buscar)){

   $senha = $array['senha_usuario']; 

   $senha_decodificada = sha1($senha_usuario);   

if ($total > 0) {

if($senha_decodificada === $senha){

header('Location: menu.php'); 

} else {

header('Location: erro.php'); 

}

}

}

if($total === 0){

header('Location: menu.php'); 

} else {

header('Location: erro.php'); 

}


?>

