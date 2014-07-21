<?php

class Articulo extends Modelo{
    public $nombre_tabla = 'articulo';
    public $pk = 'id_articulo';
    
    
    public $atributos = array(
       'nombre'=>array(),
        'resumen'=>array(),
        'abstracto'=>array(),
		'introduccion'=>array(),
        'metodologia'=>array(),
        'contenido'=>array(),
		'fecha_creacion'=>array(),
        'archivo_pdf'=>array(),
        'id_status'=>array(),
		'conclusiones'=>array(),
        'agradecimientos'=>array(),
		'referencias'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $resumen;
    private $abstracto;
    private $introduccion;
	private $metodologia;
    private $contenido;
	private $fecha_creacion;
	private $archivo_pdf;
    private $id_status;
	private $conclusiones;
	private $agradecimientos;
	private $referencias;
	
       
    
    function Articulo(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    //1--------------------------------------------------------------------------------------------------
    public function get_nombre()
	{
        return $this->nombre;
    } 

    public function set_nombre($valor)
	{
        $er = new Er();
			if ( !$er->valida_nombre($valor) )
			{
				$this->errores[] = "Este nombre (".$valor.") no es valido";
			}      
			$this->nombre = trim($valor);
    }
	//1--------------------------------------------------------------------------------------------------
    public function get_resumen()
	{
        return $this->resumen;
    } 

    public function set_resumen($valor)
	{
        $er = new Er();
			if ( !$er->valida_nombre=trim($valor) )
			{
				$this->errores[] = "Este resumen (".$valor.") no es valido";
			}      
			$this->resumen = trim($valor);
    }
	//1--------------------------------------------------------------------------------------------------
    public function get_abstracto()
	{
        return $this->abstracto;
    } 

    public function set_abstracto($valor)
	{
        $er = new Er();
			if ( !$er->valida_nombre=trim($valor) )
			{
				$this->errores[] = "Esta abstraccion (".$valor.") no es valida";
			}      
			$this->abstracto = trim($valor);
    }
	//1--------------------------------------------------------------------------------------------------
    public function get_introduccion()
	{
        return $this->introduccion;
    } 

    public function set_introduccion($valor)
	{
        $er = new Er();
			if ( !$er->valida_nombre=trim($valor) )
			{
				$this->errores[] = "Esta introduccion (".$valor.") no es valida";
			}      
			$this->introduccion = trim($valor);
    }
	//1--------------------------------------------------------------------------------------------------
    public function get_metodologia()
	{
        return $this->metodologia;
    } 

    public function set_metodologia($valor)
	{
        $er = new Er();
			if ( !$er->valida_nombre=trim($valor) )
			{
				$this->errores[] = "Esta metodologia (".$valor.") no es valido";
			}      
			$this->metodologia = trim($valor);
    }
	//1--------------------------------------------------------------------------------------------------
    public function get_contenido()
	{
        return $this->contenido;
    } 

    public function set_contenido($valor)
	{
        $er = new Er();
			if ( !$er->valida_nombre=trim($valor) )
			{
				$this->errores[] = "Este contenido (".$valor.") no es valido";
			}      
			$this->contenido = trim($valor);
    }

	
	//3--------------------------------------------------------------------------------------------------
    public function get_fecha(){
        return $this->fecha_creacion;
    } 

    public function set_fecha($valor){

        $er = new Er();
        
        if ( !$er->valida_fecha($valor) )
		{
            $this->errores[] = "Esta fecha (".$valor.") no es valida";
        }      
        $this->fecha_creacion = trim($valor);
    }
	//2--------------------------------------------------------------------------------------------------
    public function get_arhivo(){
        return $this->archivo_pdf;
    } 

    public function set_archivo($valor){
		$er = new Er();

       if ( !$er->valida_pdf($valor['name']) )
		{
				$this->errores[] = "Este no es un archivo pdf (".$valor['name'].") no es valido";
		}
		else
		{
			if ( ($valor['size'])>300000 || ($valor['size'])<1 )
			{
           		 $this->errores[] = "Esta imagen (".$valor['name'].") excede el limite permitido";
        	}    
			$this->archivo_pdf = trim($valor['name']);
		}
        
    }
	
	//6--------------------------------------------------------------------------------------------------
    public function get_idstatus(){
        return $this->id_status;
    } 

    public function set_idstatus($valor){

        $er = new Er();
        
        if ( !$er->valida_numero_entero($valor) )
		{
            $this->errores[] = "Este id (".$valor.") no es valido";
        }      
        $this->id_status = trim($valor);
    }
	//7--------------------------------------------------------------------------------------------------
    public function get_conclusiones(){
        return $this->conclusiones;
    } 

    public function set_conclusiones($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre=trim($valor) )
		{
            $this->errores[] = "Esta conclusion (".$valor.") no es valido";
        }      
        $this->conclusiones = trim($valor);
    }
	//8--------------------------------------------------------------------------------------------------
    public function get_agradecimientos(){
        return $this->agradecimientos;
    } 

    public function set_agradecimientos($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre=trim($valor) )
		{
            $this->errores[] = "Estos agradecimientos (".$valor.") no son validos";
        }      
        $this->agradecimientos = trim($valor);
    }
	//9--------------------------------------------------------------------------------------------------
    public function get_referencias(){
        return $this->referencias;
    } 

    public function set_referencias($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre=trim($valor) )
		{
            $this->errores[] = "Esta editorial (".$valor.") no es valido";
        }      
        $this->referencias = trim($valor);
    }
	
    
}

?>