<?php 
class InscriptionModel{    
    //function add
    public function save($nom,$prenom,$cin,$email,$pwd,$idMatiere){
        $role="enseignant";
        $sql="INSERT INTO user (`nom`, `prenom`, `cin`, `email`, `password`, `role`, `idMatiere`) VALUES ('$nom','$prenom','$cin','$email','$pwd','$role',$idMatiere)";
        Database::connect()->query($sql);
    }
}