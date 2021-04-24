<?php 
class salle{
    private $idSalle;
    private $libelleSalle;
    private $capaciteSalle;

    public function __construct(){
        $this->db=new Database();
    }

    //function insertSalle
    public function createSalle($libelleSalle,$capaciteSalle){
        $this->libelleSalle=$libelleSalle;
        $this->capaciteSalle=$capaciteSalle;
        $this->db->query("INSERT INTO `salle`(`libeleSalle`, `capaciteSalle`) VALUES ('".$this->libelleSalle."','".$this->capaciteSalle."')");
        $this->db->execute();
    }

    //function updateSalle
    public function updateSalle($idSalle,$libelleSalle,$capaciteSalle){
        $this->idSalle=$idSalle;
        $this->libelleSalle=$libelleSalle;
        $this->capaciteSalle=$capaciteSalle;
        $this->db->query("UPDATE `salle` SET `libeleSalle`='".$this->libelleSalle."' , `capaciteSalle`='".$this->capaciteSalle."' WHERE `idSalle`='".$this->idSalle."'");
        $this->db->execute();
    }

    //function deleteSalle
    public function deleteSalle($idSalle){
        $this->idSalle=$idSalle;
        $this->db->query("DELETE FROM `salle` WHERE `idSalle`='".$this->idSalle."'");
        $this->db->execute();
    }
}