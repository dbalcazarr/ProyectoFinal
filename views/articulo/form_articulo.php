<!-- Formulario de Articulo-->
<?php 
//VISTA PROVADA
  include ('../../libs/security.php');

  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Articulo.php');
  include ('../../controllers/ArticuloController.php');
  include ('../../libs/Er.php');

//  include ('../layouts/header.php');
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
        <div class="intro-body" id="login">
            <div class="container">
                <div class="row">
                    

<!------- Aqui los formularios ---- -->


                </div>
            </div>
        </div>
</section>


<?php include ('../layouts/footer.php'); ?>

