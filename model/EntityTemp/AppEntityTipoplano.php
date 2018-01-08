<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppEntityTipoplano
 *
 * @ORM\Table(name="tipoplano")
 * @ORM\Entity
 */
class AppEntityTipoplano
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_TIPOPLANO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoplano;

    /**
     * @var string
     *
     * @ORM\Column(name="NOME_TIPOPLANO", type="string", length=20, nullable=true)
     */
    private $nomeTipoplano;

    /**
     * @var string
     *
     * @ORM\Column(name="QTDALBUM_TIPOPLANO", type="string", length=20, nullable=true)
     */
    private $qtdalbumTipoplano;

    /**
     * @var string
     *
     * @ORM\Column(name="QTDFOTO_TIPOPLANO", type="string", length=20, nullable=true)
     */
    private $qtdfotoTipoplano;


}
