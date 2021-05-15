<?php
require __DIR__.'/../model/database.php';
require __DIR__.'/../model/reservation.php';
require __DIR__.'/../model/groupe.php';
require __DIR__.'/../model/salle.php';
session_start();
class Reservation
{
	public function index()
	{
		$reservation= new ReservationModel();
        $resultaffichage = $reservation->readReservation();
		
		require __DIR__."/../view/reservation/index.php";
	}
	public function addPage($errorSalle="",$errorGroupe="",$errorDate="",$errorHeure="")
	{
		
		$groupe= new GroupeModel();
        $resultGroupe = $groupe->readGroupe();
		$salle=new SalleModel();
		$resultSalle=$salle->readSalles();
		require __DIR__."/../view/reservation/add/index.php";
	}
	// public function rechercherById($id)
	// {
	// 	$matiere=new MatiereModel();
	// 	$result=$matiere->readMatiereById($id);
	// 	require __DIR__."/../view/matiere/edit/index.php";	
	// }
	// public function edit()
	// {
	// 	$matiere=new MatiereModel();
	// 	if(isset($_POST['libelleMatiere'])){
	// 		if(!empty($_POST['libelleMatiere'])){
	// 			$id=$_POST['idMatiere'];
	// 			$libelle=$_POST['libelleMatiere'];
	// 			$matiere->edit($id,$libelle,);
	// 			header('location:http://localhost/gestionEmplois/matiere/');
	// 		}
	// 	}	
	// }
	public function ajouter()
	{
	 	$reservation=new ReservationModel();
	 	$salle=new salleModel();
	 	$groupe=new groupeModel();
		if(isset($_POST['salle']) && isset($_POST['groupe'])){
			if(!empty($_POST['salle']) && !empty($_POST['groupe']) && !empty($_POST['date']) && !empty($_POST['heureDebut']) && !empty($_POST['heureFin'])){
				$idSalle=$_POST['salle'];
				$idGroupe=$_POST['groupe'];
				$date=$_POST['date'];
				$hd=$_POST['heureDebut'];
				$hf=$_POST['heureFin'];
				$idUser=$_SESSION['idUser'];
				if(($date>=date('Y-m-d'))){
					$myGroupe=$groupe->readGroupeById($idGroupe);	
					$mySalle=$salle->readSallesById($idSalle);
					if($myGroupe["effectif"]<=$mySalle["capaciteSalle"]){
						$mySalle1=$salle->disponibilite($idSalle,$hd,$date);
						if(isset($mySalle1['id'])){
							// // echo "no";
							// echo "<script>alert('la salle deja reservée')</script>";
							// header('location:http://localhost/gestionEmplois/reservation/addPage');
							$this->addPage("la salle deja reservée","","la date deja reservée","l'heure deja reservée");
						}else{
							$reservation->save($idUser,$idSalle,$idGroupe,$date,$hd,$hf);
							header('location:http://localhost/gestionEmplois/reservation/');
						}
					}			
					else{
						// echo "<script>alert('la salle ne support pas ce groupe')</script>";
						$this->addPage("","la salle ne support pas ce groupe","","");
						header('location:http://localhost/gestionEmplois/reservation/addPage');
					}		
				}else{
					// echo "<script>alert('date non valide')</script>";
					$this->addPage("","","date non valide","");
					header('location:http://localhost/gestionEmplois/reservation/addPage');
				}
			}
		}
	}
	public function delete($id)
	{
	 	$reservation=new ReservationModel();
		$reservation->delete($id);
		header('location:http://localhost/gestionEmplois/reservation/');
	}
}