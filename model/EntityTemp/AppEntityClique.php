<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppEntityClique
 *
 * @ORM\Table(name="clique", indexes={@ORM\Index(name="FK_ID_ESTABELECIMENTO_CLIQUE", columns={"ID_ESTABELECIMENTO"})})
 * @ORM\Entity
 */
class AppEntityClique
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CLIQUE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClique;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_CLIQUE", type="datetime", nullable=true)
     */
    private $dataClique;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ESTABELECIMENTO", type="integer", nullable=true)
     */
    private $idEstabelecimento;


}
