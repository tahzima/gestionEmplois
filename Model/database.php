<?php

class Database
{

    // used to connect to the database
    private $host = "localhost";
    private $db_name = "gestionemploisdb";
    private $username = "root";
    private $password = "";
    public $db_conn;

    // get the database connection
    public function getConnection()
    {
        $this->db_conn = null;
        try {
            $this->db_conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch (PDOException $exception) {
            echo "Database Connection Error: " . $exception->getMessage();
        }
        return $this->db_conn;
    }
    public function query($var){
        $this->query=$this->con->prepare($var);
    }
    public function execute(){
        $this->query->execute();
    }
    public function selectAll(){
        return $this->query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function singleligne(){
        return $this->query->rowCount();
    }
}

?>