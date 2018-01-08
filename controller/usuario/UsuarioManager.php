<?php
require_once  $_SERVER['DOCUMENT_ROOT']."/controller/init.php";
require_once  $_SERVER['DOCUMENT_ROOT']."/model/Entity/AppEntityUsuario.php";


function enviarEmail($entidade){

	include "PHPMailer-master/PHPMailerAutoload.php";
	
	// Inicia a classe PHPMailer
	$mail = new PHPMailer();
	
	// Método de envio
	$mail->IsSMTP(); // Enviar por SMTP
	$mail->Host = "smtp.gmail.com"; // Você pode alterar este parametro para o endereço de SMTP do seu provedor
	$mail->Port = 587;
	
	$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório)
	$mail->Username = 'fellipesacramento@gmail.com'; // Usuário do servidor SMTP (endereço de email)
	$mail->Password = 'rygzup3n'; // Mesma senha da sua conta de email
	
	// Configurações de compatibilidade para autenticação em TLS
	$mail->SMTPOptions = array(
			'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
			)
	);
	//$mail->SMTPDebug = 2; // Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro.
	
	// Define o remetente
	$mail->From = "fellipesacramento@gmail.com"; // Seu e-mail
	$mail->FromName = "Fellipe"; // Seu nome
	
	// Define o(s) destinatário(s)
	$mail->AddAddress('fellipe.tecnologo@gmail.com', 'Teste');
	$mail->AddAddress('myhania@yahoo.com.br');
	$mail->AddAddress('edu_mbr@yahoo.com.br');
	
	
	// CC
	//$mail->AddCC('joana@provedor.com', 'Joana');
	
	// BCC - Cópia oculta
	//$mail->AddBCC('roberto@gmail.com', 'Roberto');
	
	// Definir se o e-mail é em formato HTML ou texto plano
	$mail->IsHTML(true); // Formato HTML . Use "false" para enviar em formato texto simples.
	
	$mail->CharSet = 'UTF-8'; // Charset (opcional)
	
	// Assunto da mensagem
	$mail->Subject = "Teste de email Cadastro de Usuário";
	
	// Corpo do email
	
	
	$nome = $entidade->getNomeUsuario();
	$celular = $entidade->getCelularUsuario();
	
	$mail->Body = "
			nome: $nome <br>
			celular: $celular
			
			
			
			";
	
	
	// Anexos (opcional)
	//$mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf");
	
	// Envia o e-mail
	$enviado = $mail->Send();
	
	
	// Exibe uma mensagem de resultado
	if ($enviado) {
		echo "Seu email foi enviado com sucesso!";
	} else {
		echo "Houve um erro enviando o email: ".$mail->ErrorInfo;
	}


}


 function incluir($post){	
	 
 	$entidade = new AppEntityUsuario;	
	$entidade->setNomeUsuario($post['nomeUsuario']);
	$entidade->setCpfUsuario(setMaiusculo($post['cpfUsuario']));
	
	if(!isset($post['perfilUsuario'])){
		$entidade->setPerfilUsuario("U");
	}else{
		$entidade->setPerfilUsuario(setMaiusculo($post['perfilUsuario']));
		}
		
	$entidade->setEmailUsuario(setMaiusculo($post['emailUsuario']));
	$entidade->setFixoUsuario(setMaiusculo($post['fixoUsuario']));
	$entidade->setCelularUsuario(setMaiusculo($post['celularUsuario']));
	$entidade->setLoginUsuario(setMaiusculo($post['loginUsuario']));
	$entidade->setSenhaUsuario(setMaiusculo(base64_encode($post['senhaUsuario'])));
	
	enviarEmail($entidade);	
	return $entidade;
	
}
function nomeEntidade(){	
	 return "AppEntityUsuario";
}


function consultarTudo($parametros){
	$perfilUsuarioLogado = $_SESSION['perfilUsuarioLogado'];
	$idUsuarioLogado = $_SESSION['idUsuarioLogado'];
	
	if($perfilUsuarioLogado=="A"){
		if($parametros != "all"){
			$stmt = "SELECT u  FROM AppEntityUsuario u WHERE u.nomeUsuario like '$parametros' ";
		}else{
			$stmt = "SELECT u  FROM AppEntityUsuario u";
		}
	}else{
		$stmt = "SELECT u  FROM AppEntityUsuario u WHERE u.idUsuario = '$idUsuarioLogado' ";
	}	
		
	return $stmt;
}

function alterar($entidade,$post){	
	$entidade->setNomeUsuario(setMaiusculo($post['nomeUsuario']));	
	$entidade->setCpfUsuario(setMaiusculo($post['cpfUsuario']));
	$entidade->setPerfilUsuario(setMaiusculo($post['perfilUsuario']));
	$entidade->setEmailUsuario(setMaiusculo($post['emailUsuario']));
	$entidade->setFixoUsuario(setMaiusculo($post['fixoUsuario']));
	$entidade->setCelularUsuario(setMaiusculo($post['celularUsuario']));
	$entidade->setLoginUsuario(setMaiusculo($post['loginUsuario']));
	$entidade->setSenhaUsuario(setMaiusculo(base64_encode($post['senhaUsuario'])));
	return $entidade;
	
}

function preencheForm($entidade){
	global $nomeUsuario;	
	global $cpfUsuario;
	global $perfilUsuario;
	global $emailUsuario;
	global $fixoUsuario; 
	global $celularUsuario; 
	global $loginUsuario;
	global $senhaUsuario; 
		
	
	if(isset($entidade)){
		$nomeUsuario = $entidade->getNomeUsuario();
		$cpfUsuario = $entidade->getCpfUsuario();
		$perfilUsuario = $entidade->getPerfilUsuario();
		$emailUsuario = $entidade->getEmailUsuario();
		$fixoUsuario = $entidade->getFixoUsuario();
		$celularUsuario = $entidade->getCelularUsuario();
		$loginUsuario =  $entidade->getLoginUsuario();
		$senhaUsuario = $entidade->getSenhaUsuario();
	}else{
		$cpfUsuario = "";
		$perfilUsuario = "";
		$emailUsuario = "";
		$fixoUsuario = "";
		$celularUsuario = "";
		$loginUsuario = "";
		$senhaUsuario = "";
	}
	
}


?>