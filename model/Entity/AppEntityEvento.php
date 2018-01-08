<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppEntityEvento
 *
 * @ORM\Table(name="evento", indexes={@ORM\Index(name="FK_ID_USUARIO_EVENTO", columns={"ID_USUARIO"})})
 * @ORM\Entity
 */
class AppEntityEvento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_EVENTOS", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEventos;

    /**
     * @var string
     *
     * @ORM\Column(name="NOME_EVENTO", type="string", length=20, nullable=true)
     */
    private $nomeEvento;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_EVENTO", type="string", length=20, nullable=true)
     */
    private $dataEvento;

    /**
     * @var string
     *
     * @ORM\Column(name="HORA_EVENTO", type="string", length=20, nullable=true)
     */
    private $horaEvento;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRICAO_EVENTO", type="string", length=20, nullable=true)
     */
    private $descricaoEvento;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_USUARIO", type="integer", nullable=true)
     */
    private $idUsuario;
    
	public function getIdEventos() {
		return $this->idEventos;
	}
	public function setIdEventos($idEventos) {
		$this->idEventos = $idEventos;
		return $this;
	}
	public function getNomeEvento() {
		return $this->nomeEvento;
	}
	public function setNomeEvento($nomeEvento) {
		$this->nomeEvento = $nomeEvento;
		return $this;
	}
	public function getDataEvento() {
		return $this->dataEvento;
	}
	public function setDataEvento($dataEvento) {
		$this->dataEvento = $dataEvento;
		return $this;
	}
	public function getHoraEvento() {
		return $this->horaEvento;
	}
	public function setHoraEvento($horaEvento) {
		$this->horaEvento = $horaEvento;
		return $this;
	}
	public function getDescricaoEvento() {
		return $this->descricaoEvento;
	}
	public function setDescricaoEvento($descricaoEvento) {
		$this->descricaoEvento = $descricaoEvento;
		return $this;
	}
	public function getIdUsuario() {
		return $this->idUsuario;
	}
	public function setIdUsuario($idUsuario) {
		$this->idUsuario = $idUsuario;
		return $this;
	}
	


    
}
