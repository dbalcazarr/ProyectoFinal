
    <?php 
	  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Revista.php');
      include ('../../controllers/RevistaController.php');
      include ('../../libs/Er.php');
	  include ('../layouts/header.php');
	  
	  $revistaC=new RevistaController();
	  if(isset($_POST['nombre']))
	  {
		
		$revistaC->insertaRevista($_POST, $_FILES);
		$revistaC->muestraErrores($_POST, $_FILES);
	  }
	?>
<div class="container" id="formularios">
        <div class="row">            
            <!---------Inicio form----->
            <div class="col-md-12" > <h1 class="text-center">
                <span class="glyphicon glyphicon-heart"></span>
                Revista</h1>
             </div>
            
            <div class="col-md-6">
                <!-------->
                
                <form role="form" class="registerForm" method="post" enctype="multipart/form-data">
                <div class="row">
               			<div class="form-group">
                            <label for="nombre" class="col-lg-3 control-label" >Nombre</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $revistaC->get_nombre(); ?>" />
                            </div>
                        </div>
                 </div> <br>
                 
                 <div class="row">                        
                        <div class="form-group">
                            <label for="portada" class="col-lg-3 control-label">Portada</label>
                            <div class="col-lg-4">
                            <input type="file" id="portada" name="portada">
                            </div>
                            
                      </div> 
                  </div> <br>
                  
                  <div class="row"> 
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Fecha</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="fecha" value="<?php echo $revistaC->get_fecha(); ?>" /> (YYYY/MM/DD)
                            </div>
                        </div>
                  </div> <br>
                  
                  <div class="row">                        
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Volumen</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="volumen" value="<?php echo $revistaC->get_volumen(); ?>"/>
                            </div>
                        </div>
                   </div> <br>
                        
                        
                   <div class="row">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Titulo</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="titulo" value="<?php echo $revistaC->get_titulo(); ?>" />
                            </div>
                        </div>
                    </div> <br>
                    
                    
                    <div class="row">    
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Subtitulo</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="subtitulo" value="<?php echo $revistaC->get_subtitulo(); ?>" />
                            </div>
                        </div>  
                    </div> <br>
                    
                    <div class="row">    
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Numero</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="numero" value="<?php echo $revistaC->get_numero(); ?>" />
                            </div>
                        </div>  
                    </div> <br>
                    
                    <div class="row">    
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Clave</label>
                            <div class="col-lg-4">
                                <input type="password" class="form-control" name="clave" value="<?php echo $revistaC->get_clave(); ?>" />
                            </div>
                        </div>  
                    </div>   <br>
                    
                    
                    <div class="row">    
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Directorio</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="directorio" value="<?php echo $revistaC->get_directorio(); ?>" />
                            </div>
                        </div>  
                    </div>  <br>
                    
                    <div class="row">    
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Editorial</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="editorial" value="<?php echo $revistaC->get_editorial(); ?>" />
                            </div>
                        </div>  
                    </div>  <br>   
                    
                    
                    <div class="row">    
                        <div class="form-group">
                            <label for="id_status">Id status</label>
                            <?php echo $revistaC->getDropDown('id_status','id_status','status','id_status', 'id_status');?>
                         </div>  
                    </div>
                    <button type="submit" class="btn btn-default">Guardar</button>           
                </form>
                <!-------->
          </div>
        </div>
	</div>
            
            <!------------Fin form------------->

    <?php include ('../layouts/footer.php'); ?>

