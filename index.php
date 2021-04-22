<?php

if (isset($_GET['ctr'])) {
  echo "kayn";
}
else{
  header('location:View/login/index.php');
}
?>