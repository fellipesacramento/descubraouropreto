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
    
    /**
     * @var string
     *
     * @ORM\Column(name="ENDERECO_FOTO", type="string", nullable=true)
     */
    private $enderecoFoto;   
    
    
	public function getIdFoto() {
		return $this->idFoto;
	}
	public function setIdFoto($idFoto) {
		$this->idFoto = $idFoto;
		return $this;
	}
	public function getNomeFoto() {
		return $this->nomeFoto;
	}
	public function setNomeFoto($nomeFoto) {
		$this->nomeFoto = $nomeFoto;
		return $this;
	}
	public function getIdAlbum() {
		return $this->idAlbum;
	}
	public function setIdAlbum($idAlbum) {
		$this->idAlbum = $idAlbum;
		return $this;
	}
	public function getEnderecoFoto() {
		return $this->enderecoFoto;
	}
	public function setEnderecoFoto($enderecoFoto) {
		$this->enderecoFoto = $enderecoFoto;
		return $this;
	}
	
	
    
    


}
