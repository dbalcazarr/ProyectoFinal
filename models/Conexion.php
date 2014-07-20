<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexion
 *
 * @author Oscar 
 */


/*
Esta clase realiza la conexion con la base de datos, se utiliza la
libreria ADO para realizar conexiones con diversas bases de datos
*/
class Conexion {
    
    function Conexion(){
        $this->db = ADONewConnection('mysql');
        $this->db->debug = false;
			       //ip     user      pass    bd
        $this->db->Connect('localhost','25revista','angel','revista');
    }
    
}

?>
