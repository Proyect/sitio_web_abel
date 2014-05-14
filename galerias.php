<?php

//librerias incluidas
include 'config.php';   

// variables globales
$facebook= new Facebook;
$facebook->link="";

$pref = "";
$vectorImg = array();

$sitio=new Sitio; 
$sitio->title="Abel Madrazo Alquila";
$sitio->adicional="".
		$facebook->cabecera();
$sitio->cabecera();
$sitio->inicio();
$sitio->menu();
$sitio->main();

	$sitio->subtitulo="Galerias";
	$sitio->titulos();
	
	$subMenu = new Html;
	$subMenu->class="izquierda";
	$subMenu->etiqueta="div";
	$subMenu->texto="<h2 class='header'></h2>";
		$lista = new Html;
		$lista->id="sidebar";
		$lista->vector=array("Ubicación:",
							  "Sup. total:",
							  "Sup. cubierta:",
							  "Capacidad:",
							  "Dormitorios:",
							  "Baños:",
							  "Piscina:",
							  "Jardín:",
							  "Entretenimiento",
							  "Admite eventos:",
							  "Mascotas",
							  "Cochera:",
							  "Estadía mínima");		
		$subMenu->texto.=$lista->listas();
	$sitio->texto=$subMenu->etiqueta();
	
	$central = new Html;
	$central->class="derecha";
	$central->etiqueta="div";
	$central->texto= "<h2>Galerias</h2>";
		
			
	$central->texto .=	$facebook->recomendacion().
						$facebook->like().
						$facebook->comentario();
			
	$sitio->texto .= $central->etiqueta();
	
	$sitio->cuerpo();
$sitio->mainEnd();
$sitio->pie();
?>