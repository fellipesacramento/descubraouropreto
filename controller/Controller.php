<?php
require_once 'init.php';
require_once $_SESSION["manager"];
require_once  $_SERVER['DOCUMENT_ROOT']."/bootstrap.php";

Class Controller{
	
	private $varGet;
	private $varPost;
	
	
	public function controllerIncluir(){
		try {
			$entidade = incluir($this->varPost);
			global	$entityManager;
			$entityManager->persist($entidade);
			$entityManager->flush();
			echo "
					<div class=\"alert alert-success\">
						<strong>Incluido com sucesso</strong>	
					</div>
				";					
					
		} catch (Exception $e) {
			echo  $e->getMessage();
		}
	
	}
	public function controllerConsultar($id){
		try {
			global	$entityManager;
			$entidade =  $entityManager->find(nomeEntidade(),$id);			
			return $entidade;
		} catch (Exception $e) {
			echo  $e->getMessage();
			exit;
		}
		
	}
	public function controllerConsultarTudo($parametros){
		$stmt = consultarTudo($parametros);
	
		global $entityManager;
		$query = $entityManager->createQuery($stmt);
		try {
			$resultado = $query->getResult();
	
			If (count($resultado) >0) {
				return $resultado;
	
			}else{
				echo"
				<div class=\"alert alert-danger\">
				<strong>Nenum registro Encontrado!</strong>
				</div>";
				return false;
			}
		} catch (Exception $e) {
			echo $e;
		}
	}
	public function controllerAlterar($id){
		try{
			
			 
			$resultado = $this->controllerConsultar($id);
			$entidade = alterar($resultado,$this->varPost);
			global	$entityManager;
			$entityManager->persist($entidade);
			$entityManager->flush();
			echo"
			<div class=\"alert alert-success\">
			<strong>Alterado com sucesso</strong>
			</div>";
			return $entidade;
		} catch (Exception $e) {
			echo  $e->getMessage();
		}
	}
	
	public function controllerExcluir(){
		try{
			
			$entidade = $this->controllerConsultar($_SESSION['idEntity']);
			global	$entityManager;
			$entityManager->remove($entidade);
			$entityManager->flush();
			echo"
			<div class=\"alert alert-success\">
			<strong>Excluido com sucesso</strong>
			</div>";
		} catch (Exception $e) {
			echo  $e->getMessage();
		}
	}
	
	
	public function controllerTrataForm(){
		
		if(isset($this->varPost ['enviado']) || isset($this->varGet['enviado']) ){
			if($this->varGet['logica']=="incluir"){
				$this->controllerIncluir();
			}else
				if($this->varGet['logica']=="alterar"){
					$entidade = $this->controllerAlterar($this->varGet['id']);					
			}else
				if($_GET['logica']=="excluir"){
					$this->controllerExcluir();
					exit;
			}
		}else{
			if($this->varGet['logica']=="alterar"){				
				$this->controllerConsultar($this->varGet['id']);				
				$_SESSION['idEntity'] = $this->varGet['id'];
			}
		}		
		
	}
	
	// Metodo especifico pra tratar atrativos
	
	public function controllerTrataFormAtrativos(){
		require_once $_SERVER['DOCUMENT_ROOT']."/controller/atrativos/atrativosManager.php";
		
		if(isset($this->varPost ['enviado']) || isset($this->varGet['enviado']) ){
			global	$entityManager;			
			excluirAtrativos($entityManager);
			gravarAtrativos($entityManager);
			
			
		}
	
	}
	
	public function ControllerPreencheForm(){
		if(isset($this->varGet['id'])){
			$entidade = $this->controllerConsultar($this->varGet['id']);
			
		}else{
			$entidade = null;
		}
		preencheForm($entidade);
	}
	
	
	public function setVarGet($varGet){
		$this->varGet = $varGet;
	}
	public function setVarPost($varPost){
		$this->varPost = $varPost;
	}
	
	
	
}





?>