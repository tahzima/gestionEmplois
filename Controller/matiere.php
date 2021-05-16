<?php
require __DIR__.'/../model/database.php';
require __DIR__.'/../model/matiere.php';
class Matiere
{
	public function index()
	{
		session_start();
		if(isset($_SESSION["idUser"]) && !empty($_SESSION["idUser"])){
			if($_SESSION["role"]=="admin"){
				$matiere= new MatiereModel();
				$result = $matiere->readMatiere();
				require __DIR__."/../view/matiere/index.php";
			}else{
				header('location:http://localhost/gestionEmplois/reservation/');
			}
		}else{
			header('location:http://localhost/gestionEmplois/');
		}
	}
	public function addPage()
	{
			require __DIR__."/../view/matiere/add.php/index.php";
	}
	public function rechercherById($id)
	{
		$matiere=new MatiereModel();
		$result=$matiere->readMatiereById($id);
		require __DIR__."/../view/matiere/edit/index.php";	
	}
	public function edit()
	{
		$matiere=new MatiereModel();
		if(isset($_POST['libelleMatiere'])){
			if(!empty($_POST['libelleMatiere'])){
				$id=$_POST['idMatiere'];
				$libelle=$_POST['libelleMatiere'];
				$matiere->edit($id,$libelle,);
				header('location:http://localhost/gestionEmplois/matiere/');
			}
		}	
	}
	public function ajouter()
	{
	 	$matiere=new MatiereModel();
		if(isset($_POST['libelleMatiere'])){
			if(!empty($_POST['libelleMatiere'])){
				$libelle=$_POST['libelleMatiere'];
				$matiere->save($libelle);
				header('location:http://localhost/gestionEmplois/matiere/');
			}
		}
	}
	public function delete($id)
	{
	 	$matiere=new MatiereModel();
		$matiere->delete($id);
		header('location:http://localhost/gestionEmplois/matiere/');
	}
}