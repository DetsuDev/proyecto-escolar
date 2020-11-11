
<?php
    $conectar=@mysqli_connect('localhost','root',''); //local
    //$conectar=@mysqli_connect('localhost','id13923406_database','0hnTz#N_WWk=83mv'); //webhost
        if(!$conectar) { ?>
                <div class="alert alert-danger centrar" role="alert">
                    No se pudo establecer coneccion con el servidor
                </div>
            <?php } else { ?>
                <div class="alert alert-success centrar" role="alert">
                    Se conecto
                </div>
            <?php 
            $base=@mysqli_select_db($conectar,'main'); //local
            //$base=@mysqli_select_db($conectar,'id13923406_db'); //webhost
            if(!$base) { ?>
                <div class="alert alert-warning centrar" role="alert">
                    Se conecto, pero no se encontro la base de datos
                </div>
            <?php }
        }
        mysqli_set_charset($conectar, 'utf8');
?>