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
        <?php 
            $captcha = $_POST['g-recaptcha-response'];
            $secret = 'secret_key';

            $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
            ?> 
                <div class="alert alert-warning centrar" role="alert">
                        <?php echo $response ?>
                </div> 
            <?php
            if (!$captcha) { ?>
                <div class="alert alert-alert centrar" role="alert">
                    Comprueba el Captcha 
                </div> <?php
            } else {

                var_dump($response);
                $arr = json_decode($response, TRUE);
                
                if($arr['success']) { ?>
                    <div class="alert alert-success centrar" role="alert">
                        Captcha comprobado correctamente
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
                                Usuario o contraseña incorrectos
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
    </body>
</html>