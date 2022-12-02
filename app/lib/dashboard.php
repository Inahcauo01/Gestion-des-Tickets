<?php

class Database{
    private $host=DB_HOST;
    private $name=DB_NAME;
    private $user=DB_USER;
    private $password=DB_PASSWORD;

    private $pdo;
    private $stm;
    public function __construct()
    {
        $dsn='mysql:host='.$this->host.';dbname='.$this->name;
        try{
           $this->pdo=new PDO($dsn,$this->user,$this->password);
        }catch(PDOException $e){
            echo "Erreur de connexion".$e->getMessage();
        }
    }
    public function __destruct()
    {
        if($this->stm !== null){
            $this->stm=null;
        }
        if($this->pdo!==null){
            $this->pdo=null;
        }
    }
}


?>