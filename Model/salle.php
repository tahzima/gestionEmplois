<?php 
class SalleModel{    
    //function read
    public function readSalles(){
        $sql="select * from salle";
        $query=Database::connect()->query($sql);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    } 

    //function read
    public function readSallesById($id){
        $sql="SELECT * FROM salle WHERE idSalle=$id";
        $query=Database::connect()->query($sql);
        $result= $query->fetchAll(PDO::FETCH_ASSOC);
        return $result[0];
    }

    //function add
    public function save($libelle,$capacite){
        $sql="INSERT INTO salle(`libelleSalle`, `capaciteSalle`) VALUES ('$libelle',$capacite)";
        Database::connect()->query($sql);
    }
    
    //function delete
    public function delete($id){
        $sql="DELETE FROM salle WHERE idSalle=$id";
        Database::connect()->query($sql);
    }
    
    //function edit
    public function edit($id,$libelle,$capacite){
        $sql="UPDATE salle SET libelleSalle='$libelle',capaciteSalle='$capacite' WHERE idSalle = $id";
        $query=Database::connect()->query($sql);
    }
}