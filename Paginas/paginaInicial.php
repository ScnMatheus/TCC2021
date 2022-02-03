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
    <link rel="stylesheet" href="../style/styleInicial.css">
   
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    
</head>

  <body>

    <div class="container-fluid"><!-- Menu de navegação se o usuario estiver logado -->
      <?php if(isset($_SESSION['id'])) { ?>
            
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
        </nav>
    </div>

      <?php }else{ ?>

    <div class="container-fluid"> <!-- Menu de navegação se o usuario não estiver logado -->
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
                <a class="nav-link" style="text-transform: uppercase;" href="./cadastro.php"><b>Cadastrar</b></a> <!-- redirecionando a pagina de login -->
              </li>
              <li class="nav-item">
                <a class="nav-link" style="text-transform: uppercase;" href="./login.php"><b>Login</b></a> <!-- redirecionando a pagina de login -->
              </li>
            </ul>
          </div>
        </nav>
    </div>

      <?php } ?>
              
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
    
    <div class="container-fluid ms-5"> <!-- Postagens -->
      <div class="row">
      <?php foreach ($paginacao as $linha => $campo): 
        $id= $_SESSION['idPostagem'] = $campo['id']?>
      
        <div class="col mt-5 ">
          <div class="ms">
            <div class="card border-5 border-info" style="width:350px">
              <img class="card-img-top" src="<?php echo $campo['capa']; ?>" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title"><?php echo $campo['titulo'];?> </h4>

                <a href="post.php?postagem=<?php echo $id ?>" class="btn btn-primary">Ver Historia</a>
              </div>
          </div>
          </div>
        </div>
      
        <?php endforeach; ?>
      </div>
    </div>
    

    <div class="container mt-5 ">    
      <nav aria-label="Navegação de página exemplo">
        <ul class="pagination justify-content-center">
            <?php for($i = 1; $i <= $_POST['totalPaginas']; $i++){ ?>
          <li class="page-item"><a class="page-link" href="paginaInicial.php?pagina=<?=$i?>"><?=$i?></a></li>
              <?php } ?>
        </ul>
      </nav>
    </div>
    <div class="container-fluid">
      <div class="footer mt-3"> <! -- rodape -->
        <div class="text-center p-3" style="background-color: #b85cf5; margin-bottom: 15px;">
            © 2021 Copyright: EscrevaSuaHistoria.com
        </div>
      </div>
    </div>

  </body>
</html>
