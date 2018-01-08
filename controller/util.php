<?php

/*
 Este código pega conteúdo de qualquer arquivo xml e transforma em um array multidimensional.
Para utilizar, passe a URL ou caminho para o arquivo XML. Exemplo:
$array = xml2array('http://seusite.com.br/arquivo.xml',array());
*/

 function xml2array($xml){
	
	$arrayElemento = array();
	$arrayCDU = array();		
	foreach($xml->children() as $cdu){
		
		$id = $cdu->attributes()['id']->__toString ();
	    				
		foreach($cdu->children() as $elemento){
			$arrayElemento[$elemento->getName()] = $elemento->__toString ();			
		}  
		$arrayCDU[$id] = $arrayElemento;
			}	
	return $arrayCDU;
}





?>