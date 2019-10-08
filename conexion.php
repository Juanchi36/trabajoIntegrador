<?php

class conexion
{
    protected $hostname='127.0.0.1';
    protected $database='blog';
    protected $username='root';
    protected $password='';

    public function __construct(){
        try {
            new PDO('mysql:host='.$this->hostname.';dbname='.$this->database, $this->username, $this->password);
            print "Conexión exitosa!";
            
            
            }catch (PDOException $e) {
                print "¡Error!: " . $e->getMessage();
                die();
            }
    }
    

}
    