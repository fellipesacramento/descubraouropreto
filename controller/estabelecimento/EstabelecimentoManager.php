<?php
require_once $_SERVER['DOCUMENT_ROOT']."/controller/init.php";
require_once$_SERVER['DOCUMENT_ROOT']."/model/Entity/AppEntityEstabelecimento.php";


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
				
			$pastaEstabelecimento = $_SERVER['DOCUMENT_ROOT']."/view/imagem/capa/".$_SESSION['mapa']['idEstabelecimentoSelecionado'];
			$pastaAlbum = $_SERVER['DOCUMENT_ROOT']."/view/imagem/capa/".$_SESSION['mapa']['idEstabelecimentoSelecionado']."/".$_SESSION['mapa']['idAlbumSelecionado'];
			$destino = $pastaAlbum."/".$nome;
				
				
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
				return $destino;
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
	 
 	$entidade = new AppEntityEstabelecimento();		
	$entidade->setRazaoSocialEstabelecimento(setMaiusculo($post['razaoSocialEstabelecimento']));
	$entidade->setNomefantasiaEstabelecimento(setMaiusculo($post['nomeFantasiaEstabelecimento']));	
	$entidade->setSloganEstabelecimento(setMaiusculo($post['sloganEstabelecimento']));	
	$entidade->setIdPlano(setMaiusculo($post['idPlano']));
	$entidade->setDescricaoEstabelecimento(setMaiusculo($post['descricaoEstabelecimento']));
	$entidade->setIdCategoria(setMaiusculo($post['idCategoria']));
	$entidade->setIdUsuario(setMaiusculo($_SESSION['mapa']['idUsuarioSelecionado']));	
	
		
	return $entidade;
	
}
function nomeEntidade(){	
	 return "AppEntityEstabelecimento";
}


function consultarTudo($parametros){
	$nomeEntidade = nomeEntidade();
	if($parametros != "all"){
		$stmt = "SELECT e  FROM $nomeEntidade e WHERE e.nomeFantasia like '$parametros' ";
	}else{
		$stmt = "SELECT e  FROM $nomeEntidade e";
	}
	return $stmt;
}

function alterar($entidade,$post){
	$entidade = new AppEntityEstabelecimento();	
	
	$entidade->setRazaoSocialEstabelecimento(setMaiusculo($post['razaoSocialEstabelecimento']));
	$entidade->setNomeFantasiaEstabelecimento(setMaiusculo($post['nomeFantasiaEstabelecimento']));
	$entidade->setDescricaoEstabelecimento(setMaiusculo($post['descricaoEstabelecimento']));
	$entidade->setSloganEstabelecimento(setMaiusculo($post['sloganEstabelecimento']));
	$entidade->setIdUsuario($post['idUsuario']);
	$entidade->setIdPlano($post['idPlano']);
	$entidade->setDescricaoEstabelecimento(setMaiusculo($post['descricaoEstabelecimento']));	
	$entidade->setIdCategoria(setMaiusculo($post['idCategoria']));
	return $entidade;
	
}

function preencheForm($entidade){
	
	global $razaoSocialEstabelecimento;
	global $nomeFantasiaEstabelecimento;
	global $descricaoEstabelecimento;
	global $sloganEstabelecimento;
	global $idUsuario;
	global $idPlano;
	global $descricaoEstabelecimento;
	global $IdCategoria;

	
	
	if(isset($entidade)){
		$razaoSocialEstabelecimento = $entidade->getRazaoSocialEstabelecimento();
		$nomeFantasiaEstabelecimento = $entidade->getNomeFantasiaEstabelecimento();
		$descricaoEstabelecimento = $entidade->getDescricaoEstabelecimento();
		$sloganEstabelecimento = $entidade->getSloganEstabelecimento();
		$idUsuario = $entidade->getIdUsuario();
		$idPlano = $entidade->getIdPlano();
		$descricaoEstabelecimento = $entidade->getDescricaoEstabelecimento();
		$idCategoria = $entidade->getIdCategoria();
	}else{
		 $razaoSocialEstabelecimento = "";
		 $nomeFantasiaEstabelecimento= "";
		 $descricaoEstabelecimento = "";
		 $sloganEstabelecimento = "";
		 $idUsuario = "";
		 $idPlano = "";
		 $descricaoEstabelecimento = "";
		 $IdCategoria = "";
	}
	
}


?>