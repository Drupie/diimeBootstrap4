<?php
session_start();
$usuario =$_POST['usuario'];
$pass =$_POST['pass'];


$conexion = mysqli_connect("db5003386753.hosting-data.io", "dbu1004409", "drupie2020", "dbs2743657") or
die("Problemas con la conexión");


$proceso = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' AND
contra= '$pass' ");
if($resultado = mysqli_fetch_array($proceso)){
$_SESSION['u_usuario'] = $usuario;


header("Location: inicio.php");

}
else{
   
    header("Location: index.html");
}
?>