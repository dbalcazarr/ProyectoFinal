<?php

class Revista extends Modelo{
    public $nombre_tabla = 'revista';
    public $pk= 'id_revista';
    
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
       

//Instancia del objeto modelo para implementar la conexion con la base de datos
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
    
//Nombre
    public function get_nombre(){
        return $this->nombre;
    } 
    public function set_nombre($valor){
        //objeto de la clase Er
        $er = new Er();
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = 'Nombre no valido ('.$valor.').';
        }
        //trim simplemente quita espacios al principio y final de la cadena
        $this->nombre = trim($valor);
    }
//Portada
    public function get_portada(){
        return $this->portada;
    } 
    public function set_portada($valor){
        //objeto de la clase Er
        $er = new Er();
        if ( !$er->valida_imagen_name($valor['name'])){
            $this->errores[] = 'Formato de imagen no valido ('.$valor["name"].').';
        }
         if ( !$er->valida_imagen_type($valor['type'])){
            $this->errores[] = 'Formato de imagen no valido ('.$valor["type"].').';
        }
        
         if ( $valor['size']>500000){
            $this->errores[] = 'Tamaño de imagen ('.$valor["size"].'). Sobrepasa el tamaño maximo';
        }
        //trim simplemente quita espacios al principio y final de la cadena
        $this->portada = trim($valor['name']);
    }
//fecha
   public function get_fecha(){
        return $this->fecha;
    } 
    public function set_fecha($valor){
        //objeto de la clase Er
        $er = new Er();
        /*
        if ( !$er->valida_fecha($valor) ){
            $this->errores[] = 'Formato de fecha no valido ('.$valor.').';
        }
        */
        //trim simplemente quita espacios al principio y final de la cadena
        $this->fecha = trim($valor);
    }
//volumen
	public function get_volumen(){
        return $this->volumen;
    } 
    public function set_volumen($valor){
        //objeto de la clase Er
        $er = new Er();
        if ( !$er->valida_numero_entero($valor) ){
            $this->errores[] = 'Formato de volumen no valido ('.$valor.').';
        }
        //trim simplemente quita espacios al principio y final de la cadena
        $this->volumen = trim($valor);
    }
//Titulo
    public function get_titulo(){
        return $this->titulo;
    } 
    public function set_titulo($valor){
        //objeto de la clase Er
        $er = new Er();
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = 'Formato de titulo no valido ('.$valor.').';
        }
        //trim simplemente quita espacios al principio y final de la cadena
        $this->titulo = trim($valor);
    }
//Subtitulo
	public function get_subtitulo(){
        return $this->subtitulo;
    } 
    public function set_subtitulo($valor){
        //objeto de la clase Er
        $er = new Er();
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = 'Formato de subtitulo no valido ('.$valor.').';
        }
        //trim simplemente quita espacios al principio y final de la cadena
        $this->subtitulo = trim($valor);
    }
//Numero
    public function get_numero(){
        return $this->numero;
    } 
    public function set_numero($valor){
        //objeto de la clase Er
        $er = new Er();
        if ( !$er->valida_numero_decimales($valor) ){
            $this->errores[] = 'Formato de numero no valido ('.$valor.').';
        }
        //trim simplemente quita espacios al principio y final de la cadena
        $this->numero = trim($valor);
    }
//Clave
    public function get_clave(){
        return $this->clave;
    } 
    public function set_clave($valor){
        //objeto de la clase Er
        $er = new Er();
        if ( !$er->valida_clave($valor) ){
            $this->errores[] = 'Formato de clave no valido ('.$valor.').';
        }
        //trim simplemente quita espacios al principio y final de la cadena
        $this->clave = trim($valor);
    }
//directorio
    public function get_directorio(){
        return $this->directorio;
    } 
    public function set_directorio($valor){
        //objeto de la clase Er
        $er = new Er();
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = 'Formato de directorio no valido ('.$valor.').';
        }
        //trim simplemente quita espacios al principio y final de la cadena
        $this->directorio = trim($valor);
    }
//editorial
    public function get_editorial(){
        return $this->editorial;
    } 
    public function set_editorial($valor){
        //objeto de la clase Er
        $er = new Er();
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = 'Formato de editorial no valido ('.$valor.').';
        }
        //trim simplemente quita espacios al principio y final de la cadena
        $this->editorial = trim($valor);
    }
//id_status
    public function get_id_status(){
        return $this->id_status;
    } 
    public function set_id_status($valor){
        //objeto de la clase Er
        $er = new Er();
        if ( !$er->valida_numero_entero($valor) ){
            $this->errores[] = 'Formato de ID no valido ('.$valor.').';
        }
        //trim simplemente quita espacios al principio y final de la cadena
        $this->id_status = trim($valor);
    }
}

?>
