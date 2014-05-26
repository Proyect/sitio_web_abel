<?php

//librerias incluidas
include 'config.php';   

// variables globales
$facebook= new Facebook;
$facebook->link="promociones.php";

$pref = "";
$vectorImg = array();

$sitio=new Sitio; 
$sitio->title="Abel Madrazo Alquila";
$sitio->adicional="<link rel='stylesheet' href='estilos/adicional.css' type='text/css' media='screen' />".
		$facebook->cabecera();
$sitio->cabecera();
$sitio->inicio();
$sitio->menu();
$sitio->main();

	$sitio->subtitulo="Contacto";
	$sitio->titulos();
	
	$subMenu = new Html;
	$subMenu->class="izquierda";
	$subMenu->etiqueta="div";
	$subMenu->texto="<h2 class='header'></h2>";
		$lista = new Html;
		$lista->id="sidebar";
		$lista->vector=array("Telefono:",
							  "Celular:",
							  "Direccion:",
							  "Redes sociales:");		
		$subMenu->texto.=$lista->listas();
	$sitio->texto=$subMenu->etiqueta();
	
	$central = new Html;
	$central->class="derecha";
	$central->etiqueta="div";
	$central->texto= "<h2>Promociones</h2>".
					"<!--Título-->";
		
			
	$central->texto .=	$facebook->recomendacion().
						$facebook->like().
						$facebook->comentario();
			
	$sitio->texto .= $central->etiqueta();
	
	$sitio->cuerpo();
$sitio->mainEnd();
$sitio->pie();
?>