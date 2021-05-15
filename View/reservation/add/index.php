<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJOUTER SALLE</title>
    <link  href="http://localhost/gestionEmplois/view/css/style.css" >
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
                    <a class="nav-link "  href="http://localhost/gestionEmplois/reservation/">reservation</a>
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
      <div class="wrapper">
        <div class="container">
        <h1 class="text-center">Ajouter Reservation</h1>
        <br>
        <br>
        <br>
          <form action="http://localhost/gestionEmplois/reservation/ajouter" method="POST">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputState">Groupe</label>
                <select id="inputState" class="form-control" name="groupe">
                  <option selected>Choose...</option>
                  <?php
                    foreach($resultGroupe as $row){ ?>
                      <option value="<?=$row['idGroupe']?>"><?=$row['libelleGroupe']?></option>
                    <?php } ?>
                </select>
                <div class="line" style="color:red;"><?=$errorGroupe?></div>
              </div>
              <div class="form-group col-md-6">
                <label for="inputState">Salle</label>
                <select id="inputState" class="form-control" name="salle">
                  <option selected>Choose...</option>
                  <?php
                    foreach($resultSalle as $row){ ?>
                      <option value="<?=$row['idSalle']?>"><?=$row['libelleSalle']?></option>
                    <?php } ?>
                </select>
                <div class="line" style="color:red;"><?=$errorSalle?></div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12 text-center">
                <label for="inputState">Date</label>
                <div class="col-sm-12">
                    <input type="date" class="form-control datetimepicker-input" name="date"/>
                </div>
                <div class="line" style="color:red;"><?=$errorDate?></div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputState">Heure Debut</label>
                <select id="inputState" class="form-control" name="heureDebut">
                  <option selected>Choose...</option>
                  <option>08:00</option>
                  <option>10:00</option>
                  <option>14:00</option>
                  <option>16:00</option>
                </select>
                <div class="line" style="color:red;"><?=$errorHeure?></div>
              </div>
              <div class="form-group col-md-6">
                <label for="inputState">Heure Fin</label>
                <select id="inputState" class="form-control"  name="heureFin">
                  <option selected>Choose...</option>
                  <option>10:00</option>
                  <option>12:00</option>
                  <option>16:00</option>
                  <option>18:00</option>
                </select>
                <div class="line" style="color:red;"><?=$errorHeure?></div>
              </div>
            </div>
            <div class="form-row text-center">
              <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary btn-lg">Ajouter</button>
                <div class="line"></div>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
</body>
</html>