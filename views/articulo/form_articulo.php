
    <?php 

	  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Articulo.php');
      include ('../../controllers/ArticuloController.php');
      include ('../../libs/Er.php');
	  include ('../layouts/header.php');
	  
	  $articuloC=new ArticuloController();
	  if(isset($_POST['nombre']))
	  {
		$articuloC->insertaArticulo($_POST, $_FILES);
		$articuloC->muestraErrores($_POST, $_FILES);
	  }
	?>
<div class="container" id="formularios">
        <div class="row">            
            <!---------Inicio form----->
            <div class="col-md-12" > <h1 class="text-center">
                <span class="glyphicon glyphicon-heart"></span>
                Articulo</h1>
             </div>
            
            <div class="col-md-6">
                <!-------->
                
                <form class="registerForm" method="post" enctype="multipart/form-data">
                <div class="row">
               			<div class="form-group">
                            <label for="nombre" class="col-lg-3 control-label" >Nombre</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $articuloC->get_nombre(); ?>" />
                            </div>
                        </div>
                 </div> <br>
                 
                 <div class="row">
               			<div class="form-group">
                            <label for="resumen" class="col-lg-3 control-label" >Resumen</label>
                            <div class="col-lg-4">
                            <textarea name="resumen" id="resumen"><?php echo $articuloC->get_resumen(); ?>
                            </textarea>
                                
                            </div>
                        </div>
                 </div> <br>
                 
                 <div class="row">
               			<div class="form-group">
                            <label for="abstracto" class="col-lg-3 control-label" >Abstracto</label>
                            <div class="col-lg-4">
                                <textarea name="abstracto" id="abstracto" ><?php echo $articuloC->get_abstracto(); ?>
                                </textarea>
                            </div>
                        </div>
                 </div> <br>
                 
                 <div class="row">
               			<div class="form-group">
                            <label for="introduccion" class="col-lg-3 control-label">Introduccion</label>
                            <div class="col-lg-4">
                                <textarea name="introduccion" id="introduccion" ><?php echo $articuloC->get_introduccion(); ?>
                                </textarea>
                                
                            </div>
                        </div>
                 </div> <br>
                 
                 <div class="row">
               			<div class="form-group">
                            <label for="metodologia" class="col-lg-3 control-label">Metodologia</label>
                            <div class="col-lg-4">
                                <textarea name="metodologia"  id="metodologia" ><?php echo $articuloC->get_metodologia(); ?>
                                </textarea>
                                
                            </div>
                        </div>
                 </div> <br>
                 
                 <div class="row">
               			<div class="form-group">
                            <label for="contenido" class="col-lg-3 control-label">Contenido</label>
                            <div class="col-lg-4">
                                <textarea name="contenido"  id="contenido"><?php echo $articuloC->get_contenido(); ?>
                                </textarea>
                                
                            </div>
                        </div>
                 </div> <br>
                 
                 <div class="row">
               		<label for="fecha_creacion"  class="col-lg-3 control-label">Fecha de creacion</label>
                        <div class="form-group">
                        <div class="col-lg-4">
                            <div class='input-group date' id='datetimepicker5' data-date-format="YYYY/MM/DD">
                                <input type='text' class="form-control" name="fecha_creacion" id="fecha_creacion" value="<?php echo $articuloC->get_fecha(); ?>" />
                                <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
                                </span>
                            </div>
                            </div>
                        </div>
                  </div>
                  
                  <div class="row">
               			<div class="form-group">
                        	<label for="archivo_pdf" class="col-lg-3 control-label">Archivo PDF</label>
                            <div class="col-lg-4">
                                <input type="file" name="archivo_pdf" id="archivo_pdf"  />
                            </div>
                        </div>
                 </div> <br>
                 
                 <div class="row">
                      	<div class="form-group">
                            <label for="id_status" class="col-lg-3 control-label">Id status</label>
                            <div class="col-lg-4">
                                <?php echo $articuloC->getDropDown('id_status','id_status','status','id_status', 'id_status');?>
                         </div>
                         </div>
                  </div> <br>
                        
                  <div class="row">
               			<div class="form-group">
                            <label for="conclusiones" class="col-lg-3 control-label">Conclusiones</label>
                            <div class="col-lg-4">
                                <textarea name="conclusiones"  id="conclusiones">  <?php echo $articuloC->get_conclusiones(); ?>
                                </textarea>
                                
                            </div>
                        </div>
                 </div> <br>
                 
                 <div class="row">
               			<div class="form-group">
                            <label for="agradecimientos" class="col-lg-3 control-label" >Agradecimientos</label>
                            <div class="col-lg-4">
                                <textarea name="agradecimientos" id="agradecimientos"> <?php echo $articuloC->get_agradecimientos(); ?>
                                </textarea>
                            </div>
                        </div>
                 </div> <br>
                 
                 <div class="row">
               			<div class="form-group">
                            <label for="referencias" class="col-lg-3 control-label" >Referencias</label>
                            <div class="col-lg-4">
                                <textarea name="referencias" id="referencias" placeholder="Referencias"><?php echo $articuloC->get_referencias(); ?>
                                </textarea>
                                </
                            </div>
                        </div>
                 </div> <br>
                 
                 
                 <button type="submit" class="btn btn-default">Guardar</button>  
                               
                </form>
                <!-------->
          </div>
        </div>
	</div>
            
            <!------------Fin form------------->

    <?php include ('../layouts/footer.php'); ?>

