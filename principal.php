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
    <link href="<?php (new \config\generales())->url_base ?>css/nosotros.css" rel="stylesheet">
    <link href="<?php (new \config\generales())->url_base ?>css/contactos.css" rel="stylesheet">
    <link href="<?php (new \config\generales())->url_base ?>css/quienes.css" rel="stylesheet">

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
                        <a class="linkmenu" href="<?php echo (new \config\generales())->url_base."index.php?seccion=adm_session&accion=basico"; ?>">Básico</a>
                        <a class="linkmenu" href="<?php echo (new \config\generales())->url_base."index.php?seccion=adm_session&accion=avanzado"; ?>">Avanzado</a>
                        <a class="linkmenu" onclick="opcionMenu()">Nutracéuticos</a>
                        <div id="opcionesMenu" style="display: none;">
                            <a class="linkmenu" href="https://www.farmaciabiodam.com" target="_blank"><b> > </b>Farmacia Biodam</a>
                            <a class="linkmenu" href="https://www.drvalencia.mx/" target="_blank"><b> > </b>Productos DV</a>
                        </div>
                        <a href="<?php echo (new \config\generales())->url_base."index.php?seccion=adm_session&accion=quienes"; ?>">¿Quiénes somos?</a>
                        <a href="<?php echo (new \config\generales())->url_base."index.php?seccion=adm_session&accion=nosotros"; ?>">Nuestro equipo</a>
                        <a href="https://www.youtube.com/@dvnutraceuticos_educacion/videos" target="_blank">Testimonio</a>
                        <a href="<?php echo (new \config\generales())->url_base."index.php?seccion=adm_session&accion=pregunta"; ?>">Preguntas frecuentes</a>
                        <a href="<?php echo (new \config\generales())->url_base."index.php?seccion=adm_session&accion=contactos"; ?>">Contáctanos</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <a href="<?php echo (new \config\generales())->url_base."index.php?seccion=adm_session&accion=inicio"; ?>"><img class="imgmenu" src="<?php echo (new config\generales())->url_base; ?>css/img/recursos/logo.jpg"></a>
        </div>
        <div class="menudv navbar col-md-4"> <a href="https://escuela.dveducacion.com/" target="_blank">Plataforma</a></div>
    </div>

    <div id="whatsapp">
        <a href="https://wa.me/3324339427" target="_blank" class="btn-whatsapp">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="55" height="55" viewBox="0 0 24 24" stroke-width="1.5" stroke="#003366" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
            </svg>
        </a>

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