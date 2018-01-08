<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppEntityEstabelecimento
 *
 * @ORM\Table(name="estabelecimento", indexes={@ORM\Index(name="FK_ID_CATEGORIA_ESTABELECIMENTO", columns={"ID_CATEGORIA"}), @ORM\Index(name="FK_ID_PLANO_ESTABELECIMENTO", columns={"ID_PLANO"}), @ORM\Index(name="FK_ID_USUARIO_ESTABELECIMENTO", columns={"ID_USUARIO"})})
 * @ORM\Entity
 */
class AppEntityEstabelecimento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ESTABELECIMENTO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEstabelecimento;

    /**
     * @var string
     *
     * @ORM\Column(name="SLOGAN_ESTABELECIMENTO", type="string", length=100, nullable=true)
     */
    private $sloganEstabelecimento;

    /**
     * @var string
     *
     * @ORM\Column(name="RAZAOSOCIAL_ESTABELECIMENTO", type="string", length=100, nullable=true)
     */
    private $razaoSocialEstabelecimento;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRICAO_ESTABELECIMENTO", type="text", length=16777215, nullable=true)
     */
    private $descricaoEstabelecimento;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMEFANTASIA_ESTABELECIMENTO", type="string", length=100, nullable=true)
     */
    private $nomeFantasiaEstabelecimento;

    /**
     * @var string
     *
     * @ORM\Column(name="CNPJ_ESTABELECIMENTO", type="string", length=11, nullable=true)
     */
    private $cnpjEstabelecimento;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CATEGORIA", type="integer", nullable=true)
     */
    private $idCategoria;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PLANO", type="integer", nullable=true)
     */
    private $idPlano;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_USUARIO", type="integer", nullable=true)
     */
    private $idUsuario;
    
    /**
     * @var string
     *
     * @ORM\Column(name="CAPA_ESTABELECIMENTO", type="string", length=80, nullable=true)
     */
    private $capaEstabelecimento;
    
    
	public function getIdEstabelecimento() {
		return $this->idEstabelecimento;
	}
	public function setIdEstabelecimento($idEstabelecimento) {
		$this->idEstabelecimento = $idEstabelecimento;
		return $this;
	}
	public function getSloganEstabelecimento() {
		return $this->sloganEstabelecimento;
	}
	public function setSloganEstabelecimento($sloganEstabelecimento) {
		$this->sloganEstabelecimento = $sloganEstabelecimento;
		return $this;
	}
	public function getRazaoSocialEstabelecimento() {
		return $this->razaoSocialEstabelecimento;
	}
	public function setRazaoSocialEstabelecimento($razaoSocialEstabelecimento) {
		$this->razaoSocialEstabelecimento = $razaoSocialEstabelecimento;
		return $this;
	}
	public function getDescricaoEstabelecimento() {
		return $this->descricaoEstabelecimento;
	}
	public function setDescricaoEstabelecimento($descricaoEstabelecimento) {
		$this->descricaoEstabelecimento = $descricaoEstabelecimento;
		return $this;
	}
	public function getNomeFantasiaEstabelecimento() {
		return $this->nomeFantasiaEstabelecimento;
	}
	public function setNomeFantasiaEstabelecimento($nomeFantasiaEstabelecimento) {
		$this->nomeFantasiaEstabelecimento = $nomeFantasiaEstabelecimento;
		return $this;
	}
	public function getCnpjEstabelecimento() {
		return $this->cnpjEstabelecimento;
	}
	public function setCnpjEstabelecimento($cnpjEstabelecimento) {
		$this->cnpjEstabelecimento = $cnpjEstabelecimento;
		return $this;
	}
	public function getIdCategoria() {
		return $this->idCategoria;
	}
	public function setIdCategoria($idCategoria) {
		$this->idCategoria = $idCategoria;
		return $this;
	}
	public function getIdPlano() {
		return $this->idPlano;
	}
	public function setIdPlano($idPlano) {
		$this->idPlano = $idPlano;
		return $this;
	}
	public function getIdUsuario() {
		return $this->idUsuario;
	}
	public function setIdUsuario($idUsuario) {
		$this->idUsuario = $idUsuario;
		return $this;
	}
	public function getCapaEstabelecimento() {
		return $this->capaEstabelecimento;
	}
	public function setCapaEstabelecimento($capaEstabelecimento) {
		$this->capaEstabelecimento = $capaEstabelecimento;
		return $this;
	}
	
	

    

}
