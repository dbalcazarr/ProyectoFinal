<?php
	class RevistaController extends Revista{
		
		public $muestra_errores = false;
		function __construct(){
			parent::Revista();
		}
		
		public function insertaRevista($datos, $archivos){
			echo "<pre>datos:";
			print_r($datos);
			print_r($archivos);
			echo "</pre>";
			
			$this->set_nombre($datos['nombre']);
			$this->set_portada($archivos['portada']);
			$this->set_fecha($datos['fecha']);
			$this->set_volumen($datos['volumen']);
			$this->set_titulo($datos['titulo']);
			$this->set_subtitulo($datos['subtitulo']);
			$this->set_numero($datos['numero']);
			$this->set_clave($datos['clave']);
			$this->set_directorio($datos['directorio']);
			$this->set_editorial($datos['editorial']);
			$this->set_idstatus($datos['id_status']);
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
			{	move_uploaded_file($archivos["portada"]["tmp_name"],
				 "../imagenesSubidas/".$archivos["portada"]["name"]);
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