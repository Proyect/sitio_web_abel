<?php

//librerias incluidas
include 'config.php';   
include "lib/libGalerias.php";
// variables globales
$facebook= new Facebook;
	$facebook->link="";

$galeria = new Galeria;
	$galeria->sub = "imagenes/casa/";
	$galeria->vector=array(array("P1030727.jpg","Vista desde el patio","Casa villa don carlos"),
							array("P1030728.jpg","no se","provando")							
						);
	
$sitio=new Sitio; 
$sitio->title="Abel Madrazo Alquila";
$sitio->adicional="<link rel='stylesheet' href='estilos/adicional.css' type='text/css' media='screen' />
					<link rel='stylesheet' href='estilos/craftyslide.css' />".
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
	$central->texto= "<h2>Cabaña Villa Don Carlos</h2>";
		
	$central->texto .=	$galeria->generaGaleria();
		/*	$galeria->url="imagenes/casa/P1030727.jpg";
			$galeria->otros="title='casa 1'";
			$galeria->texto =$galeria->imagen();
			$galeria->otros ="rel='shadowbox'";
	$central->texto .=		$galeria->hipervinculo();
			
			$galeria->url="imagenes/casa/P1030727.jpg";
			$galeria->otros="title='casa 2'";
			$galeria->texto =$galeria->imagen();
			$galeria->otros ="rel='shadowbox'";
	$central->texto .=		$galeria->hipervinculo();*/
	
	$central->texto .=	"  <!--Contenedor-->
 <div id='contenedor'>
 
  <!--Pestaña 1 activa por defecto-->
  <input id='tab-1' type='radio' name='tab-group' checked='checked' />
  <label for='tab-1'>Descripcion</label>
  <!--Pestaña 2 inactiva por defecto-->
  <input id='tab-2' type='radio' name='tab-group' />
  <label for='tab-2'>Ubicacion</label>
  <!--Pestaña 3 inactiva por defecto-->
  <input id='tab-3' type='radio' name='tab-group' />
  <label for='tab-3'>Precios</label>
  <!--Contenido a mostrar/ocultar-->
  
  <div id='contentido'>
   <!--Contenido de la Pestaña 1-->
   <div id='contentido-1'>
   	<p>Se encuentra a 17 km desde el centro de la ciudad de Salta y a 7 km del 
			aeropuerto, sobre ruta 51 capacidad hasta 12 personas.</p>
			
			<p>La casa cuenta con 2 habitaciones, 2 camas matrimoniales y 4 cuchetas,
			 ademas de ropa de cama y toallas. Posee 5 baños completos.</p>
			 
			 <p>Cocina con heladera, microondas, horno a gas, asador, vajilla completa,
			  dispenser de agua.</p>
			  
			  <p>Aire acondicionado y calefaccion en todos los ambientes, Tv en cada habitacion.
			   (DIREC TV) Mesa de Pool, metegol, juego del sapo, mesa de ping pong, Wi Fi,
			    cancha de futbol y voley con iluminacion.</p>
			    
			    <p>Estacionamiento para 4 vehiculos, horno de barro, pileta.</p> 
   </div>
   
   <!--Contenido de la Pestaña 2-->
   <div id='contentido-2'>
   		<p>Cada vez más gente elige esta localidad para alejarse del mundanal ruido y
				 alcanzar un estado de paz y tranquilidad. Su edificación es capaz de combinar 
				 la arquitectura de fincas antiguas con modernas casas de campo que supieron 
				 conservar el estilo colonial. Además de comidas típicas y artesanías locales, 
				 San Luis propone un amplio abanico de actividades alternativas como cabalgatas,
				  trekking y diversas propuestas recreativas para el turismo, donde el visitante
				   gozará del tiempo libre y sabrá qué hacer con él.</p>
    </div>
    
   <!--Contenido de la Pestaña 3-->
   <div id='contentido-3'>
   </div>
  </div>
 </div>";
				   				
		
	$central->texto .= 	$facebook->recomendacion().
						$facebook->like().
						$facebook->comentario();
			
	$sitio->texto .= $central->etiqueta();
	
	$sitio->cuerpo();
$sitio->mainEnd();
$sitio->pie();
?>