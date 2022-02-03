<?php
    
class Conexao extends PDO{

    protected $dsn =("mysql:dbname=escrevasuahistoria;host=localhost");
    protected $usuario = "root";
    protected $senha = "";
    protected $conn;

    public function __construct()
    {
        $this->conn = new PDO($this->dsn, $this->usuario, $this->senha);
    }

}


?>