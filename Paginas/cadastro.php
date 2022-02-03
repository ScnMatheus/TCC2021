<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escreva sua história - Crie sua conta!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/styleCadastro.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
</head>

  <body>
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">  
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ps-4">
                <a class="nav-link" style="text-transform: uppercase;" href="./paginaInicial.php"><b>Inicio</b></a> <!-- Redirecionando a pagina inicio.php -->
            </li>
            <li class="nav-item ">
              <a class="nav-link" style="text-transform: uppercase;" href="./index.php"><b>Quem somos?</b><span class="sr-only"></span></a> <!-- Redirecionando a pagina de criação de conta -->
            </li>
            <li class="nav-item">
              <a class="nav-link" style="text-transform: uppercase;" href="./login.php"><b>Logar</b></a> <!-- redirecionando a pagina de login -->
            </li>
          </ul>
        </div>
      </nav>

      <div class = "IdBody">
        <div id="login-container">
          <form action="../Metodos/confirmacaoCadastro.php" method="post">
            <label for="name">Nome Completo</label>
            <input type="text" name="nome" id="name" placeholder="Digite seu nome completo" autocomplate="off" required="required" size="9" minlength="6" maxlength="30">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail" autocomplate="off" required="required" size="9" minlength="10" maxlength="30">
            <label for="usuario">Nome de usuario</label>
            <input type="text" name="nomeusuario" id="usuario" placeholder="Insira seu nome de usuario" required="required" autocomplate="off" size="9" minlength="8" maxlength="30">
            <label for="password">Senha</label>
            <input type="password" name="senha" id="password" placeholder="Digite a sua senha "required="required" size="9" minlength="8" maxlength="20">
            <input type="submit" value="Cadastrar">
          </form>
        </div>
      </div> 
      <div class="footer mt-3"> <! -- rodape -->
        <div class="text-center p-3" style="background-color: #b85cf5; margin-bottom: 15px;">
            © 2021 Copyright: EscrevaSuaHistoria.com
        </div>
      </div>     
    </div>  
  </body>
</html>


