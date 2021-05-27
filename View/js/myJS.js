$(function () {
  $("#datetimepicker4").datetimepicker({
    format: "L",
  });
});

var i = 0;
function addSalle() {
  var form = document.getElementById("form");
  var libelle = document.getElementById("libelle");
  var capacite = document.getElementById("capacite");

  if (capacite.value != "" && libelle.value != "") {
    form.innerHTML +=
      '<br>  <div class="row"> <div class="form-group col-md-4 "><input type="text" name="libelle' +
      i +
      '" id="libelle' +
      i +
      '" value="' +
      libelle.value +
      '" class="form-control" placeholder="Libelle Salle"></div><div class="form-group col-md-4"><input type="nom" name="capacite' +
      i +
      '" value="' +
      capacite.value +
      '" id="capacite' +
      i +
      '" class="form-control" placeholder="Capacite Salle"></div>';
    i++;
  } else {
    alert("Tout les champs sont obligatoires !");
  }
}
