<?php
	require_once("app/Config.php");
	require_once("app/manager/ManagerSolicitudDanio.php");

	if(Config::DISPLAY_ERROR){
		ini_set('display_errors','On');
		error_reporting(E_ALL);
	}else{
		ini_set('display_errors','Off');
	}
	
	
	$htmlRespuesta = '';
	try{
		$mSolicitudDanio = new ManagerSolicitudDanio();
		if($_REQUEST["accion"] == "buscar"){
			$htmlRespuesta = $mSolicitudDanio->buscarRenspa($_REQUEST["Consultar_renspa"]);
		}else if($_REQUEST["accion"] == "insert"){
			$htmlRespuesta = $mSolicitudDanio->guardarRutMasPedidoCertificacion($_REQUEST);
		}else{
			$htmlRespuesta = $mSolicitudDanio->guardarPedidoCertificacion($_REQUEST);
		}
	}catch(Exception $e) {
		echo ($e->getMessage());		
	}
	echo $htmlRespuesta;	
?>