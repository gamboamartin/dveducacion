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
    <div class="row">
        <div class="dropdown menudv col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <button class="dropbtn montserratitalic">Menú</button>
                </div>
                <div class="col-md-12">
                    <div class="dropdown-content">
                        <a class="linkmenu" href="#">Básico</a>
                        <a class="linkmenu" href="#">Intermedio</a>
                        <a class="linkmenu" href="#">Avanzado</a>
                        <a class="linkmenu" href="#">Nutracéuticos</a>
                        <a href="#">Quienes somos</a>
                        <a href="#">Nuestro equipo</a>
                        <a href="#">Testimonio</a>
                        <a href="#">Pregunstas frecuentes</a>
                        <a href="#">Contáctanos</a>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="menudvrsp menudv border-verde"><img class="border-azul"  src="<?php //echo (new config\generales())->url_base; ?>css/img/logo.jpg" height="75px" width="auto"></div>-->
        <div class="col-md-4">
        <img class="imgmenu" src="<?php echo (new config\generales())->url_base; ?>css/img/logo.jpg">
        </div>
        <div class="menudv navbar col-md-4"> <a href="https://escuela.dveducacion.com/">Perfil</a></div>
    </div>
</section>-->

<section id="portimg" class="container-fluid">
    <div class="row">
        <div class="grid-block img">
            <div>
                <div class="titular">
                    <p class="encabezado">Es hora de optimizar tu salud </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row grid-block">
        <div class="dipositivas">
            <div class="my_scroll_div">

                <div class="conten">
                    <div class="div2 border-azul">
                        <p class="border-verde">¿Qué es la Medicina Funcional y Ortomolecular?</p>
                        <p class="border-verde">La medicina funcional determina cómo y por qué ocurre la enfermedad y
                            optimiza la salud al atender las causas de la enfermedad para cada individuo.</p>
                    </div>
                    <img class="div2 border-verde" src="<?php echo (new config\generales())->url_base; ?>css/img/confe1.png">
                </div>
                <div class="conten">
                    <div class="div2 border-azul">
                        <p class="border-verde">¿Por qué estudiar en DV Educación?</p>
                        <p class="border-verde">La nutrición ortomolecular se utiliza para ayudar en la absorción de
                            vitaminas y nutrientes por parte del organismo, y así inﬂuir positivamente en la salud.</p>
                    </div>
                    <img class="div2" src="<?php echo (new config\generales())->url_base; ?>css/img/joven1.png">
                </div>
                <div class="conten">
                    <div class="div2 border-azul">
                        <p class="border-verde">¿Por qué estudiar en DV Educación?</p>
                        <p class="border-verde">La nutrición ortomolecular se utiliza para ayudar en la absorción de
                            vitaminas y nutrientes por parte del organismo, y así inﬂuir positivamente en la salud.</p>
                    </div>
                    <img class="div2" src="<?php echo (new config\generales())->url_base; ?>css/img/doc1.png">
                </div>

            </div>
        </div>
    </div>

    <div class="row grid-block">
        <div class="conten">
            <div>
                <div class="div3"><center><button type="button" class="btnarticulo"></button></center></div>
                <div class="div3"><center><button type="button" class="btnarticulo"></button></center></div>
                <div class="div3"><center><button type="button" class="btnarticulo"></button></center></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="grid-block">
            <div>
                <div class="conten">
                    <div class="div2">
                        <h3 class="border-verde">Conoce algunas de las opiniones de nuestros alumnos y ex alumnos</h3>
                    </div>
                    <img class="div2 border-verde" src="<?php echo (new config\generales())->url_base; ?>css/img/confe1.png">
                    <div class="dnec dnecrsp border-red" top-right><img class="nec necrsp border-azul" src="<?php echo (new config\generales())->url_base; ?>css/img/circulobi.svg"></div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="row grid-block border-azul">
        <div class="conten">
            <h2 class="border-azul">Creado por una equipo que no se conforma con menos que excelencia.</h2>
            <p>Conozca a nuestros equipo internos y al consejo de expertos</p>

            <div class="conten">
                <div>
                    <div class="div3"><center><button type="button" class="btncursos"><img src="css/img/curso1.svg" class="imgcurso"></button></center></div>
                    <div class="div3"><center><button type="button" class="btncursos"><img src="css/img/curso2.svg" class="imgcurso"></button></center></div>
                    <div class="div3"><center><button type="button" class="btncursos"><img src="css/img/curso1.svg" class="imgcurso"></button></center></div>
                </div>
            </div>
        </div>
    </div>

    <div class="conten">
        <div class="div4">
            <center><h1>FIN HOME</h1></center>
        </div>
        <div class="div4">
            <center><h1>FIN HOME</h1></center>
        </div>
        <div class="div4">
            <center><h1>FIN HOME</h1></center>
        </div>
        <div class="div4">
            <center><h1>FIN HOME</h1></center>
        </div>
    </div>

    <div id="quien" class="row border-azul">
        <div class="grid-block port2">
            <h1>Quienes somos</h1>
            <div class="border-red div4 acomodoimgrsp">
                <center><img id="Myimagen" class="imgpr" src="<?php echo (new config\generales())->url_base; ?>css/img/img1.jpg" onclick="openImg()"></center>
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                    <script src="js/prueba.js"></script>
                </div>
            </div>

            <div class="border-red div4 acomodoimgrsp">
                <center><img id="Myimagen" class="imgpr" src="<?php echo (new config\generales())->url_base; ?>css/img/img1.jpg" onclick="openImg()"></center>
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                    <script src="js/prueba.js"></script>
                </div>
            </div>

            <div class="border-red div4 acomodoimgrsp">
                <center><img id="Myimagen" class="imgpr" src="<?php echo (new config\generales())->url_base; ?>css/img/img1.jpg" onclick="openImg()"></center>
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                    <script src="js/prueba.js"></script>
                </div>
            </div>

            <div class="border-red div4 acomodoimgrsp">
                <center><img id="Myimagen" class="imgpr" src="<?php echo (new config\generales())->url_base; ?>css/img/img1.jpg" onclick="openImg()"></center>
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                    <script src="js/prueba.js"></script>
                </div>
            </div>

        </div>
    </div>

    <div id="nuest" class="row border-azul">
        <div class="grid-block port1">
            <h1>Nuestro equipo</h1>
            <div class="dnec dnecrsp border-red" top-right><img class="nec necrsp border-azul"
                   src="<?php echo (new config\generales())->url_base; ?>css/img/circulobi.svg"></div>
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
                <div class="conten border-azul">
                    <div class="div4"><center><button type="button" class="btncursos"><img src="css/img/curso1.svg" class="imgcurso"></button></center></div>
                    <div class="div4"><center><button type="button" class="btncursos"><img src="css/img/curso2.svg" class="imgcurso"></button></center></div>
                    <div class="div4"><center><button type="button" class="btncursos"><img src="css/img/curso1.svg" class="imgcurso"></button></center></div>
                    <div class="div4"><center><button type="button" class="btncursos"><img src="css/img/curso1.svg" class="imgcurso"></button></center></div>

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