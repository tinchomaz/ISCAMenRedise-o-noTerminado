<?php
ini_set('display_errors','Off');
error_reporting(E_ALL);

require_once("app/Config.php");
require_once("FunctionApp.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>
    <link href="styles/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/main.css">
    <style>
    .tabs-content {
        display: none;
    }

    .active-tab {
        display: block;
    }

    .botonPrograma {
        padding: 1%;
    }

    .imgNoticia {
        max-width: 100%;
        height: auto;
    }

    .banner {
        font-size: 1.2em;
        font-weight: bold;
        text-decoration: none;
        color: #333;
    }

    .verOcultar {
        margin-top: 10px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    .botonBuscar {
        padding: 10%;
        margin-left:10%;
        background-color: #8FC74A;
        color: #fff;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    .botonBuscar:hover {
        background-color: #0056b3;
    }

    .input,
    .input,
    select {
        padding: 10px;
        width: 90%;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 1.1vw;
    }

    .imagenNoticia img {
        width: 90%;
        border-radius:5px;
    }

    @media screen and (max-width: 768px) {

        .input,
        .input,
        select {
            font-size: 4vw;
        }

        .botonBuscar {
            padding: 7%;
            background-color: #8FC74A;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .imagenNoticia {
            display: none;
        }
    }
    </style>
</head>

<body>

    <?php include 'php/header.php' ?>

    <div class="container d-flex flex-column">
        <div class="page-box-content">
            <?php
				$urlBaseIscamen = Config::getURLBaseApacheIscamen();
				$dbconn = pg_connect("host=".Config::SERVIDOR_DB." port=".Config::PUERTO_DB." dbname=".Config::BASE_DB." user=".Config::USUARIO_DB." password=".Config::CLAVE_DB."") or die('No se ha podido conectar: ' . pg_last_error());
				?>
            <br>
            <div id="tabs" class="d-flex flex-column align-items-center">
                <div class="d-flex justify-content-around col-12 col-md-6 col-lg-6">
                    <button class="tab-btn botonPrograma" onclick="showTab('tabs-1')">Buscar por Palabras</button>
                    <button class="tab-btn botonPrograma" onclick="showTab('tabs-2')">Buscar por Periodo</button>
                </div>
                <div id="tabs-1" class="tabs-content active-tab mt-4 mb-4">
                    <form method="post">
                        <div class="d-flex justify-content-center">
                            <table>
                                <tr>
                                    <td>
                                        <input type="hidden" name="search" value="searchXLabel" /><input id="txtLabel"
                                            value="<?php echo $_REQUEST["txtLabel"]  ?>" name="txtLabel" type="text"
                                            placeholder="Buscar Noticias" class="input">
                                    </td>
                                    <td>
                                        <button type="submit" class="botonBuscar">
                                            Buscar
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
                <div id="tabs-2" class="tabs-content mt-4 mb-4">
                    <form method="post">
                        <table class="d-flex justify-content-center">
                            <tr>
                                <td>
                                    <b>Mes:</b>
                                </td>
                                <td valign="top" colspan="2">
                                    <select name="mes">
                                        <option value="">-Seleccione el Mes-</option>
                                        <option value="1">Enero</option>
                                        <option value="2">Febrero</option>
                                        <option value="3">Marzo</option>
                                        <option value="4">Abril</option>
                                        <option value="5">Mayo</option>
                                        <option value="6">Junio</option>
                                        <option value="7">Julio</option>
                                        <option value="8">Agosto</option>
                                        <option value="9">Septiembre</option>
                                        <option value="10">Octubre</option>
                                        <option value="11">Noviembre</option>
                                        <option value="12">Diciembre</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>&nbsp;A&ntilde;o:&nbsp; </b>
                                </td>
                                <td>
                                    <input type="numeric" name="anio" value="<?php echo date('Y') ?>" class="input" />
                                </td>
                                <td>
                                    <button type="submit" class="botonBuscar">
                                        Buscar
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>

            </div>
            <?php
								if($_REQUEST["search"] && $_REQUEST["txtLabel"]){
									$palabras = explode(" ", $_REQUEST["txtLabel"]);
									$query = "SELECT * FROM difusion.noticia where fechaBaja IS NULL AND estado = 'P'";
									if(count($palabras) > 0){
										$query .= " AND (";
										$cant = 0;
										foreach($palabras as $palabra){
											if($cant > 0){
												$query .= " OR ";
											}
											$query .= "titulo ILIKE '%".$palabra."%' OR subTitulo ILIKE '%".$palabra."%' OR descripcionHome ILIKE '%".$palabra."%'";
											++$cant;
										}
										$query .= ")";
									}
									$query .= " ORDER BY fechaPublicacion DESC LIMIT 30";
								}else{
									$query = "SELECT * FROM difusion.noticia where fechaBaja IS NULL AND estado = 'P'";
									if(isset($_REQUEST["mes"]) && !empty($_REQUEST["mes"]) && isset($_REQUEST["anio"])){
										$query .= " AND EXTRACT(MONTH FROM fechaPublicacion) = ".$_REQUEST["mes"];
										$query .= " AND EXTRACT(YEAR FROM fechaPublicacion) = ".$_REQUEST["anio"];
									}else if(isset($_REQUEST["anio"])){
										$query .= " AND EXTRACT(YEAR FROM fechaPublicacion) = ".$_REQUEST["anio"];
									}
									$query .= " ORDER BY fechaPublicacion DESC LIMIT 20";
								}
															
								$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());	
								while ($arr = pg_fetch_array($result, null, PGSQL_ASSOC)) {
									$titulo = $arr["titulo"];
									$subTitulo = $arr["subtitulo"];
									$descripcionHome = $arr["descripcionhome"];
									$fechaPublicacion = $arr["fechapublicacion"];
									$contenidoHTMLReducido = strip_tags($arr["contenidohtml"]);
									$contenidoHTMLReducido = substr($contenidoHTMLReducido, 0, 455);
									$id = $arr["id"];
									$imagenNoticia = $urlBaseIscamen."img/logo-iscamen.png";
									$imagenPrincipal = $arr["imagenprincipalnoticia"];
									if($imagenPrincipal && !empty($imagenPrincipal)){
										$imagenNoticia = $urlBaseIscamen."img/upload/noticia/".$imagenPrincipal;
									}else{
										$queryImg = "SELECT * FROM difusion.imagen_noticia where idnoticia = ".$id." LIMIT 1";
										$resultImg = pg_query($queryImg) or die('La consulta fallo: ' . pg_last_error());	
										while ($arrImg = pg_fetch_array($resultImg, null, PGSQL_ASSOC)) {
											$imgNoticia = $arrImg["ruta"];
											$imagenNoticia = $urlBaseIscamen."img/upload/noticia/".$imgNoticia;
											break;
										}
									}
									
									$urlNoticia = "noticia.php?idNoticia=".$id;
									if($arr["esimportado"] == 'Y'){
										$urlNoticia = "noticia_wp.php?idNoticia=".$id;
									}
								?>
            <table>
                <tr>
                    <td class="imagenNoticia">
                        <a href="<?php echo $urlNoticia ?>">
                            <img class="imgNoticia" src="<?php echo $imagenNoticia ?>" alt="">
                        </a>
                    </td>
                    <td></td>
                    <td valign="top">
                        <a href="<?php echo $urlNoticia ?>" class="banner">
                            <?php echo $titulo ?>
                        </a>
                        <div class="verOcultar">
                            <?php
												if($descripcionHome){
													echo $descripcionHome; 
												}else{
													echo $contenidoHTMLReducido;
												} 
												$fechaHora = explode(" ", $fechaPublicacion);
												$urlEtiquetaDetalle = '<a href="'.$urlNoticia.'" class="banner"> Leer Mas'." - ".$fechaHora[0].'</a>';
												echo "......." . "<br>" . $urlEtiquetaDetalle;
												?>
                        </div>
                    </td>
                </tr>
            </table>
            <hr>
            <?php
								}
							  ?>
        </div>
    </div>
    <br>
    <br>
    <?php include 'php/footer.php' ?>
</body>

</html>
<script>
function showTab(tabId) {
    var tabs = document.querySelectorAll('.tabs-content');
    tabs.forEach(function(tab) {
        tab.classList.remove('active-tab');
    });
    document.getElementById(tabId).classList.add('active-tab');
}
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="js/bootstrap.min.js" crossorigin="anonymous">
</script>