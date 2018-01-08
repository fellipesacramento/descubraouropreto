<?php
require_once $_SERVER['DOCUMENT_ROOT']."/controller/init.php";
require_once  $_SERVER['DOCUMENT_ROOT']."/controller/controller.php";

	$controller =  new Controller();
	$controller->setVarGet($_GET);
	$controller->setVarPost( $_POST);
	$controller->controllerTrataForm();
	$controller->ControllerPreencheForm();
	
	if(isset($_GET['id'])){		
		$_SESSION['mapa']['idUsuarioSelecionado'] = $_GET['id'];
	}

	if(isset($_SESSION['perfilUsuarioLogado'])){
		$perfilUsuarioLogado = $_SESSION['perfilUsuarioLogado'];
	}

?>


<!DOCTYPE html>
<html lang="pt-br">

  <head>
       <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/BE2A1559-64F1-3842-84F3-9F99DE5DBDFE/main.js" charset="UTF-8"></script>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- link para o arquivo CSS do Bootstrap -->
     <link href="/view/css/bootstrap.css" rel="stylesheet">     
    
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
   

   
<body>
    <!-- inicio - area de producao -->
<span style="position: absolute; top: 70px; left: 10px; width: 90%; height: 61px; z-index:-1"> 
<div class="formulario">  
<form  action="" method="post" target="_self" name="formGravar" id="validate">

	    <input type="hidden" name="enviado" value="ok">			  
		
		<label for="nomeUsuario">Nome:</label>
 		<input type="text" class="form-control g" id="nomeUsuario" name="nomeUsuario" value="<?php echo $nomeUsuario ?>"> 
 		
 		<label for="cpfUsuario">CPF:</label>
 		<input type="text" class="form-control g" id="cpfUsuario" name="cpfUsuario" value="<?php echo $cpfUsuario ?>"> 
 		
 		<label for="emailUsuario">E-mail:</label>
 		<input type="text" class="form-control g " id="emailUsuario" name="emailUsuario" value="<?php echo $emailUsuario ?>"> 
 		
 		<label for="fixoUsuario">Telefone Fixo:</label>
 		<input type="text" class="form-control p" id="celular" name="fixoUsuario" value="<?php echo $fixoUsuario ?>"> 
 		
 		<label for="celularUsuario">Celular:</label>
 		<input type="text" class="form-control p" id="celular" name="celularUsuario" value="<?php echo $celularUsuario ?>"> 		
 		
 		<?php 
 			if($perfilUsuarioLogado =="A"){ 				
 				if($perfilUsuario =="A"){
 					$perfilAdm = "checked";
 					$perfilUsr  ="";
				}else{
					$perfilUsr = "checked";
					$perfilAdm ="";
				}
 				 	echo "		
 						<ul>
 							<li><input type=\"radio\" name=\"perfilUsuario\" $perfilAdm value=\"A\"> Administrador 							
 		      				<li><input type=\"radio\" name=\"perfilUsuario\"  $perfilUsr  value=\"U\">Usuario
 		      			</ul>	
 		           ";
 		
 			}
 		
 		?> 	
 		</label><br> 	 		
  		<label for="loginUsuario">Login:</label>
  		<input type="text" class="form-control g" id="login" name="loginUsuario" value="<?php echo $loginUsuario ?>"> 
  		<?php 
  		if($_GET['logica'] == 'incluir'){
  			echo"
  			<label for=\"senhaUsuario\">Senha:</label>
  			<input type=\"password\" class=\"form-control g \" id=\"senhaUsuario\" name=\"senhaUsuario\" value=\" $senhaUsuario \">
  			"; 
  		}
  		
       ?>
	
      	
    
</form>
</div>
</span>

    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="http://localhost/view/js/jquery-1.10.2.min.js"></script>
     <script type="text/javascript" src="http://localhost/view/js/teste.js"></script>
    <script type="text/javascript" src="http://localhost/view/js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="http://localhost/view/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="http://localhost/view/js/jquery.zebra-datepicker.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="http://localhost/view/js/bootstrap.js"></script>
    
    
</body>


</html>
