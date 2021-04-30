<?php
include_once __DIR__.'/database.php';
 
class AdminModel { 
    public function check_login($email, $password){
 
        $sql = "SELECT * FROM admin WHERE email ='$email' AND password ='$password'";
        $query = Database::connect()->query($sql);
 
        if($query->rowCount() > 0){
            $row = $query->fetchAll(PDO::FETCH_ASSOC);
            return $row[0];
        }
        else{
            return false;
        }
    }  
}