<?php 
    $captcha = $_POST['g-recaptcha-response'];
    $secret = 'secret_key';

    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");

    if (!$captcha) { ?>
        <div class="alert alert-danger centrar" role="alert">
            Comprueba el Captcha <!-- si lo esta, muestra este mensaje -->
        </div> <?php
    } else {

        var_dump($response);
        $arr = json_decode($response, TRUE);
        
        if($arr['success']) { ?>
            <div class="alert alert-success centrar" role="alert">
                Captcha comprobado correctamente <!-- si lo esta, muestra este mensaje -->
            </div> 
        <?php 
            require('conectar.php');
            $usuario=$_POST['usuario'];
            $contra=$_POST['contra'];
            $tablausuario="SELECT * FROM usuario";
            $resultusuario=mysqli_query($conectar, $tablausuario);
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
        } else { ?>
            <div class="alert alert-danger centrar" role="alert">
                Eror al comprobar el Captcha <!-- si lo esta, muestra este mensaje -->
            </div> <?php
        }
    } 
?>