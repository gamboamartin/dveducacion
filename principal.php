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
                        <a class="linkmenu" href="https://www.farmaciabiodam.com" target="_blank">Nutracéuticos</a>
                        <a href="#nosotros">¿Quiénes somos?</a>
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
        <div class="menudv navbar col-md-4"> <a href="https://escuela.dveducacion.com/" target="_blank">Plataforma</a></div>
    </div>
</section>

<section id="home" class="container-fluid grid-block">
    <div class="row">
        <div class="img">
            <div class="col-md-7 titular">
                <p class="encabezado">Es hora de aprender a optimizar tu salud </p>
            </div>
        </div>
    </div>
    <div class="row grid-block">
        <div class="row imgfondo">
            <div class="col-md-6 borde25">
                <h1 class="h-titular">¿Qué es la Medicina Funcional y Ortomolecular?</h1>
                <p class="p-titular">La Medicina Funcional determina cómo y por qué ocurre la enfermedad y
                    optimiza la salud al atender las causas de la enfermedad para cada individuo.</p>
                <p class="p-titular">"The Institute For Functional Medicine"</p>
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
                <h1 class="h-titular">Beneficios de estudiar con DV Educación</h1>
                <p class="p-titular">- Aval académico.</p>
                <p class="p-titular">- Certiﬁcado de aprobación.</p>
                <p class="p-titular">- Asistencia un ﬁn de semana al mes.</p>
                <p class="p-titular">- Clases presencial y online.</p>
                <p class="p-titular">- Contenido clases disponible online.</p>
                <p class="p-titular">- Plataforma disponible 24/7.</p>
                <p class="p-titular">- Acceso a nuestra comunidad (Telegram).</p>
                <p class="p-titular">- Conviértete en un experto desde el nivel básico al avanzado.</p>
            </div>
            <div class="col-md-6">
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
            <p class="p-titular">Suscríbete a nuestra cuenta en Youtube y recibe una alerta de nuestro
                contenido reciente diseñado para mantener a nuestra comunidad al día.</p>
        </div>
        <div class="conterecursos">
            <div class="col-md-3 divcont"><center><button type="button" class="btnarticulo"></button></center></div>
            <div class="col-md-3 divcont"><center><button type="button" class="btnarticulo"></button></center></div>
            <div class="col-md-3 divcont"><center><button type="button" class="btnarticulo"></button></center></div>
            <div class="col-md-3 divcont"><center><button type="button" class="btnarticulo"></button></center></div>
        </div>
    </div>
    <div class="piepagina row">
    </div>
</section>

<section id="nosotros" class="container-fluid grid-block">

    <div class="row grid-block nosotros">
        <div class="titular">
            <h1 class="col-md-3 encabezado-nosotros">Somos un equipo multidisciplinario</h1>
        </div>
    </div>
    <div id="educadores" class="row">
        <div class="grid-block borde40">
            <!-- Daniel -->
            <div class="col-md-3 divcont">
                <a href="#modal-daniel"><center><img class="imgpersonal" src="<?php echo (new config\generales())->url_base; ?>css/img/daniel.jpg" id="img-daniel"></center></a>
                <div><centre><h3>Daniel</h3></centre></div>
            </div>
            <!-- Margarita -->
            <div class="col-md-3 divcont"><a href="#modal-margarita"><center><img class="imgpersonal" src="<?php echo (new config\generales())->url_base; ?>css/img/margarita.jpg" id="img-margarita"></center></a>
                <div><centre><h3 class="nombres">Margarita</h3></centre></div>
            </div>
            <!-- Miguel -->
            <div class="col-md-3 divcont"><a href="#modal-miguel"><center><img class="imgpersonal" src="<?php echo (new config\generales())->url_base; ?>css/img/miguel.jpg" id="img-miguel"></center></a>
                <div><centre><h3 class="nombres">Miguel</h3></centre></div>
            </div>
            <!-- Rodolfo -->
            <div class="col-md-3 divcont"><a href="#modal-rodolfo"><center><img class="imgpersonal" src="<?php echo (new config\generales())->url_base; ?>css/img/rodolfo.jpg" id="img-rodolfo"></center></a>
                <div><centre><h3 class="nombres">Rodolfo</h3></centre></div>
            </div>

            <div class="row">
                <!--Daniel-->
                <div id="modal-daniel" class="espacio-educadores"></div>
                    <div class="col-md-3"><center><img class="imgpersonal-parafo" src="<?php echo (new config\generales())->url_base; ?>css/img/daniel.jpg" id="img-daniel" onclick="mostrarModalDaniel()"></center></div>
                    <div class="col-md-9">
                        <div>
                            <h1>Daniel: Profesor Titular y Desarrollo Académico</h1>
                            <p>Dr. Daniel Valencia Torres
                                Médico general (UNIVA) especialista en nutrición anti-inflamatoria y regeneración celular.
                                Miembro y estudiante de “The Institute for Functional Medicine“, en Estados Unidos.
                                Master en Consejería Psicológica y Acompañamiento Integral (UMG)
                                Certificación en Homeopatía Clásica por la: “International Academy of Classical Homeopathy” en Alonissos, Grecia.
                                Médico Certificado en: “Programa de modificación del estilo de vida para el control de la
                                inflamación subclínica, resistencia a la Insulina y enfermedades crónico degenerativas“ desde el 2011.
                                Medicina regenerativa y estética desde el 2012.
                                Maestro y Conferencista internacional en programas de educación en Hormonas Bioidénticas,
                                Control Hormonal, Medicina Funcional Y Ortomolecular.</p>
                        </div>
                    </div>
                <!--Margarita-->
                <div id="modal-margarita" class="espacio-educadores"></div>
                <div class="col-md-3"><center><img class="imgpersonal-parafo" src="<?php echo (new config\generales())->url_base; ?>css/img/margarita.jpg" id="img-margarita" onclick="mostrarModalMargarita()"></center></div>
                <div class="col-md-9">
                    <div>
                        <h1>Margarita: Health Coach Funcional</h1>
                        <p>Lic. Margarita Irigoyen Ponce de León
                            Lic. En contabilidad. Health Coach certificada por el Instituto de Medicina Funcional (EUA),
                            con gran experiencia como Terapeuta Naturista, Gerontología, Medicina Estética y Nutrición.
                            Como empresaria ha desarrollado varios productos de nutrición funcional.</p>
                    </div>
                </div>
                <!--Miguel-->
                <div id="modal-miguel" class="espacio-educadores"></div>
                <div class="col-md-3"><center><img class="imgpersonal-parafo" src="<?php echo (new config\generales())->url_base; ?>css/img/miguel.jpg" id="img-miguel" onclick="mostrarModalMiguel()"></center></div>
                <div class="col-md-9">
                    <div>
                        <h1>Miguel: Educación</h1>
                        <p>Lic. En Desarrollo Educativo Institucional (Universidad La Salle), profesor de ciencias
                            sociales y sociología durante 19 años, estudió la maestría en Filosofía y Ciencias Sociales (ITESO).
                            Diplomado en Naturopatia. Director de Deporte y Cultura en preparatoria privada 4 años. Actual Director de DV Educación.</p>
                    </div>
                </div>
                <!--Rodolfo-->
                <div id="modal-rodolfo" class="espacio-educadores"></div>
                <div class="col-md-3"><center><img class="imgpersonal-parafo" src="<?php echo (new config\generales())->url_base; ?>css/img/rodolfo.jpg" id="img-rodolfo" onclick="mostrarModalRodolfo()"></center></div>
                <div class="col-md-9">
                    <div>
                        <h1>Rodolfo: Educación</h1>
                        <p>Lic. En Psicología Educativa (Normal Superior de Jalisco). En la Universidad Santander estudió
                            la Maestría en Docencia e Investigación y el Doctorado en Ciencias de la Educación. Fue
                            Coordinador Académico en la preparatoria Enrique Díaz de León por 19 años. Asesor Académico
                            en el Instituto Nacional para la Educación de los Adultos, Delegación Jalisco, Coordinación
                            Regional ·16. Director de Control Escolar en la Universidad Santander.</p>
                    </div>
                </div>
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
    <div class="piepagina row">
    </div>
</section>
<section>
    <div class="row">
        <div id="preguntas" class="grid-block">
            <center><h1 class="col-md-4">Preguntas</h1></center>
            <center><h2 class="col-md-4">Frecuentes</h2></center>
            <center><p>Todo lo que necesitas saber sobre nuestros diplomados</p></center>
            <div class="borde40">
                <center><p onclick="mostrarPreguntaA()"><b>></b>¿Qué aval o reconocimiento tiene el Diplomado?</p></center>
                <div id="pregunta-a" style="display: none;">
                    <center><p class="col-md-8 respuestas">Tenemos el aval de la Secretaría de Innovación Jalisco, encargada de la
                            Educación Continua en nuestro estado y con validez a nivel Federal.</p></center></div>

                <center><p onclick="mostrarPreguntaB()"><b>></b>¿Cuánto dura el Diplomado?</p></center>
                <div id="pregunta-b" style="display: none;">
                    <center><p class="col-md-8 respuestas">El Básico dura 8 meses (9 módulos), 1 fin de semana al mes. El Avanzado
                            dura 8 meses (8 módulos), 1 fin de semana al mes.</p></center></div>

                <center><p onclick="mostrarPreguntaC()"><b>></b>¿Puedo entrar directamente al Diplomado Avanzado?</p></center>
                <div id="pregunta-c" style="display: none;">
                    <center><p class="col-md-8 respuestas">No, es necesario tomar el básico y completarlo.</p></center></div>

                <center><p onclick="mostrarPreguntaD()"><b>></b>¿Qué voy a aprender en éste Diplomado a diferencia de otros?</p></center>
                <div id="pregunta-d" style="display: none;">
                    <center><p class="col-md-8 respuestas">Este Diplomado en Medicina Funcional y Ortomolecular te enseñará a ver
                            desde el terreno biológico, genético, químico, ambiental, emocional... primero tu salud y
                            después la de tus pacientes. Te enseñamos a ver de forma distinta la salud y la enfermedad,
                            para PREVENIR y después TRATAR a los pacientes, yendo a la raíz de los problemas y de forma
                            INTEGRAL.</p></center></div>

                <center><p onclick="mostrarPreguntaE()"><b>></b>¿Puedo pagar en mensualidades?</p></center>
                <div id="pregunta-e" style="display: none;">
                    <center><p class="col-md-8 respuestas">Sí hay varias opciones de pago, desde pronto pago hasta 3 meses sin
                            intereses.</p></center></div>

                <center><p onclick="mostrarPreguntaF()"><b>></b>¿Es presencial o en línea?</p></center>
                <div id="pregunta-f" style="display: none;">
                    <center><p class="col-md-8 respuestas">Se puede de las dos maneras, incluso se graban las clases en plataforma
                            a la cual podrás acceder con una cuenta y clave, para que veas las clases en el momento que
                            desees. A la mayoría les gusta en presencial, pero si vives fuera de Guadalajara, lo ideal
                            es en línea.</p></center></div>

                <center><p onclick="mostrarPreguntaG()"><b>></b>¿El Diplomado es para cualquier persona?</p></center>
                <div id="pregunta-g" style="display: none;">
                    <center><p class="col-md-8 respuestas">No, sólo para profesionales de la salud, ya que se necesitan bases
                            médicas para entender los términos y está enfocado a la consult a con pacientes.</p></center></div>

                <center><p onclick="mostrarPreguntaH()"><b>></b>¿Cuáles son los horarios del Diplomado?</p></center>
                <div id="pregunta-h" style="display: none;">
                    <center><p class="col-md-8 respuestas">En caso de ser presencial o en línea en vivo: Sábados de 9-6 y Domingos
                            9-3 (1 fin de semana al mes). En la plataforma lo puedes ver en el horario que tu elijas.</p></center></div>

                <center><p onclick="mostrarPreguntaI()"><b>></b>¿El costo es por módulo o por todo el Diplomado?</p></center>
                <div id="pregunta-i" style="display: none;">
                    <center><p class="col-md-8 respuestas">El costo es por TODO el Diplomado.</p></center></div>
            </div>

            <div class="row bordeinfe">
                <div class="col-md-3 divcont"><center><button type="button" class="btncursos"><img src="css/img/curso1.svg" class="imgcurso"></button></center></div>
                <div class="col-md-3 divcont"><center><button type="button" class="btncursos"><img src="css/img/curso2.svg" class="imgcurso"></button></center></div>
                <div class="col-md-3 divcont"><center><button type="button" class="btncursos"><img src="css/img/curso3.svg" class="imgcurso"></button></center></div>
                <div class="col-md-3 divcont"><center><button type="button" class="btncursos"><img src="css/img/recursos.svg" class="imgcurso"></button></center></div>
            </div>
        </div>
    </div>
    <div class="piepagina row">
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