<?php
// genera el html de manera automatica
    //Librerias requeridas
    /**
     * 
     */
    class Html 
    {//instancias
    	public $id = "";
		public $name = "";
		public $alt = "";
		public $class = "";
		public $otros = "";
		public $otros2 = "";
		public $url ="";
		public $sub ="";		
		public $texto = "";
		public $vector = array();
		public $vector2 = array();
		public $etiqueta = "";
		public $size = "";
		public $maxlength = "";
		public $type = "";
		public $pagina = "";
        
		//constructor
        function Html() 
		 {
		 	$this->url = $this->sub.$this->url;			
		 }
		 
		private function condicion()
		{
			$var = " ";
			if($this->id != "")
			{
				$var .=	"id='".$this->id."' ";	
			}
			
			if($this->name != "")
			{
				$var .=	"name='".$this->name."' ";				
			}
			
			if($this->class != "")
			{
				$var .=	"class='".$this->class."' ";	
			}
			
			if($this->alt != "")
			{
				$var .= "alt='".$this->alt."' ";
			}
			
			$var .= $this->otros;
			return $var;
		}
		
		//genera una imagen
		public function imagen()
		{
			return "<img src='".$this->sub.$this->url."' ".$this->condicion()."/>\n";
		}
		
		//genera un hipervnculo 
		public function hipervinculo()
		{
			return "<a href='".$this->sub.$this->url."' ".$this->condicion().">".
						$this->texto.
					"</a>\n";
		}
		
		//genera un mensaje con una etiqueta
		public function etiqueta()
		{
			return "<".$this->etiqueta.$this->condicion().">".$this->texto."</".$this->etiqueta.">";
		}
		
		//genera las listas 
		public function listas()
		{
			$var = "<ul".$this->condicion().">\n";
			foreach($this->vector as $i)
        	{
            	$var .= "<li>$i</li>\n";
        	}
			$var .= "</ul>\n";
			return $var;
		}
		
		//genera una tabla
		public function tabla()
		{
			$var =  "<table".$this->condicion().">\n";
			if ($this->otros2 != null)
			{
				$var .= "<tr ".$this->otros2.">\n";
				foreach($this->vector2 as $j)
        		{
           			 $var .= "<td>$j</td>\n";
        		}
				$var .= "</tr>\n";
			}
			foreach($this->vector as $i)
        	{
            	$var .= "<tr>\n";
            	foreach($i as $j)
            	{
                	$var .= "<td>$j</td>\n";
            	}
            	$var .= "</tr>\n";
        	}
			$var .= "</table>\n";
			return $var;			
		}
		
		//genera las condiciones para los formularios
		public function condFormularios()
		{
			$var = " ";
			if ($this->maxlength != null) 
			{
				$var .= "maxlength='".$this->maxlength."' ";
			}
			if ($this->size != null) 
			{
				$var .= "size='".$this->size."px' ";
			}
			if ($this->type != null) 
			{
				$var .= "type='".$this->type."' ";
			}
			return $var;
		}
		
		//genera una text area
		public function textarea()
		{
			return "<textarea".$this->condicion().$this->condFormularios().">\n".
						$this->texto.
					"</textarea>\n";			
		}
		
		//genera un select
		public function select()
		{
			$var = "<select".$this->condicion().$this->condFormularios().">\n";
			foreach ($this->vector as $i)
			{
				$var .= "<option value='$i'>$i</option>\n";
			}
			$var .= "</select>\n";
			return $var;
		}
		
		//genera un input
		public function input()
		{
			return "<input".$this->condicion()." ".$this->condFormularios()."/>\n";			
		}
		
		//genera un formulario
		public function form()
		{
			$var = "<form".$this->condicion()." ".
							$this->condFormularios().
							" action='".$this->sub.$this->url."'>\n";
			$this->class = "btn";
			$this->type="reset";
			$this->name="Borrar";
			$borrar = $this->input();
			$this->type="submit";
			$this->name="Enviar";
			$enviar = $this->input();
			$this->vector[] = array($borrar,$enviar);
			$var .= $this->tabla();
			return $var."</form>\n";
		}
    }
    
?>