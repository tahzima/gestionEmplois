<?php
require __DIR__.'/../controller/login.php';
require __DIR__.'/../model/salle.php';
class Home
{
	public function index()
	{
		if(isset($_SESSION["idUser"]) && !empty($_SESSION["idUser"])){
			if($_SESSION["role"]=="admin"){
		        $salle= new SalleModel();
              	$result = $salle->readSalles();
				require __DIR__."/../view/home/index.php";
			}else{
			header('location:http://localhost/gestionEmplois/reservation/');
			}
		}else{
			header('location:http://localhost/gestionEmplois/');
		}
	}
}