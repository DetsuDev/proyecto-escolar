
<?php
    $conectar=@mysqli_connect('localhost','root',''); //local
        if(!$conectar) { ?>
                <div class="alert alert-danger centrar" role="alert">
                    No se pudo establecer coneccion con el servidor
                </div>
            <?php } else { ?>
                <!-- <div class="alert alert-success centrar" role="alert">
                    Se conecto
                </div> -->
            <?php 
            $base=@mysqli_select_db($conectar,'main'); //local
            if(!$base) { ?>
                <div class="alert alert-warning centrar" role="alert">
                    Se conecto, pero no se encontro la base de datos
                </div>
            <?php }
        }
        mysqli_set_charset($conectar, 'utf8');
?>
