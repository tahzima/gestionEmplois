<?php
require __DIR__.'/../controller/login.php';
class Home
{
	public function index()
	{
		if(isset($_SESSION["idAdmin"]) && !empty($_SESSION["idAdmin"])){
			// ec
			require __DIR__."/../view/home/index.php";
		}else{
			header('location:http://localhost/gestionEmplois/');
		}
	}
}