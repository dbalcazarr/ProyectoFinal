<?php

/*
Este nos permite realizar inserciones, consultas, etc. en las bases de datos
Esta clase ereda de Conexion para realizar la conexion a las bases de datos    
*/
class Modelo extends Conexion {

    public $db;

    function Modelo() {
        parent::Conexion();
    }

    public function consulta_datos() {
        $rs = $this->db->Execute('SELECT * from ' . $this->nombre_tabla);
        $this->get_error($rs, 'Error en consulta datos');
        return $rs;
    }

    public function consulta_sql($sql) {
        $rs = $this->db->Execute($sql);
        $this->get_error($rs, 'Error en consulta datos');
        return $rs;
    }

    public function inserta($rs) {
        $sql_insert = $this->db->GetInsertSQL($this->nombre_tabla, $rs);
        return $this->get_error($this->db->Execute($sql_insert), 'Error en Modelo.inserta');
    }

    public function get_error($result, $tipo_error) {
        if ($result === false) {
            die('Redireccionar a la pagina de error: '. $DB->ErrorMsg() .' '. $tipo_error);
            return false;
        } else {
            return true;
        }
    }

    public function show_grid($select = '*', $where = ' ', $num = '10') {
        $sql = "SELECT " . $select . " 
                FROM " . $this->nombre_tabla . " 
                " . $where;
        $grid = new ADODB_Pager($this->db, $sql);
        $grid->Render($rows_per_page = $num);
    }

    public function actualiza($id) {
        if (is_integer($id)) {
            $sql = "SELECT * FROM  " . $this->nombre_tabla . " 
                WHERE id = " . $id;

            $record = $this->db->Execute($sql);
            $rs = array();
            $rs['nombre'] = 'PEDROOOOOOO';
            $rs['email'] = 'pedroo@nnnnn.mmm';
            $rs['password'] = '0000000';

            $sql_update = $this->db->GetUpdateSQL($record, $rs);
            $this->get_error($this->db->Execute($sql_update), 'Error al actualizar');
        } else {
            die('OJO ');
        }
    }

    public function elimina($where = 'null') {

        if ($where == 'null')
            $sql = "DELETE FROM " . $this->nombre_tabla;
        else
            $sql = "DELETE FROM " . $this->nombre_tabla . "
                    WHERE " . $where;

        return $this->get_error($this->db->Execute($sql), "Error al eliminar");
    }

//Generar select
    public function getDropDown($id_tabla,$nombre_columna,$tabla,$name,$id,$where = ' '){
         $rs = $this->consulta_sql(" select * from $tabla ".$where);
         $rows = $rs->GetArray();
         $dropDown = '<select class="form-control" id="'.$id.'" name="'.$name.'"><option value="">Selecciona una opcion</option>';
         foreach ($rows as $key => $value) {
            $dropDown.= '<option value="'.$value[$id_tabla].'">'.utf8_encode($value[$nombre_columna]).'</option>';
         }
         $dropDown.= '</select>'; 
         return $dropDown;
    }

}
?>


