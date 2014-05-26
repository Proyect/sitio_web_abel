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
$sitio->adicional="<link rel='stylesheet' type='text/css' href='shadowbox.css'>
<script type='text/javascript' src='shadowbox.js'></script>
<script type='text/javascript'>
Shadowbox.init();
</script>".
					$facebook->cabecera();
$sitio->cabecera();
$sitio->inicio();
$sitio->menu();
$sitio->main();

	$sitio->subtitulo="Cabaña villa don Carlos";
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
			$galeria->texto =$galeria->imagen();
			$galeria->otros ="rel='shadowbox'";
	$central->texto .=		$galeria->hipervinculo();
			
			$galeria->url="imagenes/casa/P1030727.jpg";
			$galeria->otros="title='casa 2'";
			$galeria->texto =$galeria->imagen();
			$galeria->otros ="rel='shadowbox'";
	$central->texto .=		$galeria->hipervinculo();
			
						
			
	$central->texto .= 	$facebook->recomendacion().
						$facebook->like().
						$facebook->comentario();
			
	$sitio->texto .= $central->etiqueta();
	
	$sitio->cuerpo();
$sitio->mainEnd();
$sitio->pie();
?>