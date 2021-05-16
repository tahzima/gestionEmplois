<?php
require __DIR__.'/../model/salle.php';
require __DIR__.'/../model/user.php';
class Salle
{
	public function index()
	{
		require __DIR__."/../view/salle/index.php";
	}
	public function rechercherById($id)
	{
		$salle=new SalleModel();
		$result=$salle->readSallesById($id);
		require __DIR__."/../view/salle/edit/index.php";	
	}
	public function edit()
	{
		$salle=new SalleModel();
		if(isset($_POST['libelle']) && isset($_POST['capacite'])){
			if(!empty($_POST['libelle']) && !empty($_POST['capacite'])){
				$id=$_POST['idSalle'];
				$libelle=$_POST['libelle'];
				$capacite=$_POST['capacite'];
				$salle->edit($id,$libelle,$capacite);
				header('location:http://localhost/gestionEmplois/home/');
			}
		}	
	}
	public function ajouter()
	{
		$salle=new SalleModel();
		if(isset($_POST['libelle']) && isset($_POST['capacite'])){
			if(!empty($_POST['libelle']) && !empty($_POST['capacite'])){
				$libelle=$_POST['libelle'];
				$capacite=$_POST['capacite'];
				$salle->save($libelle,$capacite);
				header('location:http://localhost/gestionEmplois/home/');
			}
		}
	}
	public function delete($id)
	{
		$salle=new SalleModel();
		$salle->delete($id);
		header('location:http://localhost/gestionEmplois/home/');
	}
}