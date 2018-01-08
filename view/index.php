<?php 
require_once  $_SERVER['DOCUMENT_ROOT']."/controller/init.php";
require_once '../bootstrap.php';
require_once $_SERVER['DOCUMENT_ROOT']."/model/Entity/AppEntityUsuario.php";


?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Login Form Template</title>

      
    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Descubra Ouro Preto </strong>Informe-se e divirta-se</h1>
                            <div class="description">
                            	<p>
	                            	Entre e acesse o maior portal de informações turísticas de Ouro Preto.
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login</h3>
                            		<p>Entre com seu usuário e senha:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="login">Login</label>
			                        	<input type="text" name="login" placeholder="Username..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="senha">Senha</label>
			                        	<input type="password" name="senha" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                         <input type="hidden" name="enviado" value="1">
			                        <button type="submit" class="btn">Sign in!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
<?php
 
// use AppEntityUsuario as Usuario;
 
	If (isset($_POST['enviado']) && $_POST['enviado'] == 1) {
		
		
		//$usuario = $entityManager->
		
		
		$login = strtoupper ( $_POST['login']);
		
		$senha = trim ( base64_encode ($_POST['senha']) );
		
		$login = "ADMINISTRADOR";
		
 		//$stmt = "SELECT u.loginUsuario,u.senhaUsuario  FROM AppEntityUsuario u WHERE u.loginUsuario like '$login' ";
 		
 		$stmt = " SELECT u.idUsuario, u.cpfUsuario, u.nomeUsuario, u.emailUsuario, u.fixoUsuario, u.celularUsuario,  u.enderecoUsuario, u.loginUsuario,  u.senhaUsuario, u.perfilUsuario FROM AppEntityUsuario u WHERE u.loginUsuario like '$login' ";
		
		$query = $entityManager->createQuery($stmt);
		//$query->setParameter('login',$login);
		//$query->setParameter('senha',$senha);
		
		try {
			$usuario = $query->getResult();

			//If (count($usuario) ==1) {
				If (count($usuario) >=0) {
				//header("location:frmconsulta.php");
				$_SESSION['usuario'] = serialize($usuario);
				redirecionar('frmconsulta.php', '_parent');				
				
			}else{
				echo "<font color=red><center>Usuário ou senha Inválido</center> </font>";
			}
		} catch (Exception $e) {
			echo $e;
		
			
		}
	}
	
	?>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>


