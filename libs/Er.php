<?php

class Er {

//Email    
	public function valida_email($valor){
		$exp_reg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (preg_match($exp_reg, $valor)) {
			 return true;
		} else { 
			 return false;
		} 
	}

//Decimales	
	public function valida_numero_decimales($valor){
		$exp_reg = "/^-?[0-9]+([,\.][0-9]*)?$/"; 
		if (preg_match($exp_reg, $valor)) {
			 return true;
		} else { 
			 return false;
		} 
	}

//Enteros
	public function valida_numero_entero($valor){
		$exp_reg = "/^[0-9]+$/"; 
		if (preg_match($exp_reg, $valor)) {
			 return true;
		} else { 
			 return false;
		} 
	}

//Estatura	
	public function valida_estatura($valor){
		$exp_reg = "/^(?=.+)(?:[1-9]\d*|0)?(?:\.\d+)?$/"; 
		if (preg_match($exp_reg, $valor)) {
			 return true;
		} else { 
			 return false;
		} 
	}

//Nombre	
	public function valida_nombre($valor){
		$exp_reg = "/^[a-zA-Z_ñÑ -]{3,25}$/"; 
		if (preg_match($exp_reg, $valor)) {
			 return true;
		} else { 
			 return false;
		} 
	}

//Fecha	
	public function valida_fecha($fecha){
	$sep = " [\/\-] ";
	$req = "/([0-9]{4})\/([0-9]{2})\/([0-9]{2})/";
	if (preg_match($req, $fecha)) {
			 return true;
		} else { 
			 return false;
		} 
	}

//Ip	
	public function valida_ip($ip)
	{
		$val_0_to_255 = "(25 [012345] |2 [01234] \d| [01] ?\d\d?)";
		$reg = "/^(([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5]).){3}([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$/";
		 if (preg_match($req, $ip)) {
			 return true;
		} else { 
			 return false;
		} 
	}

//Código postal
	public function valida_cp($cp)
	{
		$reg = "/^[0-9]{5,5}([- ]?[0-9]{4,4})?$/";
		 if (preg_match($req, $cp)) {
			 return true;
		} else { 
			 return false;
		} 
	}

//Direccion URL		
	public function valida_url($url){
		$reg="/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \?=.-]*)*\/?$/";
		if (preg_match($reg, $url)){
			return true;
		} else {
			return false;
		}
	}

//Imagen name
	public function valida_imagen_name($imagen){
		$reg="%\.(gif|jpe?g|png|jpg)$%i";
		if (preg_match($reg, $imagen)){
			return true;
		} else {
			return false;
		}
	}
//Imagen type image/jpeg
	public function valida_imagen_type($imagen){
		$reg="/^(image\/)+(gif|jpeg|png|jpg)/";
		if (preg_match($reg, $imagen)){
			return true;
		} else {
			return false;
		}
	}

//pdf name
	public function valida_pdf_name($imagen){
		$reg="%\.(pdf|PDF)$%i";
		if (preg_match($reg, $imagen)){
			return true;
		} else {
			return false;
		}
	}

//PDF type
	public function valida_pdf_type($pdf){
		$reg="/^(application\/pdf)/";
		if (preg_match($reg, $pdf)){
			return true;
		} else {
			return false;
		}
	}


//Clave
	public function valida_clave($valor){
		$exp_reg = "/^[0-9a-zA-Z_.-]{3,16}$/"; 
		if (preg_match($exp_reg, $valor)) {
			 return true;
		} else { 
			 return false;
		} 
	}
	
	//13. Verificar si es archivo pdf
	public function valida_pdf($valor)
	{
		$exp_reg = '%\.(pdf)$%i'; 
		if (preg_match($exp_reg, $valor))
		{
		     return true;
		} else
		{ 
		     return false;
		} 
	}
	
	
		

}

?>    