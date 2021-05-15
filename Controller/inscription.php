<?php
require __DIR__.'/../model/matiere.php';
require __DIR__.'/../model/inscription.php';
require __DIR__.'/../model/database.php';
class Inscription
{
	public function index()
	{
            $matiere= new MatiereModel();
            $result = $matiere->readMatiere();
			require __DIR__."/../view/inscription/index.php";
	}
	public function ajouter()
	{
        $inscription= new InscriptionModel();
		if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['cin']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['matiere'])){
			if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['cin']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['matiere'])){
				$nom=$_POST['nom'];
                $prenom=$_POST['prenom'];
                $cin=$_POST['cin'];
                $email=$_POST['email'];
                $password=$_POST['password'];
                $matiere=$_POST['matiere'];
				$inscription->save($nom,$prenom,$cin,$email,$password,$matiere);
                header('location:http://localhost/gestionEmplois/reservation/');
			}
		}
	}
}