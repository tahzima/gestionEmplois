<?php 
class GroupeModel{    
    //function read
    public function readGroupe(){
        $sql="select * from groupe";
        $query=Database::connect()->query($sql);
        $result= $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } 

    //function read
    public function readGroupeById($id){
        $sql="SELECT * FROM groupe WHERE idGroupe=$id";
        $query=Database::connect()->query($sql);
        $result= $query->fetchAll(PDO::FETCH_ASSOC);
        return $result[0];
    }

    //function add
    public function save($libelle,$effectif){
        $sql="INSERT INTO groupe(`libelleGroupe`, `effectif`) VALUES ('$libelle',$effectif)";
        Database::connect()->query($sql);
    }
    
    //function delete
    public function delete($id){
        $sql="DELETE FROM groupe WHERE idGroupe=$id";
        Database::connect()->query($sql);
    }
    
    //function edit
    public function edit($id,$libelle,$effectif){
        $sql="UPDATE groupe SET libelleGroupe='$libelle',effectif=$effectif WHERE idGroupe = $id";
        $query=Database::connect()->query($sql);
    }
}