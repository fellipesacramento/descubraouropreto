<?php
require_once  $_SERVER['DOCUMENT_ROOT']."/controller/init.php";
require_once  $_SERVER['DOCUMENT_ROOT']."/bootstrap.php";

require_once "lib.php";



$listaCategoriaWeb = montarMenuCategorias();
$formExibirListaEstabelecimentoCategoria = "listaEstabelecimentoCategoria.php";
$formExibirDetalhesEstabelecimento = 'detalhesEstabelecimento.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
   <!-- link para o arquivo CSS do Bootstrap -->
    	<link href="../view/css/bootstrap.css" rel="stylesheet"> 
    	<link href="../view/css/alinhamento.css" rel="stylesheet">       
    
  			  <!--[if lt IE 9]>
   		 	 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  		  	 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  			 <![endif]-->

  
       
        <title>Página de exemplo</title>
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
                background-color: #ffffff; /*cor de fundo*/
            }
            .tituloLista{
                width: 100%; /*largura*/
                height: 50px; /*altura*/
                text-align: center; /*alinhamento do texto*/
                clear: both; /*não permite elementos flutuantes ao lado*/
                color: "#000000"; /*cor de fundo*/
            }
            #menu{
                height: 50px; /*altura*/
                text-align: center; /*alinhamento do texto*/
                padding: 10px; /*espaço entre a borda e o conteúdo do elemento*/
                background-color: gray; /*cor de fundo*/
            }
            #menuLateral{
                padding: 10px; /*espaço entre a borda e o conteúdo do elemento*/
                width: 20%; /*largura*/
                float:left; /*define que o elemento deve flutuar à esquerda*/
                background-color: #EA9191; /*cor de fundo*/
            }
           
               
            }
           
           
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
            

				
			 
			
			table{
				width: 70%;
				height: 30px;; /*altura*/				
				border: 0px solid #7a7;
				padding: 10px;
				margin:auto;				
				
			
			}
			tr, td{
				border: 0px solid #7a7;
				border-spacing:100px;
				text-align: center;
				padding: 10px;
			
			}
			
			th{
			  background-color:#ffffff;
			  font-size:20px;
			}
			
			a:link, a:visited, a:active, a:hover{
				  color: #000000; /*cor de fundo*/
				  text-decoration:none;
			
			}
		
			body { text-align: center; }
			
						
            
        </style>
        
      
    </head>
    <body>

    <header id="topo">
        <h1>Aqui fica um banner e a logo</h1>
        
    </header>

    <nav id="menu">
     <?php 
    
    if(count($listaCategoriaWeb)>0){
    	
    
   		 foreach ($listaCategoriaWeb as $categoria){
    		$idCategoria =    $categoria->getIdCategoria();
    		$nomeCategoria =  $categoria->getNomeCategoria();
    		$exibirCategoriaBotoes = "<a href=\"$formExibirListaEstabelecimentoCategoria?id=$idCategoria\" target= \"_self\"   class=\"btn btn-scet\" role=\"button\" aria-disabled=\"true\" >$nomeCategoria</a>";
    	
    		echo"$exibirCategoriaBotoes";
    		
    		$listaEstabelecimento = exibirListaEstabelecimentoCategoria($idCategoria);
    		
    		
   		 }
	}
    ?>
       	
    </nav>
    

   
    
    <?php 
    
    if(count($listaCategoriaWeb)>0){
    	echo "<table>";
    
   		 foreach ($listaCategoriaWeb as $categoria){
   		 	$cont = 0;
    		$idCategoria =    $categoria->getIdCategoria();
    		$nomeCategoria =  $categoria->getNomeCategoria();
    		$exibirCategoria = "<div class=\"tituloLista\"><a href=\"$formExibirListaEstabelecimentoCategoria?id=$idCategoria\" target= \"_self\">$nomeCategoria</a></div>";
    	
    		echo"<tr>
    		        <th colspan=\"3\"> 
    		        	$exibirCategoria
    				</th>
    			</tr>
    			<tr>
    		";
    		
    		$listaEstabelecimento = exibirListaEstabelecimentoCategoria($idCategoria);
    		
    		if(isset($listaEstabelecimento)){
    		   foreach ($listaEstabelecimento as $estabelecimento){
    			  $idEstabelecimento   =    $estabelecimento->getIdEstabelecimento();
    			  $nomeEstabelecimento =  $estabelecimento->getNomeFantasiaEstabelecimento();
    			  $capaEstabelecimento =  $estabelecimento->getCapaEstabelecimento();
    			  $cont++;
    			  if($cont > 3){
    			  	break;
    			  }
    			   
    			 
    			  $exibirEstabelecimento = "<a href=\"$formExibirDetalhesEstabelecimento?id=$idEstabelecimento\" target= \"_self\">$nomeEstabelecimento</a> ";
                  $exibeCapaEstabelecimento = "<a href=\"$formExibirDetalhesEstabelecimento?id=$idEstabelecimento\" target= \"_self\"><img src=\"$capaEstabelecimento\"></a>";		
                	echo"
                	        <td>
                	        $exibirEstabelecimento<br>                		        
                		  	$exibeCapaEstabelecimento
                		   </td>     		
                		";	
    			  
    		  }
    		}
    		echo"</tr>";
   		 }
   		 echo"</table>";
	}

    ?>
    
    
            
        
              
  
    <footer id="rodape">
     <div class="panel panel-scet">
  		<div class="panel-body">
      		 <a href="http://localhost/view" class="link  "  target="_blank">Administrar</a> 
     		 <a href="" class="link "  target="_blank">Atrações e Aventuras</a>
     		 <a href="" class="link "  target="_blank">Eventos</a> 
       	</div>
      </div> 	
    </footer>

    </body>
</html>  
