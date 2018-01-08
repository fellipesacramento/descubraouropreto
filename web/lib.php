<?php 
require_once  $_SERVER['DOCUMENT_ROOT']."/model/Entity/AppEntityCategoria.php";
require_once  $_SERVER['DOCUMENT_ROOT']."/model/Entity/AppEntityEstabelecimento.php";
require_once  $_SERVER['DOCUMENT_ROOT']."/model/Entity/AppEntityAtrativo.php";
require_once  $_SERVER['DOCUMENT_ROOT']."/model/Entity/AppEntityTipoAtrativo.php";
require_once  $_SERVER['DOCUMENT_ROOT']."/model/Entity/AppEntityFoto.php";
require_once  $_SERVER['DOCUMENT_ROOT']."/model/Entity/AppEntityAlbum.php";
require_once  $_SERVER['DOCUMENT_ROOT']."/model/Entity/AppEntityPlano.php";
require_once  $_SERVER['DOCUMENT_ROOT']."/model/Entity/AppEntityUsuario.php";



function montarMenuCategorias(){
	
	global $entityManager;
	$stmt = "SELECT c  FROM AppEntityCategoria c order by c.nomeCategoria";
	$query = $entityManager->createQuery($stmt);
	try {
		$resultado = $query->getResult();

		If (count($resultado) >0) {
			return $resultado;
		}
	} catch (Exception $e) {
		echo $e;
	}
}

function exibirListaEstabelecimentoCategoria($webIdCategoria){

	
	global $entityManager;
	settype($webIdCategoria,'integer');
	$stmt2 = "SELECT e  FROM AppEntityEstabelecimento e WHERE e.idCategoria = $webIdCategoria  order by e.nomeFantasiaEstabelecimento";
	$query = $entityManager->createQuery($stmt2);
	try {
		$resultado = $query->getResult();

		If (count($resultado) >0) {
			return $resultado;
		}
	} catch (Exception $e) {
		echo $e;
	}
}

function recuperaEstabelecimento($id){


	global $entityManager;
	
	
		try {
			
			$entidade =  $entityManager->find('AppEntityEstabelecimento',$id);
			return $entidade;
		} catch (Exception $e) {
			echo  $e->getMessage();
			exit;
		}
	
	
}

function exibirListaEstabelecimentoAtrativo($idEstabelecimento){


	global $entityManager;
	settype($idEstabelecimento,'integer');
	$stmt3 = "SELECT a.idEstabelecimento,t.nomeTipoAtrativo  FROM AppEntityAtrativo a inner join AppEntityTipoAtrativo t  WHERE a.idTipoAtrativo = t.idTipoAtrativo and a.idEstabelecimento = $idEstabelecimento ";
	$query = $entityManager->createQuery($stmt3);
	try {
		$resultado = $query->getResult();

		If (count($resultado) >0) {
			return $resultado;
		}
	} catch (Exception $e) {
		echo $e;
	}
}

function recuperaAlbum($idEstabelecimento){
	global $entityManager;
	settype($idEstabelecimento,'integer');
	$stmt4 = "SELECT f.enderecoFoto,
		a.idAlbum,
		a.nomeAlbum,
		p.idPlano,
		u.idUsuario,
		e.idEstabelecimento 
	
			FROM AppEntityFoto f inner join AppEntityAlbum a  WHERE a.idAlbum = f.idAlbum
	                  inner join AppEntityPlano p where p.idPlano = a.idPlano
	                  inner join AppEntityUsuario u where u.idUsuario = p.idUsuario
	                  inner join AppEntityEstabelecimento e where e.idUsuario = u.idUsuario	                  
	                  and e.idEstabelecimento = $idEstabelecimento 
	";
	
	$stmt5 = "SELECT f.enderecoFoto From AppEntityFoto f";
	
	
	$query = $entityManager->createQuery($stmt4);
	try {
		$resultado = $query->getResult();
	
		If (count($resultado) >0) {
			return $resultado;
		}
	} catch (Exception $e) {
		echo $e;
	}
	
}

?>