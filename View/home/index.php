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
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link "  href="http://localhost/gestionEmplois/home/">Salle</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/gestionEmplois/groupe/">Groupe</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="http://localhost/gestionEmplois/matiere/" >Matiere</a>
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
      <a class="btn btn-primary float-end mb-4" id="open" href="http://localhost/gestionEmplois/salle/"><b>Ajouter Salle</b></a>
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
            <?php $i=1;
              foreach($result as $row){ ?>
          <form action="http://localhost/gestionEmplois/salle/edit" method="POST">
                <tr>
                  <td>
                    <input type="hidden" class="form-control" id="idSalle" name="idSalle" value="<?=$row['idSalle']?>">
                    <label id="labelNomSalle<?=$i?>"><?=$row['libelleSalle']?></label>
                    <input type="text" name="libelle" id="nomSalle<?=$i?>" value="<?=$row['libelleSalle']?>" style="display:none">
                  </td>
                  <td>
                    <label id="labelCapaciteSalle<?=$i?>"><?=$row['capaciteSalle']?></label>
                    <input type="text" name="capacite" id="capaciteSalle<?=$i?>" value="<?=$row['capaciteSalle']?>" style="display:none">
                  </td>
                  <td class="text-center">
                    <a class='btn btn-info btn-xs' onclick="edit(<?=$i?>)" id="editButton<?=$i?>"> Edit</a> 
                    <a href="http://localhost/gestionEmplois/salle/delete/<?=$row['idSalle']?>" id="deleteButton<?=$i?>" class="btn btn-danger btn-xs"> Delete</a>
                    <input type="submit" class='btn btn-success btn-xs' id="saveButton<?=$i?>" name="update" value="Save" style="display:none"> 
                    <a onclick="cancel(<?=$i?>)" class="btn btn-warning btn-xs" id="cancelButton<?=$i?>" style="display:none">Cancel</a>
                  </td>
                </tr>
          </form>
            <?php $i++;} ?>
          </tbody>
        </table>
      </div>
    </div> 
    <script src="http://localhost/gestionEmplois/view/js/myJS.js"></script>
  </body>
</html>