<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppEntityTipoAtrativo
 *
 * @ORM\Table(name="tipoatrativo")
 * @ORM\Entity
 */
class AppEntityTipoAtrativo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_TIPOATRATIVO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoAtrativo;

    /**
     * @var string
     *
     * @ORM\Column(name="NOME_TIPOATRATIVO", type="string", length=80, nullable=true)
     */
    private $nomeTipoAtrativo;
    
	public function getIdTipoAtrativo() {
		return $this->idTipoAtrativo;
	}
	public function setIdTipoAtrativo($idTipoAtrativo) {
		$this->idTipoAtrativo = $idTipoAtrativo;
		return $this;
	}
	public function getNomeTipoAtrativo() {
		return $this->nomeTipoAtrativo;
	}
	public function setNomeTipoAtrativo($nomeTipoAtrativo) {
		$this->nomeTipoAtrativo = $nomeTipoAtrativo;
		return $this;
	}
	
    
    


}
