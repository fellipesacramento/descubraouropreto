<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppEntityTipoatrativo
 *
 * @ORM\Table(name="tipoatrativo")
 * @ORM\Entity
 */
class AppEntityTipoatrativo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_TIPOATRATIVO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoatrativo;

    /**
     * @var string
     *
     * @ORM\Column(name="NOME_TIPOATRATIVO", type="string", length=80, nullable=true)
     */
    private $nomeTipoatrativo;
	
	public function getIdTipoatrativo() {
		return $this->idTipoatrativo;
	}
	public function setIdTipoatrativo($idTipoatrativo) {
		$this->idTipoatrativo = $idTipoatrativo;
		return $this;
	}
	public function getNomeTipoatrativo() {
		return $this->nomeTipoatrativo;
	}
	public function setNomeTipoatrativo($nomeTipoatrativo) {
		$this->nomeTipoatrativo = $nomeTipoatrativo;
		return $this;
	}
	


}
