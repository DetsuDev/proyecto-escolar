
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

document.getElementById('correoConf').onkeyup = function () {
  var correo = document.getElementById('correo').value;
  var correoConf = document.getElementById('correoConf').value;
  
  if(correo != correoConf) {
    document.getElementById('correoConf').classList.add('is-invalid');
  } else {
    document.getElementById('correoConf').classList.remove('is-invalid');
    document.getElementById('correoConf').classList.add('is-valid');
  }
};

document.getElementById('dniConf').onkeyup = function () {
  var dni = document.getElementById('dni').value;
  var dniConf = document.getElementById('dniConf').value;
  
  if(dni != dniConf) {
    document.getElementById('dniConf').classList.add('is-invalid');
  } else {
    document.getElementById('dniConf').classList.remove('is-invalid');
    document.getElementById('dniConf').classList.add('is-valid');
  }
};
