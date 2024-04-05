<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISCAMen-Inicio</title>
    <!-- Enlaces a los estilos de Slick.js -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
    <link href="styles/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/google-map.css">
    <link rel="stylesheet" href="styles/main.css">
    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
</head>

<body>

    <?php include 'php/header.php' ?>

    <?php
        require_once("app/Config.php");
        $dbconn = pg_connect("host=" . Config::SERVIDOR_DB . " port=" . Config::PUERTO_DB . " dbname=" . Config::BASE_DB . " user=" . Config::USUARIO_DB . " password=" . Config::CLAVE_DB . "") or die('No se ha podido conectar: ' . pg_last_error());

        $query = 'SELECT * FROM difusion.slider_home WHERE fechaBaja IS NULL AND fechapublicacion IS NOT NULL ORDER BY fechapublicacion DESC LIMIT 1';
        $result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

        if ($arr = pg_fetch_array($result, null, PGSQL_ASSOC)) {
            $tituloPrincipal = $arr["tituloprincipal"];
            $descripcion = $arr["descripcion"];
            $imagenSlider = "img/upload/slider/" . $arr["imagenslider"];
            $fechapublicacion = $arr["fechapublicacion"];
            $idNoticia = $arr["idnoticia"];
            echo "<div class='noticia'>";
            echo "<a href='noticia.php?idNoticia=$idNoticia'>";
            echo "<img src='".$imagenSlider."' alt=''>";
            echo "<div class='noticia-info'>";
            echo "<div class='categoria'>";
            echo "ACA VA LA CATEGORIA";
            echo "</div>";
            echo "<span>";
            echo $tituloPrincipal;
            echo "</span>";
            echo "<div class='descripcion'>";
            echo $descripcion;
            echo "</div>";
            echo "</div>";
            echo "</a>";
            echo "</div>";
        }
    ?>

    <div class="slider-container">
        <div class="slider">
            <div class="slide"><a href=""><img src="imagenes/servicios/capacitaciones.png" alt="Imagen 1"></a></div>
            <div class="slide"><a href=""><img src="imagenes/servicios/citricos.png" alt="Imagen 2"></a></div>
            <div class="slide"><a href="actividades_educativas.php"><img src="imagenes/servicios/educativas.png" alt="Imagen 3"></a></div>
            <div class="slide"><a href="operativo_lobesia.php"><img src="imagenes/servicios/mosca.png" alt="Imagen 4"></a></div>
        </div>
    </div>

    <div class="tituloPrincipal">
        Tus
        <span>Trámites</span>
    </div>
    <div class="tramites divPrincipal">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="oficina_virtual_agroquimicos.php">
                        <div class="tramiteCard card mb-3" style="max-width: 540px;">
                            <img src="imagenes/tramites/agroquimicos.svg" class="hoverable img-fluid rounded-start"
                                alt="...">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="oficina_virtual_tasa.php">
                        <div class="tramiteCard card mb-3" style="max-width: 540px;">
                            <img src="imagenes/tramites/tasas.svg" class="hoverable img-fluid rounded-start" alt="...">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="oficina_virtual_ajo.php">
                        <div class="tramiteCard card mb-3" style="max-width: 540px;">
                            <img src="imagenes/tramites/galpones.svg" class="hoverable img-fluid rounded-start"
                                alt="...">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="">
                        <div class="tramiteCard card mb-3" style="max-width: 540px;">
                            <img src="imagenes/tramites/botrana.svg" class="hoverable img-fluid rounded-start"
                                alt="...">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="oficina_virtual_danio.php">
                        <div class="tramiteCard card mb-3" style="max-width: 540px;">
                            <img src="imagenes/tramites/registro.svg" class="hoverable img-fluid rounded-start"
                                alt="...">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="http://179.43.113.170:8082/oficinavirtual/">
                        <div class="tramiteCard card mb-3" style="max-width: 540px;">
                            <img src="imagenes/tramites/transporte.svg" class="hoverable img-fluid rounded-start"
                                alt="...">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
        
    <div class="tituloPrincipal" id="programas">
        Nuestros
        <span>Programas</span>
    </div>
    <div class="programas divPrincipal">
        <div class="container">
            <div class="row row-cols-3 row-cols-sm-3 row-cols-lg-3 g-4">
                <div class="col-lg-2 col-md-3 mt-0 p-0">
                    <a href="mosca_mediterraneo.php">
                        <div class="tramiteCard card mb-3" style="max-width: 540px;">
                            <img src="imagenes/programas/mosca.svg" class="hoverable img-fluid rounded-start" alt="...">
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 mt-0 p-0">
                    <a href="agroecologia.php">
                        <div class="tramiteCard card mb-3" style="max-width: 540px;">
                            <img src="imagenes/programas/agroecologia.svg" class="hoverable img-fluid rounded-start"
                                alt="...">
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 mt-0 p-0">
                    <a href="agroquimicos.php">
                        <div class="tramiteCard card mb-3" style="max-width: 540px;">
                            <img src="imagenes/programas/agroquimicos.svg" class="hoverable img-fluid rounded-start"
                                alt="...">
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 mt-0 p-0">
                    <a href="lobesia.php">
                        <div class="tramiteCard card mb-3" style="max-width: 540px;">
                            <img src="imagenes/programas/botrana.svg" class="hoverable img-fluid rounded-start"
                                alt="...">
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 mt-0 p-0">
                    <a href="barreras.php">
                        <div class="tramiteCard card mb-3" style="max-width: 540px;">
                            <img src="imagenes/programas/barreras.svg" class="hoverable img-fluid rounded-start"
                                alt="...">
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 mt-0 p-0">
                    <a href="smr.php">
                        <div class="tramiteCard card mb-3" style="max-width: 540px;">
                            <img src="imagenes/programas/smr.svg" class="hoverable img-fluid rounded-start" alt="...">
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 mt-0 p-0">
                    <a href="carpocapsa.php">
                        <div class="tramiteCard card mb-3" style="max-width: 540px;">
                            <img src="imagenes/programas/grafolita.svg" class="hoverable img-fluid rounded-start"
                                alt="...">
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 mt-0 p-0">
                    <a href="semillas.php">
                        <div class="tramiteCard card mb-3" style="max-width: 540px;">
                            <img src="imagenes/programas/semillas.svg" class="hoverable img-fluid rounded-start"
                                alt="...">
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 mt-0 p-0">
                    <a href="investigacion.php">
                        <div class="tramiteCard card mb-3" style="max-width: 540px;">
                            <img src="imagenes/programas/desarrollo.svg" class="hoverable img-fluid rounded-start"
                                alt="...">
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 mt-0 p-0">
                    <a href="laboratorio.php">
                        <div class="tramiteCard card mb-3" style="max-width: 540px;">
                            <img src="imagenes/programas/laboratorio.svg" class="hoverable img-fluid rounded-start"
                                alt="...">
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 mt-0 p-0">
                    <a href="bioplanta.php">
                        <div class="tramiteCard card mb-3" style="max-width: 540px;">
                            <img src="imagenes/programas/bioplanta.svg" class="hoverable img-fluid rounded-start"
                                alt="...">
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 mt-0 p-0">
                    <a href="cannabis.php">
                        <div class="tramiteCard card mb-3" style="max-width: 540px;">
                            <img src="imagenes/programas/cannabis.svg" class="hoverable img-fluid rounded-start"
                                alt="...">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="tituloPrincipal">
        Más
        <span>Noticias</span>
    </div>
    <!--<div class="noticiasExtra row">
        <div class="col-lg-3 col-md-3">
            <a href="">
                <div class="noticiaCard card" style="max-width: 540px;">
                    <img src="imagenes/noticiaExtra1.jpg" class="hoverable img-fluid rounded-start" alt="...">
                    <div class="categoria Extra">
                        Lobesia Botrana
                    </div>
                    <div class="noticiaExtra-info">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis accusamus
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3">
            <a href="">
                <div class="noticiaCard card" style="max-width: 540px;">
                    <img src="imagenes/noticiaExtra2.jpg" class="hoverable img-fluid rounded-start" alt="...">
                    <div class="categoria Extra">
                        Barreras Sanitarias
                    </div>
                    <div class="noticiaExtra-info">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis accusamus
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3">
            <a href="">
                <div class="noticiaCard card" style="max-width: 540px;">
                    <img src="imagenes/noticiaExtra3.jpg" class="hoverable img-fluid rounded-start" alt="...">
                    <div class="categoria Extra">
                        Mosca del Mediterraneo
                    </div>
                    <div class="noticiaExtra-info">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis accusamus
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3">
            <a href="">
                <div class="noticiaCard card" style="max-width: 540px;">
                    <img src="imagenes/noticiaExtra4.jpg" class="hoverable img-fluid rounded-start" alt="...">
                    <div class="categoria Extra">
                        Bioplanta
                    </div>
                    <div class="noticiaExtra-info">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis accusamus
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="noticiasExtraCarousel">
        <div class="carousel-extra">
            <div>
                <a href="">
                    <div class="noticiaCard card" style="max-width: 540px;">
                        <img src="imagenes/noticiaExtra1.jpg" class="hoverable img-fluid rounded-start" alt="...">
                        <div class="categoria Extra">
                            Lobesia Botrana
                        </div>
                        <div class="noticiaExtra-info">
                            Comienza la temporada de cosecha de cítricos.
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <a href="">
                    <div class="noticiaCard card" style="max-width: 540px;">
                        <img src="imagenes/noticiaExtra2.jpg" class="hoverable img-fluid rounded-start" alt="...">
                        <div class="categoria Extra">
                            Barreras Sanitarias
                        </div>
                        <div class="noticiaExtra-info">
                            Fin de semana largo: qué no debo ingresar a la provicncia?
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <a href="">
                    <div class="noticiaCard card" style="max-width: 540px;">
                        <img src="imagenes/noticiaExtra3.jpg" class="hoverable img-fluid rounded-start" alt="...">
                        <div class="categoria Extra">
                            Mosca del Mediterraneo
                        </div>
                        <div class="noticiaExtra-info">
                            Comienza la temporada de cosecha de cítricos.
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <a href="">
                    <div class="noticiaCard card" style="max-width: 540px;">
                        <img src="imagenes/noticiaExtra4.jpg" class="hoverable img-fluid rounded-start" alt="...">
                        <div class="categoria Extra">
                            Bioplanta
                        </div>
                        <div class="noticiaExtra-info">
                            Se logra un acuerdo para vender pupas de mosca al exterior
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>-->
    <?php
        $query_recent_news = 'SELECT * FROM difusion.slider_home WHERE fechaBaja IS NULL AND fechapublicacion IS NOT NULL ORDER BY fechapublicacion DESC LIMIT 5 OFFSET 0';
        $result_recent_news = pg_query($query_recent_news) or die('La consulta fallo: ' . pg_last_error());
        $count = 0;
        // Mostrar las últimas 5 noticias en el formato de grid
        echo '<div class="noticiasExtra row">';
        while ($arr = pg_fetch_array($result_recent_news, null, PGSQL_ASSOC)) {
            if($count != 0){
                echo '<div class="col-lg-3 col-md-3">';
                echo '<a href="noticia.php?idNoticia='.$arr['idnoticia'].'">';
                echo '<div class="noticiaCard card" style="max-width: 540px;">';
                echo '<img src="img/upload/slider/' . $arr["imagenslider"] . '" class="hoverable img-fluid rounded-start" alt="...">';
                echo '<div class="categoria Extra">';
                echo   "ACA VA LA CATEGORIA";
                echo '</div>';
                echo '<div class="noticiaExtra-info">';
                echo $arr["tituloprincipal"];
                echo '</div>';
                echo '</div>';
                echo '</a>';
                echo '</div>';
            }else{
                $count++;
            }
        }
        echo '</div>';

        $query_extra_news = 'SELECT * FROM difusion.slider_home WHERE fechaBaja IS NULL AND fechapublicacion IS NOT NULL ORDER BY fechapublicacion DESC LIMIT 5 OFFSET 0';
        $result_extra_news = pg_query($query_extra_news) or die('La consulta fallo: ' . pg_last_error());

        // Mostrar las últimas 4 noticias (excluyendo la última) en el carrusel
        echo '<div class="noticiasExtraCarousel">';
        echo '<div class="carousel-extra">';
        while ($arr = pg_fetch_array($result_extra_news, null, PGSQL_ASSOC)) {
            echo '<div>';
            echo '<a href="noticia.php?idNoticia='.$arr['idnoticia'].'">';
            echo '<div class="noticiaCard card" style="max-width: 540px;">';
            echo '<img src="img/upload/slider/' . $arr["imagenslider"] . '" class="hoverable img-fluid rounded-start" alt="...">';
            echo '<div class="categoria Extra">';
            echo "ACA VA LA CATEGORIA";
            echo '</div>';
            echo '<div class="noticiaExtra-info">';
            echo $arr["descripcion"];
            echo '</div>';
            echo '</div>';
            echo '</a>';
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
    ?>

    <div class="tituloPrincipal">
        Nuestras
        <span>Sedes</span>
    </div>
    <div class="sedes">
        <div class="col-lg-6 sedesNombres">
            <span>Sede Central </span>
            Boulogne Sur Mer 3050, Ciudad / (0261) 4295450 - 4258741 - 4299013 - 4299015
            <br>
            <br>

            <span>Sede Kilómetro 8</span>
            Silvano Rodriguez s/n, Km8, Guaymallén / (0261) 4910299 - 4910576 - 4912928
            <br>
            moscamed@iscamen.com.ar
            <br>
            <br>

            <span>Bioplanta Santa Rosa</span>
            <br>
            Ruta Provincial 71 s/n, El Ortizano, Santa Rosa - (02623) 4614211
            <br>
            <br>

            <span>Sede Este</span>
            Chubut 130 , San Martín / (0263) 4420942 - sanmartin@iscamen.com.ar
            <br>
            <br>

            <span>Sede Valle de Uco</span>
            Dalmau e Yrigoyen - Tunuyán / (02622) 423709- tunuyan@iscamen.com.ar
            - oasiscentro@iscamen.com.ar - valledeuco@iscmamen.com.ar
        </div>
        <div class="col-lg-6 col-12 mapa">
            <div class="map">
                <div id="google-map" class="map_model" data-zoom="7"></div>
                <ul class="map_locations">
                    <li style="background-color: white" data-x="-68.858268" data-y="-32.8687269"
                        data-basic="images/gmap_marker.png" data-active="images/gmap_marker_active.png">
                        <div class="location" style="background-color: white">
                            <h3 class="txt-clr1" style="color: black; background-color: white">
                                Sede Central
                            </h3>
                            <address style="background-color: white">
                                <dl>
                                    <dt style="color: black">Tel&eacute;fono: </dt>
                                    <dd style="color: black" class="phone">0261 4299015 / 4299013</dd>
                                </dl>
                                <dl>
                                    <dt style="color: black">Direcci&oacute;n: </dt>
                                    <dd style="color: black"> Av. Boulogne Sur Mer 3050 1� Piso - Ciudad - Mendoza </dd>
                                </dl>
                                <dl>
                                    <dt style="color: black"> E-mail: </dt>
                                    <dd style="color: black">iscamen@iscamen.com.ar</dd>
                                </dl>
                            </address>
                        </div>
                    </li>
                    <li style="background-color: white" data-x="-68.7104184" data-y="-32.9520649"
                        data-basic="images/gmap_marker2.png" data-active="images/gmap_marker2_active.png">
                        <div class="location" style="background-color: white">
                            <h3 class="txt-clr1" style="color: black; background-color: white">
                                Kilometro 8
                            </h3>
                            <address style="background-color: white">
                                <dl>
                                    <dt style="color: black">Tel&eacute;fono: </dt>
                                    <dd style="color: black" class="phone"> (0261) 491-0299 / 4910576 </dd>
                                </dl>
                                <dl>
                                    <dt style="color: black">Direcci&oacute;n: </dt>
                                    <dd style="color: black"> Silvano Rodriguez s/n - Guaymallen </dd>
                                </dl>
                                <dl>
                                    <dt style="color: black"> E-mail: </dt>
                                    <dd style="color: black">moscamed@iscamen.com.ar</dd>
                                </dl>
                            </address>
                        </div>
                    </li>
                    <li style="background-color: white" data-x="-67.647553" data-y="-34.977935"
                        data-basic="images/gmap_marker3.png" data-active="images/gmap_marker3_active.png">
                        <div class="location" style="background-color: white">
                            <h3 class="txt-clr1" style="color: black; background-color: white">
                                Gral Alvear
                            </h3>
                            <address style="background-color: white">
                                <dl>
                                    <dt style="color: black">Direcci&oacute;n: </dt>
                                    <dd style="color: black"> Ruta Nacional 188 Km 785, Parque Industrial - General
                                        Alvear </dd>
                                </dl>
                                <dl>
                                    <dt style="color: black"> E-mail: </dt>
                                    <dd style="color: black">barrerasur@iscamen.com.ar</dd>
                                </dl>
                            </address>

                        </div>
                    </li>
                    <li style="background-color: white" data-x="-67.662726" data-y="-34.992861"
                        data-basic="images/gmap_marker8.png" data-active="images/gmap_marker8_active.png">
                        <div class="location" style="background-color: white">
                            <h3 class="txt-clr1" style="color: black; background-color: white">
                                Centro de Empaque y Distribución de Adulto Frío (CEDAF)
                            </h3>
                            <address style="background-color: white">
                                <dl>
                                    <dt style="color: black">Tel&eacute;fono: </dt>
                                    <dd style="color: black" class="phone"> 2615455549 </dd>
                                </dl>
                                <dl>
                                    <dt style="color: black">Direcci&oacute;n: </dt>
                                    <dd style="color: black"> Diagonal Carlos Pellegrini 2301 - General Alvear</dd>
                                </dl>
                                <dl>
                                    <dt style="color: black"> E-mail: </dt>
                                    <dd style="color: black">cedaf@iscamen.com.ar</dd>
                                </dl>
                            </address>

                        </div>
                    </li>
                    <li style="background-color: white" data-x="-68.2906882" data-y="-34.6292593"
                        data-basic="images/gmap_marker4.png" data-active="images/gmap_marker4_active.png">
                        <div class="location" style="background-color: white">
                            <h3 class="txt-clr1" style="color: black; background-color: white">
                                San Rafael
                            </h3>
                            <address style="background-color: white">
                                <dl>
                                    <dt style="color: black">Tel&eacute;fono: </dt>
                                    <dd style="color: black" class="phone">0260 4442032 </dd>
                                </dl>
                                <dl>
                                    <dt style="color: black">Direcci&oacute;n: </dt>
                                    <dd style="color: black"> Av. Mitre 5400, Cuadro Nacional </dd>
                                </dl>
                                <dl>
                                    <dt style="color: black"> E-mail: </dt>
                                    <dd style="color: black">sanrafael@iscamen.com.ar</dd>
                                </dl>
                            </address>
                        </div>
                    </li>
                    <li style="background-color: white" data-x="-69.017588" data-y="-33.578208"
                        data-basic="images/gmap_marker5.png" data-active="images/gmap_marker5_active.png">
                        <div class="location" style="background-color: white">
                            <h3 class="txt-clr1" style="color: black; background-color: white">
                                Tunuy&aacute;n
                            </h3>
                            <address style="background-color: white">
                                <dl>
                                    <dt style="color: black">Tel&eacute;fono: </dt>
                                    <dd style="color: black" class="phone">02622 423709 </dd>
                                </dl>
                                <dl>
                                    <dt style="color: black">Direcci&oacute;n: </dt>
                                    <dd style="color: black"> Dalmau &amp; Hip&oacute;lito Yrigoyen </dd>
                                </dl>
                                <dl>
                                    <dt style="color: black"> E-mail: </dt>
                                    <dd style="color: black">tunuyan@iscamen.com.ar</dd>
                                </dl>
                            </address>
                        </div>
                    </li>
                    <li style="background-color: white" data-x="-68.4655003" data-y="-33.0736076"
                        data-basic="images/gmap_marker6.png" data-active="images/gmap_marker6_active.png">
                        <div class="location" style="background-color: white">
                            <h3 class="txt-clr1" style="color: black; background-color: white">
                                San Martin
                            </h3>
                            <address style="background-color: white">
                                <dl>
                                    <dt style="color: black">Tel&eacute;fono: </dt>
                                    <dd style="color: black" class="phone"> 2634420942 </dd>
                                </dl>
                                <dl>
                                    <dt style="color: black">Direcci&oacute;n: </dt>
                                    <dd style="color: black"> Chubut 130 - San Martín </dd>
                                </dl>
                                <dl>
                                    <dt style="color: black"> E-mail: </dt>
                                    <dd style="color: black">Chubut 130 - San Martín </dd>
                                </dl>
                            </address>
                        </div>
                    </li>
                    <li style="background-color: white" data-x="-69.5739146" data-y="-35.467517"
                        data-basic="images/gmap_marker7.png" data-active="images/gmap_marker7_active.png">
                        <div class="location" style="background-color: white">
                            <h3 class="txt-clr1" style="color: black; background-color: white">
                                Malarg&uuml;e
                            </h3>
                            <address style="background-color: white">
                                <dl>
                                    <dt style="color: black">Tel&eacute;fono: </dt>
                                    <dd style="color: black" class="phone">0260 4471508 </dd>
                                </dl>
                                <dl>
                                    <dt style="color: black">Direcci&oacute;n: </dt>
                                    <dd style="color: black"> Saturnino Torres 862 - Malargüe </dd>
                                </dl>
                                <dl>
                                    <dt style="color: black"> E-mail: </dt>
                                    <dd style="color: black">malargue@iscamen.com.ar</dd>
                                </dl>
                            </address>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <?php include 'php/footer.php' ?>

    <script src="js/tm-scripts.js"></script>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
var slider = $('.slider').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    pauseOnHover: false,
    pauseOnFocus: false,
    responsive: [{
        breakpoint: 768,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
    }]
});
//Noticias Extra
$(document).ready(function() {
    $('.carousel-extra').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        pauseOnHover: false,
        pauseOnFocus: false,
        autoplaySpeed: 2000
    });
});
//Hover botones
const hoverableImages = document.querySelectorAll('.hoverable');
hoverableImages.forEach(image => {
    image.addEventListener('mouseover', function() {
        const currentSrc = this.getAttribute('src');
        const newSrc = currentSrc.replace('.svg', 'Hover.svg');
        this.setAttribute('src', newSrc);
    });
    image.addEventListener('mouseout', function() {
        const currentSrc = this.getAttribute('src');
        const newSrc = currentSrc.replace('Hover.svg', '.svg');
        this.setAttribute('src', newSrc);
    });
});
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="js/bootstrap.min.js" crossorigin="anonymous">
</script>

<!--Agradezco a mi padre Oscar Flores por darme la oportunidad de poder seguir creciendo -->