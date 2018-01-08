<?php
require_once  $_SERVER['DOCUMENT_ROOT']."/controller/init.php";
require_once  $_SERVER['DOCUMENT_ROOT']."/model/Entity/AppEntityAlbum.php";


 function incluir($post){	
	
 	$entidade = new AppEntityAlbum;	
	$entidade->setNomeAlbum(setMaiusculo($post['nomeAlbum']));	
	return $entidade;
	
}
function nomeEntidade(){	
	 return "AppEntityAlbum";
}


function consultarTudo($parametros){
	if($parametros != "all"){
		$stmt = "SELECT c  FROM AppEntityAlbum c WHERE c.nomeCategoria like '$parametros' ";
	}else{
		$stmt = "SELECT c  FROM AppEntityAlbum c";
	}
	return $stmt;
}

function alterar($entidade,$post){
	$entidade->setNomeAlbum(setMaiusculo($post['nomeAlbum']));	
	return $entidade;
	
}

function preencheForm($entidade){
	global $nomeAlbum;
	
	
	if(isset($entidade)){
		$nomeAlbum = $entidade->getNomeAlbum();
		
	}else{
		$nomeAlbum = "";
		
	}
	
}


?>