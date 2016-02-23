<?php

namespace Corporativo\NutrirBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Endereco
 *
 * @ORM\Table(name="endereco")
 * @ORM\Entity
 */
class Endereco
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_endereco", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $coEndereco;

    /**
     * @var \Pessoa
     *
     * @ORM\ManyToOne(targetEntity="Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_pessoa", referencedColumnName="co_pessoa")
     * })
     */
    private $coPessoa;

    /**
     * @var string
     *
     * @ORM\Column(name="no_logradouro", type="string", length=150, nullable=false)
     */
    private $noLogradouro;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_numero", type="string", length=45, nullable=true)
     */
    private $nuNumero;

    /**
     * @var string
     *
     * @ORM\Column(name="no_bairro", type="string", length=50, nullable=true)
     */
    private $noBairro;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_cep", type="string", length=45, nullable=true)
     */
    private $nuCep;

    /**
     * @var string
     *
     * @ORM\Column(name="no_cidade", type="string", length=100, nullable=true)
     */
    private $noCidade;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_ativo", type="boolean", nullable=true)
     */
    private $isAtivo;



    /**
     * Set coEndereco
     *
     * @param integer $coEndereco
     * @return Endereco
     */
    public function setCoEndereco($coEndereco)
    {
        $this->coEndereco = $coEndereco;

        return $this;
    }

    /**
     * Get coEndereco
     *
     * @return integer 
     */
    public function getCoEndereco()
    {
        return $this->coEndereco;
    }
    
    /**
     * Get Pessoa
     * @return type
     */
    function getCoPessoa() {
        return $this->coPessoa;
    }

    /**
     * Set Pessoa
     * @param \Pessoa $coPessoa
     * @return \Corporativo\NutrirBoxBundle\Entity\Endereco
     */
    function setCoPessoa(\Pessoa $coPessoa) {
        $this->coPessoa = $coPessoa;
        return $this;
    }

    /**
     * Set noLogradouro
     *
     * @param string $noLogradouro
     * @return Endereco
     */
    public function setNoLogradouro($noLogradouro)
    {
        $this->noLogradouro = $noLogradouro;

        return $this;
    }

    /**
     * Get noLogradouro
     *
     * @return string 
     */
    public function getNoLogradouro()
    {
        return $this->noLogradouro;
    }

    /**
     * Set nuNumero
     *
     * @param string $nuNumero
     * @return Endereco
     */
    public function setNuNumero($nuNumero)
    {
        $this->nuNumero = $nuNumero;

        return $this;
    }

    /**
     * Get nuNumero
     *
     * @return string 
     */
    public function getNuNumero()
    {
        return $this->nuNumero;
    }

    /**
     * Set noBairro
     *
     * @param string $noBairro
     * @return Endereco
     */
    public function setNoBairro($noBairro)
    {
        $this->noBairro = $noBairro;

        return $this;
    }

    /**
     * Get noBairro
     *
     * @return string 
     */
    public function getNoBairro()
    {
        return $this->noBairro;
    }

    /**
     * Set nuCep
     *
     * @param string $nuCep
     * @return Endereco
     */
    public function setNuCep($nuCep)
    {
        $this->nuCep = $nuCep;

        return $this;
    }

    /**
     * Get nuCep
     *
     * @return string 
     */
    public function getNuCep()
    {
        return $this->nuCep;
    }

    /**
     * Set noCidade
     *
     * @param string $noCidade
     * @return Endereco
     */
    public function setNoCidade($noCidade)
    {
        $this->noCidade = $noCidade;

        return $this;
    }

    /**
     * Get noCidade
     *
     * @return string 
     */
    public function getNoCidade()
    {
        return $this->noCidade;
    }

    /**
     * Set isAtivo
     *
     * @param boolean $isAtivo
     * @return Endereco
     */
    public function setIsAtivo($isAtivo)
    {
        $this->isAtivo = $isAtivo;

        return $this;
    }

    /**
     * Get isAtivo
     *
     * @return boolean 
     */
    public function getIsAtivo()
    {
        return $this->isAtivo;
    }
}
