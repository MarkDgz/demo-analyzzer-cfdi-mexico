<?   

	//DATOS DEL PROGRAMA==================================
	//$CLIENTE= "MS Solutions" ;
	//$SISTEMA = "Analyzzer CFDI Jr. + Inventarios" ;
	//$VERSION = "Version 2.0 MS Solutions" ;
	//$NICK = "Por Lic. Marco A. Dominguez" ;
	//========================================================

session_start();   
if(!isset($_SESSION['s_username']))header("location: res.php");  
echo "Bienvenido <b>".$_SESSION['s_username']."</b> <a href=\"logout.php\">Cerrar Sesion</a>";  
?>
<?php require 'info.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>Demo Analyzzer Tools para CFDI + Sistema de Inventarios</title>

<link href="menu.css" rel="stylesheet" type="text/css" />
<link href="form2.css" rel="stylesheet" type="text/css" />

<style type="text/css">
	#contenedor {
			position: relative;
			width: 95%;
			height: 75%;
			margin-top: 35px;
			margin: 15px;
			padding: 5px;
			z-index: 0;
box-shadow: 0px 0px 8px 5px rgba(226, 219, 260, 0.95);
-moz-box-shadow: 0px 0px 8px 5px rgba(226, 219, 260, 0.95);
-webkit-box-shadow: 0px 0px 8px 5px rgba(226, 219, 260, 0.95);			
-webkit-border-radius: 7px;
-moz-border-radius: 7px;
border-radius: 7px;
		}
</style>

</head>

<body>

<?php include 'menuglobal.php'; ?>  
<br>
<!-- 
<div id="contenedor">

</div>
 -->

</body>
</html>
