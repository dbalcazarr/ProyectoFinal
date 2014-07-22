<?php
/*
Contine las clases 
*/

	class AutorController extends Autor {
		
		//Instancia de la clase Autor----No necesario para todos los controladores
		public $muestra_errores = false;
		public $muestra_exito = false;
		function __construct(){
			 parent::Autor();
		}

		//Funcion para insertar un equipo
		public function inserta_autor($datos){
			//Solo es para acegurarse que se estan enviando los archivos
		    //echo "<pre>";
		      //print_r($datos);
		      //echo   'Desde Controller';

		    //echo "</pre>";
			//Conexion con Equipo el cual continene Modelo y Conexion
			//$autor=new Autor();

			$this->set_nombre($datos['nombre']);
			$this->set_apellido($datos['apellido']);
			$this->set_email($datos['email']);

			//Verificar si existen errores
			if(count ($this->errores)>0){
				$this->muestra_errores=true;
				/*print_r($autor->errores);
				die();*/
			}
			else{
				$this->muestra_exito=true;
				//Insertar en la Base de datos
				$this->inserta($this->get_atributos());					
			}
		}

		public function errores(){
			if ($this->muestra_errores) {
				echo '<div class="alert alert-danger">';
                	foreach ($this->errores as $value) {
                  	echo "<p>".$value."</p>";
                	}  
            	echo '</div>';
			}
			if ($this->muestra_exito) {
				echo '<div class="alert alert-success" role="alert"><h4>Insercion Correcta</h4></div>';
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