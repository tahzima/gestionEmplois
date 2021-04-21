<?php
include 'database.php';

class Admin{
    private $idAdmin;
    private $email;
    private $password;

    public function __construct(){
        $this->db=new Database();
    }

    //function insert
    public function createAdmin($email,$password){
        $this->email=$email;
        $this->password=$password;
        $this->db->query("INSERT INTO `admin`(`email`, `password`) VALUES ('".$this->email."','".$this->password."')");
        $this->db->execute();
    }

    //function selectAdmin
    public function getAdmin($email,$password){
        $this->email=$email;
        $this->password=$password;
        $this->db->query("select * from admin where email='".$this->email."' and password='".$this->password."'");
        $this->db->execute();
        if($this->db->singleligne()==1){
            return $this->db->selectAll();
        }
    }

    //function selectAdminById
    public function getAdminById($id){
        $this->idAdmin=$id;
        $this->db->query("SELECT * FROM `admin` WHERE idAdmin=".$this->idAdmin);
        $this->db->execute();
        return $this->db->selectAll();
    }
}