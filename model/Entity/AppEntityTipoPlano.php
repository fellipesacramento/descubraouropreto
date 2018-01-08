<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppEntityTipoPlano
 *
 * @ORM\Table(name="tipoplano")
 * @ORM\Entity
 */
class AppEntityTipoPlano
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_TIPOPLANO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoPlano;

    /**
     * @var string
     *
     * @ORM\Column(name="NOME_TIPOPLANO", type="string", length=20, nullable=true)
     */
    private $nomeTipoPlano;

    /**
     * @var string
     *
     * @ORM\Column(name="QTDALBUM_TIPOPLANO", type="string", length=20, nullable=true)
     */
    private $qtdAlbumTipoPlano;

    /**
     * @var string
     *
     * @ORM\Column(name="QTDFOTO_TIPOPLANO", type="string", length=20, nullable=true)
     */
    private $qtdFotoTipoPlano;
    
	public function getIdTipoPlano() {
		return $this->idTipoPlano;
	}
	public function setIdTipoPlano($idTipoPlano) {
		$this->idTipoPlano = $idTipoPlano;
		return $this;
	}
	public function getNomeTipoPlano() {
		return $this->nomeTipoPlano;
	}
	public function setNomeTipoPlano($nomeTipoPlano) {
		$this->nomeTipoPlano = $nomeTipoPlano;
		return $this;
	}
	public function getQtdAlbumTipoPlano() {
		return $this->qtdAlbumTipoPlano;
	}
	public function setQtdAlbumTipoPlano($qtdAlbumTipoPlano) {
		$this->qtdAlbumTipoPlano = $qtdAlbumTipoPlano;
		return $this;
	}
	public function getQtdFotoTipoPlano() {
		return $this->qtdFotoTipoPlano;
	}
	public function setQtdFotoTipoPlano($qtdFotoTipoPlano) {
		$this->qtdFotoTipoPlano = $qtdFotoTipoPlano;
		return $this;
	}
	
    
	
	
    
    


}
