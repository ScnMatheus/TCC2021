<?php
    require_once("Usuario.php");
    

    class Publicacoes extends Usuario{


       
        public function enviarPostagem(){

        }
        
        public function paginar(){

            $pag = (isset($_GET['pagina']))?$_GET['pagina'] : 1;

            $todos = $this->todasPostagens();
            $limitadorPostagens = '6';
            
            $totalRegistros = count($todos); //conta o total de postagens
            
            $totalPaginas = ceil($totalRegistros/$limitadorPostagens); //Divide o total de postagens pelo limitador
            $_POST['totalPaginas'] = $totalPaginas;

            $inicio = ($limitadorPostagens*$pag)-$limitadorPostagens;// Inicio que limita o select

            $final = $this->conn->prepare("SELECT * FROM publicacao LIMIT :inicio, :limite");
            $final->bindParam(":inicio", $inicio, PDO::PARAM_INT);
            $final->bindParam(":limite", $limitadorPostagens, PDO::PARAM_INT);
            $final->execute();
            $dados = $final->fetchAll(PDO::FETCH_ASSOC);

            return $dados;
        }

        public function postagem($idPostagem){
            $sql = "SELECT * FROM publicacao WHERE id = :idPostagem";
            $resultado = $this->conn->prepare($sql);
            $resultado->bindParam(':idPostagem', $idPostagem);
            $resultado->execute();
            $dados = $resultado->fetchall();
            if (isset($dados)) {
                return $dados;
            }else {
                echo "nenhuma postagem encontrada";
            }

        }

        public function todasPostagens(){    

            $sqlSelect = "SELECT * FROM publicacao";
            $resultado = $this->conn->prepare($sqlSelect);
            $resultado->execute();
            $postagens = $resultado->fetchAll();
            if (isset($postagens)) {
                return $postagens;
            }else{
                echo "Error Banco";
            }

        }

       
         // função que realiza a edição de fotos do perfil
        public function uparNovaHistoria($id, $caminho, $titulo, $artigo, $data, $hora)
        {

            $sql = "INSERT INTO publicacao (id_usuario_fk, titulo, capa, artigo, data, hora) VALUES (:id, :titulo, :caminho, :artigo, :data, :hora)";
            $resultado = $this->conn->prepare($sql);
            $resultado->bindParam(':caminho', $caminho);
            $resultado->bindParam(':id', $id);
            $resultado->bindParam(':titulo', $titulo);
            $resultado->bindParam(':artigo', $artigo);
            $resultado->bindParam(':data', $data);
            $resultado->bindParam(':hora', $hora);
        
            $resultado->execute();
            if ($resultado = true) {
                return true;
            }
            else {
                echo "erro no banco";
            }
        }
         
     }
        

        
    
?>