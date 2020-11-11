<html>
	<head>
		<meta charset="UTF-8">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
			<link rel="stylesheet" href="styles.css">
	</head>
	<body>
        <nav class="navbar navbar-light" style="background-color: #e8f5e9;">
            <a class="navbar-brand" href="https://eest1tigre.edu.ar/">
            <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            E.E.S.T.N 1
            </a>
            
            <form class="form-inline my-2 my-lg-0">
                <a href="index.html">
                <button class="btn btn-outline-success" type="button" action="index.html">Volver</button>
                </a>
            </form>
        </nav>
	<?php 
    	require('conectar.php');

		$dni=$_POST['dni'];
		$apellido=$_POST['apellido'];
		$nombre=$_POST['nombre'];
		$sexo=$_POST['sexo'];
		$fechanac=$_POST['fechanac'];
		$codArea=$_POST['codArea'];
		$telefono=$_POST['telefono'];
		$correo=$_POST['correo'];
		$domicilio=$_POST['domicilio'];
		$cp=$_POST['cp'];
		$localidad=$_POST['localidad'];
		
		
		$tablaper="SELECT * FROM persona";
		$resultper=mysqli_query($conectar, $tablaper);
		$bool = true;

		// busca en la base de datos si el dni ya esta registrado
		while ($mostrarper=mysqli_fetch_array($resultper)){
			if ($mostrarper['dni'] == $dni) { 
				$bool = false; // si no lo esta, devuelve el valor "falso"
			}
		}

		if ($bool == false) { ?>
			<div class="alert alert-danger centrar" role="alert">
				Este DNI ya está registrado <!-- si lo esta, muestra este mensaje -->
			</div>
		<?php } else {
			mkdir('archivos/'.$dni,0777,true); // crea una carpeta dentro de "archivos" con el nombre del dni registrado
			$nom_archDni=$_FILES['archDni']['name']; // archivo final
			$tmp_archDni=$_FILES['archDni']['tmp_name']; // archivo temporal
			$ext = pathinfo($nom_archDni); // consigue la extension del archivo
			// verificamos si hay un archivo cargado, si lo hay, hacemos la conversion del nombre
			if(move_uploaded_file($tmp_archDni, 'archivos/'.$dni.'/archDni'.'.'.$ext['extension'])) { ?> 
				<div class="alert alert-success centrar" role="alert">
					archDni guardado <!-- Estos son mensajes para comprobar si se completo correctamente -->
				</div>
			<?php } else { ?>
				<div class="alert alert-success centrar" role="alert">
					archDni no guardado 
				</div>
			<?php }
			
			$nom_archAct=$_FILES['archAct']['name'];
			$tmp_archAct=$_FILES['archAct']['tmp_name'];
			$ext = pathinfo($nom_archAct);
			if(move_uploaded_file($tmp_archAct, 'archivos/'.$dni.'/archAct'.'.'.$ext['extension'])) { ?>
				<div class="alert alert-success centrar" role="alert">
					archAct guardado
				</div>
			<?php } else { ?>
				<div class="alert alert-success centrar" role="alert">
					archAct no guardado 
				</div>
			<?php }

			$nom_archIns=$_FILES['archIns']['name'];
			$tmp_archIns=$_FILES['archIns']['tmp_name'];
			$ext = pathinfo($nom_archIns);
			if(move_uploaded_file($tmp_archIns, 'archivos/'.$dni.'/archIns'.'.'.$ext['extension'])) { ?>
				<div class="alert alert-success centrar" role="alert">
					archIns guardado
				</div>
			<?php } else { ?>
				<div class="alert alert-success centrar" role="alert">
					archIns no guardado 
				</div>
			<?php }

			$nom_archSexto=$_FILES['archSexto']['name'];
			$tmp_archSexto=$_FILES['archSexto']['tmp_name'];
			$ext = pathinfo($nom_archSexto);
			if(move_uploaded_file($tmp_archSexto, 'archivos/'.$dni.'/archSexto'.'.'.$ext['extension'])) { ?>
				<div class="alert alert-success centrar" role="alert">
					archSexto guardado
				</div>
			<?php } else { ?>
				<div class="alert alert-success centrar" role="alert">
					archSexto no guardado 
				</div>
			<?php }

			$nom_archPan=$_FILES['archPan']['name'];
			$tmp_archPan=$_FILES['archPan']['tmp_name'];
			$ext = pathinfo($nom_archPan);
			if(move_uploaded_file($tmp_archPan, 'archivos/'.$dni.'/archPan'.'.'.$ext['extension'])) { ?>
				<div class="alert alert-success centrar" role="alert">
					archPan guardado
				</div>
			<?php } else { ?>
				<div class="alert alert-success centrar" role="alert">
					archPan no guardado 
				</div>
			<?php }

			$nom_archVac=$_FILES['archVac']['name'];
			$tmp_archVac=$_FILES['archVac']['tmp_name'];
			$ext = pathinfo($nom_archVac);
			if(move_uploaded_file($tmp_archVac, 'archivos/'.$dni.'/archVac'.'.'.$ext['extension'])) { ?>
				<div class="alert alert-success centrar" role="alert">
					archVac guardado
				</div>
			<?php } else { ?>
				<div class="alert alert-success centrar" role="alert">
					archVac no guardado 
				</div>
			<?php }

			$tablaloc="INSERT INTO localidad(cp, nombreLocalidad) VALUES('$cp','$localidad')";
			$ejecutarloc=mysqli_query($conectar, $tablaloc);
			
			if (!$ejecutarloc) { ?>
				<div class="alert alert-danger centrar" role="alert">
					Error en tabla Localidad (Probablemente ya exista)
				</div>
			<?php } else { ?>
				<div class="alert alert-success centrar" role="alert">
					Guardado en tabla Localidad
				</div>
			<?php }
			
			$tablaper="INSERT INTO persona(dni, apellido, nombre, sexo, fechaNac, codArea, telefono, correo, fechaEmi, domicilio, cp) VALUES('$dni','$apellido','$nombre','$sexo','$fechanac','$codArea','$telefono','$correo',now(),'$domicilio','$cp')";
			$ejecutarper=mysqli_query($conectar, $tablaper);
			
			if (!$ejecutarper) { ?>
				<div class="alert alert-danger centrar" role="alert">
					Error con tabla Persona
				</div>
			<?php } else { ?>
				<div class="alert alert-success centrar" role="alert">
					Guardado con tabla Persona
				</div>
			<?php }
		}

		?>
	</body>
</html>


