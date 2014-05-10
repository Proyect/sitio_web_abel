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
$sitio->adicional="<link rel='stylesheet' href='estilos/craftyslide.css' />".
		$facebook->cabecera();
$sitio->cabecera();
$sitio->inicio();
$sitio->menu();
$sitio->main();

	$sitio->subtitulo="prueba de subtitulos";
	$sitio->titulos();
	
	$subMenu = new Html;
	$subMenu->class="izquierda";
	$subMenu->etiqueta="div";
	$subMenu->texto="<h2 class='header'>Instalaciones y servicios</h2>";
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
	$central->texto= "<h2>centro</h2>";
		$galeria = new Sitio;
			
			$galeria->url="imagenes/casa/P1030727.jpg";
			$galeria->otros="title='casa 1'";
			$galeria->texto=$galeria->imagen();
			
			$galeria->url="imagenes/casa/P1030727.jpg";
			$galeria->otros="title='casa 2'";
			$galeria->texto.=$galeria->imagen();
			
			
			
	$central->texto .= $galeria->galeria().
						$facebook->recomendacion().
						$facebook->like().
						$facebook->comentario();
			
	$sitio->texto .= $central->etiqueta();
	
	$sitio->cuerpo();
$sitio->mainEnd();
$sitio->pie();
?>