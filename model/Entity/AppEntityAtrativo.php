<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppEntityAtrativo
 *
 * @ORM\Table(name="atrativo", indexes={@ORM\Index(name="FK_ID_TIPOATRATIVO_ATRATIVO", columns={"ID_TIPOATRATIVO"}), @ORM\Index(name="FK_ID_ESTABELECIMENTO", columns={"ID_ESTABELECIMENTO"})})
 * @ORM\Entity
 */
class AppEntityAtrativo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ATRATIVO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAtrativo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_TIPOATRATIVO", type="integer", nullable=true)
     */
    private $idTipoAtrativo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ESTABELECIMENTO", type="integer", nullable=true)
     */
    private $idEstabelecimento;
    
    
	public function getIdAtrativo() {
		return $this->idAtrativo;
	}
	public function setIdAtrativo($idAtrativo) {
		$this->idAtrativo = $idAtrativo;
		return $this;
	}
	public function getIdTipoAtrativo() {
		return $this->idTipoAtrativo;
	}
	public function setIdTipoAtrativo($idTipoAtrativo) {
		$this->idTipoAtrativo = $idTipoAtrativo;
		return $this;
	}
	public function getIdEstabelecimento() {
		return $this->idEstabelecimento;
	}
	public function setIdEstabelecimento($idEstabelecimento) {
		$this->idEstabelecimento = $idEstabelecimento;
		return $this;
	}
	
    
   
	


    
    
    
}
