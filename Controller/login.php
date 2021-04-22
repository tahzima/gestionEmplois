<?php
include "../Model/Admin.php";
$email=$_POST['email'];
$password=$_POST['password'];
$admin=new Admin();

if(!empty($email) && !empty($password)){
    echo $admin->getAdmin($email,$password);
}

?>