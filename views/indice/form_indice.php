<!-- formulario de indice -->
<?php 
//VISTA PRIVADA
  include ('../../libs/security.php');

  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Indice.php');
  include ('../../controllers/IndiceController.php');
  include ('../../libs/Er.php');

  include ('../layouts/header.php');

//Inicializar el controlador
  $IndiceC = new IndiceController();
  if(isset($_POST['nombre']))  {
    $IndiceC->inserta_Indice($_POST);
  }

?>


<section class="intro" >
        <div class="intro-body" id="BD1">
            <div class="container" id="insert">
                            
     
          <div class="row">
              <div class="col-md-12">
                <div class="page-header">
                  <h1> <a href="../site/BD.php"><span class="glyphicon glyphicon-th"></span></a> Indice <small>Insertar</small></h1>
                </div>
              </div>
            </div>
<!-- Errores -->
          <?php
            $IndiceC->errores();
          ?>
		  <div class="row">
                <form role="form" id="registerForm" method="POST">
				  <div class="col-md-6">
                  <div class="form-group">
                    <label for="nombre">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $IndiceC->get_titulo(); ?>">
                  </div>
				  </div>
				  <div class="col-md-6">
				  <div class="form-group">
                    <label for="numero">N&uacute;mero</label>
                    <input type="text" class="form-control" id="numero"  name="numero" value="<?php echo $IndiceC->get_numero(); ?>">
                  </div>
				  </div>
				  <div class="col-md-12">
					<div class="form-group">
                    <label for="id_revista" class="col-sm-3 control-label">id_revista: </label>
                    <div class="col-sm-6">
                                                      <!-- $id_tabla,$nombre_columna,$tabla,$name,$id,$where = ' ' -->
                        <?php echo $IndiceC->getDropDown('id_revista','nombre','revista','id_revista','id_revista'); ?>
                    </div>
                  </div>
          </div>

      <div class="row">
        <div class=col-md-12>
          <div class="form-group">
                    <div class="col-sm-12">
                      <input type="submit" value="Enviar"  />
                    </div>
          </div>
        </div>
      </div>
                </form>
      </div>
      
		  <div class="row">
        <div class="col-md-12">
                
                <?php echo $IndiceC->show_grid(); ?>
                
                </div>
              </div>
            </div>
        </div>
      </div>
</section>


<?php include ('../layouts/footer.php'); ?>
