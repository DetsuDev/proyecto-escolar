<html>
    <head>
        <meta charset="UTF-8">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="styles.css">
    </head>
    <body style="background-color: #fbfffc; margin-top: 190px;">
        <nav class="navbar fixed-top navbar-light" style="width: 100%; background-color: #e8f5e9">
            <a class="navbar-brand" href="https://eest1tigre.edu.ar/">
            <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            E.E.S.T.N 1
            </a>
            <a href="index.php" class="btn btn-outline-success" type="button">Volver</a>
        </nav>  
            <div class="card fixed-top ccontenido" style="margin-top: 75">
                <form class="form-inline ccontenido" method="post" action="buscar.php"> 
                    <div class="input-group" style="width: 100%">
                        <input type="text" name="buscar" class="form-control" placeholder="Buscar...">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>
        <?php require('conectar.php') ?>
        <div class="card centrar">
            <table class="table table-bordered table-striped ccontenido" >
                <thead>
                    <tr>
                        <th scope="col">DNI</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Fecha de Emision</th>
                        <th scope="col">Domicilio</th>
                        <th scope="col">CP</th>
                        <th scope="col">Archivo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $tablaper="SELECT * FROM persona";
                        $resultper=mysqli_query($conectar, $tablaper);

                        $tablaloc="SELECT * FROM localidad";
                        $resultloc=mysqli_query($conectar, $tablaloc);

                        while ($mostrarper=mysqli_fetch_array($resultper)) { ?>
                            
                            <tr>
                                <td> <?php echo $mostrarper['dni']; ?> </td>
                                <td> <?php echo $mostrarper['apellido']; ?> </td>
                                <td> <?php echo $mostrarper['nombre']; ?> </td>
                                <td> <?php echo $mostrarper['sexo']; ?> </td>
                                <td> <?php echo $mostrarper['fechaNac']; ?> </td>
                                <td> <?php
                                        echo $mostrarper['codArea'];
                                        echo $mostrarper['telefono']; 
                                        ?> </td>
                                <td> <?php echo $mostrarper['correo']; ?> </td>
                                <td> <?php echo $mostrarper['fechaEmi']; ?> </td>
                                <td> <?php echo $mostrarper['domicilio']; ?> </td>
                                <td> <?php echo $mostrarper['cp']; ?> </td>
                                <td> 
                                <?php 
                                    echo '<a class="btn btn-secondary" href="archivos/'.$mostrarper['dni'].'/">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z"/>
                                        <path fill-rule="evenodd" d="M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z"/>
                                    </svg Documento </a>';
                                ?> 
                                </td>
                            </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
                        
        <div class="card centrar">
            <table class="table table-bordered table-striped ccontenido">
                <thead>
                    <tr>
                        <th scope="col">CP</th>
                        <th scope="col">Localidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $tablaloc="SELECT * FROM localidad";
                        $resultloc=mysqli_query($conectar, $tablaloc);

                        while ($mostrarloc=mysqli_fetch_array($resultloc)) { ?>
                            <tr>
                                <td> <?php echo $mostrarloc['cp'] ?> </td>
                                <td> <?php echo $mostrarloc['nombreLocalidad'] ?> </td>
                            </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>


