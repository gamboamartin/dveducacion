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
                        <a class="linkmenu" onclick="opcionMenu()">Nutracéuticos</a>
                        <div id="opcionesMenu" style="display: none;">
                            <a class="linkmenu" href="https://www.farmaciabiodam.com"><b> > </b>Farmacia Biodam</a>
                            <a class="linkmenu" href="https://www.drvalencia.mx/"><b> > </b>Productos DV</a>
                        </div>
                        <a href="<?php echo (new \config\generales())->url_base."index.php?seccion=adm_session&accion=nosotros"; ?>">¿Quiénes somos?</a>
                        <a href="#">Nuestro equipo</a>
                        <a href="#">Testimonio</a>
                        <a href="#preguntasFrecuentes">Preguntas frecuentes</a>
                        <a href="#">Contáctanos</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <img class="imgmenu" src="<?php echo (new config\generales())->url_base; ?>css/img/recursos/logo.jpg">
        </div>
        <div class="menudv navbar col-md-4"> <a href="https://escuela.dveducacion.com/" target="_blank">Plataforma</a></div>
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