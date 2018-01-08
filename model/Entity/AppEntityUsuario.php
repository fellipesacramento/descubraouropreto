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
    
	public function getIdUsuario() {
		return $this->idUsuario;
	}
	public function setIdUsuario($idUsuario) {
		$this->idUsuario = $idUsuario;
		return $this;
	}
	public function getCpfUsuario() {
		return $this->cpfUsuario;
	}
	public function setCpfUsuario($cpfUsuario) {
		$this->cpfUsuario = $cpfUsuario;
		return $this;
	}
	public function getNomeUsuario() {
		return $this->nomeUsuario;
	}
	public function setNomeUsuario($nomeUsuario) {
		$this->nomeUsuario = $nomeUsuario;
		return $this;
	}
	public function getEmailUsuario() {
		return $this->emailUsuario;
	}
	public function setEmailUsuario($emailUsuario) {
		$this->emailUsuario = $emailUsuario;
		return $this;
	}
	public function getFixoUsuario() {
		return $this->fixoUsuario;
	}
	public function setFixoUsuario($fixoUsuario) {
		$this->fixoUsuario = $fixoUsuario;
		return $this;
	}
	public function getCelularUsuario() {
		return $this->celularUsuario;
	}
	public function setCelularUsuario($celularUsuario) {
		$this->celularUsuario = $celularUsuario;
		return $this;
	}
	public function getEnderecoUsuario() {
		return $this->enderecoUsuario;
	}
	public function setEnderecoUsuario($enderecoUsuario) {
		$this->enderecoUsuario = $enderecoUsuario;
		return $this;
	}
	public function getLoginUsuario() {
		return $this->loginUsuario;
	}
	public function setLoginUsuario($loginUsuario) {
		$this->loginUsuario = $loginUsuario;
		return $this;
	}
	public function getSenhaUsuario() {
		return $this->senhaUsuario;
	}
	public function setSenhaUsuario($senhaUsuario) {
		$this->senhaUsuario = $senhaUsuario;
		return $this;
	}
	public function getPerfilUsuario() {
		return $this->perfilUsuario;
	}
	public function setPerfilUsuario($perfilUsuario) {
		$this->perfilUsuario = $perfilUsuario;
		return $this;
        }
	


    
    
}
