<?php
require_once  $_SERVER['DOCUMENT_ROOT']."/controller/init.php";
require_once  $_SERVER['DOCUMENT_ROOT']."/bootstrap.php";
require_once 'lib.php';


?>

<!DOCTYPE html>
	<html lang="pt-br">
	
	<!-- link para o arquivo CSS do Bootstrap -->
	<link href="/view/css/bootstrap.css" rel="stylesheet">
	
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<head>
<title>P�gina de exemplo</title>
        <style type="text/css">
            *{ /*Formata todos os elementos da página*/
                padding:0px; /*espaço entre a borda e o conteúdo do elemento*/
                margin:0px; /*espaço entre a borda e os elementos externos*/
            }
            #topo{
                width: 100%; /*largura*/
                height: 120px; /*altura*/
                text-align: center; /*alinhamento do texto*/
                clear: both; /*não permite elementos flutuantes ao lado*/
                background-color: #EBC9C9; /*cor de fundo*/
            }
            #tituloLista{
                width: 100%; /*largura*/
                height: 50px; /*altura*/
                text-align: center; /*alinhamento do texto*/
                clear: both; /*não permite elementos flutuantes ao lado*/
                background-color: "#111111"; /*cor de fundo*/
            }
            #menu{
                height: 50px; /*altura*/
                text-align: center; /*alinhamento do texto*/
                padding: 10px; /*espaço entre a borda e o conteúdo do elemento*/
                background-color: #EAA1A1; /*cor de fundo*/
            }
            #menuLateral{
                padding: 10px; /*espaço entre a borda e o conteúdo do elemento*/
                width: 20%; /*largura*/
                float:left; /*define que o elemento deve flutuar à esquerda*/
                background-color: #EA9191; /*cor de fundo*/
            }
            #meio{
                width: 100%; /*largura*/
                background-color: #FFFFFF; /*cor de fundo*/
                height: 10px;; /*altura*/
               
            }
           
            #conteudo{
                padding: 10px; /*espaço entre a borda e o conteúdo do elemento*/
                width: 80%; /*largura*/
                float:right; /*define que o elemento deve flutuar à esquerda*/
                background-color: #EB4D4D; /*cor de fundo*/
            }
            #rodape{
                clear: both; /*não permite elementos flutuantes ao lado*/
                text-align: center; /*alinhamento do texto*/
                padding: 10px; /*espaço entre a borda e o conteúdo do elemento*/
                background-color: #B0ADEB; /*cor de fundo*/
            }           
           
            #botaoMenuSuperior {
                width: 160px;
                height: 30px;; /*altura*/
            }
            
			
			.tabela{				
				margin: auto;
				text-align: center;
			}
					
			.tabela  tr td {				
				padding:10px;
				text-align: center;
			
			}	
			
			a:link, a:visited, a:active, a:hover{
				  color: #000000; /*cor de fundo*/
				  text-decoration:none;
				  
			
			}
					
						 
			body { text-align: center; }
			
						
            
        </style>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 
	
	<!-- link para o arquivo CSS do Bootstrap -->
	<link href="/view/css/bootstrap.css" rel="stylesheet">
	
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	</head>
	<body>
	 <header id="topo">
        <h1>Aqui fica um banner e a logo</h1>
        
    </header>
	<!-- inicio - area de producao -->
	<br><br>
	<hr width="100%">
	
  <section id="meio">
<?php

$id = $_GET['id'];
$listaDetalhesCategoria = exibirListaEstabelecimentoCategoria($id);
$formExibirDetalhesEstabelecimento = 'detalhesEstabelecimento.php';

echo"  <table class =\"tabela\">
		 <tr>
		";
if(isset($listaDetalhesCategoria)){
	$cont = 0;
	foreach ($listaDetalhesCategoria as $estabelecimento){
		$idEstabelecimento   =    $estabelecimento->getIdEstabelecimento();
		$nomeEstabelecimento =  $estabelecimento->getNomeFantasiaEstabelecimento();
		$capaEstabelecimento =  $estabelecimento->getCapaEstabelecimento();
		$cont++;


		$exibirEstabelecimento = "<a href=\"$formExibirDetalhesEstabelecimento?id=$idEstabelecimento\" target= \"_self\">$nomeEstabelecimento</a> ";
		$exibeCapaEstabelecimento = "<a href=\"$formExibirDetalhesEstabelecimento?id=$idEstabelecimento\" target= \"_self\"><img src=\"$capaEstabelecimento\"></a>";
		
		    echo"<td>
				$exibirEstabelecimento
			    <br>
		 		$exibeCapaEstabelecimento
		       </td>";
		
		
		if($cont == 3){
		  $cont = 0;
		  echo"</tr><tr>";
		 
		}	
	}
}

echo" </tr>
         </table>";

?>

</section>

   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
</body>


</html>