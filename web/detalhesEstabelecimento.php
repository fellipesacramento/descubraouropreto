<?php
require_once  $_SERVER['DOCUMENT_ROOT']."/controller/init.php";
require_once  $_SERVER['DOCUMENT_ROOT']."/bootstrap.php";
require_once$_SERVER['DOCUMENT_ROOT']."/model/Entity/AppEntityEstabelecimento.php";
require_once$_SERVER['DOCUMENT_ROOT']."/model/Entity/AppEntityAlbum.php";
require_once 'lib.php';
$id = $_GET['id'];
$estabelecimento = recuperaEstabelecimento($id);

?>

<!DOCTYPE html>
	<html lang="pt-br">
	
	<head>
	<!-- link para o arquivo CSS do Bootstrap -->
	<link href="/view/css/bootstrap.css" rel="stylesheet">
	
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
	 <style type="text/css">
        
        a.classe1:link, 
        a.classe1:visited, 
        a.classe1:active 
        a.classe1:hover{
					text-decoration:none;
					 font-size: 18px;
					color:#000; 
					
		}
		
		a.classe2:link, 
        a.classe2:visited, 
        a.classe2:active 
        a.classe2:hover{
					text-decoration:none;
					 font-size: 18px;
					color:#000; 
					
		}
       
        #paginaGeral {
   				 height: 100%;
    			padding: 0;
    			margin: 0;
   				 line-height: 1;
   				 font-size: 12px;
    			font-family: Arial;
   				 -webkit-text-size-adjust: none;
   				 color: #656D78;
   				 background: #fff;
			}
            *{ /*Formata todos os elementos da página*/
                padding:0px; /*espaço entre a borda e o conteúdo do elemento*/
                margin:0px; /*espaço entre a borda e os elementos externos*/
            }
            #topo{
                width: 100%; /*largura*/
                height: 120px; /*altura*/
                text-align: center; /*alinhamento do texto*/
                clear: both; /*não permite elementos flutuantes ao lado*/
                background-color: #fff; /*cor de fundo*/
            }
            #tituloLista{
             	display: block;
   				margin: 10px 0 0 0;
               line-height: 16px;
               max-height: 16px;
               overflow: hidden;
              text-overflow: ellipsis;
              text-decoration:none;
              white-space: nowrap;
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
                height: 5px;; /*altura*/
               
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
           			
			#tituloEstabelecimento{
				border-style:solid;
				
			}
			#capaEstabelecimento{
				 width: 100%; /*largura*/
                height: 240px; /*altura*/
                text-align: center; /*alinhamento do texto*/
                clear: both; /*não permite elementos flutuantes ao lado*/
                background-color: #fff; /*cor de fundo*/
                border:1px;
				border-style:solid;
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
						 
								
            
        </style>
        
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 
	

	
	</head>
	<body>
	  
	<!-- inicio - area de producao -->
	<br><br>
	<hr width="100%">
	 <section id="topo">
<?php

$capa = $estabelecimento->getCapaEstabelecimento();
   
	$idEstabelecimento =    $estabelecimento->getIdEstabelecimento();
	$nome =  $estabelecimento->getNomeFantasiaEstabelecimento();
	
	$listaAtrativos = exibirListaEstabelecimentoAtrativo($idEstabelecimento);
	if(isset($estabelecimento)){
						
		echo"
		
			<table class=\"tabela\">
			  <tr>
			    <th colspan=\"3\">		
				$nome	
				<hr/>
				</th>
			  <tr>
			  <tr>
			   <td>
				  <img = src=\"$capa\" ></img>
			    </td>
			    <td>";
		          if(isset($listaAtrativos)){
		          	foreach($listaAtrativos as $atrativo){
		          		$nomeAtrativo = $atrativo['nomeTipoAtrativo'];
		          		 
		          		echo "$nomeAtrativo<br>";
		          		 
		          	}
		          	
		          }
			    	 
	   	echo"			
			    </td>
			<tr>
        	</table>	
			
		";
	
		
	  	$listaAlbum = recuperaAlbum($idEstabelecimento);	
	  	
	  	
	 
	  		
	  	if(isset($listaAlbum)){
	  		echo"<table class=\"tabela\">";
	  		echo "<tr>";
	  		foreach($listaAlbum as $album){
	  			$nomeAlbum = $album['nomeAlbum'];
	  			$enderecoFoto = $album['enderecoFoto'];
	  			 
	  			echo"
						<td>
						  <img src=\"$enderecoFoto\" style=\" width:200px;\">
						</td>
							
						
							";
	  			 
	  		}
	  		echo "</tr>";
	  		echo"</table>"; 
	  	}
	  	
	}  	
	  	
	  		

?>
</section>


   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
</body>


</html>