<?php

<<<<<<< HEAD
/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * current environment. Setting the environment also influences
 * things like logging and error reporting.
 *
 * This can be set to anything, but default usage is:
 *
 *     development
 *     testing
 *     production
 *
 * NOTE: If you change these, also change the error_reporting() code below
 *
 */
	define('ENVIRONMENT', 'development');
/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but testing and live will hide them.
 */

if (defined('ENVIRONMENT'))
{
	switch (ENVIRONMENT)
	{
		case 'development':
			error_reporting(E_ALL);
		break;
=======
//librerias incluidas
include 'config.php';   
include "lib/libGalerias.php";
// variables globales
$facebook= new Facebook;
	$facebook->link="";

$galeria = new Galeria;
	$galeria->sub = "imagenes/casa/";
	$galeria->vector=array(array("P1030727.jpg","Vista desde el patio","Casa villa don carlos"),
							array("P1030728.jpg","no se","provando"),
							array("P1030729.jpg","no se","provando"),
							array("P1030730.jpg","no se","provando"),
							array("P1030731.jpg","no se","provando"),
							array("P1030732.jpg","no se","provando"),
							array("P1030733.jpg","no se","provando"),
							array("P1030734.jpg","no se","provando"),
							array("P1030735.jpg","no se","provando"),							
							array("P1030737.jpg","no se","provando"),
							array("P1030738.jpg","no se","provando"),
							array("P1030739.jpg","no se","provando"),
							array("P1030740.jpg","no se","provando"),
							array("P1030741.jpg","no se","provando"),
							array("P1030742.jpg","no se","provando"),
							array("P1030743.jpg","no se","provando"),	
							array("P1030744.jpg","no se","provando"),
							array("P1030745.jpg","no se","provando"),						
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
>>>>>>> 77753dab3be756908fe6512060aa6d8c7edd4708
	
		case 'testing':
		case 'production':
			error_reporting(0);
		break;

		default:
			exit('The application environment is not set correctly.');
	}
}

/*
 *---------------------------------------------------------------
 * SYSTEM FOLDER NAME
 *---------------------------------------------------------------
 *
 * This variable must contain the name of your "system" folder.
 * Include the path if the folder is not in the same  directory
 * as this file.
 *
 */
	$system_path = 'system';

/*
 *---------------------------------------------------------------
 * APPLICATION FOLDER NAME
 *---------------------------------------------------------------
 *
 * If you want this front controller to use a different "application"
 * folder then the default one you can set its name here. The folder
 * can also be renamed or relocated anywhere on your server.  If
 * you do, use a full server path. For more info please see the user guide:
 * http://codeigniter.com/user_guide/general/managing_apps.html
 *
 * NO TRAILING SLASH!
 *
 */
	$application_folder = 'application';

/*
 * --------------------------------------------------------------------
 * DEFAULT CONTROLLER
 * --------------------------------------------------------------------
 *
 * Normally you will set your default controller in the routes.php file.
 * You can, however, force a custom routing by hard-coding a
 * specific controller class/function here.  For most applications, you
 * WILL NOT set your routing here, but it's an option for those
 * special instances where you might want to override the standard
 * routing in a specific front controller that shares a common CI installation.
 *
 * IMPORTANT:  If you set the routing here, NO OTHER controller will be
 * callable. In essence, this preference limits your application to ONE
 * specific controller.  Leave the function name blank if you need
 * to call functions dynamically via the URI.
 *
 * Un-comment the $routing array below to use this feature
 *
 */
	// The directory name, relative to the "controllers" folder.  Leave blank
	// if your controller is not in a sub-folder within the "controllers" folder
	// $routing['directory'] = '';

	// The controller class file name.  Example:  Mycontroller
	// $routing['controller'] = '';

	// The controller function you wish to be called.
	// $routing['function']	= '';


/*
 * -------------------------------------------------------------------
 *  CUSTOM CONFIG VALUES
 * -------------------------------------------------------------------
 *
 * The $assign_to_config array below will be passed dynamically to the
 * config class when initialized. This allows you to set custom config
 * items or override any default config values found in the config.php file.
 * This can be handy as it permits you to share one application between
 * multiple front controller files, with each file containing different
 * config values.
 *
 * Un-comment the $assign_to_config array below to use this feature
 *
 */
	// $assign_to_config['name_of_config_item'] = 'value of config item';



// --------------------------------------------------------------------
// END OF USER CONFIGURABLE SETTINGS.  DO NOT EDIT BELOW THIS LINE
// --------------------------------------------------------------------

/*
 * ---------------------------------------------------------------
 *  Resolve the system path for increased reliability
 * ---------------------------------------------------------------
 */

	// Set the current directory correctly for CLI requests
	if (defined('STDIN'))
	{
		chdir(dirname(__FILE__));
	}

	if (realpath($system_path) !== FALSE)
	{
		$system_path = realpath($system_path).'/';
	}

	// ensure there's a trailing slash
	$system_path = rtrim($system_path, '/').'/';

	// Is the system path correct?
	if ( ! is_dir($system_path))
	{
		exit("Your system folder path does not appear to be set correctly. Please open the following file and correct this: ".pathinfo(__FILE__, PATHINFO_BASENAME));
	}

/*
 * -------------------------------------------------------------------
 *  Now that we know the path, set the main path constants
 * -------------------------------------------------------------------
 */
	// The name of THIS file
	define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

	// The PHP file extension
	// this global constant is deprecated.
	define('EXT', '.php');

	// Path to the system folder
	define('BASEPATH', str_replace("\\", "/", $system_path));

	// Path to the front controller (this file)
	define('FCPATH', str_replace(SELF, '', __FILE__));

	// Name of the "system folder"
	define('SYSDIR', trim(strrchr(trim(BASEPATH, '/'), '/'), '/'));


	// The path to the "application" folder
	if (is_dir($application_folder))
	{
		define('APPPATH', $application_folder.'/');
	}
	else
	{
		if ( ! is_dir(BASEPATH.$application_folder.'/'))
		{
			exit("Your application folder path does not appear to be set correctly. Please open the following file and correct this: ".SELF);
		}

		define('APPPATH', BASEPATH.$application_folder.'/');
	}

/*
 * --------------------------------------------------------------------
 * LOAD THE BOOTSTRAP FILE
 * --------------------------------------------------------------------
 *
 * And away we go...
 *
 */
require_once BASEPATH.'core/CodeIgniter.php';

/* End of file index.php */
/* Location: ./index.php */
