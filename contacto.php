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
	$central->texto = "<h2>contacto</h2>";
		
		$formulario = new Html;
		$formulario->type = "text";
		$formulario->class = "edt";
		
		$formulario->id = "apellido";
		$formulario->name = $formulario->id;
		$formulario->size = 25;		
		$formulario->vector[] = array("Apellido:", $formulario->input());
		
		$formulario->id = "nombre";
		$formulario->name = $formulario->id;
		$formulario->size = 30;
		$formulario->vector[] = array("Nombre:", $formulario->input());
		
		$formulario->id = "direccion";
		$formulario->name = $formulario->id;
		$formulario->size = 25;
		$formulario->vector[] = array("Direccion:", $formulario->input());
		
		$formulario->id = "telefono";
		$formulario->name = $formulario->id;
		$formulario->size = 15;
		$formulario->vector[] = array("Telefono:", $formulario->input());
		
		$formulario->id = "celular";
		$formulario->name = $formulario->id;
		$formulario->size = 15;
		$formulario->vector[] = array("Celular:", $formulario->input());
		
		$formulario->id = "asunto";
		$formulario->name = $formulario->id;
		$formulario->size = 25;
		$formulario->vector[] = array("Asunto:", $formulario->input());
		
		$formulario->type = "";
		
		$formulario->id = "comentarios";
		$formulario->name = $formulario->id;
		$formulario->size = 25;
		$formulario->vector[] = array("Comentarios:", $formulario->textarea());
		
		$formulario->id = "contacto";
		$formulario->name = $formulario->id;
		$formulario->class = "form";
		$formulario->url = "lib/mail.php";
		
		$formulario->class = "btn";
	$central->texto .=$formulario->form();
		
	$central->texto .=	$facebook->recomendacion().
						$facebook->like().
						$facebook->comentario();
			
	$sitio->texto .= $central->etiqueta();
	
	$sitio->cuerpo();
$sitio->mainEnd();
$sitio->pie();
?>