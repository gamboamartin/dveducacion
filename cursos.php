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

<section id="nav" class="container-fluid navbar border-red">
    <div class="row border-azul">

        <div class="dropdown menudv menudvrsp">
            <button class="dropbtn montserratitalic">Menú</button>
            <div class="dropdown-content">
                <a href="principal.php">Básico</a>
                <a href="principal.php">Intermedio</a>
                <a href="principal.php">Avanzado</a>
                <a href="#">Nutracéuticos</a>
                <a href="#quien">Quienes somos</a>
                <a href="#nuest">Nuestro equipo</a>
                <a href="#test">Testimonio</a>
                <a href="#preg">Pregunstas frecuentes</a>
                <a href="#">Contáctanos</a>
            </div>
        </div>
        <!--<div class="menudvrsp menudv border-verde"><img class="border-azul"  src="<?php //echo (new config\generales())->url_base; ?>css/img/logo.jpg" height="75px" width="auto"></div>-->
        <img id="imgmenu" class="menudvrsp menudv border-verde"  src="<?php echo (new config\generales())->url_base; ?>css/img/logo.jpg" width="auto">
        <div class="menudv menudvrsp border-verde navbar" > <a class="border-azul" href="https://escuela.dveducacion.com/" >Perfil</a></div>
    </div>
</section>

<section id="portimg" class="container-fluid border-red">
    <div class="row border-azul">
        <div class="grid-block port1">
            <center><img id="imagen" class="imgpr" src="<?php echo (new config\generales())->url_base; ?>css/img/img1.jpg" onclick="openImg()"></center>
            <script src="js/Modal.js"></script>

        </div>
    </div>

    <div id="quien" class="row border-azul">
        <div class="grid-block port2">
            <h1>Quienes somos</h1>
        </div>
    </div>

    <div id="nuest" class="row border-azul">
        <div class="grid-block port1">
            <h1>Nuestro equipo</h1>
        </div>
    </div>

    <div id="test" class="row border-azul">
        <div class="grid-block port2">
            <h1>Testimonios</h1>

        </div>
    </div>

    <div id="preg" class="row border-azul">
        <div class="grid-block port1">
            <H1>Pregunstas frecuentes</H1>
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
