<!-- formulario de autor -->
<?php 
//VISTA PRIVADA
  include ('../../libs/security.php');

  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Autor.php');
  include ('../../controllers/AutorController.php');
  include ('../../libs/Er.php');

  include ('../layouts/header.php');

//Inicializar el controlador
  $AutorC = new AutorController();
  if(isset($_POST['nombre']))  {
    $AutorC->inserta_Autor($_POST);
  }

?>


<section class="intro" >
        <div class="intro-body" id="insert">
            <div class="container">
                            
          
          <!-------->
          <div class="row">
              <div class="col-md-12">
                <div class="page-header">
                  <h1> <a href="../site/BD.php"><span class="glyphicon glyphicon-user"></span></a> Autor <small>Insertar</small></h1>
                </div>
              </div>
            </div>
<!-- Errores -->
          <?php
            $AutorC->errores();
          ?>
		  <div class="row">
                <form role="form" id="registerForm" method="POST">
				  <div class="col-md-6">
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre(s) del Autor" name="nombre" value="<?php echo $AutorC->get_nombre(); ?>">
                  </div>
				  </div>
				  <div class="col-md-6">
				  <div class="form-group">
                    <label for="apellido">Apellidos</label>
                    <input type="text" class="form-control" id="apellido" placeholder="Apellido(s) del Autor" name="apellido" value="<?php echo $AutorC->get_apellido(); ?>">
                  </div>
				  </div>
				  <div class="col-md-12">
				  <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="text" class="form-control" id="email" placeholder="Correo Electrónico" name="email" value="<?php echo $AutorC->get_email(); ?>">
                  </div>
                  <input type="submit" class="btn btn-default" value="Enviar">
                </form>
                  </div>
        </div>
		<div class="row">
                <div class="col-md-12">
                
                <?php echo $AutorC->show_grid(); ?>
                
                </div>
              </div>
            </div>
        </div>
</section>


<?php include ('../layouts/footer.php'); ?>

