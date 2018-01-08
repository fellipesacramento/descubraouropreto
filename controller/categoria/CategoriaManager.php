<?php
require_once  $_SERVER['DOCUMENT_ROOT']."/controller/init.php";
require_once  $_SERVER['DOCUMENT_ROOT']."/model/Entity/AppEntityCategoria.php";


 function incluir($post){	
	
 	$entidade = new AppEntityCategoria;	
	$entidade->setNomeCategoria(setMaiusculo($post['nomeCategoria']));
	$entidade->setStatusCategoria(setMaiusculo($post['statusCategoria']));
	return $entidade;
	
}
function nomeEntidade(){	
	 return "AppEntityCategoria";
}


function consultarTudo($parametros){
	if($parametros != "all"){
		$stmt = "SELECT c  FROM AppEntityCategoria c WHERE c.nomeCategoria like '$parametros' ";
	}else{
		$stmt = "SELECT c  FROM AppEntityCategoria c";
	}
	return $stmt;
}

function alterar($entidade,$post){
	$entidade->setNomeCategoria(setMaiusculo($post['nomeCategoria']));
	$entidade->setStatusCategoria(setMaiusculo($post['statusCategoria']));
	return $entidade;
	
}

function preencheForm($entidade){
	global $nomeCategoria;
	global $statusCategoria;
	
	
	if(isset($entidade)){
		$nomeCategoria = $entidade->getNomeCategoria();
		$statusCategoria = $entidade->getStatusCategoria();
	}else{
		$nomeCategoria = "";
		$statusCategoria = "";
	}
	
}


?>