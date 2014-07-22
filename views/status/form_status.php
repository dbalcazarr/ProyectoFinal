<!-- formulario de Status -->
<?php 
//VISTA PRIVADA
  include ('../../libs/security.php');
  
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Status.php');
  include ('../../controllers/StatusController.php');
  include ('../../libs/Er.php');

  //include ('../layouts/header.php');

//Inicializar el controlador
  $StatusC = new StatusController();
  if(isset($_POST['status']))  {  
    $StatusC->inserta_status($_POST);
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

