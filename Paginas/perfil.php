  <?php
  
  require_once '../Dao/Usuario.php';
  $usuario = new Usuario;
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/stylePerfil.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link href="../style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:#f5ae5c ;">
  <?php $id =( $_SESSION['id']); 
        $perfil = ($_SESSION['fotoPerfil']);
  ?>

    <div class="container-fluid"><!-- Menu de navegação se o usuario estiver logado -->
            
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
              
          <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">  
              <ul class="navbar-nav mr-auto">
                <li class="nav-item ps-4">
                    <a class="nav-link" style="text-transform: uppercase;" href="./paginaInicial.php"><b>Inicio</b></a> <!-- Redirecionando a pagina inicio.php -->
                </li>
                <li class="nav-item ">
                  <a class="nav-link" style="text-transform: uppercase;" href="index.php"><b>Quem somos?</b><span class="sr-only"></span></a> <!-- Redirecionando a pagina de criação de conta -->
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="text-transform: uppercase;" href="./escrevaHistoria.php"><b>Escreva sua Historia!</b></a> <!-- redirecionando a pagina de login -->
                </li>
              </ul>
          </div>
          <div class="actions">
            <a class="nav-link" href="./perfil.php">Bem vindo - <?php echo $_SESSION['nome'];?></a> 
          </div>
              <img src="<?php echo $_SESSION['fotoPerfil'];?>" alt="Logo Twitter" class="icon me-4">
              <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                  <a class="nav-link" style="text-transform: uppercase;" href="../Paginas/Teste.php"><b>Sair</b></a> <!-- redirecionando a pagina de login -->
                </li>
              </ul>
        </nav>
    </div>
  

    <div class="container-fluid text-center img-fluid mt-5 pt-3 pb-3 "> <!-- Banner -->
        <img src="<?php echo $_SESSION['banner'] ?>" alt="">
    </div>

    <div class="container-fluid"> <!-- navbar usuario -->
      <div class="bar"> 
        <div class="content">
          <ul>
            <li class="active">
              <span>Publicacões</span>
              <strong>12</strong>
            </li>
            <li>
              <span>Comentários</span>
              <strong>18</strong>
            </li>
            <li>
              <span>Seguidores</span>
              <strong>32</strong>
            </li>
            <li>
              <span>Favorites</span>
              <strong>4</strong>
            </li>
          </ul>

          <div class="actions">
            <button>Follow</button>
          </div>
        </div>
      </div>
    </div>

  <div class="wrapper-content content">
    <aside class="profile">
      <img src="<?php echo $_SESSION['fotoPerfil'];?>" alt="Batman" class="avatar">
      <h1><?php echo $_SESSION['nome']; ?></h1>
      
      <p>Batman is a fictional character, a superhero from the American comic book published by DC Comics.</p>
    </aside>
  </div>

  <div class="container border border-dark">
      <div class='row'>
        <div class="col">
          <form method="POST" enctype="multipart/form-data" action="../Metodos/configuracaoUsuario.php"> 
            <p><label for="conteudo">Adicione uma foto de perfil</label></p>
            <p><input type="file" name="pic" accept="image/*"></p>
            <button type="submit">Enviar imagem</button>
          </form>
        </div>
      </div>

      <div class='row'>
        <div class="col">
          <form method="POST" enctype="multipart/form-data" action="../Metodos/configuracaoCapa.php"> 
            <p><label for="conteudo">Adicione uma capa de perfil</label></p>
            <p><input type="file" name="pic" accept="image/*"></p>
            <button type="submit">Salvar banner</button>
          </form>
        </div>
      </div>
  </div>
    
</body>
</html>