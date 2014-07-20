<?php
/*
Contine las clases 
*/

	class StatusController extends Status {
		
		//Instancia de la clase Status----No necesario para todos los controladores
		public $muestra_errores = false;
		function __construct(){
			 parent::Status();
		}

		//Funcion para insertar un status
		public function inserta_status($datos){
			//Solo es para acegurarse que se estan enviando los archivos
		    echo "<pre>";
		      print_r($datos);
		      echo   'Desde Controller';

		    echo "</pre>";
			//Conexion con Equipo el cual continene Modelo y Conexion
			//$status=new Status();

			$this->set_status($datos['status']);
			
			//Verificar si existen errores
			if(count ($this->errores)>0){
				$this->muestra_errores=true;
				/*print_r($status->errores);
				die();*/
			}
			else{
			//Insertar en la Base de datos
			$this->inserta($this->get_atributos());
			echo '<div class="alert alert-success" role="alert">Insercion Correcta</div>';
			}
			//Detener un script *die();

		}

		public function errores(){
			if ($this->muestra_errores) {
				echo '<div class="alert alert-danger">';
                	foreach ($this->errores as $value) {
                  	echo "<p>".$value."</p>";
                	}  
            	echo '</div>';
			}
		}

		/*public function validaUsuario($datos){
			$rs = $this->consulta_sql(" select * from usuarios where email = '".$datos['email']."'  ");
        	$rows = $rs->GetArray();
        	if(count($rows) > 0){
        		if ($rows['0']['password']== md5($datos['password'])) {
        			$this->iniciarSesion($rows['0']['rol'],$rows['0']['email']);
        		}else{
		     		$this->muestra_errores = true;
		     		$this->errores[] = 'Password incorrecto';
		     	}
	     	}else{
	     		$this->muestra_errores = true;
	     		$this->errores[] = 'este email no existe';
	     	}

		}
		public function iniciarSesion($rol,$email){
			$_SESSION['user'] = $rol;
			$_SESSION['email'] = $email;
			header("Location: inicio.php");
		}

		public function cerrarSesion(){
			session_destroy();
			header("Location: inicio.php");
		}*/
	}
?>