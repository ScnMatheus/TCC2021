<?php

// Verifica se o usuario possui Login no banco de dados
session_start();
require_once "../Dao/Usuario.php";

$db = new Usuario();

if (isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['usuario'])) {
   $credenciais['email'] = $_POST['email'];
   $credenciais['senha'] = $_POST['senha'];
   $credenciais['usuario'] = $_POST['usuario'];
   
   if ($db->login($credenciais) == true) {
      $dados = $db->login($credenciais);
      $_SESSION['username'] = $dados['nome_usuario'];
      $_SESSION['email'] = $dados['email'];
      $_SESSION['nome'] = $dados['nome'];
      $_SESSION['fotoPerfil'] = $dados['foto_usuario'];
      $_SESSION['id'] = $dados['id'];
      $_SESSION['banner'] = $dados['banner'];
      header('Location: ../Paginas/paginaInicial.php');
   }
   else {
      header('Location: ../Paginas/login.php');
   }
}else {
   header('Location: ../Paginas/login.php');
}

?>