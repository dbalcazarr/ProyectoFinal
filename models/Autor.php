<?php

class Autor extends Modelo{
    public $nombre_tabla = 'autor';
    public $pk           = 'id_autor';
    
    public $atributos = array(
        'nombre'=>array(),
        'apellido'=>array(),
        'email'=>array(),
    );

    public $errores = array( );
    
    private $nombre;
	private $apellido;
	private $email;
       

//Instancia del objeto modelo para implementar la conexion con la base de datos
    function Equipo(){
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
//Apellido
    public function get_apellido(){
        return $this->apellido;
    } 
    public function set_apellido($valor){
        //objeto de la clase Er
        $er = new Er();
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = 'Apellido no valido ('.$valor.').';
        }
        //trim simplemente quita espacios al principio y final de la cadena
        $this->apellido = trim($valor);
    }
//Email
   public function get_email(){
        return $this->email;
    } 
    public function set_email($valor){
        //objeto de la clase Er
        $er = new Er();
        if ( !$er->valida_email($valor) ){
            $this->errores[] = 'Email no valido ('.$valor.').';
        }
        //trim simplemente quita espacios al principio y final de la cadena
        $this->email = trim($valor);
    }
}

?>
