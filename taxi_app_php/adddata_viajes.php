<?php

	include 'conexion.php';
	
	$ORIGEN = $_POST['ORIGEN'];
	$REFERENCIA_ORIGEN = $_POST['REFERENCIA_ORIGEN'];
	$DESTINO = $_POST['DESTINO'];
	$REFERENCIA_DESTINO = $_POST['REFERENCIA_DESTINO'];
	
	
	$connect->query("INSERT INTO viajes (ORIGEN,REFERENCIA_ORIGEN,DESTINO,REFERENCIA_DESTINO) VALUES ('".$ORIGEN."','".$REFERENCIA_ORIGEN."','".$DESTINO."','".$REFERENCIA_DESTINO."')")

?>