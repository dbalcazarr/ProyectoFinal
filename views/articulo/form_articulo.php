<!-- Formulario de Articulo-->
<?php 
//VISTA PRIVADA
  include ('../../libs/security.php');
  include ('../layouts/header.php');

  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Articulo.php');
  include ('../../controllers/ArticuloController.php');
  include ('../../libs/Er.php');
  //include ('../layouts/header.php');
  
//Inicializar el controlador
$ArticuloC = new ArticuloController();
  if(isset($_POST['nombre']))  {
    /*echo "<pre>";
      print_r($_POST);
      print_r($_FILES);
    echo "</pre>";
    //die(); */

    
    
    $ArticuloC->inserta_articulo($_POST, $_FILES);


  }

?>

<section class="intro" >
  <div class="intro-body" id="BD1">
    <div class="container" id="insert">
                
          
          <!-------->
          <div class="row">
              <div class="col-md-12">
                <div class="page-header">
                  <h1> <a href="../site/BD.php"><span class="glyphicon glyphicon-th"></span></a> Art&iacute;culo <small>Insertar</small></h1>
                </div>
              </div>
            </div>
<!-- Errores o exito -->
          <?php
            $ArticuloC->errores();
            $ArticuloC->exito();
          ?>

            <form class="form-horizontal" role="form" id="registerForm" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6">
                
<!-- Nombre -->
                  <div class="form-group">
                    <label for="nombre" class="col-sm-3 control-label">Titulo:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del art&iacute;culo" value="<?php echo $ArticuloC->get_nombre(); ?>" />
                    </div>
                  </div>
<!-- Fecha de creacion -->
                  <div class="form-group">
                    <label for="datetimepicker6" class="col-sm-3 control-label">Fecha: </label>
                  <!-- Ejemplo 6 de Boostrap datetimepicker -->
                    <div class='col-sm-6'>
                      <input type='text' class="form-control" id='datetimepicker6' name="fecha_creacion" value="<?php echo $ArticuloC->get_fecha_creacion(); ?>" />
                    </div>
                  </div>
<!-- resumen -->
                  <div class="form-group">
                    <label for="resumen" class="col-sm-3 control-label">Resumen:</label>
                    <div class="col-sm-6">
                      <textarea class="form-cntrol" name="resumen" id="resumen" placeholder="Resumen del art&iacute;culo" cols="40"><?php echo $ArticuloC->get_resumen(); ?></textarea>
                    </div>
                  </div>
<!-- Abstract -->
                  <div class="form-group">
                    <label for="abstracto" class="col-sm-3 control-label">Abstract:</label>
                    <div class="col-sm-6">
                      <textarea class="form-cntrol" name="abstracto" id="abstracto" placeholder="Abstract del art&iacute;culo" cols="40"><?php echo $ArticuloC->get_abstract(); ?></textarea>
                    </div>
                  </div>
<!-- Introduccion -->
                  <div class="form-group">
                    <label for="introduccion" class="col-sm-3 control-label">Introducci&oacute;n:</label>
                    <div class="col-sm-6">
                      <textarea class="form-cntrol" name="introduccion" id="introduccion" placeholder="Introducci&oacute;n del art&iacute;culo" cols="40"> <?php echo $ArticuloC->get_introduccion(); ?> </textarea>
                    </div>
                  </div>
<!-- Metodologia -->
                  <div class="form-group">
                    <label for="metodologia" class="col-sm-3 control-label">Metodolog&iacute;a:</label>
                    <div class="col-sm-6">
                      <textarea class="form-cntrol" name="metodologia" id="metodologia" placeholder="Metodologia del art&iacute;culo" cols="40"> <?php echo $ArticuloC->get_metodologia(); ?> </textarea>
                    </div>
                  </div>

                </div>
                <div class="col-md-6">
<!-- Archivo_pdf -->
                  <div class="form-group">
                    <label for="archivo_pdf" class="col-sm-3 control-label">Archivo pdf:</label>
                    <div class="col-sm-6">
                      <input type="file" class="form-control" name="archivo_pdf" id="archivo_pdf" value="<?php echo $ArticuloC->get_archivo_pdf(); ?>" />
                    </div>
                  </div>
<!-- Status -->
                  <div class="form-group">
                    <label for="id_status" class="col-sm-3 control-label">Estatus: </label>
                    <div class="col-sm-6">
                                                      <!-- $id_tabla,$nombre_columna,$tabla,$name,$id,$where = ' ' -->
                        <?php echo $ArticuloC->getDropDown('id_status','status','status','id_status','id_status'); ?>
                    </div>
                  </div>
<!-- Contenido -->
                  <div class="form-group">
                    <label for="contenido" class="col-sm-3 control-label">Contenido:</label>
                    <div class="col-sm-6">
                      <textarea class="form-cntrol" name="contenido" id="contenido" placeholder="Contenido del art&iacute;culo" cols="40"> <?php echo $ArticuloC->get_contenido(); ?> </textarea>
                    </div>
                  </div>
<!-- Conclusiones -->
                  <div class="form-group">
                    <label for="conclusiones" class="col-sm-3 control-label">Conclusiones:</label>
                    <div class="col-sm-6">
                      <textarea class="form-cntrol" name="conclusiones" id="conclusiones" placeholder="Conclusiones del art&iacute;culo" cols="40"> <?php echo $ArticuloC->get_conclusiones(); ?> </textarea>
                    </div>
                  </div>
<!-- Agradecimientos -->
                  <div class="form-group">
                    <label for="agradecimientos" class="col-sm-3 control-label">Agradecimientos:</label>
                    <div class="col-sm-6">
                      <textarea class="form-cntrol" name="agradecimientos" id="agradecimientos" placeholder="Agradecimientos del art&iacute;culo" cols="40"> <?php echo $ArticuloC->get_agradecimientos(); ?> </textarea>
                    </div>
                  </div>
<!-- Referencias -->
                  <div class="form-group">
                    <label for="referencias" class="col-sm-3 control-label">Referencias:</label>
                    <div class="col-sm-6">
                      <textarea class="form-cntrol" name="referencias" id="referencias" placeholder="Referencias del art&iacute;culo" cols="40"> <?php echo $ArticuloC->get_referencias(); ?> </textarea>
                    </div>
                  </div>


                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <input type="submit" value="Enviar"  />
                    </div>
                  </div>
                
                <?php echo $ArticuloC->show_grid(); ?>
                
                </div>
              </div>
            </form>
          <!-------->

    </div><!-- Container -->
  </div><!-- intro-body -->
</section>


<?php include ('../layouts/footer.php'); ?>

