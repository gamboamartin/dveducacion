<section id="nosotros" class="container-fluid grid-block">

    <div class="row grid-block nosotros">
        <div id="titular-nosotros">
            <h1 class="col-md-3 encabezado-titular">Somos un <br>equipo <br>multidisciplinario</h1>
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


    <div id="ndiplomados" class="row grid-block diplomados">
        <center><h1 class="col-md-4 encabezados">Nuestros <b>Diplomados</b></h1></center>
        <div class="borde25">
            <div class="col-md-4 divcont">
                <center><button  type="button" class="btncursos" data-bs-toggle="modal" data-bs-target="#modal_basico">
                        <img src="css/img/recursos/curso1.svg" class="imgcurso"></button></center></div>


            <div class="col-md-4 divcont"><center><button type="button" class="btncursos" data-bs-toggle="modal" data-bs-target="#modal_avanzado">
                        <img src="css/img/recursos/curso3.png" class="imgcurso"></button></center></div>
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
                    <p> Módulo I: El nuevo concepto de salud y enfermedad <br>
                        Módulo II: La medicina desde el terreno biológico <br>
                        Módulo III: La inflamación celular crónica<br>
                        Módulo IV: Estrés oxidativo <br>
                        Módulo V: Microbioma intestinal e intestino permeable<br>
                        Módulo VI: Detoxificación <br>
                        Módulo VII: Introducción a las Hormonas Bioidénticas<br>
                        Módulo VIII: La importancia de la función hormonal<br>
                        Módulo IX: Estrés metabólico  <br>
                    </p>
                    <p>
                    <h4 class="letra-azul">Registro del Diplomado Básico:</h4>
                    <b class="letra-azul">*Aval: ESDIP-2023-095
                        Secretaría de Innovación, Ciencia y Tecnología de Jalisco</b>
                    </p>
                </div>
                <div class="modal-footer">
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
                    <p>
                        I y II. USO CORRECTO DE LOS NUTRACÉUTICOS <br>
                        III Y IV. TERAPIAS INTRAVENOSAS<br>
                        IV, VI Y VII. TERAPIAS HORMONALES AVANZADAS<br>
                        VIII. SALUD CARDIOVASCULAR DESDE EL METABOLISMO.<br>
                        <br>
                        <b>Estos módulos se pueden elegir por separado.</b><br>
                    </p>
                    <p>
                    <h4 class="letra-azul">Registro del Diplomado Avanzado:</h4>
                    <b class="letra-azul">*Aval: ESDIP-2023-096
                        Secretaría de Innovación, Ciencia y Tecnología de Jalisco</b>
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


    <div class="piepagina row">
    </div>
</section>