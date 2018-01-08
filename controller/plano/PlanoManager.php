<?php
require_once $_SERVER['DOCUMENT_ROOT']."/controller/init.php";
require_once  $_SERVER['DOCUMENT_ROOT']."/model/Entity/AppEntityPlano.php";

 function incluir($post){	
	 
 	$entidade = new AppEntityPlano();	
	$entidade->setIdUsuario(setMaiusculo($_SESSION['mapa']['idUsuarioSelecionado']));
	$entidade->setCodPlano(setMaiusculo($post['codPlano']));	
	$entidade->setCnpjPlano(setMaiusculo($post['cnpjPlano'])); 	
	//$entidade->setDataPlano(trim($post['dataPlano']));
	
	//$entidade->setQtdalbumrestantePlano(trim($post['qtdalbumrestantePlano']));
	//$entidade->setStatusPlano(trim($post['statusPlano']));
	return $entidade;
	
}
function nomeEntidade(){	
	 return "AppEntityPlano";
}




function consultarTudo($parametros){
	if($parametros != "all"){
		$stmt = "SELECT p  FROM AppEntityPlano p WHERE p.nomePlano like '$parametros' ";
	}else{
		$stmt = "SELECT p  FROM AppEntityPlano p";
	}
	return $stmt;
}

function alterar($entidade = "",$post){	
	
	$idPlano = $_GET['id'];
	$idUsuario = (setMaiusculo($_SESSION['mapa']['idUsuarioSelecionado']));
	$codPlano = (setMaiusculo($post['codPlano']));
	$cnpjPlano = (setMaiusculo($post['cnpjPlano']));
	$idTipoPlano = (setMaiusculo($post['idTipoPlano']));
	
	global	$entityManager;
	
	$stmt  ="update AppEntityPlano p set 
	   p.idUsuario = $idUsuario,
	   p.codPlano = $codPlano,
	   p.cnpjPlano = '$cnpjPlano',
	   p.idTipoPlano = $idTipoPlano
	   where p.idPlano = $idPlano
	
	";
	
	try{
	 $q = 	$entityManager->createQuery($stmt);		
	 $numUpdated = $q->execute();
	 echo "gravado com sucesso!";
	 } catch (Exception $e) {
	 	echo  $e->getMessage();
	 }
	 
	
	exit;
}

function preencheForm($entidade){
	global $idUsuario;
	global $codPlano;
	global $cnpjPlano;
	global $idTipoPlano;
	
		
	
	if(isset($entidade)){
				
		$idUsuario = $entidade->getIdUsuario();	
		$codPlano = $entidade->getCodPlano();
		$cnpjPlano = $entidade->getCnpjPlano();
		$idTipoPlano = $entidade->getIdTipoPlano();
		
	}else{
		$idUsuario = "";		
		$codPlano = "";
		$cnpjPlano = "";
		$idTipoPlano = "";
		
	}
	
}


?>