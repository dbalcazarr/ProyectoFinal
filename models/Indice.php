<?php

class Indice extends Modelo{
    public $nombre_tabla = 'indice';
    public $pk           = 'id_indice';
    
    public $atributos = array(
        'titulo'=>array(),
        'numero'=>array(),
        'id_revista'=>array(),
    );

    public $errores = array( );
    
    private $titulo;
	private $numero;
	private $id_revista;
       

//Instancia del objeto modelo para implementar la conexion con la base de datos
    function Indice(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
            foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
//Titulo
    public function get_titulo(){
        return $this->titulo;
    } 
    public function set_titulo($valor){
        //objeto de la clase Er
        $er = new Er();
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = 'Titulo no valido ('.$valor.').';
        }
        //trim simplemente quita espacios al principio y final de la cadena
        $this->titulo = trim($valor);
    }
//numero
    public function get_numero(){
        return $this->numero;
    } 
    public function set_numero($valor){
        //objeto de la clase Er
        $er = new Er();
        if ( !$er->valida_numero_entero($valor) ){
            $this->errores[] = 'Numero no valido ('.$valor.').';
        }
        //trim simplemente quita espacios al principio y final de la cadena
        $this->numero = trim($valor);
    }
//id_revista
   public function get_id_revista(){
        return $this->id_revista;
    } 
    public function set_id_revista($valor){
        //objeto de la clase Er
        $er = new Er();
        if ( !$er->valida_numero_entero($valor) ){
            $this->errores[] = 'id_revista no valido ('.$valor.').';
        }
        //trim simplemente quita espacios al principio y final de la cadena
        $this->id_revista = trim($valor);
    }
}

?>
