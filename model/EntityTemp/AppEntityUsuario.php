<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppEntityUsuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class AppEntityUsuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_USUARIO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="CPF_USUARIO", type="string", length=20, nullable=true)
     */
    private $cpfUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="NOME_USUARIO", type="string", length=100, nullable=true)
     */
    private $nomeUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL_USUARIO", type="string", length=100, nullable=true)
     */
    private $emailUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="FIXO_USUARIO", type="string", length=20, nullable=true)
     */
    private $fixoUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="CELULAR_USUARIO", type="string", length=20, nullable=true)
     */
    private $celularUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="ENDERECO_USUARIO", type="string", length=20, nullable=true)
     */
    private $enderecoUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="LOGIN_USUARIO", type="string", length=20, nullable=true)
     */
    private $loginUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="SENHA_USUARIO", type="string", length=20, nullable=true)
     */
    private $senhaUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="PERFIL_USUARIO", type="string", length=1, nullable=true)
     */
    private $perfilUsuario;


}
