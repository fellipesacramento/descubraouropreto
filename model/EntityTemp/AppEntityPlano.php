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
    private $qtdalbumrestantePlano;

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
    private $idTipoplano;


}
