<?php 

    class Conexion extends PDO
    { 
    private $type = 'mysql';
    private $host = '127.0.0.1';
    private $database = 'blog';
    private $usarname = 'root';
    private $password = ''; 
    public function __construct() {
        
        try{
            parent::__construct("{$this->type}:dbname={$this->database};host={$this->host};charset=utf8", $this->usarname, $this->password);
        }catch(PDOException $e){
            echo 'Error' . $e->getMessage();
            die();
        }
    } 
} 
