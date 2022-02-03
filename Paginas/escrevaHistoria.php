<?php 
  
  session_start();
  require_once '../Dao/Publicacoes.php';
  $publicacoes = new Publicacoes;
  $paginacao = $publicacoes->paginar();
  
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escreva sua história - Crie sua conta!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../style/styleEscrevaHistoria.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    
</head>

  <body>

    <div class="container-fluid"><!-- Menu de navegação -->
            
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
              
          <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">  
              <ul class="navbar-nav mr-auto">
                <li class="nav-item ps-4">
                    <a class="nav-link" style="text-transform: uppercase; " href="./paginaInicial.php"><b>Inicio</b></a> <!-- Redirecionando a pagina inicio.php -->
                </li>
                <li class="nav-item ">
                  <a class="nav-link" style="text-transform: uppercase;" href="index.php"><b>Quem somos?</b><span class="sr-only"></span></a> <!-- Redirecionando a pagina de criação de conta -->
                </li>
              </ul>
          </div>
          <div class="actions">
            <a class="nav-link" href="./perfil.php">Bem vindo - <?php echo $_SESSION['nome'];?></a> 
          </div>
              <img src="<?php echo $_SESSION['fotoPerfil'];?>"alt="Logo perfil" class="icon me-4">
        </nav>
    </div>

              
    <div class="container-fluid"> <!-- Carrosel -->
      <div class="header" style="margin-top: 65px;">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
          </div>

          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../imgs/EscrevaSuaHistoria.png" alt="Escreva uma Historia" class="" style="width:100%">
            </div>
            <div class="carousel-item">
              <img src="../imgs/EncontreUmaHistoria.png" alt="Encontre uma Historia" class="" style="width:100%">
            </div>
            <div class="carousel-item">
              <img src="../imgs/LeiaUmaHistoria.png" alt="Leia Uma Historia" class="" style="width:100%">
            </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
      </div>
    </div>
    
    <div class="container-fluid "> <!-- Formulario para inserir historia -->
        <div class="col-lg-6 offset-lg-3 ">
          <div class="row justify-content-center">
              <form action="../Metodos/enviar_arquivos.php" method="post" enctype="multipart/form-data">
                  <div class="mb-3 mt-3 text-center">
                      <label for="exampleFormControlInput1" class="form-label " style="align-content: center;">Titulo da História:</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="titulo" placeholder="Escreva seu Titulo:">
                  </div>
                  <div class="mb-3 text-center">
                      <label for="exampleFormControlTextarea1" class="form-label">Artigo da História</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" name="artigo" rows="10" placeholder="Escreva seu Arquivo:"></textarea>
                  </div>
                  
                  <div class="mb-3 mt-3 ">
                    <label for="Arquivos" class="form-label">Capa da sua historia</label><br>
                    <input type="hidden" name="MAX_FILE_SIZE" value="3000000">
                    <input type="file" name="pic" accept="image/*">
                  </div>
                  <button type="submit" class="btn btn-primary">Enviar Arquivo</button>
              </form>
          </div>
                  
        </div>
    </div>
    

      <div class="container-fluid">  <! -- rodape -->
        <div class="footer mt-3">
          <div class="text-center p-3" style="background-color: #b85cf5; margin-bottom: 15px;">
              © 2021 Copyright: EscrevaSuaHistoria.com
          </div>
        </div>
      </div>
  

  </body>
</html>
