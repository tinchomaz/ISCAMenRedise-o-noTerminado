<?php
	require_once("app/Config.php");
	require_once("FunctionApp.php");
	if(Config::DISPLAY_ERROR){
		ini_set('display_errors','On');
		error_reporting(E_ALL);
	}
	$urlBaseIscamen = Config::getURLBaseApacheIscamen();
	$dbconn = pg_connect("host=".Config::SERVIDOR_DB." port=".Config::PUERTO_DB." dbname=".Config::BASE_DB." user=".Config::USUARIO_DB." password=".Config::CLAVE_DB."") or die('No se ha podido conectar: ' . pg_last_error());
	?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoridades</title>
    <link href="styles/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/main.css">
    <style>
    .redireccion {
        text-decoration: none;
        color: #618140;
    }
    </style>
</head>

<body>

    <?php include 'php/header.php' ?>

    <div class="tituloPrincipal">
        <span>OFICINA VIRTUAL - ISCAMEN</span>
    </div>

    <main>        
        <div class="page-box">
            <div class="page-box" style="padding-top:0px">
               <div class="page-box-content">
				<?php
					if(isset($_REQUEST["idMenuPortal"])){
						$idMenuPortal = $_REQUEST["idMenuPortal"];
						$query = "SELECT contenidohtml FROM difusion.contenido_html 
							INNER JOIN difusion.menu_item_portal on difusion.contenido_html.idmenuitemportal = difusion.menu_item_portal.id
							WHERE difusion.menu_item_portal.fechaBaja IS NULL 
							AND difusion.menu_item_portal.id=".$idMenuPortal.";";
					}else{
						$query = "SELECT contenidohtml FROM difusion.contenido_html 
							INNER JOIN difusion.menu_item_portal on difusion.contenido_html.idmenuitemportal = difusion.menu_item_portal.id
							WHERE difusion.menu_item_portal.fechaBaja IS NULL 
							AND difusion.menu_item_portal.tipo='LEG';";	
					}
					$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());	
					while ($arr = pg_fetch_array($result, null, PGSQL_ASSOC)) {
						$contenidohtml = $arr["contenidohtml"];
						$contenidohtml = str_replace("**", "'", $contenidohtml);
						echo $contenidohtml;
						break;
					}
					?>		
				</div>
       		</div>
    	</div>
    </main>
    <br>
    <br>
    <?php include 'php/footer.php' ?>
    <script>
      $( function() {
	    $( "#tabs" ).tabs();
	  } );
  	</script>
	<script>
    $( function() {
	    $( "#accordion" ).accordion({
	      heightStyle: "content",
		  active: false,
		  collapsible: true  
	    });
	  } );
	  $( function() {
	    $( "#accordion2" ).accordion({
	      heightStyle: "content",
		  active: false,
		  collapsible: true  
	    });
	  } );
	  $( function() {
	    $( "#accordion3" ).accordion({
	      heightStyle: "content",
		  active: false,
		  collapsible: true  
	    });
	  } );
	  $( function() {
	    $( "#accordion4" ).accordion({
	      heightStyle: "content",
		  active: false,
		  collapsible: true  
	    });
	  } );
  	</script>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="js/bootstrap.min.js" crossorigin="anonymous">
</script>