<!-- formulario de Revista -->
<?php 

//VISTA PRIVADA
  include ('../../libs/security.php');

  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Revista.php');
  include ('../../controllers/RevistaController.php');
  include ('../../libs/Er.php');

  //include ('../layouts/header.php');

//Inicializar el controlador
    $RevistaC = new RevistaController();

  if(isset($_POST['nombre']))  {
    /*echo "<pre>";
      print_r($_POST);
      print_r($_FILES);
    echo "</pre>";
    //die(); */
    $RevistaC->inserta_revista($_POST, $_FILES);
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

