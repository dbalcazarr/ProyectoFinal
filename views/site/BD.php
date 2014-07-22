
<?php 
    include ('../../libs/security.php');
    include ('../layouts/header.php');
  
?>


    <section class="intro" id="BD">
        <div class="intro-body" id="BD1">
            <div class="container" >
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="page-header">
                            <h1>Administrar Base de datos <small>Insertar</small></h1>
                        </div>

                        <p class="intro-text">Insertar dentro de la base de datos nueva información. Da clic en el &iacute;cono de abajo para ver las tablas donde puedes insertar.</p>


                        <div class="page-scroll"  id="btn_opc_inser_bd">
                            <a class="btn btn-circle">
                                <i class="fa fa-angle-double-down animated"></i>
                          
                            </a>
                        </div>

                    </div>
                </div>
                <br />
                    <div class="row" id="opc_inser_bd">
                            <div class="col-md-6">
                                <div class="list-group">
                                    <a href="../revista/form_revista.php" class="list-group-item">Revista</a>
                                    <a href="../autor/form_autor.php" class="list-group-item">Autor</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="list-group">
                                    <a href="../articulo/form_articulo.php" class="list-group-item">Art&iacute;culo</a>
                                    <a href="../indice/form_indice.php" class="list-group-item">Indice</a>
                                </div>
                            </div>
                    </div>
            </div>
        </div>
    </section>



<?php include ('../layouts/footer.php'); ?>