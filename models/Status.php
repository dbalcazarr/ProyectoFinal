<?php

class Status extends Modelo{
    public $nombre_tabla = 'status';
    public $pk           = 'id_status';
    
    public $atributos = array(
        'status'=>array(),
        
    );

    public $errores = array( );
    
    private $status;      

//Instancia del objeto modelo para implementar la conexion con la base de datos
    function Status(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
            foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
//Status
    public function get_status(){
        return $this->status;
    } 
    public function set_status($valor){
        //objeto de la clase Er
        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = 'Nombre no valido ('.$valor.').';
        }
        //trim simplemente quita espacios al principio y final de la cadena
        $this->status = trim($valor);
    }

}

?>
