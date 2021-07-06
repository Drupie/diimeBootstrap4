<?php

// insert de php
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$tel=$_POST['tel'];
$texto=$_POST['texto'];
  $conexion = mysqli_connect("db5003386753.hosting-data.io", "dbu1004409", "drupie2020", "dbs2743657") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into registro(nombre,correo,telefono,texto) values 
                       ('$nombre','$correo','$tel','$texto')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);
echo '
<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
<header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <h1 style="background:rgba(0,0,0,0.5); color:#fafafa;">Gracias por registrarse</h1>
                
                </div>
            </div>
        </header>
';

  ?>