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

function generaGaleria($vector)
{
    $vector = cambioVector($vector);
    $vector2 = array();
	$imagen=new Html;
	$imagen->id="galeriaImg";
    foreach($vector as $i)
    {
        //$vector2[] = muestraImagen($i[0], "galeriaImg", "alt='$i[1]' title='$i[2]'");
        $imagen->alt=$i[1];
		$imagen->otros="title='".$i[2]."'";
		$imagen->url=$i[0];
		$vector2[] = $imagen->imagen();
    }       
    
    return "<div id='slideshow'>".
                genLista2($vector2 , "","").
            "</div>
            <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js'></script>
            <script src='script/craftyslide.min.js'></script>
      
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
?>