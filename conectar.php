<?php
	//DATOS DEL PROGRAMA==================================
	//$CLIENTE= "MS Solutions" ;
	//$SISTEMA = "Analyzzer CFDI Jr. + Inventarios" ;
	//$VERSION = "Version 2.0 MS Solutions" ;
	//$NICK = "Por Lic. Marco A. Dominguez" ;
	//========================================================

//mysql_connect("localhost", "user", "pwd") OR DIE("No ha sido posible conectar a la tablay");
//@mysql_query("SET NAMES 'utf8'"); //solucion caracteres especiales como la �
//mysql_select_db("CRM")OR DIE("No ha sido posible conectar a la Base de Datosxx");

//<?php

//mysqli_connect("example.com","peter","abc123","my_db");
$enlace = mysqli_connect('localhost', 'user', 'pwd','data_base');
// 'cremv_db_admin', 'Pelicno','MS_BD_CremV'
// Check connection
if (mysqli_connect_errno())
  {
  echo "Falla al conectarse a MySQL: " . mysqli_connect_error();
  }

/*
if (!$enlace) {
    die('No se pudo conectar : ' . mysql_error());
}
// Hacer que foo sea la base de datos actual
$bd_seleccionada = mysql_select_db('tnecommx_CRM', $enlace);
if (!$bd_seleccionada) {
    die ('No se puede usar la base de datos xx: ' . mysql_error());
}
//?>
*/

?>
