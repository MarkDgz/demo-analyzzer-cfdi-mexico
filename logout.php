<?  

	//DATOS DEL PROGRAMA==================================
	//$CLIENTE= "MS Solutions" ;
	//$SISTEMA = "Analyzzer CFDI Jr. + Inventarios" ;
	//$VERSION = "Version 2.0 MS Solutions" ;
	//$NICK = "Por Lic. Marco A. Dominguez" ;
	//========================================================

session_start();  
if(!isset($_SESSION['s_username'])){  
header("location: index.php");  
} else {  
session_unset();  
session_destroy();  
header("location: index.php");  
}  
?> 
<?php require 'info.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SIGFA</title>

<link href="menu.css" rel="stylesheet" type="text/css" />
<link href="form2.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="principal">

  <div id="cabecera"> 
    <div id="titulo"> 
      <center>
      <h1>Sistema de Inventarios Demo MS Solutions / TNE Mexico</h1>
      </center>
    </div>
  </div>
  
<div id="menu">
<ul>
   <li><a href="index.php">Inicio</a> 
    </li>
    <li><a href="#">Articulos</a> 
      <ul>
        <li><a href="Registros/r_articulos.php">Nuevo Articulo</a></li>
		<li><a href="Registros/nuevo_ingreso.php">Ingreso De Articulos</a></li>
		<li><a href="Registros/nueva_salida.php">Salida De Articulos</a></li>
		<li><a href="Movimientos/movimiento_compu.php">Ver Movimientos</a></li>
		<li><a href="Borrar/borrar_movimiento.php">Borrar Movimientos</a></li>
		<li><a href="Buscar/buscar_art.php">Buscar Articulos</a></li>
		<li><a href="Borrar/borrar_art.php">Borrar Articulos</a></li>
        </ul>
    </li>
	<li><a href="#">Ventas Y Servicios</a> 
      <ul>
        <li><a href="Registros/mov.php">Ventas Y Servicios</a></li>
		<li><a href="Registros/abono.php">Abonos</a></li>
		<li><a href="Borrar/borrar_vs.php">Borrar Movimientos</a></li>
		<li><a href="Registros/act_valor.php">Actualizar Precio Base</a></li>
       </ul>
    </li>
	<li><a href="#">Kardex</a> 
      <ul>
	    <li><a href="Kardex/kardex.php">Kardex Diario</a></li>
        <li><a href="Kardex/kardex_semanal.php">Kardex Semanal</a></li>
		<li><a href="Kardex/kardex_quince.php">Kardex Quincenal</a></li>
		<li><a href="Kardex/kardex_mensual.php">Kardex Mensual</a></li>
		<li><a href="Kardex/kardex_tipo.php">Kardex Movimiento</a></li>
	 </ul>
    </li>
	<li><a href="#">Copia De Seguridad</a> 
      <ul>
        <li><a href="Backup/backup.php">Realizar Copia</a></li>
        </ul>
    </li>
	<li><a href="creditos.php">Acerca De</a> 
    </li>
    </ul>
</div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
