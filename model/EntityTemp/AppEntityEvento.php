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


}
