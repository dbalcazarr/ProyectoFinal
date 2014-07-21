<?php
/*
Contine las clases 
*/

	class ArticuloController extends Articulo{
		
		//Instancia de la clase Articulo----No necesario para todos los controladores
		public $muestra_errores = false;
		function __construct(){
			 parent::Articulo();
		}

		//Funcion para insertar un articulo
		public function insertaArticulo($datos, $files){
			//Solo es para acegurarse que se estan enviando los archivos
		    echo "<pre>";
		      print_r($datos);
		      print_r($files);
		      echo   'Desde Controller';

		    echo "</pre>";

			//Conexion con Equipo el cual continene Modelo y Conexion
			//$articulo=new Articulo();

			$this->set_nombre($datos['nombre']);
			$this->set_fecha($datos['fecha_creacion']);
			$this->set_archivo($files['archivo_pdf']);
			$this->set_idstatus($datos['id_status']);
			$this->set_resumen($datos['resumen']);
			$this->set_abstracto($datos['abstracto']);
			$this->set_introduccion($datos['introduccion']);
			$this->set_metodologia($datos['metodologia']);
			$this->set_contenido($datos['contenido']);
			$this->set_conclusiones($datos['conclusiones']);
			$this->set_agradecimientos($datos['agradecimientos']);
			$this->set_referencias($datos['referencias']);
		}
		public function muestraErrores($datos,$archivos)
		{
			if(count($this->errores)>0)
			{
				$this->muestra_errores=true;
				
			}
			if($this->muestra_errores)
			{
					foreach($this->errores as $value)
					{	
						echo "<div class='alert alert-danger'>";
						echo "<p>$value</p>";
						echo "</div>";
					}
			}
			else
			{	move_uploaded_file($archivos["archivo_pdf"]["tmp_name"],
				 "../imagenesSubidas/".$archivos["archivo_pdf"]["name"]);
				$this->inserta($this->get_atributos());
				
				echo "<div class='alert alert-success'>";
						echo "Datos registrados exitosamente";
						echo "</div>";
				
			}
		}
		
		
		public function iniciarSesion($rol,$email){
			$_SESSION['user'] = $rol;
			$_SESSION['email'] = $email;
			header("Location: equipo.php");
		}

		public function cerrarSesion(){
			session_destroy();
			header("Location: equipo.php");
		}

	}


?>