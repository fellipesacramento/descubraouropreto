<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppEntityFoto
 *
 * @ORM\Table(name="foto", indexes={@ORM\Index(name="FK_ID_ALBUM_FOTO", columns={"ID_ALBUM"})})
 * @ORM\Entity
 */
class AppEntityFoto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_FOTO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFoto;

    /**
     * @var string
     *
     * @ORM\Column(name="NOME_FOTO", type="string", length=20, nullable=true)
     */
    private $nomeFoto;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ALBUM", type="integer", nullable=true)
     */
    private $idAlbum;


}
