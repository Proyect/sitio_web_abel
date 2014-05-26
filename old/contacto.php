<?php

//librerias incluidas
include 'config.php';   

// variables globales
$facebook= new Facebook;
$facebook->link="contacto.php";

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
		$lista->vector=array("<b>Telefono:</b> 3875123456",
							  "<b>Celular:</b> 3875123456",
							  "<b>Direccion:</b> Alvarado 1073",
							  "<b>Redes sociales:</b>");		
		$subMenu->texto.=$lista->listas();
		$subMenu->texto.="<iframe width='300' height='350' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://www.google.com.ar/maps?sll=-24.7905851,-65.4162199&amp;sspn=0.0027652977514412433,0.006102745637617416&amp;t=m&amp;q=Infrasoft,+Salta&amp;ie=UTF8&amp;hq=Infrasoft,&amp;hnear=Salta&amp;filter=0&amp;update=1&amp;ll=-24.790074,-65.410632&amp;spn=0.017139,0.013405&amp;output=embed'>
                    </iframe>";
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
		
		$formulario->id = "mail";
		$formulario->name = $formulario->id;
		$formulario->size = 30;
		$formulario->vector[] = array("Mail:", $formulario->input());
		
		$formulario->id = "asunto";
		$formulario->name = $formulario->id;
		$formulario->size = 25;
		$formulario->vector[] = array("Asunto:", $formulario->input());
		
		$formulario->type = "";
		
		$formulario->id = "comentarios";
		$formulario->name = $formulario->id;
		$formulario->otros = "COLS=25 ROWS=12";
		$formulario->size = 25;
		$formulario->vector[] = array("Comentarios:", $formulario->textarea());
		$formulario->otros = "";
		
		$formulario->id = "contacto";
		$formulario->name = $formulario->id;
		$formulario->class = "form";
		$formulario->url = "lib/mail.php";
		
		$formulario->class = "form";
		$formulario->size = "";
	$central->texto .=$formulario->form();
		
	$central->texto .=	$facebook->recomendacion().
						$facebook->like().
						$facebook->comentario();
			
	$sitio->texto .= $central->etiqueta();
	
	$sitio->cuerpo();
$sitio->mainEnd();
$sitio->pie();
?>