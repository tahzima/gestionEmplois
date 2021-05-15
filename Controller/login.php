<?php
require __DIR__.'/../model/user.php';
session_start();
class Login
{
	public function index()
	{
		require __DIR__."/../view/login/index.php";
	}
    function auth()
	{
        $admin = new UserModel();
        if(isset($_POST['email']) && isset($_POST['password'])){
            $email = $_POST['email'];
            $password =$_POST['password'];
            $myAdmin = $admin->check_login($email, $password);
            if(!empty($myAdmin)){
                $_SESSION["idUser"]=$myAdmin["idUser"];
                $_SESSION["role"]=$myAdmin["role"];
                header('location:http://localhost/gestionEmplois/home/');
            }
            else{
                $this->index();
                echo "<script> alert('les informations incorrect')</script>";
            }
        }else{
            $this->index();
        }
	}
}