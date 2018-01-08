<?php
if (session_id() == ""){
	session_start();
}

header('Content-Type: text/html; charset=ISO-8859-1');

function cabecalho($nomeCadastro, $casoDeUso=""){
	if(isset($nomeCadastro)){
		echo "$nomeCadastro  $casoDeUso <br>";
	}
	
}

function getUsuarioLogado(){
	if(isset($_SESSION['usuario'])){
		$usuario = unserialize($_SESSION['usuario']);
		return $usuario;
	}
}	


function recuperaIdUsuario(){
	if(isset($_SESSION['idUsuarioCadastro'])){
		$idUsuario = unserialize($_SESSION['idUsuarioCadastro']);
		return $idUsuario;
	}
}	
function setMaiusculo($string){
	if(isset($string)){
		if(gettype($string)=="string"){
			return trim(strtoupper($string));
		}
		
	}else{ 
		return "";
	}
}
	

/*
testar se não tem nada na sessão ou se se trata daspaginas iniciais
if(!isset($_SESSION)){
	redirecionar($_SERVER['DOCUMENT_ROOT']."/web/index.php", _self);
}else{
	if(!isset($_SESSION['usuario'])){
		redirecionar("http://localhost", _parent );
	}
}
*/
function redirecionar($paraOnde, $emQualTela){
	
echo <<<str
		<form action="$paraOnde" name="redirect" target = "$emQualTela" method="get">
		</form>	
		<script language="javascript">
			document.redirect.submit();
		</script>
	
str;
	
}

function redirecionarComLogica($paraOnde, $emQualTela, $logica, $id=""){

	echo <<<str
		<form action="$paraOnde" name="redirect" target = "$emQualTela" method="get">
			<input type="hidden" name="logica" value="$logica">	
			<input type="hidden" name="id" value="$id">			
		</form>
		<script language="javascript">
			document.redirect.submit();
		</script>

str;

}

?>
  <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

       

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
        
         <!-- link para o arquivo CSS do Bootstrap -->
     <link href="http://localhost/view/css/bootstrap.css" rel="stylesheet">   
     <link href='http://fonts.googleapis.com/css?family=OpenSans:300,400,700' rel='stylesheet' type='text/css'>
     <link href="http://localhost/view/css/formulariopadrao.css" rel="stylesheet" type="text/css"/> 
     
    
  

  </head>

