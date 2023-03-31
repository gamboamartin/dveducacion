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
    <link href="<?php (new \config\generales())->url_base ?>css/modal.css" rel="stylesheet">
    <script src="js/Modal.js"></script>


    <?php echo $data->css_custom->css; ?>

</head>

<body>

<section id="nav" class="container-fluid navbar">
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
                        <a href="#nosotros">Quienes somos</a>
                        <a href="#">Nuestro equipo</a>
                        <a href="#">Testimonio</a>
                        <a href="#">Preguntas frecuentes</a>
                        <a href="#">Contáctanos</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <img class="imgmenu" src="<?php echo (new config\generales())->url_base; ?>css/img/logo.jpg">
        </div>
        <div class="menudv navbar col-md-4"> <a href="https://escuela.dveducacion.com/">Perfil</a></div>
    </div>
</section>

<section id="home" class="container-fluid grid-block">
    <div class="row">
        <div class="img">
            <div class="col-md-7 titular">
                <p class="encabezado">Es hora de optimizar tu salud </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="row imgfondo">
            <div class="col-md-6 borde25">
                <h1 class="h-titular">¿Qué es la Medicina Funcional y Ortomolecular?</h1>
                <p class="p-titular">La medicina funcional determina cómo y por qué ocurre la enfermedad y
                    optimiza la salud al atender las causas de la enfermedad para cada individuo.</p>
                <p class="p-titular">The Institute For Functional Medicine”</p>
            </div>
            <div class="col-md-6 borde25">
                <img class="imgcurso" src="<?php echo (new config\generales())->url_base; ?>css/img/doc1.png">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 borde25">
                <h1 class="h-titular">¿Por qué estudiar en DV Educación?</h1>
                <p class="p-titular">Nuestros diplomados están diseñados desde la ciencia, bioquímica, nutrición
                    funcional... mostrándote cómo utilizar la Medicina Funcional desde las bases
                    hasta la clínica.</p>
                <p class="p-titular">Empezando por optimizar tu salud y
                    después la de tus pacientes y seres
                    queridos</p>
            </div>
            <div class="col-md-6 borde25">
                <img class="imgcurso" src="<?php echo (new config\generales())->url_base; ?>css/img/joven1.png">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 borde25">
                <h1 class="h-titular">¿Beneficios de estudiar con DV Educación</h1>
                <p class="p-titular">- Aval académico.</p>
                <p class="p-titular">- Certiﬁcado de aprobación.</p>
                <p class="p-titular">- Asistencia un ﬁn de semana al mes.</p>
                <p class="p-titular">- Clases presencial y online.</p>
                <p class="p-titular">- Contenido clases disponible online.</p>
                <p class="p-titular">- Plataforma disponible 24/7.</p>
                <p class="p-titular">- Acceso a nuestra comunidad.</p>
                <p class="p-titular">- Conviértete en un experto desde</p>
                <p class="p-titular">- el nivel básico al avanzado.</p>
            </div>
            <div class="col-md-6 borde25">
                <img class="imgcurso" src="<?php echo (new config\generales())->url_base; ?>css/img/confe1.png">
            </div>
        </div>
    </div>
    <div class="row grid-block diplomados">
        <center><h1 class="col-md-4 encabezados">Nuestros diplomados</h1></center>
        <div class="borde40">
            <div class="col-md-4 divcont"><center><button type="button" class="btncursos"><img src="css/img/curso1.svg" class="imgcurso"></button></center></div>
            <div class="col-md-4 divcont"><center><button type="button" class="btncursos"><img src="css/img/curso2.svg" class="imgcurso"></button></center></div>
            <div class="col-md-4 divcont"><center><button type="button" class="btncursos"><img src="css/img/curso3.svg" class="imgcurso"></button></center></div>
        </div>
    </div>
    <div class="row">
        <div class="grid-block">
            <div class="row  borde25 bordeinfe">
                <div class="col-md-4 borde25">
                    <center><h1>Conoce algunas de las opiniones de nuestros alumnos y ex alumnos</h1></center>
                </div>
                <div class="col-md-8">
                    <div class="row conteyoutube borde25 divcont">
                        <div class="col-md-4">
                            <a type="button" class="btnyoutube" href="https://www.youtube.com/watch?v=Ra-ix20BlQ0&list=PLCWA4ksG1ZllCwnPpJqekYjUKoSqnEmIa&index=1">
                                <img class="imgtestimonio" src="css/img/tdv1.jpg"></a>
                        </div>
                        <div class="col-md-4">
                            <a type="button" class="btnyoutube" href="https://www.youtube.com/watch?v=rWbEjw3k18M&list=PLCWA4ksG1ZllCwnPpJqekYjUKoSqnEmIa&index=2">
                                <img class="imgtestimonio" src="css/img/tdv2.jpg"></a>
                        </div>
                        <div class="col-md-4">
                            <a type="button" class="btnyoutube" href="https://www.youtube.com/watch?v=DdiPudfDTS0&list=PLCWA4ksG1ZllCwnPpJqekYjUKoSqnEmIa&index=3">
                                <img class="imgtestimonio" src="css/img/tdv3.jpg"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row grid-block">
        <div class="row borde25">
            <h1 class="col-md-4 borde25">Recursos Gratis</h1>
            <p class="p-titular">Suscribete a nuestra cuenta en Youtube y recibe una alerta de nuestro
                contenido reciente diseñado para mantener a nuestra comunidad al día.</p>
        </div>
        <div class="row conterecursos">
            <div class="col-md-3 divcont"><center><button type="button" class="btnarticulo"></button></center></div>
            <div class="col-md-3 divcont"><center><button type="button" class="btnarticulo"></button></center></div>
            <div class="col-md-3 divcont"><center><button type="button" class="btnarticulo"></button></center></div>
            <div class="col-md-3 divcont"><center><button type="button" class="btnarticulo"></button></center></div>
        </div>
    </div>
    <div class="piepagina row border-red">
    </div>
</section>

<div class="row titular border-azul">
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

<section id="nosotros" class="container-fluid grid-block">

    <div class="row grid-block nosotros">
        <div class="titular">
            <h1 class="col-md-3 encabezado-nosotros">Somos un equipo multidiciplinario</h1>
        </div>
    </div>
    <div class="row">
        <div class="grid-block borde40">
            <!-- Miguel -->
            <div class="col-md-3 divcont">
                <center><img class="imgpersonal" src="<?php echo (new config\generales())->url_base; ?>css/img/miguel.jpg" id="img-miguel" onclick="mostrarModalMiguel()"></center>
                <div id="modal-miguel" style="display: none;">
                    <div>
                        <div class="col-md-6">
                            <p class="border-azul">Lic. En Desarrollo Educativo Institucional (Universidad La Salle), profesor de ciencias
                                sociales y sociología durante 19 años, estudió la maestría en Filosofía y
                                Ciencias Sociales (ITESO). Diplomado en Naturopatia.
                                Director de Deporte y Cultura en preparatoria privada 4 años. Actual Director de DV Educación.</p>
                        </div>
                    </div>
                    <button class="close" onclick="ocultarModalMiguel()">x</button>
                </div>
                <div><centre><h3 class="nombres">Miguel</h3></centre></div>
            </div>
            <!-- Rodolfo -->
            <div class="col-md-3 divcont">
                <center><img class="imgpersonal" src="<?php echo (new config\generales())->url_base; ?>css/img/rodolfo.jpg" id="img-rodolfo" onclick="mostrarModalRodolfo()"></center>
                <div id="modal-rodolfo" style="display: none;">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                        ex ea commodo consequat. Duis autem vel</p>
                    <button class="close" onclick="ocultarModalRodolfo()">x</button>
                </div>
                <div><centre><h3 class="nombres">Rodolfo</h3></centre></div>
            </div>
            <!-- Daniel -->
            <div class="col-md-3 divcont">
                <center><img class="imgpersonal" src="<?php echo (new config\generales())->url_base; ?>css/img/daniel.jpg" id="img-daniel" onclick="mostrarModalDaniel()"></center>
                <div id="modal-daniel" style="display: none;">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                        ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                        tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel
                        eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum
                        dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                        blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                    <button class="close" onclick="ocultarModalDaniel()">x</button>
                </div>
                <div><centre><h3 class="nombres">Daniel</h3></centre></div>
            </div>
            <!-- Margarita -->
            <div class="col-md-3 divcont">
                <center><img class="imgpersonal" src="<?php echo (new config\generales())->url_base; ?>css/img/margarita.jpg" id="img-margarita" onclick="mostrarModalMargarita()"></center>
                <div id="modal-margarita" style="display: none;">
                    <p>Lic. En contabilidad. Health Coach certiﬁcada por el Instituto de Medicina
                        Funcional (EUA), con gran experiencia como Terapeuta Naturista, Gerontología, Medicina
                        Estética y Nutrición. Como empresaria ha desarrollado varios productos de nutrición funcional.</p>
                    <button class="close" onclick="ocultarModalMargarita()">x</button>
                </div>
                <div><centre><h3 class="nombres">Margarita</h3></centre></div>
            </div>
        </div>
    </div>
    <div class="row grid-block diplomados">
        <center><h1 class="col-md-4 encabezados">Nuestros diplomados</h1></center>
        <div class="borde40">
            <div class="col-md-4 divcont"><center><button type="button" class="btncursos"><img src="css/img/curso1.svg" class="imgcurso"></button></center></div>
            <div class="col-md-4 divcont"><center><button type="button" class="btncursos"><img src="css/img/curso2.svg" class="imgcurso"></button></center></div>
            <div class="col-md-4 divcont"><center><button type="button" class="btncursos"><img src="css/img/curso3.svg" class="imgcurso"></button></center></div>
        </div>
    </div>
    <div class="row">
        <div class="grid-block borde25">
            <center><h1 class="col-md-3 encabezados bordeinfe">Preguntas frecuentes</h1></center>
            <center><p class="p-pregunta">Todo lo que necesitas saber sobre nuestros diplomados</p></center>
            <div class="borde40">
                <center><p onclick="mostrarPreguntaA()" class="p-pregunta">¿Qué aval o reconocimiento tiene el Diplomado?</p></center>
                <div id="pregunta-a" style="display: none;">
                    <center><p class="col-md-8">Tenemos el aval de la Secretaría de Innovación Jalisco, encargada de la Educación Continua en nuestro
                    estado y con validez a nivel Federal.</p></center></div>
                <center><p onclick="mostrarPreguntaB()" class="p-pregunta">¿Cuánto dura el Diplomado?</p></center>
                <div id="pregunta-b" style="display: none;">
                    <center><p class="col-md-8">El Básico dura 8 meses (9 módulos), 1 fin de semana al mes. El Avanzado
                            dura 8 meses (8 módulos), 1 fin de semana al mes.</p></center></div>
                <center><p onclick="mostrarPreguntaC()" class="p-pregunta">¿Puedo entrar directamente al Diplomado Avanzado?</p></center>
                <div id="pregunta-c" style="display: none;">
                    <center><p class="col-md-8">No, es necesario tomar el básico y completarlo.</p></center></div>
                <!--<center><p onclick="mostrarPreguntaD()" class="p-pregunta">¿Qué aval o reconocimiento tiene el Diplomado?</p></center>
                <div id="pregunta-d" style="display: none;">
                    <center><p class="col-md-8">Tenemos el aval de la Secretaría de Innovación Jalisco, encargada de la Educación Continua en nuestro
                            estado y con validez a nivel Federal.</p></center></div>

                <center><p onclick="mostrarPreguntaE()" class="p-pregunta">¿Qué aval o reconocimiento tiene el Diplomado?</p></center>
                <div id="pregunta-e" style="display: none;">
                    <center><p class="col-md-8">Tenemos el aval de la Secretaría de Innovación Jalisco, encargada de la Educación Continua en nuestro
                            estado y con validez a nivel Federal.</p></center></div>

                <center><p onclick="mostrarPreguntaF()" class="p-pregunta">¿Qué aval o reconocimiento tiene el Diplomado?</p></center>
                <div id="pregunta-f" style="display: none;">
                    <center><p class="col-md-8">Tenemos el aval de la Secretaría de Innovación Jalisco, encargada de la Educación Continua en nuestro
                            estado y con validez a nivel Federal.</p></center></div>

                <center><p onclick="mostrarPreguntaG()" class="p-pregunta">¿Qué aval o reconocimiento tiene el Diplomado?</p></center>
                <div id="pregunta-g" style="display: none;">
                    <center><p class="col-md-8">Tenemos el aval de la Secretaría de Innovación Jalisco, encargada de la Educación Continua en nuestro
                            estado y con validez a nivel Federal.</p></center></div>

                <center><p onclick="mostrarPreguntaH()" class="p-pregunta">¿Qué aval o reconocimiento tiene el Diplomado?</p></center>
                <div id="pregunta-h" style="display: none;">
                    <center><p class="col-md-8">Tenemos el aval de la Secretaría de Innovación Jalisco, encargada de la Educación Continua en nuestro
                            estado y con validez a nivel Federal.</p></center></div>

                <center><p onclick="mostrarPreguntaI()" class="p-pregunta">¿Qué aval o reconocimiento tiene el Diplomado?</p></center>
                <div id="pregunta-i" style="display: none;">
                    <center><p class="col-md-8">Tenemos el aval de la Secretaría de Innovación Jalisco, encargada de la Educación Continua en nuestro
                            estado y con validez a nivel Federal.</p></center></div>-->
            </div>

            <div class="row">
                <div class="col-md-3 divcont"><center><button type="button" class="btncursos"><img src="css/img/curso1.svg" class="imgcurso"></button></center></div>
                <div class="col-md-3 divcont"><center><button type="button" class="btncursos"><img src="css/img/curso2.svg" class="imgcurso"></button></center></div>
                <div class="col-md-3 divcont"><center><button type="button" class="btncursos"><img src="css/img/curso3.svg" class="imgcurso"></button></center></div>
                <div class="col-md-3 divcont"><center><button type="button" class="btncursos"><img src="css/img/curso1.svg" class="imgcurso"></button></center></div>
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