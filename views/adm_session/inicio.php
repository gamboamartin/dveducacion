<section id="home" class="container-fluid grid-block">
    <div class="row">
        <div class="img">
            <div id="titular-home" class="col-md-5">
                <h1>¡Es momento de aprender a optimizar tu salud!</h1>
            </div>
        </div>
    </div>
    <div class="row grid-block">
        <div class="row imgfondo carrusel-vertical">
            <div class="col-md-6">
                <h1 class="h-titular">¿Qué es <b>la Medicina Funcional?</b></h1>
                <p class="p-titular">Es un nuevo modelo de la medicina que busca la raíz del problema, centrado en el
                    paciente y basado en la ciencia, buscando desde factores genéticos, bioquímicos y estilos de vida
                    del paciente, para atenderle de manera individualizada. <br> "The Institute For Functional Medicine"</p>
            </div>
            <div class="col-md-6">
                <img class="imgcurso" src="<?php echo (new config\generales())->url_base; ?>css/img/recursos/doc1.png">
            </div>

            <div class="col-md-6">
                <h1 class="h-titular">¿Por qué estudiar en <b>DV Educación</b>?</h1>
                <p class="p-titular">- Porque nuestros Diplomados están basados en la ciencia, te compartimos los
                    fundamentos y las referencias.
                    <br>- Te mostraremos cómo optimizar tu salud, mejorando el terreno biológico, con el uso correcto de
                    nutracéuticos y otras terapias integrativas.
                    <br>- El Dr Daniel Valencia es un ponente internacional, experto en Medicina Funcional, Hormonas
                    Bioidénticas, Bioquímica, Cambios de estilo de vida, etc.
                    <br>- Sus clases son muy amenas y entendibles.
                    <br>- Formas parte de una comunidad de profesionales de la salud funcionales, los cuales comparten
                    casos y formas de atenderlos (Telegram)
            </div>
            <div class="col-md-6">
                <img class="imgcurso" src="<?php echo (new config\generales())->url_base; ?>css/img/recursos/joven1.png">
            </div>
            <div class="col-md-6">
                <h1 class="h-titular">Beneficios de estudiar con <b>DV Educación</b>?</h1>
                <p class="p-titular">- Aval académico.
                    <br>- Entrega de diploma por cada Diplomado que curses.
                    <br>- Presencial, en línea y clases grabadas en plataforma educativa.
                    <br>- Contenido de clases 24/7.
                    <br>- Clases en vivo una vez al mes.
                    <br>- Desayunos y comidas congruente con la medicina funcional.
                    <br>- Tu consulta mejorará exponencialmente al tener mayores herramientas.
                </p>
            </div>
            <div class="col-md-6">
                <img class="imgcurso" src="<?php echo (new config\generales())->url_base; ?>css/img/recursos/confe1.png">
            </div>
        </div>
    </div>

    <div id="ndiplomados" class="row grid-block diplomados">
        <center><h1 class="col-md-4 encabezados">Nuestros <b>Diplomados</b></h1></center>
        <div class="borde25">
            <div class="col-md-4 divcont">
                <center><button  type="button" class="btncursos" data-bs-toggle="modal" data-bs-target="#modal_basico">
                <img src="css/img/recursos/curso1.svg" class="imgcurso"></button></center></div>


            <div class="col-md-4 divcont"><center><button type="button" class="btncursos" data-bs-toggle="modal" data-bs-target="#modal_avanzado">
                <img src="css/img/recursos/curso2.jpeg" class="imgcurso"></button></center></div>

            <div class="col-md-4 divcont"><center><button onclick="ReelDV()" type="button" class="btncursos"
                data-href="#videoDV"><img src="css/img/recursos/recursos.svg" class="imgcurso"></button></center></div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="modal_basico" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Diplomado en Medicina Funcional Ortomolecular Módulos Básico:</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Módulo I: El nuevo concepto de salud y enfermedad <br>
                        Módulo II: La medicina desde el terreno biológico <br>
                        Módulo III: La inflamación celular crónica<br>
                        Módulo IV: Estrés oxidativo <br>
                        Módulo V: Microbioma intestinal e intestino permeable<br>
                        Módulo VI: Detoxificación <br>
                        Módulo VII: Introducción a las Hormonas Bioidénticas<br>
                        Módulo VIII: La importancia de la función hormonal<br>
                        Módulo IX: Estrés metabólico <br>
                    </p>
                </div>
                <div class="modal-footer">

                    <button class="btn btn-tertiary" data-bs-target="#modal_requisito" data-bs-toggle="modal" data-bs-dismiss="modal">Requisitos</button>
                    <!-- Boton Requisito debe de abrir modal_requisito -->
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_avanzado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Diplomado en Medicina Funcional Ortomolecular Módulos Avanzado:</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>1. El uso correcto de los nutracéuticos <br>
                        2. El uso correcto de los nutracéuticos II <br>
                        3. Terapias Intravenosas <br>
                        4. Terapias Intravenosas II <br>
                        5. La enfermedad cardiovascular como
                        problema metabólico <br>
                        6. Manejo hormona avanzado <br>
                        7. Manejo hormona avanzado II <br>
                        8. Longevidad y masa muscular
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-tertiary" data-bs-target="#modal_requisito" data-bs-toggle="modal" data-bs-dismiss="modal">Requisitos</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_requisito" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Requisitos para ingresar al diplomado:</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>- Ser profesional de la salud <br>
                        - Enviar cédula profesional o documento que avale sus estudios en salud <br>
                        - Realizar el pago en tiempo y forma antes del inicio de las clases <br>
                        - Llenar el formato de inscripción que se le haría llegar a su correo o whatsapp <br>
                        - Respetar el reglamento de Diplomados
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


    <center><div id="video" style="display: none" class="bordeinfe">
        <video id="videoDV" controls>
            <source src="<?php echo (new config\generales())->url_base; ?>css/img/reel/reeldv.mp4" type="video/mp4">
        </video>
    </div></center>

    <div class="row">
        <div class="grid-block">
            <div class="row imgfondo1 borde25 bordeinfe">
                <div class="col-md-4 borde25">
                    <center><h1>Conoce algunas de las opiniones de nuestros alumnos y ex alumnos</h1></center>
                </div>
                <div class="col-md-8">
                    <div class="row conteyoutube borde25 divcont">
                        <div class="col-md-4">
                            <a type="button" class="btnyoutube"
                               href="https://www.youtube.com/watch?v=Ra-ix20BlQ0&list=PLCWA4ksG1ZllCwnPpJqekYjUKoSqnEmIa&index=1"
                               target="_blank"> <img class="imgtestimonio" src="css/img/tdv1.jpg"></a>
                        </div>
                        <div class="col-md-4">
                            <a type="button" class="btnyoutube"
                               href="https://www.youtube.com/watch?v=rWbEjw3k18M&list=PLCWA4ksG1ZllCwnPpJqekYjUKoSqnEmIa&index=2"
                               target="_blank"> <img class="imgtestimonio" src="css/img/tdv2.jpg"></a>
                        </div>
                        <div class="col-md-4">
                            <a type="button" class="btnyoutube"
                               href="https://www.youtube.com/watch?v=DdiPudfDTS0&list=PLCWA4ksG1ZllCwnPpJqekYjUKoSqnEmIa&index=3"
                               target="_blank"> <img class="imgtestimonio" src="css/img/tdv3.jpg"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="piepagina row">
    </div>
</section>
