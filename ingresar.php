<?php 
	require('conectar.php');
    $usuario=$_POST['usuario'];
    $contra=$_POST['contra'];
    $tablausuario="SELECT * FROM usuario";
    $resultusuario=mysqli_query($conectar, $tablausuario);
    $bool = true;
    while ($mostrarusuario=mysqli_fetch_array($resultusuario)){
        if (($mostrarusuario['usuario'] == $usuario) && ($mostrarusuario['contraseña'] == $contra)) { 
            require('tabla.php');
        } else { ?>
            <div class="alert alert-danger centrar" role="alert">
                Usuario o contraseña incorrectos <!-- si lo esta, muestra este mensaje -->
            </div> <?php
            require('login.html');
        }
    }
?>