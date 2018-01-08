<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppEntityPlano
 *
 * @ORM\Table(name="plano", indexes={@ORM\Index(name="FK_ID_USUARIO_PLANO", columns={"ID_USUARIO"}), @ORM\Index(name="FK_ID_TIPOPLANO_PLANO", columns={"ID_TIPOPLANO"})})
 * @ORM\Entity
 */
class AppEntityPlano
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PLANO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPlano;

    /**
     * @var string
     *
     * @ORM\Column(name="COD_PLANO", type="string", length=20, nullable=true)
     */
    private $codPlano;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_PLANO", type="date", nullable=true)
     */
    private $dataPlano;

    /**
     * @var integer
     *
     * @ORM\Column(name="STATUS_PLANO", type="integer", nullable=true)
     */
    private $statusPlano;

    /**
     * @var string
     *
     * @ORM\Column(name="QTDALBUMRESTANTE_PLANO", type="string", length=20, nullable=true)
     */
    private $qtdAlbumRestantePlano;

    /**
     * @var string
     *
     * @ORM\Column(name="CNPJ_PLANO", type="string", length=11, nullable=true)
     */
    private $cnpjPlano;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_USUARIO", type="integer", nullable=true)
     */
    private $idUsuario;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_TIPOPLANO", type="integer", nullable=true)
     */
    private $idTipoPlano;
    
	public function getIdPlano() {
		return $this->idPlano;
	}
	public function setIdPlano($idPlano) {
		$this->idPlano = $idPlano;
		return $this;
	}
	public function getCodPlano() {
		return $this->codPlano;
	}
	public function setCodPlano($codPlano) {
		$this->codPlano = $codPlano;
		return $this;
	}
	public function getDataPlano() {
		return $this->dataPlano;
	}
	public function setDataPlano(\DateTime $dataPlano) {
		$this->dataPlano = $dataPlano;
		return $this;
	}
	public function getStatusPlano() {
		return $this->statusPlano;
	}
	public function setStatusPlano($statusPlano) {
		$this->statusPlano = $statusPlano;
		return $this;
	}
	public function getQtdAlbumRestantePlano() {
		return $this->qtdAlbumRestantePlano;
	}
	public function setQtdAlbumRestantePlano($qtdAlbumRestantePlano) {
		$this->qtdAlbumRestantePlano = $qtdAlbumRestantePlano;
		return $this;
	}
	public function getCnpjPlano() {
		return $this->cnpjPlano;
	}
	public function setCnpjPlano($cnpjPlano) {
		$this->cnpjPlano = $cnpjPlano;
		return $this;
	}
	public function getIdUsuario() {
		return $this->idUsuario;
	}
	public function setIdUsuario($idUsuario) {
		$this->idUsuario = $idUsuario;
		return $this;
	}
	public function getIdTipoPlano() {
		return $this->idTipoPlano;
	}
	public function setIdTipoPlano($idTipoPlano) {
		$this->idTipoPlano = $idTipoPlano;
		return $this;
	}
	
    
    


}
