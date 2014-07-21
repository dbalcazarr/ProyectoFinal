<!**-- Vista pública-->
<?php
session_start();
  //include ('../layouts/header.php');
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Revista.php');
  include ('../../controllers/RevistaController.php');
  include ('../../libs/Er.php');

  
  $revistaC=new RevistaController();
	  
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Revista Electronica</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        
<!-- Datepicket -->
       <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap-datetimepicker.css" />

<!-- Bootstrap Validator -->
        <link rel="stylesheet" href="../css/bootstrap.css"/>
        <link rel="stylesheet" href="../css/bootstrapValidator.min.css"/> 

<!-- Fancybox -->
        <!-- Add fancyBox -->
        <link rel="stylesheet" href="../css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <link rel="stylesheet" href="../css/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
        <link rel="stylesheet" href="../css/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />

</head>
<body>
    
    <div class="row">
        <div class='col-md-12'>
                <?php echo $revistaC->show_grid(); ?>
        </div>
    </div>

    <!-- Core JavaScript Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="../js/jquery.mousewheel-3.0.6.pack.js"></script>
<!-- Add fancyBox -->
    <script type="text/javascript" src="../js/jquery.fancybox.pack.js?v=2.1.5"></script>

    <!--// Add jQuery library -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <!--// Add mousewheel plugin (this is optional) -->
        <script type="text/javascript" src="../js/jquery.mousewheel-3.0.6.pack.js"></script>
        <!--// Add fancyBox -->
        <script type="text/javascript" src="../js/jquery.fancybox.pack.js?v=2.1.5"></script>
        <!--// Optionally add helpers - button, thumbnail and/or media -->
        <script type="text/javascript" src="../js/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script type="text/javascript" src="../js/jquery.fancybox-media.js?v=1.0.6"></script>
        <script type="text/javascript" src="../js/jquery.fancybox-thumbs.js?v=1.0.7"></script>


<!-- Bootstrap Validator -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/bootstrapValidator.min.js"></script>


<!-- Bootstrap datetimepicker -->
    <script type="text/javascript" src="../js/moment.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datetimepicker.es.js"></script> 

    <!-- Custom Theme JavaScript -->
    <script src="../js/grayscale.js"></script>


<!-- Script personalizado
    Todas las funciones deben estar
    dentro de este archivo 
-->
    <script src="../js/main.js"></script>

</body>
</html>