<?php
class Logout
{
	public function index()
	{
        session_start();
        if(isset($_SESSION['idAdmin'])){
            session_unset(); 
            session_destroy();
            header('location:http://localhost/gestionEmplois/login/');
        }
	}
}