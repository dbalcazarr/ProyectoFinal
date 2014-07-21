<?php

class Revista extends Modelo{
    public $nombre_tabla = 'revista';
    public $pk = 'id_revista';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'portada'=>array(),
        'fecha'=>array(),
		'volumen'=>array(),
        'titulo'=>array(),
        'subtitulo'=>array(),
		'numero'=>array(),
        'clave'=>array(),
        'directorio'=>array(),
		'editorial'=>array(),
        'id_status'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $portada;
    private $fecha;
    private $volumen;
	private $titulo;
    private $subtitulo;
	private $numero;
	private $clave;
    private $directorio;
	private $editorial;
	private $id_status;
	
       
    
    function Revista(){
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

	//2--------------------------------------------------------------------------------------------------
    public function get_portada(){
        return $this->portada;
    } 

    public function set_portada($valor){

       $er = new Er();
        
		if ( !$er->valida_imagen_name($valor['name']) )
		{
				$this->errores[] = "Este no es un archivo de imagen (".$valor['name'].") no es valido";
		}
		else
		{
			if ( ($valor['size'])>500000 || ($valor['size'])<1 )
			{
           		 $this->errores[] = "Esta imagen (".$valor['name'].") excede el limite permitido";
        	}    
			$this->portada = trim($valor['name']);
		}
        
    }
	//3--------------------------------------------------------------------------------------------------
    public function get_fecha(){
        return $this->fecha;
    } 

    public function set_fecha($valor){

        $er = new Er();
        
        if ( !$er->valida_fecha($valor) )
		{
            $this->errores[] = "Esta fecha (".$valor.") no es valida";
        }      
        $this->fecha = trim($valor);
    }
	//4--------------------------------------------------------------------------------------------------
    public function get_volumen(){
        return $this->volumen;
    } 

    public function set_volumen($valor){

        $er = new Er();
        
        if ( !$er->valida_numero_entero($valor) )
		{
            $this->errores[] = "Este volumen (".$valor.") no es valido";
        }      
        $this->volumen = trim($valor);
    }
	//5--------------------------------------------------------------------------------------------------
    public function get_titulo(){
        return $this->titulo;
    } 

    public function set_titulo($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) )
		{
            $this->errores[] = "Este titulo (".$valor.") no es valido";
        }      
        $this->titulo = trim($valor);
    }
	//5--------------------------------------------------------------------------------------------------
    public function get_subtitulo(){
        return $this->titulo;
    } 

    public function set_subtitulo($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) )
		{
            $this->errores[] = "Este titulo (".$valor.") no es valido";
        }      
        $this->subtitulo = trim($valor);
    }
	//6--------------------------------------------------------------------------------------------------
    public function get_numero(){
        return $this->numero;
    } 

    public function set_numero($valor){

        $er = new Er();
        
        if ( !$er->valida_numero_entero($valor) )
		{
            $this->errores[] = "Este numero (".$valor.") no es valido";
        }      
        $this->numero = trim($valor);
    }
	//7--------------------------------------------------------------------------------------------------
    public function get_clave(){
        return $this->clave;
    } 

    public function set_clave($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) )
		{
            $this->errores[] = "Este numero (".$valor.") no es valido";
        }      
        $this->clave = trim($valor);
    }
	//8--------------------------------------------------------------------------------------------------
    public function get_directorio(){
        return $this->directorio;
    } 

    public function set_directorio($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) )
		{
            $this->errores[] = "Este directorio (".$valor.") no es valido";
        }      
        $this->directorio = trim($valor);
    }
	//9--------------------------------------------------------------------------------------------------
    public function get_editorial(){
        return $this->editorial;
    } 

    public function set_editorial($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) )
		{
            $this->errores[] = "Esta editorial (".$valor['name'].") no es valido";
        }      
        $this->editorial = trim($valor);
    }
	//10--------------------------------------------------------------------------------------------------
    public function get_idstatus(){
        return $this->id_status;
    } 

    public function set_idstatus($valor){

        $er = new Er();
        
        if ( !$er->valida_numero_entero($valor) )
		{
            $this->errores[] = "Este estatus (".$valor['name'].") no es valido";
        }      
        $this->id_status = trim($valor);
    }
	
	
	
	


    
    
    
}

?>