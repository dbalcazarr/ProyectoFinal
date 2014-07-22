<?php
/* Esta variable la tienen que cambiar */
  define('BASEURL','http://localhost/ProyectoFinal');
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

<!-- Plantilla Bootstrap 
    Lo de abajo es necesario para que la plantilla funcione
    y tenga el aspecto original tratar de que esto quede
    siempre al final de la etiqueta head y antes de los estilos nuestros-->
    <!-- Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom Theme CSS -->
    <link href="../css/grayscale.css" rel="stylesheet">
<!-- Fin de la plantilla -->

<!-- Nuestro estilo -->
    <link href="../css/Estilo.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Revista</span> Electr&oacute;nica
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href=<?php echo '"'.BASEURL.'"'; ?>>
                            <span class="glyphicon glyphicon-home"></span> Inicio
                        </a>
                    </li>
                    <li class="page-scroll">
                        <a href="#consultas"><span class="glyphicon glyphicon-search"></span> Consultas</a>
                    </li>
                    <?php
                        if(isset($_SESSION['user'])){
                            echo '<li class="page-scroll">
                                <a href="'.BASEURL.'/views/site/BD.php"><span class="glyphicon glyphicon-hdd"></span> Base de Datos</a>
                                </li>';
                        }     
                    ?>
                    <li class="page-scroll">
                        <a href="#contactos"><span class="glyphicon glyphicon-phone-alt"></span> Contacto</a>
                    </li>
                    <?php
                        if (!isset($_SESSION['user'])) {
                            echo '<li class="page-scroll">
                            <a href="'.BASEURL.'/views/site/login.php"><span class="glyphicon glyphicon-user"></span> Login</a>
                            </li>';
                        }
                        if (isset($_SESSION['user'])) {
                            echo '<li class="page-scroll">
                            <a href="'.BASEURL.'/views/site/logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a>
                            </li>';
                        }
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!---------- Hata aqui iria el header ------>
