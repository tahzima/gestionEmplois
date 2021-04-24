<?php
	
require __DIR__.'/../model/admin.php';
/**
 * 
 */
class login
{
	public function index()
	{
		require __DIR__."/../view/login/index.php";
	}
    function loginPage()
	{
 
        $admin = new admin();
        if(isset($_POST['email']) && isset($_POST['password'])){
            $email = $admin->escape_string($_POST['email']);
            $password = $admin->escape_string($_POST['password']);
            $myAdmin = $admin->check_login($email, $password);
            if(!empty($myAdmin['idAdmin'])){
                session_start();
                $_SESSION["idAdmin"]=$myAdmin['idAdmin'];
                require __DIR__."/../view/home/index.php";
            }
            else{
                require_once __DIR__."/../view/login/index.php";
                echo "<script> alert('les informations incorrect')</script>";
            }
        }else{
            require_once __DIR__."/../view/login/index.php";
        }
	}
}