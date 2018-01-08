<?php
require_once  $_SERVER['DOCUMENT_ROOT']."/controller/init.php";
require_once  $_SERVER['DOCUMENT_ROOT']."/model/Entity/AppEntityTipoAtrativo.php";                                                      

 function incluir($post){	
	 
 	$entidade = new AppEntityTipoAtrativo;	
	$entidade->setNomeTipoAtrativo(setMaiusculo($post['nomeTipoAtrativo']));	
	return $entidade;
	
}
function nomeEntidade(){	
	 return "AppEntityTipoAtrativo";
}


function consultarTudo($parametros){
	if($parametros != "all"){
		$stmt = "SELECT t  FROM AppEntityTipoAtrativo t WHERE t.nomeTipoAtrativo like '$parametros' ";
	}else{
		$stmt = "SELECT t  FROM AppEntityTipoAtrativo t";
	}
	return $stmt;
}

function alterar($entidade,$post){
	$entidade->setNomeTipoAtrativo(setMaiusculo($post['nomeTipoAtrativo']));	
	return $entidade;
	
}

function preencheForm($entidade){
	global $nomeTipoAtrativo;
	
	
	
	if(isset($entidade)){
		$nomeTipoAtrativo = $entidade->getNomeTipoAtrativo();
		
	}else{
		$nomeTipoAtrativo = "";
		
	}
	
}


?>