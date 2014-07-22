<?php
/*
Contine las clases 
*/

	class RevistaController extends Revista {
		
		//Instancia de la clase Revista----No necesario para todos los controladores
		public $muestra_errores = false;
		public $muestra_exito = false;


		function __construct(){
			 parent::Revista();
		}

		//Funcion para insertar una revista
		public function inserta_revista($datos, $files){
			//Solo es para acegurarse que se estan enviando los archivos

		    //die();
		    
			//Conexion con Equipo el cual continene Modelo y Conexion
			//$revista=new Revista();

			$this->set_nombre($datos['nombre']);
			$this->set_portada($files['portada']);
			$this->set_fecha($datos['fecha']);
			$this->set_volumen($datos['volumen']);
			$this->set_titulo($datos['titulo']);
			$this->set_subtitulo($datos['subtitulo']);
			$this->set_numero($datos['numero']);
			$this->set_clave($datos['clave']);
			$this->set_directorio($datos['directorio']);
			$this->set_editorial($datos['editorial']);
			$this->set_id_status($datos['id_status']);

			//Verificar si existen errores
			if(count ($this->errores)>0){
				$this->muestra_errores = true;
				
				//print_r($revista->errores);
				/*
				die();*/
			}
			else{
				$this->muestra_exito=true;
				//Copiar la direccion del archivo a un nueva carpeta
				move_uploaded_file($files['portada']['tmp_name'], "../img/".$files['portada']['name']);
				//Insertar en la Base de datos
				$this->inserta($this->get_atributos());
			};

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
