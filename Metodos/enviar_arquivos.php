<?php
    require_once '../Dao/Publicacoes.php';
    $usuario = new Publicacoes;
    session_start();

    if(!empty($_POST['titulo']) && !empty($_POST['artigo']) ) {

      $titulo = $_POST['titulo'];
      $artigo = $_POST['artigo'];
      $hora = date("H:i:s");
      $data = date("Y-m-d");

      //salva o arquivo dentro da pasta
      $extensao = (substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo
      $nome = $_FILES['pic']['name'];
      $novo_nome = date("Y.m.d-H.i.s");
      $diretorio ='../imgs/capa/';
      if(!move_uploaded_file($_FILES['pic']['tmp_name'], $diretorio.$novo_nome.$extensao)){
        echo "Arquivo não enviado";

      }else {
        echo "<br>";
        echo "deu certo";
        $caminho = $diretorio.$novo_nome.$extensao;
        $_SESSION['capa'] = $caminho;
        $id = $_SESSION['id'];
        if($usuario->uparNovaHistoria($id, $caminho, $titulo, $artigo, $data, $hora)){
          echo "Deu Certo";
          header('Location: ../Paginas/paginaInicial.php');
          }else {
            header('Location: ../Paginas/index.php');
          }
      }    
    }
    else {
      echo "insira os dados!";
    }
    
     
    
    
   



?>