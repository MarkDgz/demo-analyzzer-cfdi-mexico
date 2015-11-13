<?php

	//DATOS DEL PROGRAMA==================================
	//$CLIENTE= "MS Solutions" ;
	//$SISTEMA = "Analyzzer CFDI Jr. + Inventarios" ;
	//$VERSION = "Version 2.0 MS Solutions" ;
	//$NICK = "Por Lic. Marco A. Dominguez" ;
	//========================================================


session_start();
  
require 'conectar.php';
$ctl_acceso = 0;
if ($_POST['username']) {
//Comprobacion del envio del nombre de usuario y password
$username=$_POST['username'];
$password=$_POST['password'];
if ($password==NULL) {
echo "Password Invalido";
}else{
$query = mysqli_query($enlace, "SELECT username,password FROM users WHERE username = '$username'") or die(mysqli_error());
$data = mysqli_fetch_array($query);
if($data['password'] != $password) {
echo "Datos Incorrectos. Por Favor Intenta De Nuevo.";
}else{
$query = mysqli_query($enlace,"SELECT username,password FROM users WHERE username = '$username'") or die(mysqli_error());
$row = mysqli_fetch_array($query);
$_SESSION["s_username"] = $row['username'];
echo "Bienvenido <b>".$_SESSION['s_username']."</b> <a href=\"logout.php\">Cerrar Sesion</a>";
$ctl_acceso = 1;
}
}
}  
?>
<?php require 'info.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema de Inventarios</title>

<link href="menu.css" rel="stylesheet" type="text/css" />
<link href="form2.css" rel="stylesheet" type="text/css" />
</head>

<body>


<center>
<?php
if($ctl_acceso == 0) {
echo "<br><br><br><br> No Estas Autorizado, Por Favor Ingresa Tus Datos Para Acceder Al Sistema USR/PWD (Ejemplo: admin/admin).";
echo '<br />';
echo '<br />';
    // provee el formulario para hacer  log in
    echo "<form method=post action=\"res.php\">";
    echo "<table>";
    echo "<tr><td><b>Usuario:</b></td>";
    echo "<td><input type=text name=username></td></tr>";
    echo "<tr><td><b>Password:</b></td>";
    echo "<td><input type=password name=password></td></tr>";
    echo "<tr><td colspan=2 align=center><br>";
    echo "<input type=submit value=\"Ingresar\"></td></tr>";
    echo "</table></form>";
    $ctl_acceso = 0;
  }
else
{
include 'menuglobal.php'; 
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo "Bienvenido! Puedes Usar el Sistema.";
echo '<br />';
echo '<br />';
};
?>
</center>
</body>
</html>
