<section id="pregunta">
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

            <div id="ndiplomados" class="row grid-block diplomados">
                <div class="borde25">
                    <div class="col-md-4 divcont"><center><button  onclick="Basico()" type="button" class="btncursos">
                                <img src="css/img/recursos/curso1.svg" class="imgcurso"></button></center></div>

                    <div class="col-md-4 divcont"><center><button onclick="Avanzado()" type="button" class="btncursos">
                                <img src="css/img/recursos/curso3.png" class="imgcurso"></button></center></div>
                    <div class="col-md-4 divcont"><center><button onclick="ReelDV()" type="button" class="btncursos"
                                                                  data-href="#videoDV"><img src="css/img/recursos/recursos.svg" class="imgcurso"></button></center></div>
                </div>
            </div>
            <div id="basico" style="display: none" class="borde25">
                <center>
                    <h3>Diplomado en Medicina Funcional <br>
                        Ortomolecular Módulos Básico: <br><br></h3>
                    <p>1. El nuevo concepto de salud y enfermedad <br>
                        2. La medicina desde el punto de vista del terreno biológico <br>
                        3. La inflamación celular crónica <br>
                        4. Estrés oxidativo <br>
                        5. Microbiota intestinal e intestino permeable <br>
                        6. La carga tóxica y el proceso de biotransformación <br>
                        7. La importancia del equilibrio hormonal <br>
                        8. Disfuncion del eje Hipotálamo - Pituitaria - Adrenal <br>
                        (fatiga adrenal) y Tiroides <br>
                        9. Casos clínicos <br>
                    </p></center>
            </div>
            <div id="avanzado" style="display: none" class="borde25">
                <center>
                    <h3>Diplomado en Medicina Funcional <br>
                        Ortomolecular Módulos Avanzado:<br><br></h3>
                    <p>1. El uso correcto de los nutracéuticos <br>
                        2. El uso correcto de los nutracéuticos II <br>
                        3. Terapias Intravenosas <br>
                        4. Terapias Intravenosas II <br>
                        5. La enfermedad cardiovascular como
                        problema metabólico <br>
                        6. Manejo hormona avanzado <br>
                        7. Manejo hormona avanzado II <br>
                        8. Longevidad y masa muscular
                    </p></center>
            </div>
            <center><div id="video" style="display: none" class="bordeinfe">
                    <video id="videoDV" controls>
                        <source src="<?php echo (new config\generales())->url_base; ?>css/img/reel/reeldv.mp4" type="video/mp4">
                    </video>
                </div></center>
        </div>
    </div>

    <div class="piepagina row">
    </div>
</section>