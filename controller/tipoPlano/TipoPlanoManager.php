<?php
require_once  $_SERVER['DOCUMENT_ROOT']."/controller/init.php";
require_once  $_SERVER['DOCUMENT_ROOT']."/model/Entity/AppEntityTipoPlano.php";

 function incluir($post){	
	 
 	$entidade = new AppEntityTipoPlano();	
	$entidade->setNomeTipoPlano(setMaiusculo($post['nomeTipoPlano']));
	$entidade->setQtdfotoTipoPlano(setMaiusculo($post['qtdAlbumTipoPlano']));
	$entidade->setQtdFotoTipoPlano(setMaiusculo($post['qtdFotoTipoPlano']));	
	return $entidade;
	
}
function nomeEntidade(){	
	 return "AppEntityTipoPlano";
}


function consultarTudo($parametros){
	if($parametros != "all"){
		$stmt = "SELECT p  FROM AppEntityTipoPlano p WHERE p.nomeTipoPlano like '$parametros' ";
	}else{
		$stmt = "SELECT p  FROM AppEntityTipoPlano p";
	}
	return $stmt;
}

function alterar($entidade,$post){
	$entidade->setNomeTipoPlano(setMaiusculo($post['nomeTipoPlano']));
	$entidade->setQtdfotoTipoPlano(setMaiusculo($post['qtdAlbumTipoPlano']));
	$entidade->setQtdFotoTipoPlano(setMaiusculo($post['qtdFotoTipoPlano']));
	return $entidade;
	
}

function preencheForm($entidade){
	global $nomeTipoPlano;
	global $qtdAlbumTipoPlano;
	global $qtdFotoTipoPlano;
	
	
	if(isset($entidade)){
		$nomeTipoPlano = $entidade->getNomeTipoPlano();
		$qtdTipoPlano = $entidade->getQtdAlbumTipoPlano();
		$qtdTipoPlano =  $entidade->getQtdFotoTipoPlano();
		
	}else{
		$nomeTipoPlano = "";
		$qtdTipoPlano = "";
		$qtdTipoPlano =  "";
	}
	
}


?>