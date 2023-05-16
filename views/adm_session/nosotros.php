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
            <h2>Diplomado en Medicina Funcional <br>
                Ortomolecular Módulos Básico: <br><br></h2>
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
            <h2>Diplomado en Medicina Funcional <br>
                Ortomolecular Módulos Avanzado:<br><br></h2>
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
    <div class="piepagina row">
    </div>
</section>