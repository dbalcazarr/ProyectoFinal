<?php

class Articulo extends Modelo{
    public $nombre_tabla = 'articulo';
    public $pk           = 'id_articulo';
    
    public $atributos = array(
        'nombre'=>array(),
        'resumen'=>array(),
        'abstract'=>array(),
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
	private $abstract;
	private $introduccion;
	private $metodologia;
	private $contenido;
	private $fecha_creacion;
	private $archivo_pdf;
	private $id_status;
	private $conclusiones;
	private $agradecimientos;
    private $referencias;
       

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
//Fecha_creacion
    public function get_fecha_creacion(){
        return $this->fecha_creacion;
    } 
    public function set_fecha_creacion($valor){
        //objeto de la clase Er
        /*$er = new Er();
        if ( !$er->valida_imagen($valor) ){
            $this->errores[] = 'Formato de imagen no valido ('.$valor.').';
        }*/
        //trim simplemente quita espacios al principio y final de la cadena
        $this->fecha_creacion = trim($valor);
    }
//archivo_pdf
   public function get_archivo_pdf(){
        return $this->archivo_pdf;
    } 
    public function set_archivo_pdf($valor){
        //objeto de la clase Er
        $er = new Er();
        if ( !$er->valida_pdf_name($valor['name']) ){
            $this->errores[] = 'Formato del archivo no es valido ('.$valor["name"].').';
        }
        if ( !$er->valida_pdf_type($valor['type']) ){
            $this->errores[] = 'Formato del archivo no es valido ('.$valor["type"].').';
        }
        if ( $valor['size']>10000000){
            $this->errores[] = 'Tamaño de imagen ('.$valor["size"].'). Sobrepasa el tamaño maximo';
        }
        //trim simplemente quita espacios al principio y final de la cadena
        $this->archivo_pdf = trim($valor['name']);
    }
//id_status
	public function get_id_status(){
        return $this->id_status;
    } 
    public function set_id_status($valor){
        //objeto de la clase Er
        $er = new Er();
        if ( !$er->valida_numero_entero($valor) ){
            $this->errores[] = 'Status no valido ('.$valor.').';
        }
        //trim simplemente quita espacios al principio y final de la cadena
        $this->id_status = trim($valor);
    }
//resumen
    public function get_resumen(){
        return $this->resumen;
    } 
    public function set_resumen($valor){
        //objeto de la clase Er
        $er = new Er();
        /*if ( !$er->valida_nombre($valor) ){
            $this->errores[] = 'Formato de fecha no valido ('.$valor.').';
        }*/
        //trim simplemente quita espacios al principio y final de la cadena
        $this->resumen = trim($valor);
    }
//abstract
	public function get_abstract(){
        return $this->abstract;
    } 
    public function set_abstract($valor){
        //objeto de la clase Er
        $er = new Er();
        /*
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = 'Formato de subtitulo no valido ('.$valor.').';
        }*/
        //trim simplemente quita espacios al principio y final de la cadena
        $this->abstract = trim($valor);
    }
//introduccion
    public function get_introduccion(){
        return $this->introduccion;
    } 
    public function set_introduccion($valor){
        //objeto de la clase Er
        $er = new Er();
        /*
        if ( !$er->valida_numero_decimales($valor) ){
            $this->errores[] = 'Formato de numero no valido ('.$valor.').';
        }*/
        //trim simplemente quita espacios al principio y final de la cadena
        $this->introduccion = trim($valor);
    }
//metodologia
    public function get_metodologia(){
        return $this->metodologia;
    } 
    public function set_metodologia($valor){
        //objeto de la clase Er
        $er = new Er();
        /*
        if ( !$er->valida_clave($valor) ){
            $this->errores[] = 'Formato de clave no valido ('.$valor.').';
        }*/
        //trim simplemente quita espacios al principio y final de la cadena
        $this->metodologia = trim($valor);
    }
//contenido
    public function get_contenido(){
        return $this->contenido;
    } 
    public function set_contenido($valor){
        //objeto de la clase Er
        $er = new Er();
        /*
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = 'Formato de directorio no valido ('.$valor.').';
        }*/
        //trim simplemente quita espacios al principio y final de la cadena
        $this->contenido = trim($valor);
    }
//conclusiones
    public function get_conclusiones(){
        return $this->conclusiones;
    } 
    public function set_conclusiones($valor){
        //objeto de la clase Er
        $er = new Er();
        /*
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = 'Formato de editorial no valido ('.$valor.').';
        }*/
        //trim simplemente quita espacios al principio y final de la cadena
        $this->conclusiones = trim($valor);
    }
//agradecimientos
    public function get_agradecimientos(){
        return $this->agradecimientos;
    } 
    public function set_agradecimientos($valor){
        //objeto de la clase Er
        $er = new Er();
        /*
        if ( !$er->valida_numero_entero($valor) ){
            $this->errores[] = 'Formato de ID no valido ('.$valor.').';
        }*/
        //trim simplemente quita espacios al principio y final de la cadena
        $this->agradecimientos = trim($valor);
    }
//referencias
    public function get_referencias(){
        return $this->referencias;
    } 
    public function set_referencias($valor){
        //objeto de la clase Er
        $er = new Er();
        /*
        if ( !$er->valida_numero_entero($valor) ){
            $this->errores[] = 'Formato de ID no valido ('.$valor.').';
        }*/
        //trim simplemente quita espacios al principio y final de la cadena
        $this->referencias = trim($valor);
    }
}

?>

