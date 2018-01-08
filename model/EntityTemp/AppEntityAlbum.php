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


}
