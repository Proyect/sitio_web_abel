<?php
/*************************************
 *****Libreria de redes sociales********
 
 
 *Autor: Ariel Marcelo Diaz
 *Email: ariel@infrasoft.com.ar
*Sitio Web: http://www.infrasoft.com.ar 
****************************************/ 

// Funciones para Facebook
class Facebook
{   //instancias
    public $opcion=1;
    public $sitio="http://infrasoft.com.ar/";
    public $link="";
    public $post = 7;
    public $align="right";
    public $id=163286520396895;
    
    //muestra el link completo del sitio
    function web()
    {
        return $this->sitio.$this->link;
    }
    
    // funcion Like
    function like()
    {        
        if($this->opcion == 1)
        {
            return "<div class='fb-like' 
                    data-href='".$this->web()."' 
                    data-layout='standard' 
                    data-action='like' 
                    data-show-faces='false' 
                    data-share='true'></div>";
        }
        else
        {
            echo  "<div class='fb-like'
                    data-href='".$this->web."'
                    data-layout='standard' 
                    data-action='like' 
                    data-show-faces='false' 
                    data-share='true'></div>";
        }
    }

    //funcion comentario
    function comentario()
    {
        if($this->opcion == 1)
        {            
                return "<div class='fb-comments' 
                            data-href='".$this->web()."'
                            data-numposts='".$this->post."' 
                            data-colorscheme='light'></div>";
            
        }
        else
        {            
                echo "<div class='fb-comments' 
                            data-href='".$this->web()."'
                            data-numposts='".$this->post."' 
                            data-colorscheme='light'></div>";           
        } 
    }
    
    // funcion de recomendacion
    function recomendacion()
    {
        $var="<div class='fb-recommendations-bar' 
                data-site='".$this->web()."' 
                data-read-time='30' 
                data-side='right' 
                data-action='recommend'></div>";
        if($this->opcion==1)
        {
            return $var;
        }
        else
        {
            echo $var;
        }
    }
    
    //funciones para la cabecera
    function cabecera()
    {
        $var = "<div id='fb-root'></div>
                    <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = '//connect.facebook.net/es_LA/all.js#xfbml=1';
                        fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    </script>";
                    
        if($this->opcion==1)
        {
            return $var;
        }
        else
        {
            echo $var;
        }
    }
}
?>
