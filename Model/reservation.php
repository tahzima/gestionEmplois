<?php
class ReservationModel{    
    //function read
    public function readReservation(){
        $id=$_SESSION["idUser"];
        $sql="SELECT cours.id,user.nom,user.prenom,groupe.libelleGroupe,salle.libelleSalle,cours.date,cours.heureDebut,cours.heureFin FROM  user,groupe,salle,cours WHERE cours.idUser=user.idUser AND cours.idGroupe=groupe.idGroupe AND cours.idSalle=salle.idSalle AND cours.idUser=$id";
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
    public function save($idUser,$idSalle,$idGroupe,$date,$hd,$hf){
        $sqlCours="INSERT INTO `cours`(`idUser`, `idGroupe`, `idSalle`, `date`, `heureDebut`, `heureFin`) VALUES ($idUser,$idGroupe,$idSalle,'$date','$hd','$hf')";
        Database::connect()->query($sqlCours);
        $sqlEnseigner="INSERT INTO `enseigner`(`idEnseignant`, `idGroupe`) VALUES ($idUser,$idGroupe)";
        Database::connect()->query($sqlEnseigner);
    }
    
    //function delete
    public function delete($id){
        $sql="DELETE FROM cours WHERE id=$id";
        Database::connect()->query($sql);
    }
    
    //function edit
    public function edit($id,$libelle){
        $sql="UPDATE matiere SET libelleMatiere='$libelle' WHERE idMatiere = $id";
        $query=Database::connect()->query($sql);
    }
}