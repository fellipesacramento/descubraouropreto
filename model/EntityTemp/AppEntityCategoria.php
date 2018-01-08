<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppEntityCategoria
 *
 * @ORM\Table(name="categoria")
 * @ORM\Entity
 */
class AppEntityCategoria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CATEGORIA", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="NOME_CATEGORIA", type="string", length=40, nullable=true)
     */
    private $nomeCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS_CATEGORIA", type="string", length=1, nullable=true)
     */
    private $statusCategoria;


}
