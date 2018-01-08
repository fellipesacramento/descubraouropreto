<?php
require_once $_SERVER['DOCUMENT_ROOT']."/controller/init.php";


if(isset($_GET['logica'])){
	$logica = $_GET['logica'];
	if($_GET['logica'] == 'incluir'){
		$formDestino = $_SESSION['incluir'];
	}
	if($_GET['logica'] == 'alterar'){
		$formDestino = $_SESSION['alterar'];
	}
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		$id = "";
	}
	
	
	
	
	echo"<script language=\"javascript\">";
	echo "window.location=\"$formDestino?logica=$logica&id=$id\" ";
	echo"</script>";
}else{
	require_once  $_SESSION['consultar'];
}



?>