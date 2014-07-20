<?php
/*
Contine las clases 
*/

	class ArticuloController extends Articulo {
		
		//Instancia de la clase Articulo----No necesario para todos los controladores
		public $muestra_errores = false;
		function __construct(){
			 parent::Articulo();
		}

		//Funcion para insertar un articulo
		public function inserta_articulo($datos, $files){
			//Solo es para acegurarse que se estan enviando los archivos
		    echo "<pre>";
		      print_r($datos);
		      print_r($files);
		      echo   'Desde Controller';

		    echo "</pre>";

			//Conexion con Equipo el cual continene Modelo y Conexion
			//$articulo=new Articulo();

			$this->set_nombre($datos['nombre']);
			$this->set_fecha_creacion($datos['fecha_creacion']);
			$this->set_archivo_pdf($files['archivo_pdf']);
			$this->set_id_status($datos['id_status']);
			$this->set_resumen($datos['resumen']);
			$this->set_abstract($datos['abstract']);
			$this->set_introduccion($datos['introduccion']);
			$this->set_metodologia($datos['metodologia']);
			$this->set_contenido($datos['contenido']);
			$this->set_conclusiones($datos['conclusiones']);
			$this->set_agradecimientos($datos['agradecimientos']);
			$this->set_referencias($datos['referencias']);

			

			//Verificar si existen errores
			if(count ($this->errores)>0){
				$this->muestra_errores = true;
				//print_r($articulo->errores);
				//die();
			}
			else{
				move_uploaded_file($files['archivo_pdf']['tmp_name'], "../document/".$files['archivo_pdf']['name']);
				//Insertar en la Base de datos
				$this->inserta($this->get_atributos());
				echo '<div class="row">
						<div class="col-md-12">
							<div class="alert alert-success" role="alert">Insercion Correcta</div>
						</div>
					</div>';
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

