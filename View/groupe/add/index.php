<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJOUTER GROUPE</title>
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
                  <li class="nav-item">
                    <a class="nav-link "  href="http://localhost/gestionEmplois/home/">Salle</a>
                  </li>
                  <li class="nav-item active">
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
      <h1 class="text-center">Ajouter GROUPE</h1>
      <br>
      <br>
      <br>
      <section id="cover">
          <div id="cover-caption">
              <div class="container">
                  <div class="row text-white">
                      <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                          <div class="px-2">
                              <form action="http://localhost/gestionEmplois/groupe/ajouter" class="justify-content-center" method="POST">
                                  <div class="form-group">
                                      <input type="text" class="form-control" id="libelleGroupe" placeholder="Nom du Groupe" name="libelleGroupe">
                                  </div>
                                  <div class="form-group">
                                      <input type="text" class="form-control" placeholder="Effectif du Groupe" name="effectif">
                                  </div>
                                  <br>
                                  <button type="submit" class="btn btn-primary btn-lg">Ajouter</button>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
    </div>
</body>
</html>