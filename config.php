<?php
	/*Realizada para la mejora del sitio web*/
	
    //Librerias requeridas
    include 'lib/html.php';
	include 'lib/facebook.php';
    //clase para la estructura del sitio web
    
    class Sitio  extends Html
    {    	
    	public $subsecciones = ""; // se utiliza para los link en subsecciones
    	public $otrosDatos = "";  // son datos agregados a cada funcion
    	public $adicional = ""; // se usa para algun dato adicional
    	public $tag = ""; //muestra los tag de los metatag
    	public $descripcion = ""; // muestra la descripcion del sitio;
    	public $link = array();
        public $title = ""; //muestra el title del sitio
        public $subtitulo = "";
       
        //constructor
        function Sitio() 
        {
        	parent::Html();
        }
		
		//genera los metadatos del sitio
		public function metadatos()
		{
			return "
        <meta name='Revisit' content='1 day'/>
        <meta name='Distribution' content='Global'/>
        <meta name='Robots' content='all'/>
        <meta http-equiv='Content-Language' content='es'/>
        <meta http-equiv='Content-Style-Type' content='text/css'/>
        <meta name='Title' content='InfraSoft Servicios Informaticos'/>
        <meta name='Author' content='Ariel Marcelo Diaz'/>  
        <meta name='keywords' content='".$this->tag."'/>
        <meta name='description' content='".$this->descripcion."'/>
        <link rel='canonical' href='http://infrasoft.com.ar/'/>
        <meta name='google-site-verification' content='5quw57-5vY5HJSCDwHIMxEJPkflMJHuVl0ATGqBrMJY' />
        <link href='https://plus.google.com/+InfrasoftAr/posts' rel='publisher'/>
        <link href='https://www.facebook.com/infrasofts' rel='publisher'/>
        <link href='https://twitter.com/infra_soft' rel='publisher'/>
        <meta name='google-site-verification' content='8Tu1UONSpU7Tn_Daju4hLzdjqNF4PHBpBkm7RFeusjs' />
        <!--[if lt IE 9]>
            <script src='http://html5shiv.googlecode.com/svn/trunk/html5.js'></script>
        <![endif]-->
        <!-- GOOGLE FONTS 
		<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>-->".
		$this->adicional;
		}
		
		// realiza la cabecera del sitio
		public function cabecera()
		{
			echo "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'
					'http://www.w3.org/TR/html4/loose.dtd'>
					<html xmlns='http://www.w3.org/1999/xhtml'>
    				<head>
        				<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
        				<title>".$this->title."</title>
        				<link rel='stylesheet' href='".$this->subsecciones."estilos/style.css' type='text/css' media='screen' />".	 
						$this->metadatos().
					"</head>";
		}
		
		//Muestra la cabecera de datos
		public function inicio()
		{
			echo "<body>
        <!-- HEADER -->
			<div id='header'>
            <!-- wrapper-header -->
				<div class='wrapper'>
					<a href='index.html'>
                        <img id='logo' src='".$this->subsecciones."imagenes/logo.png' alt='Alquileres Abel Madrazo' />
                    </a>
                </div>
            </div>";
		}
		
		//muestra el menu del sitio
		public function menu()
		{
			$inicio = "<!-- Menu -->
				<div id='menu'>
				<!-- ENDS menu-holder -->
				<div id='menu-holder'>
					<!-- wrapper-menu -->
					<div class='wrapper'>
						<!-- Navigation -->";
			$fin = "<!-- Navigation -->
					</div>
					<!-- wrapper-menu -->
				</div>
				<!-- ENDS menu-holder -->
			</div>
			<!-- ENDS Menu -->";
			$subtexto = new Html;
			$subtexto->class = "subheader";
			$subtexto->etiqueta = "span";
			$link = new Html;
			$menu = new Html;			
			$menu->id = "nav";
			$menu->class = "sf-menu";
				
				$link->url = "index";
				$subtexto->texto="Inicio";
				$link->texto = "Casa en Villa Don Carlos ".$subtexto->etiqueta();
				$menu->vector[] = $link->hipervinculo();
				
				$link->url = "galerias.php";
				$subtexto->texto="Galerias";
				$link->texto = "Galerias".$subtexto->etiqueta();
				$menu->vector[] = $link->hipervinculo(); 
				
				$link->url = "promociones.php";
				$subtexto->texto="Promociones";
				$link->texto = "Promociones".$subtexto->etiqueta();
				$menu->vector[] = $link->hipervinculo(); 
				
				$link->url = "contacto.php";
				$subtexto->texto="Contacto";
				$link->texto = "Contacto ".$subtexto->etiqueta();
				$menu->vector[] = $link->hipervinculo();
			
			echo $inicio.$menu->listas().$fin;
		}

	//genera el main del sitio
	public function main()
	{
		echo "<!-- MAIN -->
			<div class='main'>
				<!-- wrapper-main -->
				<div class='wrapper'>					
					<!-- content -->
					<div id='content'>";
	}
	
	//muestra los titulos
	public function titulos()
	{	
		$this->etiqueta = "div";
		$this->id="page-title";
			$titulo= new Html;
			$titulo->etiqueta = "span";
			$titulo->texto = $this->title;
			$titulo->class = "title";
		$this->texto = $titulo->etiqueta();
			$titulo->class = "subtitle";
			$titulo->texto = $this->subtitulo;
		$this->texto .= $titulo->etiqueta();
		echo $this->etiqueta();
	}
	
	//genera los correspondientes submenu
	public function cuerpo()
	{
		$this->id="cuerpo";
		$this->class = "cuerpo";
		$this->etiqueta = "div";
		echo $this->etiqueta();
	}
	
	//genera la galeria de imageneres
	public function galeria()
	{
		return "<div id='slider-block'>
				<div id='slider-holder'>
					<div id='slider'>".
					$this->texto.
				"</div>
				</div>
			</div>";
	}
	
	//genera el cierre del sitio
	public function mainEnd()
	{
		echo "</div>
					<!-- ENDS content -->

				</div>
				<!-- ENDS wrapper-main -->
			</div>
			<!-- ENDS MAIN -->";
	}
	
	// genera el pie del sitio web
	public function pie()
	{
		echo "<!-- FOOTER -->
			<div id='footer' class='footer'>
				<!-- wrapper-footer -->
				<div class='wrapper'>
					<!-- footer-cols -->
					<ul id='footer-cols'>
						<li class='col'>
							<h6>Enlaces Importantes</h6>
							<ul>
								<li class='page_item'>
                                    <a href='index.html'>
                                        Casa en villa Don Carlos
                                    </a>
                                </li>
								
								<li class='page_item'>
                                    <a href='gallery.html'>
                                        Promociones
                                    </a>
                               </li>
								<li class='page_item'><a href='contact.html'>Contacto</a></li>
							</ul>
						</li>
						
						<li class='col'>
							<h6>Categorias</h6>
							<ul>
								<li><a href='#'>Galerias de Fotos</a></li>
								<li><a href='#/'>Promociones</a></li>
								<li><a href='#'>Descripcion de servicios</a></li>								
							</ul>
						</li>
						<li class='col'>
							<h6>Sobre Nosotros</h6>
							texto - texto - texto - texto -texto - texto -texto - texto -texto - texto -texto - texto -
                            texto - texto -texto - texto -texto - texto -texto - texto -texto - texto -texto - texto -
						</li>
						
					</ul>
					<!-- ENDS footer-cols -->
				</div>
				<!-- ENDS wrapper-footer -->
				</div>
			
			<!-- ENDS FOOTER -->
		
			<!-- Bottom -->
			<div id='bottom'>
				<!-- wrapper-bottom -->
				<div class='wrapper'>
					<div id='bottom-text'>
                        <a href='http://infrasoft.com.ar'>
                            Infrasoft - Servicios informaticos - http://www.infrasoft.com.ar</a>
                        </div>
					<!-- Social -->
					<ul class='social'>
						<li><a href='http://www.facebook.com' class='poshytip  facebook' title='Pagina de Facebook'></a></li>
						<li><a href='http://www.twitter.com' class='poshytip twitter' title='Siguenos en Twitter'></a></li>					
						<li><a href='http://www.youtube.com' class='poshytip youtube' title='Ver el canal de videos'></a></li>
					</ul>
					<!-- ENDS Social -->
					<div id='to-top' class='poshytip' title='To top'></div>
				</div>
				<!-- ENDS wrapper-bottom -->
			</div>
			<!-- ENDS Bottom -->
		
	</body>
</html>";
	}
    }
    
?>