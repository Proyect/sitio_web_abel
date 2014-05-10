<?php
/**********************************************
 *****Libreria para acceso a base de datos*****
 **********************************************
 *Autor: Ariel Marcelo Diaz
 *Email: ariel@infrasoft.com.ar
*Sitio Web: http://www.infrasoft.com.ar 
****************************************/ 
//clase para acceder a la base de datos
class SQL
{
	//instancias
	public $tabla = "";
	public $campos = "";
	public $valores = "";
	public $condicion = "";	 
	public $opcion = 0;
	public $estilo = "";
	public $id = "";
	public $muestra = "";
	public $predeterminado = "";
	
	
	
	// conecta a la base de datos
    function conectarbase() 
    {
        $dbhost = "localhost";
        $dbusername = "root"; 
        $dbpass = "";
        $dbname = "sistemazorrilladb";       
        // conectar con el servidor 
        $conexion = mysql_connect($dbhost,$dbusername,$dbpass) 
            or die("No se puede conectar al servidor");	
        // Seleccionar la bd
        mysql_select_db($dbname)
            or die ("No se puede seleccionar la base de datos");         
        return $conexion;        
    }
	
	 //Realiza una consulta basica
	 //$conexion, $tabla, $campos, $condicion
    function consulSQLbasica()
    {
        if($this->condicion == "" )
        {
            $query = "SELECT ".
                      $this->campos.
                      " FROM ".
                      $this->tabla.";";            
        }
        else
        {
            $query = "SELECT ".
                    $this->campos.
                    " FROM ".
                    $this->tabla.
                    " WHERE ".
                    $this->condicion.";";            
        }
        //echo $query;
        $consulta = mysql_query($query, $this->conectarbase())
            or die("Fallo en la consulta");
        return $consulta;
    }
	
	// Realiza una consulta basica y devuelve el array
    function consultaSQLbasicaRow()
    {
        $consulta = $this->consulSQLbasica();
        $row = mysql_fetch_array($consulta);
        return $row;
    }
	
	// Realiza la insercion de datos
	//$conexion,$tabla, $campos, $valores
    function insertaSQL()
    {
        $query = "INSERT INTO ".
                $this->tabla.
                " (".
                    $this->campos.
                ") VALUES (".
                    $this->valores.
                            ");";
        //print $query;
        $consulta = mysql_query($query, $this->conectarbase());
        return $consulta;
    }
	
	// Realiza la modificacion de datos
	//$conexion, $tabla, $campos, $valores, $condicion
    function modificarSQL()
    {
        $query = "UPDATE ".$this->tabla." SET ";        
        $campos = utf8_decode($this->campos);
        $atributos = explode(",", $campos);
        $val = explode(",", $this->valores);
        $j = 0;
        foreach($atributos as $i)
        {
            $query .= "$i = $val[$j],";
            $j++;
        }
        $query = substr($query, 0, strlen($query)-1);
        if($this->condicion != "")
        {
            $query .= " WHERE ";
            $query .= $condicion;
        }
        $query .= ";";        
        //print $query;
        $consulta = mysql_query($query, $this->conectarbase())
            or die("Fallo en la consulta");
        return $consulta;
    }
	
	//Realiza el borrado de datos de una base de datos
    //$conexion, $tabla, $condicion
    function BorraSQL()
    {
        $query = "DELETE FROM ".$this->tabla." WHERE ".$this->condicion.";";
        $consulta = mysql_query($query, $this->conectarbase())
            or die("Fallo la consulta");
        return $consulta;
    }
	
	// Muestra un select de una tabla predeterminada, devolviendo el valor
	//$conexion, $tabla, $id, $muestra, $condicion, $predeterminado, $estilo
    function selectTabla()
    {
        $devuelve = "<select name='".$this->tabla."' class='".$this->estilo."'>\n";
        $consulta = consulSQLbasica($this->conexion, 
									$this->tabla,
									$this->id.",".$this->muestra, 
									$this->conectarbase());
		$aux = explode(",",$this->muestra);
		
        $row = mysql_fetch_array($consulta);
        while($row != null)
        {
			if($row["$this->id"] == $this->predeterminado)
			{
				$devuelve .= utf8_encode("<option value='".$row[$this->id]."' selected='selected'>");
				foreach($aux as $i)
				{
					$devuelve .= utf8_encode($row[$this->i]);
				}
				$devuelve .= "</option>\n";
			}
			else
			{
				$devuelve .= utf8_encode("<option value='".$row[$this->id]."'>");
				foreach($aux as $i)
				{                    
					$devuelve .= utf8_encode($row[$this->i]);
				}
				$devuelve .= "</option>\n";
			}
            $row = mysql_fetch_array($consulta);
        }
        $devuelve .= "</select>\n";
		if($this->opcion == 0)
		{
			return $devuelve;
		}
		else
		{
			echo $devuelve;
		}
        
    }
}
?>