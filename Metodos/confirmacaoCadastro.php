<?php

//efetua o cadastro do usuario no banco de dados
 require_once("../Dao/Usuario.php");
 
 $db = new Usuario();

 if (isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['nomeusuario']) && isset($_POST['nome'])) 

 {
   $credenciais['email'] = $_POST['email'];
   $credenciais['senha'] = $_POST['senha'];
   $credenciais['nomeUsuario'] = $_POST['nomeusuario'];
   $credenciais['nome'] = $_POST['nome'];

   if($db->cadastrar($credenciais)){
      header('Location: ../Paginas/index.php');
      
   }else{
      header("Location: ..Paginas/cadastro.php");
   }
 }
else{
   header("Location: ..Paginas/cadastro.php");
}
?>