<?php
require_once ("app/Config.php");
require_once ("FunctionApp.php");
if (Config::DISPLAY_ERROR) {
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 'Off');
}
$idNoticia = $_REQUEST["idNoticia"];
if (!isset($idNoticia)) {
    die('<h3><span style="color:red">No posee permiso para esta p&aacute;gina</span></h3>');
}
$dbconn = pg_connect("host=".Config::SERVIDOR_DB." port=".Config::PUERTO_DB." dbname=".Config::BASE_DB." user=".Config::USUARIO_DB." password=".Config::CLAVE_DB."") or die('No se ha podido conectar: '.pg_last_error());
$query = "SELECT * FROM difusion.noticia WHERE fechaBaja IS NULL AND id = ".$idNoticia." LIMIT 1";
$result = pg_query($query) or die('La consulta fallo: '.pg_last_error());
if (!$result) {
    echo '<h4><span style="color:red">Ha ocurrido un problema al tratar de visualizar la noticia. Espere unos segundos e intente nuevamente.</span></h4>';
    exit;
}
$noticia = pg_fetch_array($result, 0, PGSQL_ASSOC);
$imagenNoticia = $urlBaseIscamen."img/logo-iscamen.png";
$noticia;
if($noticia["esalerta"] == 'Y'){
    $imagenPrincipal = $noticia["imagenprincipalnoticia"];
    if($imagenPrincipal && !empty($imagenPrincipal)){
        $imagenNoticia = $urlBaseIscamen."img/upload/noticia/".$noticia['imagenprincipalnoticia'];
    }}else{
    $imagenNoticia = $urlBaseIscamen."img/logo-iscamen.png";
    $query = "SELECT * FROM difusion.slider_home WHERE fechaBaja IS NULL AND idNoticia = ".$idNoticia." LIMIT 1";
    $result = pg_query($query) or die('La consulta fallo: '.pg_last_error());
    $sliderHome = pg_fetch_array($result, 0, PGSQL_ASSOC);
    if ($sliderHome) {
        $imagenNoticia = $urlBaseIscamen."img/upload/slider/".$sliderHome["imagenslider"];
    }
}
?>
<meta property="og:url" content="http://developando.com" />
<meta property="og:title" content="<?php echo $noticia["titulo"] ?>" />
<meta property="og:description" content="<?php echo $noticia["subtitulo"] ?>" />
<meta property="og:image" content="<?php echo $imagenNoticia ?>" />
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISCAMEN- Mendoza</title>
    <link href="styles/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/main.css">
    <style>
    .tituloNoticia {
        font-size: 2.5vw;
        font-weight: 800;
    }
    .fecha{
        font-size: 1vw;
        font-weight: 300;
    }
    .descripcion{
        font-weight: 400;
    }
    .imagenPrincipal{
        display:flex;
        justify-content:center;
    }
    .imagenPrincipal img{
        width:80%;
    }
    </style>
</head>

<body>
    <?php include 'php/header.php' ?>
    <div class="home">
        <img src="imagenes/encabezados/noticias.png" alt="">
    </div>
    <div class="container">
        <div class="tituloNoticia">
            <?php echo $noticia['titulo'] ?>
        </div>
        <div class="fecha">
            <?php echo FunctionApp::SpanishDateString($noticia["fechapublicacion"]); ?>
        </div>
        <br>
        <div class="descripcion">
            <?php echo $noticia['subtitulo'] ?>
        </div>
        <br>
        <div class="imagenPrincipal">
            <img src="<?php echo $imagenNoticia ?>" alt="">
        </div>
        <br>
        <div class="contenido">
        <?php echo $noticia['contenidohtml'] ?>
        </div>
    </div>
    <br>
    <br>
    <?php include 'php/footer.php' ?>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="js/bootstrap.min.js" crossorigin="anonymous">
</script>
