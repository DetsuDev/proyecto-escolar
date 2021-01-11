
// obtiene la ruta de los archivos subidos, y lo transforma de forma de que solo se muestre el nombre de este
document.getElementById('archDni').onchange = function () { 
  var fileInput = document.getElementById('archDni');   
  var fileName = fileInput.files[0].name;
  document.getElementById('archDniF').innerHTML = fileName;
};

document.getElementById('archAct').onchange = function () {
  var fileInput = document.getElementById('archAct');   
  var fileName = fileInput.files[0].name;
  document.getElementById('archActF').innerHTML = fileName;
};

document.getElementById('archIns').onchange = function () {
  var fileInput = document.getElementById('archIns');   
  var fileName = fileInput.files[0].name;
  document.getElementById('archInsF').innerHTML = fileName;
};

document.getElementById('archSexto').onchange = function () {
  var fileInput = document.getElementById('archSexto');   
  var fileName = fileInput.files[0].name;
  document.getElementById('archSextoF').innerHTML = fileName;
};

document.getElementById('archPan').onchange = function () {
  var fileInput = document.getElementById('archPan');   
  var fileName = fileInput.files[0].name;
  document.getElementById('archPanF').innerHTML = fileName;
};

document.getElementById('archVac').onchange = function () {
  var fileInput = document.getElementById('archVac');   
  var fileName = fileInput.files[0].name;
  document.getElementById('archVacF').innerHTML = fileName;
};
