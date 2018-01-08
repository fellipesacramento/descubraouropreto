<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppEntityAlbum
 *
 * @ORM\Table(name="album", indexes={@ORM\Index(name="FK_ID_PLANO_ALBUM", columns={"ID_PLANO"})})
 * @ORM\Entity
 */
class AppEntityAlbum
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ALBUM", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAlbum;

    /**
     * @var string
     *
     * @ORM\Column(name="NOME_ALBUM", type="string", length=20, nullable=true)
     */
    private $nomeAlbum;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CRIACAO_ALBUM", type="datetime", nullable=true)
     */
    private $criacaoAlbum;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ALTERACAO_ALBUM", type="datetime", nullable=true)
     */
    private $alteracaoAlbum;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PLANO", type="integer", nullable=true)
     */
    private $idPlano;
    
    /**
     * @var string
     *
     * @ORM\Column(name="CAPA_ALBUM", type="string", length=20, nullable=true)
     */
    private $capaAlbum;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="BANNER_ALBUM", type="string", length=20, nullable=true)
     */
    private $bannerAlbum;
  	
	public function getIdAlbum() {
		return $this->idAlbum;
	}
	public function setIdAlbum($idAlbum) {
		$this->idAlbum = $idAlbum;
		return $this;
	}
	public function getNomeAlbum() {
		return $this->nomeAlbum;
	}
	public function setNomeAlbum($nomeAlbum) {
		$this->nomeAlbum = $nomeAlbum;
		return $this;
	}
	public function getCriacaoAlbum() {
		return $this->criacaoAlbum;
	}
	public function setCriacaoAlbum(\DateTime $criacaoAlbum) {
		$this->criacaoAlbum = $criacaoAlbum;
		return $this;
	}
	public function getAlteracaoAlbum() {
		return $this->alteracaoAlbum;
	}
	public function setAlteracaoAlbum(\DateTime $alteracaoAlbum) {
		$this->alteracaoAlbum = $alteracaoAlbum;
		return $this;
	}
	public function getIdPlano() {
		return $this->idPlano;
	}
	public function setIdPlano($idPlano) {
		$this->idPlano = $idPlano;
		return $this;
	}
	public function getCapaAlbum() {
		return $this->capaAlbum;
	}
	public function setCapaAlbum($capaAlbum) {
		$this->capaAlbum = $capaAlbum;
		return $this;
	}
	public function getBannerAlbum() {
		return $this->bannerAlbum;
	}
	public function setBannerAlbum($bannerAlbum) {
		$this->bannerAlbum = $bannerAlbum;
		return $this;
	}
	
	

    

}
