<?php
require_once  $_SERVER['DOCUMENT_ROOT']."/controller/init.php";
require_once  $_SERVER['DOCUMENT_ROOT']."/model/Entity/AppEntityFoto.php";

$estabelecimento = "estab".$_SESSION['mapa']['idEstabelecimentoSelecionado'];
$localDasImagens = $_SERVER['DOCUMENT_ROOT']."/view/imagem/$estabelecimento";

function uploadFoto(){
	/******
	 * Upload de imagens
	 ******/
	
	// verifica se foi enviado um arquivo
	if ( isset( $_FILES[ 'arquivo' ][ 'name' ] ) && $_FILES[ 'arquivo' ][ 'error' ] == 0 ) {
			
		$arquivo_tmp = $_FILES[ 'arquivo' ][ 'tmp_name' ];
		$nome = $_FILES[ 'arquivo' ][ 'name' ];
			
		
		
		
		// Pega a extensão
		$extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
	
		// Converte a extensão para minúsculo
		$extensao = strtolower ( $extensao );
	
		// Somente imagens, .jpg;.jpeg;.gif;.png
		// Aqui eu enfileiro as extensões permitidas e separo por ';'
		// Isso serve apenas para eu poder pesquisar dentro desta String
		if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
			// Cria um nome único para esta imagem
			// Evita que duplique as imagens no servidor.
			// Evita nomes com acentos, espaços e caracteres não alfanuméricos
					
			// cria diretorios para salvar as imagens
			
			$nome = strtolower ($nome);
			
			$pastaEstabelecimento = $_SERVER['DOCUMENT_ROOT']."/view/imagem/".$_SESSION['mapa']['idEstabelecimentoSelecionado'];
			$pastaAlbum = $_SERVER['DOCUMENT_ROOT']."/view/imagem/".$_SESSION['mapa']['idEstabelecimentoSelecionado']."/".$_SESSION['mapa']['idAlbumSelecionado'];
			$destino = $pastaAlbum."/".$nome;
			$retorno = "/view/imagem/".$_SESSION['mapa']['idEstabelecimentoSelecionado']."/".$_SESSION['mapa']['idAlbumSelecionado']."/".$nome;
			
			
			if (!file_exists($pastaEstabelecimento)){
			
				try {
					mkdir($pastaEstabelecimento, 0700);
				} catch (Exception $e) {
					echo "Erro ao criar pasta do estabelecimento";
				}
					
			}
			
			if (!file_exists($pastaAlbum)){
			
				try {
					mkdir($pastaAlbum, 0700);
				} catch (Exception $e) {
					echo "Erro ao criar pasta do album";
				}
					
			}
			
			try {
				@move_uploaded_file ( $arquivo_tmp, $destino );
				return $retorno;
			} catch (Exception $e) {
				echo "Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br/> $e";
				
			}
						
		}
		else
			echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';
	}
	else
		echo 'Você não enviou nenhum arquivo!';
}


 function incluir($post){	
	
 	$idAlbum = $_SESSION['mapa']['idAlbumSelecionado'];
 	
 	$entidade = new AppEntityFoto;	
	$entidade->setNomeFoto(setMaiusculo($post['nomeFoto']));	
	$foto = setMaiusculo($post['nomeFoto']);
	$entidade->setIdAlbum($idAlbum);
	$enderecoFoto = uploadFoto($foto);
	
	$entidade->setEnderecoFoto($enderecoFoto); 
	return $entidade;
	
}
function nomeEntidade(){	
	 return "AppEntityFoto";
}


function consultarTudo($parametros){
	if($parametros != "all"){
		$stmt = "SELECT f  FROM AppEntityFoto f WHERE f.nomeFoto like '$parametros' ";
	}else{
		$stmt = "SELECT f  FROM AppEntityFoto f";
	}
	return $stmt;
}

function alterar($entidade,$post){
	$entidade->setNomeFoto(setMaiusculo($post['nomeFoto']));	
	return $entidade;
	
}

function preencheForm($entidade){
	global $nomeFoto;
	
	
	if(isset($entidade)){
		$nomeFoto = $entidade->getNomeFoto();
		
	}else{
		$nomeFoto = "";
		
	}
	
}


?>