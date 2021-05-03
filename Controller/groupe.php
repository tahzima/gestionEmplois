<?php
require __DIR__.'/../model/groupe.php';
require __DIR__.'/../model/database.php';
class Groupe
{
	public function index()
	{
            $groupe= new GroupeModel();
            $result = $groupe->readGroupe();
			require __DIR__."/../view/groupe/index.php";
	}
	public function addPage()
	{
			require __DIR__."/../view/groupe/add/index.php";
	}
	public function rechercherById($id)
	{
		$groupe=new GroupeModel();
		$result=$groupe->readGroupeById($id);
		require __DIR__."/../view/groupe/edit/index.php";
	}
	public function edit()
	{
		$groupe=new GroupeModel();
		if(isset($_POST['libelleGroupe']) && isset($_POST['effectif'])){
			if(!empty($_POST['libelleGroupe']) && !empty($_POST['effectif'])){
				$id=$_POST['idGroupe'];
				$libelle=$_POST['libelleGroupe'];
				$effectif=$_POST['effectif'];
				$groupe->edit($id,$libelle,$effectif);
				header('location:http://localhost/gestionEmplois/groupe/');
			}
		}	
	}
	
	public function delete($id)
	{
		$groupe=new GroupeModel();
		$groupe->delete($id);
		header('location:http://localhost/gestionEmplois/groupe/');
	}
	
	public function ajouter()
	{
		$groupe=new GroupeModel();
		if(isset($_POST['libelleGroupe']) && isset($_POST['effectif'])){
			if(!empty($_POST['libelleGroupe']) && !empty($_POST['effectif'])){
				$libelle=$_POST['libelleGroupe'];
				$effectif=$_POST['effectif'];
				$groupe->save($libelle,$effectif);
				header('location:http://localhost/gestionEmplois/groupe/');
			}
		}
	}
}