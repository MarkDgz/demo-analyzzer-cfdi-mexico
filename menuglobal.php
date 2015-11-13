<?php
	//DATOS DEL PROGRAMA==================================
	//$CLIENTE= "MS Solutions" ;
	//$SISTEMA = "Analyzzer CFDI Jr. + Inventarios" ;
	//$VERSION = "Version 2.0 MS Solutions" ;
	//$NICK = "Por Lic. Marco A. Dominguez" ;
	//========================================================
?>

<div id="principal">
  <div id="cabecera"> 
    <div id="titulo"> 
      <center>
      <h1 class="button2">Demo Analyzzer CFDI Jr. + Inventarios</h1>
      </center>
    </div>
  </div>
</div>  
<div id="menu">
	<ul>
	<li><a href="/Demo/Jr/index.php" class="button">Inicio</a> 
	</li>
	<li><a href="#" class="button">Proceso de Carga</a>
		<ul>
<!--         		<li><a href="/Demo/Jr/FactElec/test1.php" class="button3">Subir XML a Servidor test1</a></li>
        		<li><a href="http://tne.com.mx/WebTools/LFileMan/index.php" class="button3" target="">Subir XML a Servidor ftp sw</a></li>
        		<li><a href="/Demo/Jr/FactElec/cargar_fact.php" class="button3">Carga Vieja</a></li>
 -->
        		<li><a href="/Demo/Jr/FactElec/cargar_xml.php" class="button3">Cargar XML a B.D.</a></li>
        		<li><a href="/Demo/Jr/FactElec/resumen_doctos.php" class="button3">Resumen de Cifras de Carga</a></li>
        		<li><a href="/Demo/Jr/Buscar/buscar_xml.php" class="button3">Buscar Archivos Cargados</a></li>
        		<li><a href="/Demo/Jr/Buscar/buscar_xml2.php" class="button3">Consecutivo de Documentos</a></li>
        	</ul>
        </li> 
        <li><a href="#" class="button">Cat&aacute;logos</a> 
        	<ul>
        		<li><a href="/Demo/Jr/Buscar/buscar_xml2.php" class="button3">Documentos Cargados</a></li>
			   <li><a href="/Demo/Jr/Buscar/buscar_cli_mes.php" class="button3">Facturaci&oacute;n Clientes</a></li>
        		<li><a href="/Demo/Jr/Buscar/buscar_prov_mes.php" class="button3">Facturaci&oacuten Proveedores</a></li>
        		<li><a href="/Demo/Jr/Buscar/buscar_art_c.php" class="button3">Art&iacute;culos Cliente</a></li>
        		<li><a href="/Demo/Jr/Buscar/buscar_art_p.php" class="button3">Art&iacute;culos Proveedor</a></li>
        		<li><a href="/Demo/Jr/Buscar/buscar_art.php" class="button3">Buscar Todos los Art&iacute;culos</a></li>
        	</ul>
        <li><a href="#" class="button">Consultas</a> 
        	<ul>
			<li><a href="/Demo/Jr/Buscar/buscar_cli_art.php" class="button3">Consumo de Clientes</a></li>
			<li><a href="/Demo/Jr/Buscar/buscar_cli_art_mes.php" class="button3">Importes Consumo Anualizado de Clientes</a></li>
			<li><a href="/Demo/Jr/Buscar/buscar_cli_art_mesc.php" class="button3">Cantidades Consumo Anualizado de Clientes</a></li>
		</ul>	
	</li>

    <li><a href="#" class="button">Art&iacute;culos</a> 
      <ul>
        <li><a href="/Demo/Jr/Registros/r_articulos.php" class="button3">Nuevo Articulo</a></li>
		<li><a href="/Demo/Jr/Registros/nuevo_ingreso.php" class="button3">Ingreso De Articulos</a></li>
		<li><a href="/Demo/Jr/Registros/nueva_salida.php" class="button3">Salida De Articulos</a></li>
		<li><a href="/Demo/Jr/Movimientos/movimiento_compu.php" class="button3">Ver Movimientos</a></li>
		<li><a href="/Demo/Jr/Borrar/borrar_movimiento.php" class="button3">Borrar Movimientos</a></li>
		<li><a href="/Demo/Jr/Buscar/buscar_art.php" class="button3">Buscar Articulos</a></li>
		<li><a href="/Demo/Jr/Borrar/borrar_art.php" class="button3">Borrar Articulos</a></li>
        </ul>
    </li>
	<li><a href="#" class="button">Ventas Y Servicios </a> 
      <ul>
        <li><a href="/Demo/Jr/Registros/mov.php" class="button3">Ventas Y Servicios</a></li>
		<li><a href="/Demo/Jr/Registros/abono.php" class="button3">Abonos</a></li>
		<li><a href="/Demo/Jr/Movimientos/movimiento_abono.php" class="button3">Ver Abonos</a></li>
		<li><a href="/Demo/Jr/Borrar/borrar_vs.php" class="button3">Borrar Movimientos</a></li>
		<li><a href="/Demo/Jr/Registros/act_valor.php" class="button3">Actualizar Precio Base</a></li>
       </ul>
   	 </li>
 		<li><a href="#"class="button">Kardex</a> 
      <ul>
	    <li><a href="/Demo/Jr/Kardex/kardex.php" class="button3">Kardex Diario</a></li>
        <li><a href="/Demo/Jr/Kardex/kardex_semanal.php" class="button3">Kardex Semanal</a></li>
		<li><a href="/Demo/Jr/Kardex/kardex_quince.php" class="button3">Kardex Quincenal</a></li>
		<li><a href="/Demo/Jr/Kardex/kardex_mensual.php" class="button3">Kardex Mensual</a></li>
		<li><a href="/Demo/Jr/Kardex/kardex_tipo.php" class="button3">Kardex Movimiento</a></li>
	 </ul>
    </li>

	<li><a href="#" class="button">Soporte</a> 
		<ul>
			<li><a href="#" class="button3">Ayuda</a></li>
			<li><a href="#" class="button3">Soporte on Line</a></li>
		</ul>
	</li>
	<li><a href="/Demo/Jr/creditos.php" class="button">Acerca De</a> 
	</li>
    </ul>
</div>
<?
/*
if($data['password'] != $password) {}
else{
echo "Bienvenido <b>".$_SESSION['s_username']."</b> <a href=\"logout.php\">Cerrar Sesion</a>";  
};
*/
echo "<br>";

?>
