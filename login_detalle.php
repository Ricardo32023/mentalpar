<?php
@session_start();
include "lib/conexion.php";

$txtEmail=$_REQUEST['txtEmail'];
$txtClave=$_REQUEST['txtClave'];

$consul=mysql_query("SELECT usu_cod, usu_email, usu_clave, usu_nombre FROM usuario WHERE usu_email='".$txtEmail."'
  AND usu_clave='".$txtClave."' AND usu_estado='A'");

if($co=mysql_fetch_array($consul)){
  $_SESSION['email']=$co['usu_email'];
  $_SESSION['nombre']=$co['usu_nombre'];
  $_SESSION['accesoMental']="si";
  echo"<script>location.href='index.php'</script>";
}else{
  echo"<script>alert('Usuario y Clave Erronea!')</script>";
  echo"<script>location.href='login.php'</script>";
}

 ?>
