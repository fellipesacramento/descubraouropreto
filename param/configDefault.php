<?php 
$raizDoProjeto = $_SERVER['DOCUMENT_ROOT'];

$configDefault = <<<XML
<?xml version='1.0'?>
<document>		
   
	 <cdu id = 'CDU1' >		
		<incluir>categoriaman</incluir>
		<consultar>categoriasel</consultar>
		<alterar>categoriaman</alterar>	
		<excluir>categoriaman</excluir>	
 		<manager>CategoriaManager</manager> 
		<nomeCadastro>CADASTRO DE CATEGORIA</nomeCadastro>
		<diretorio>categoria</diretorio> 
		<voltarPara>false</voltarPara>
	</cdu>
	 <cdu id = 'CDU2' >		
		<incluir>tipoPlanoman</incluir>
		<consultar>tipoPlanosel</consultar>
		<alterar>tipoPlanoman</alterar>	
		<excluir>tipoPlanoman</excluir>	
 		<manager>TipoPlanoManager</manager> 
		<nomeCadastro>CADASTRO DE PLANO</nomeCadastro>
		<diretorio>tipoPlano</diretorio>
		<voltarPara>false</voltarPara>
	</cdu>
	<cdu id = 'CDU3' >		
		<incluir>usuarioman</incluir>
		<consultar>usuariosel</consultar>
		<alterar>usuarioman</alterar>	
		<excluir>usuarioman</excluir>	
 		<manager>UsuarioManager</manager> 
		<nomeCadastro>CADASTRO DE USUARIO</nomeCadastro>
		<diretorio>usuario</diretorio> 
		<voltarPara>false</voltarPara>
	</cdu>
	<cdu id = 'CDU4' >		
		<incluir>estabelecimentoman</incluir>
		<consultar>estabelecimentosel</consultar>
		<alterar>estabelecimentoman</alterar>	
		<excluir>estabelecimentoman</excluir>	
 		<manager>EstabelecimentoManager</manager> 
		<nomeCadastro>CADASTRO DE ESTABELECIMENTOS</nomeCadastro>
		<diretorio>estabelecimento</diretorio> 
		<voltarPara>CDU3</voltarPara>
	</cdu>
	<cdu id = 'CDU5' >		
		<incluir>planoman</incluir>
		<consultar>planosel</consultar>
		<alterar>planoman</alterar>	
		<excluir>planoman</excluir>	
 		<manager>PlanoManager</manager> 
		<nomeCadastro>PLANOS</nomeCadastro>
		<diretorio>plano</diretorio> 
		<voltarPara>CDU3</voltarPara>
	</cdu>
	<cdu id = 'CDU6' >		
		<incluir>tipoAtrativoman</incluir>
		<consultar>tipoAtrativosel</consultar>
		<alterar>tipoAtrativoman</alterar>	
		<excluir>tipoAtrativoman</excluir>	
 		<manager>TipoAtrativoManager</manager> 
		<nomeCadastro>Tipos de Atrativos</nomeCadastro>
		<diretorio>tipoAtrativo</diretorio>
		<voltarPara>false</voltarPara>
	</cdu>
		<cdu id = 'CDU7' >		
		<incluir>albumman</incluir>
		<consultar>albumsel</consultar>
		<alterar>albumman</alterar>	
		<excluir>albumman</excluir>	
 		<manager>AlbumManager</manager> 
		<nomeCadastro>Album</nomeCadastro>
		<diretorio>album</diretorio> 
		<voltarPara>CDU4</voltarPara>
	</cdu>
	<cdu id = 'CDU8' >		
		<incluir>fotoman</incluir>
		<consultar>fotosel</consultar>
		<alterar>fotoman</alterar>	
		<excluir>fotoman</excluir>	
 		<manager>FotoManager</manager> 
		<nomeCadastro>Foto</nomeCadastro>
		<diretorio>foto</diretorio> 
		<voltarPara>CDU7</voltarPara>
	</cdu>
	<cdu id = 'CDU9' >		
		<incluir>atrativosman</incluir>
		<consultar>atrativosman</consultar>
		<alterar>atrativosman</alterar>	
		<excluir>atrativosman</excluir>	
 		<manager>AtrativosManager</manager> 
		<nomeCadastro>Atrativos</nomeCadastro>
		<diretorio>atrativos</diretorio> 
		<voltarPara>CDU4</voltarPara>
	</cdu>
	
	
		
</document>
XML;
?>