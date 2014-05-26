<?php
/*************************************
 ***** Distribuidora RDY***********
 *Autor: Ariel Marcelo Diaz
 *Email: ariel@infrasoft.com.ar
*Sitio Web: http://www.infrasoft.com.ar 
****************************************/ 

// librerias requeridas 
/* LibHtml */

// Esta libreria genera diferentes tipos de galerias de imagenes

class Galeria extends Html
{
	function generaGaleria()
	{
    	$this->vector = $this->cambioVector($this->vector);
    	$this->vector2 = array();		
		$this->id="galeriaImg";
    	foreach($this->vector as $i)
    	{        	
        	$this->alt = $i[1];
			$this->title = $i[2];
			$this->url=$i[0];
			$this->vector2[] = $this->imagen();
    	}       
    	$this->vector=$this->vector2;
		$this->alt = "";
		$this->title = "";
		$this->id ="";
    	return "<div id='slideshow'>".
                $this->listas().
            "</div>
            <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js'></script>
            <script src='js/craftyslide.min.js'></script>
      
            <script>
                $('#slideshow').craftyslide();
            </script>";
	}

	// intercambia los elementos de un vector
	function cambioVector($array)
	{
    	$cant = count($array)-1;    
    	$aux = "";
    	for($i=0;$i<$cant;$i++)
    	{
        	 $j = rand(0, $cant);
       		 $aux = $array[$j];
       		 $array[$j] = $array[$i];
       		 $array[$i] = $aux;
    	}    
    	return $array;
	}
}
?>