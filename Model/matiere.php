<?php 
class MatiereModel{    
    //function read
    public function readMatiere(){
        $sql="select * from matiere";
        $query=Database::connect()->query($sql);
        $result= $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } 

    //function read
    public function readMatiereById($id){
        $sql="SELECT * FROM matiere WHERE idMatiere=$id";
        $query=Database::connect()->query($sql);
        $result= $query->fetchAll(PDO::FETCH_ASSOC);
        return $result[0];
    }

    //function add
    public function save($libelle){
        $sql="INSERT INTO matiere(`libelleMatiere`) VALUES ('$libelle')";
        Database::connect()->query($sql);
    }
    
    //function delete
    public function delete($id){
        $sql="DELETE FROM matiere WHERE idMatiere=$id";
        Database::connect()->query($sql);
    }
    
    //function edit
    public function edit($id,$libelle){
        $sql="UPDATE matiere SET libelleMatiere='$libelle' WHERE idMatiere = $id";
        $query=Database::connect()->query($sql);
    }
}