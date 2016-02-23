<?php

namespace Corporativo\NutrirBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * Pessoa
 *
 * @ORM\Table(name="pessoa", uniqueConstraints={@ORM\UniqueConstraint(name="no_email_UNIQUE", columns={"no_email"})})
 * @ORM\Entity(repositoryClass="Corporativo\NutrirBoxBundle\Repository\PessoaRepository")
 */
class Pessoa implements AdvancedUserInterface {

    /**
     * @var integer
     *
     * @ORM\Column(name="co_pessoa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $coPessoa;

    /**
     * @var \Perfil
     *
     * @ORM\ManyToOne(targetEntity="Perfil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_perfil", referencedColumnName="co_perfil")
     * })
     */
    private $coPerfil;

    /**
     * @var string
     *
     * @ORM\Column(name="no_nome", type="string", length=100, nullable=true)
     */
    private $noNome;

    /**
     * @var string
     *
     * @ORM\Column(name="no_email", type="string", length=100, nullable=false)
     */
    private $noEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="no_senha", type="string", length=32, nullable=false)
     */
    private $noSenha;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_cpf", type="string", length=11, nullable=true)
     */
    private $nuCpf;

    /**
     * @var string
     *
     * @ORM\Column(name="tp_sexo", type="string", length=1, nullable=true)
     */
    private $tpSexo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_nascimento", type="date", nullable=true)
     */
    private $dtNascimento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=true)
     */
    private $dtCadastro;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_telefone", type="string", length=11, nullable=true)
     */
    private $nuTelefone;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_celular", type="string", length=11, nullable=true)
     */
    private $nuCelular;

    /**
     * @var string
     *
     * @ORM\Column(name="no_salt", type="string", length=32, nullable=true)
     */
    private $noSalt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_ativo", type="boolean", nullable=false)
     */
    private $isAtivo;

    /**
     * Set coPessoa
     *
     * @param integer $coPessoa
     * @return Pessoa
     */
    public function setCoPessoa($coPessoa) {
        $this->coPessoa = $coPessoa;

        return $this;
    }

    /**
     * Get coPessoa
     *
     * @return integer 
     */
    public function getCoPessoa() {
        return $this->coPessoa;
    }

    /**
     * Set coPerfil
     *
     * @param \Corporativo\NutrirBoxBundle\Entity\Perfil $coPerfil
     * @return Pessoa
     */
    public function setCoPerfil(\Corporativo\NutrirBoxBundle\Entity\Perfil $coPerfil = null) {
        $this->coPerfil = $coPerfil;
        return $this;
    }

    /**
     * Get coPerfil
     *
     * @return \Corporativo\NutrirBoxBundle\Entity\Perfil 
     */
    public function getCoPerfil() {
        return $this->coPerfil;
    }

    /**
     * Set noNome
     *
     * @param string $noNome
     * @return Pessoa
     */
    public function setNoNome($noNome) {
        $this->noNome = $noNome;

        return $this;
    }

    /**
     * Get noNome
     *
     * @return string 
     */
    public function getNoNome() {
        return $this->noNome;
    }

    /**
     * Set noEmail
     *
     * @param string $noEmail
     * @return Pessoa
     */
    public function setNoEmail($noEmail) {
        $this->noEmail = $noEmail;

        return $this;
    }

    /**
     * Get noEmail
     *
     * @return string 
     */
    public function getNoEmail() {
        return $this->noEmail;
    }

    /**
     * Set noSenha
     *
     * @param string $noSenha
     * @return Pessoa
     */
    public function setNoSenha($noSenha) {
        $this->noSenha = $noSenha;

        return $this;
    }

    /**
     * Get noSenha
     *
     * @return string 
     */
    public function getNoSenha() {
        return $this->noSenha;
    }

    /**
     * Set nuCpf
     *
     * @param string $nuCpf
     * @return Pessoa
     */
    public function setNuCpf($nuCpf) {
        $this->nuCpf = $nuCpf;

        return $this;
    }

    /**
     * Get nuCpf
     *
     * @return string 
     */
    public function getNuCpf() {
        return $this->nuCpf;
    }

    /**
     * Set tpSexo
     *
     * @param string $tpSexo
     * @return Pessoa
     */
    public function setTpSexo($tpSexo) {
        $this->tpSexo = $tpSexo;

        return $this;
    }

    /**
     * Get tpSexo
     *
     * @return string 
     */
    public function getTpSexo() {
        return $this->tpSexo;
    }

    /**
     * Set dtNascimento
     *
     * @param \DateTime $dtNascimento
     * @return Pessoa
     */
    public function setDtNascimento($dtNascimento) {
        $this->dtNascimento = $dtNascimento;

        return $this;
    }

    /**
     * Get dtNascimento
     *
     * @return \DateTime 
     */
    public function getDtNascimento() {
        return $this->dtNascimento;
    }

    /**
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     * @return Pessoa
     */
    public function setDtCadastro($dtCadastro) {
        $this->dtCadastro = $dtCadastro;

        return $this;
    }

    /**
     * Get dtCadastro
     *
     * @return \DateTime 
     */
    public function getDtCadastro() {
        return $this->dtCadastro;
    }

    /**
     * Set nuTelefone
     *
     * @param string $nuTelefone
     * @return Pessoa
     */
    public function setNuTelefone($nuTelefone) {
        $this->nuTelefone = $nuTelefone;

        return $this;
    }

    /**
     * Get nuTelefone
     *
     * @return string 
     */
    public function getNuTelefone() {
        return $this->nuTelefone;
    }

    /**
     * Set nuCelular
     *
     * @param string $nuCelular
     * @return Pessoa
     */
    public function setNuCelular($nuCelular) {
        $this->nuCelular = $nuCelular;

        return $this;
    }

    /**
     * Get nuCelular
     *
     * @return string 
     */
    public function getNuCelular() {
        return $this->nuCelular;
    }

    /**
     * Set noSalt
     *
     * @param string $noSalt
     * @return Pessoa
     */
    public function setNoSalt($noSalt) {
        $this->noSalt = $noSalt;

        return $this;
    }

    /**
     * Get noSalt
     *
     * @return string 
     */
    public function getNoSalt() {
        return $this->noSalt;
    }

    /**
     * Set isAtivo
     *
     * @param boolean $isAtivo
     * @return Pessoa
     */
    public function setIsAtivo($isAtivo) {
        $this->isAtivo = $isAtivo;

        return $this;
    }

    /**
     * Get isAtivo
     *
     * @return boolean 
     */
    public function getIsAtivo() {
        return $this->isAtivo;
    }

    public function eraseCredentials() {
        
    }

    public function getPassword() {
        return $this->noSenha;
    }

    public function getRoles() {
        return array($this->getCoPerfil()->getNoNome());
    }

    public function getSalt() {
        return $this->noSalt;
    }

    public function getUsername() {
        return $this->noEmail;
    }

    public function equals(AdvancedUserInterface $pessoa) {
        return $this->getNoEmail() == $pessoa->getUsername();
    }

    public function isAccountNonExpired() {
        return TRUE;
    }

    public function isAccountNonLocked() {
        return TRUE;
    }

    public function isCredentialsNonExpired() {
        return TRUE;
    }

    public function isEnabled() {
        return $this->isAtivo;
    }

}
