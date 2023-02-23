<?php
use config\views;

/** @var stdClass $data */
/** @var base\controller\ $controlador */

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title><?php echo (new views())->titulo_sistema; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="<?php (new \config\generales())->url_base ?>css/template.css" rel="stylesheet">
    <link href="<?php (new \config\generales())->url_base ?>css/template.rsp.css" rel="stylesheet">
    <link href="<?php (new \config\generales())->url_base ?>css/styles.css" rel="stylesheet">


    <?php echo $data->css_custom->css; ?>

</head>

<body>

<section id="nav" class="container-fluid navbar menudvrsp">
    <div class="row menudvrsp">

        <div class="dropdown menudv menudvrsp">
            <button class="dropbtn montserratitalic">Menú</button>
            <div class="dropdown-content">
                <a class="linkmenu" href="#">Básico</a>
                <a class="linkmenu" href="#">Intermedio</a>
                <a class="linkmenu" href="#">Avanzado</a>
                <a class="linkmenu" href="#">Nutracéuticos</a>
                <a href="#quien">Quienes somos</a>
                <a href="#nuest">Nuestro equipo</a>
                <a href="#test">Testimonio</a>
                <a href="#preg">Pregunstas frecuentes</a>
                <a href="#">Contáctanos</a>
            </div>
        </div>
        <!--<div class="menudvrsp menudv border-verde"><img class="border-azul"  src="<?php //echo (new config\generales())->url_base; ?>css/img/logo.jpg" height="75px" width="auto"></div>-->
        <img class="menudvrsp menudv imgmenu"  src="<?php echo (new config\generales())->url_base; ?>css/img/logo.jpg" width="auto" height="75px">
        <div class="menudv menudvrsp navbar "> <a href="https://escuela.dveducacion.com/" >Perfil</a></div>
    </div>
</section>-->

<section id="portimg" class="container-fluid">
    <div class="row">
        <div class="grid-block img">
            <div>
                <div class="encabezado div">
                    <p class="encabezado">Es hora de optimizar tu salud </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row border-red">
        <div class="grid-block">
            <div class="border-azul">
                    <p>hola</p>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="grid-block">
            <div>
                <h1>Nosotros</h1>
            </div>
        </div>
    </div>

    <div id="quien" class="row border-azul">
        <div class="grid-block port2">
            <h1>Quienes somos</h1>
            <div class="border-red acomodoimg acomodoimgrsp">
                <center><img id="Myimagen" class="imgpr" src="<?php echo (new config\generales())->url_base; ?>css/img/img1.jpg" onclick="openImg()"></center>
                <!-- The Modal -->
                <div id="myModal" class="modal">
                    <!-- The Close Button -->
                    <span class="close">&times;</span>
                    <!-- Modal Content (The Image) -->
                    <img class="modal-content" id="img01">
                    <!-- Modal Caption (Image Text) -->
                    <div id="caption"></div>
                    <script src="js/prueba.js"></script>
                </div>
            </div>

            <div class="border-red acomodoimg acomodoimgrsp">
                <center><img id="Myimagen" class="imgpr" src="<?php echo (new config\generales())->url_base; ?>css/img/img1.jpg" onclick="openImg()"></center>
                <!-- The Modal -->
                <div id="myModal" class="modal">
                    <!-- The Close Button -->
                    <span class="close">&times;</span>
                    <!-- Modal Content (The Image) -->
                    <img class="modal-content" id="img01">
                    <!-- Modal Caption (Image Text) -->
                    <div id="caption"></div>
                    <script src="js/prueba.js"></script>
                </div>
            </div>

            <div class="border-red acomodoimg acomodoimgrsp">
                <center><img id="Myimagen" class="imgpr" src="<?php echo (new config\generales())->url_base; ?>css/img/img1.jpg" onclick="openImg()"></center>
                <!-- The Modal -->
                <div id="myModal" class="modal">
                    <!-- The Close Button -->
                    <span class="close">&times;</span>
                    <!-- Modal Content (The Image) -->
                    <img class="modal-content" id="img01">
                    <!-- Modal Caption (Image Text) -->
                    <div id="caption"></div>
                    <script src="js/prueba.js"></script>
                </div>
            </div>

            <div class="border-red acomodoimg acomodoimgrsp">
                <center><img id="Myimagen" class="imgpr" src="<?php echo (new config\generales())->url_base; ?>css/img/img1.jpg" onclick="openImg()"></center>
                <!-- The Modal -->
                <div id="myModal" class="modal">
                    <!-- The Close Button -->
                    <span class="close">&times;</span>
                    <!-- Modal Content (The Image) -->
                    <img class="modal-content" id="img01">
                    <!-- Modal Caption (Image Text) -->
                    <div id="caption"></div>
                    <script src="js/prueba.js"></script>
                </div>
            </div>

        </div>
    </div>

    <div id="nuest" class="row border-azul">
        <div class="grid-block port1">
            <h1>Nuestro equipo</h1>
            <div class="dnec dnecrsp" top-right><img class="nec necrsp border-azul" src="<?php echo (new config\generales())->url_base; ?>css/img/circulobicolor.svg"></div>
        </div>
    </div>

    <div id="test" class="row border-azul">
        <div class="grid-block port2">
            <h1>Recursos Gratis</h1>

        </div>
    </div>

    <div id="test" class="row border-azul">
        <div class="grid-block port2">
            <h1>Testimonios</h1>

        </div>
    </div>

    <div id="preg" class="row border-azul">
        <div class="grid-block port1">
            <H1>Preguntas frecuentes</H1>

            <p>Preguntas frecuentes</p>
                <div id="btn" class="border-azul">
                    <div class="btndiv"><center><button class="btncursos"><a href="#">Basico</a></button></center></div>
                    <div class="btndiv"><center><button class="btncursos"><a href="#">Intermedio</a></button></center></div>
                    <div class="btndiv"><center><button class="btncursos"><a href="#">Avanzado</a></button></center></div>
                    <div class="btndiv"><center><button class="btncursos"><a href="#">Recursos Gratis</a></button></center></div>
                </div>
        </div>
    </div>
</section>

    <?php  include($data->include_action); ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <?php
    if($data->js_view_aplica_include){
        include $data->js_view;
    }
    else{
        echo $data->js_view;
    }
    ?>

</body>
</html>