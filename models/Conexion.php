<?php

/*
Esta clase realiza la conexion con la base de datos, se utiliza la
libreria ADO para realizar conexiones con diversas bases de datos
*/
class Conexion {
    
    function Conexion(){
        $this->db = ADONewConnection('mysqli');
        $this->db->debug = false;
			       //ip     user      pass    bd
        $this->db->Connect('localhost','revista1','123','revista');
        //$this->db->Connect('localhost','25revista','angel','revista');
    }   
}
?>
