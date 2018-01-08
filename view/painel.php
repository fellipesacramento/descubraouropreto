<?php
require_once  $_SERVER['DOCUMENT_ROOT']."/controller/init.php";
require_once '../param/configDefault.php';
require_once '../controller/util.php';

if( isset($_GET['menuid'])){
	$menuid = strtoupper($_GET['menuid']);
	$xml = simplexml_load_string($configDefault);
	
	$menuXML =   xml2array($xml);
		
	if(!isset($menuXML[$menuid])){
		$menuid = "DEFAULT";
	}
	
	
	
	$nome = $menuXML[$menuid]["nomeCadastro"];	
	$diretorio = $menuXML[$menuid]["diretorio"];
	
			
	$_SESSION["incluir"] = "http://localhost/view/frontend/$diretorio/".$menuXML[$menuid]["incluir"].".php";
	$_SESSION["consultar"] = $_SERVER['DOCUMENT_ROOT']."/view/frontend/$diretorio/".$menuXML[$menuid]["consultar"].".php";
	$_SESSION["alterar"] ="http://localhost/view/frontend/$diretorio/".$menuXML[$menuid]["alterar"].".php";
	$_SESSION["excluir"] = "http://localhost/view/frontend/$diretorio/".$menuXML[$menuid]["excluir"].".php";
	$_SESSION["manager"] = $_SERVER['DOCUMENT_ROOT']."/controller/$diretorio/".$menuXML[$menuid]["manager"].".php";	
	$_SESSION["nomeCadastro"] = $nome;
	$_SESSION["diretorio"] = $diretorio;
	$_SESSION["cdu"] = $menuid;
	$_SESSION["voltarPara"] = $menuXML[$menuid]["voltarPara"];
	
	
	$redirect = "frontend/frontend.php";
	// verifica a logica que vem do iframe superior através do botão incluir e seta na sessão
	if(isset($_GET['logica'])){
		$logica = $_GET['logica'];	
		
		if(isset($_GET['id'])){
			$id = $_GET['id'];
		}else{
			$id="";
		}
		
		redirecionarComLogica($redirect, '_self', $logica,$id);
	}else{
		redirecionar($redirect, '_self');
	}
	
	
	
	
}	
      
?>
