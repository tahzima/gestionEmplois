<?php
require_once __DIR__."/../../controller/home.php";
require_once __DIR__."/../../model/salle.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>HOME</title>
      <link rel="stylesheet" href="http://localhost/gestionEmplois/view/css/style.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ">
                  <li class="nav-item active">
                    <a class="nav-link "  href="http://localhost/gestionEmplois/home/">Salle</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/gestionEmplois/groupe/">Groupe</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="" >Matiere</a>
                  </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li class="nav-item">
                    <a  class="nav-link " href="http://localhost/gestionEmplois/logout/">logout</a>
                  </li>
                </ul>
              </div>
            </div>
    </nav>

    <div class="container mt-4">
      <h1 class="text-center">Salle</h1>
      <a class="btn btn-primary float-end mb-4" id="open" href="http://localhost/gestionEmplois/salle/"><b>Ajouter les Salles</b></a>
      <div class="row col-md-12 col-md-offset-2 custyle">
        <table class="table">
          <thead>
            <tr>
              <th>Nom de salle</th>
              <th>Capaciter de salle</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $salle= new SalleModel();
              $result = $salle->readSalles();
              foreach($result as $row){ ?>
                <tr>
                  <td><?=$row['libelleSalle']?></td>
                  <td><?=$row['capaciteSalle']?></td>
                  <td>
                    <a href="http://localhost/gestionEmplois/salle/edit/<?=$row['idSalle']?>"  class="btn btn-info">Edite</a> 
                    <a href="http://localhost/gestionEmplois/salle/delete/<?=$row['idSalle']?>" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div> 
  </body>
</html>