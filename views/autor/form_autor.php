<!-- formulario de autor -->
<?php 
//VISTA PROVADA
  include ('../../libs/security.php');

  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Autor.php');
  include ('../../controllers/AutorController.php');
  include ('../../libs/Er.php');

  //include ('../layouts/header.php');

//Inicializar el controlador
  $AutorC = new AutorController();
  if(isset($_POST['nombre']))  {
    $AutorC->inserta_Autor($_POST);
  }

?>


<section class="intro" >
        <div class="intro-body" id="login">
            <div class="container">
                <div class="row">
                    
<!------- Aqui los formularios ---- -->

                </div>
            </div>
        </div>
</section>


<?php include ('../layouts/footer.php'); ?>

