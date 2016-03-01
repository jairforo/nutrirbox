<?php

namespace Corporativo\NutrirBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pedido
 *
 * @ORM\Table(name="pedido", uniqueConstraints={@ORM\UniqueConstraint(name="nu_referencia_UNIQUE", columns={"nu_referencia"})}, indexes={@ORM\Index(name="fk_pedido_transacao1_idx", columns={"co_transacao"}), @ORM\Index(name="fk_pedido_pessoa1_idx", columns={"co_pessoa"})})
 * @ORM\Entity
 */
class Pedido
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_pedido", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $coPedido;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_referencia", type="string", length=45, nullable=false)
     */
    private $nuReferencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=false)
     */
    private $dtCadastro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_ativo", type="boolean", nullable=false)
     */
    private $isAtivo;

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
     * @var \Transacao
     *
     * @ORM\ManyToOne(targetEntity="Transacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_transacao", referencedColumnName="co_transacao")
     * })
     */
    private $coTransacao;



    /**
     * Get coPedido
     *
     * @return integer 
     */
    public function getCoPedido()
    {
        return $this->coPedido;
    }

    /**
     * Set nuReferencia
     *
     * @param string $nuReferencia
     * @return Pedido
     */
    public function setNuReferencia($nuReferencia)
    {
        $this->nuReferencia = $nuReferencia;

        return $this;
    }

    /**
     * Get nuReferencia
     *
     * @return string 
     */
    public function getNuReferencia()
    {
        return $this->nuReferencia;
    }

    /**
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     * @return Pedido
     */
    public function setDtCadastro($dtCadastro)
    {
        $this->dtCadastro = $dtCadastro;

        return $this;
    }

    /**
     * Get dtCadastro
     *
     * @return \DateTime 
     */
    public function getDtCadastro()
    {
        return $this->dtCadastro;
    }

    /**
     * Set isAtivo
     *
     * @param boolean $isAtivo
     * @return Pedido
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

    /**
     * Set coPessoa
     *
     * @param \Corporativo\NutrirBoxBundle\Entity\Pessoa $coPessoa
     * @return Pedido
     */
    public function setCoPessoa(\Corporativo\NutrirBoxBundle\Entity\Pessoa $coPessoa = null)
    {
        $this->coPessoa = $coPessoa;

        return $this;
    }

    /**
     * Get coPessoa
     *
     * @return \Corporativo\NutrirBoxBundle\Entity\Pessoa 
     */
    public function getCoPessoa()
    {
        return $this->coPessoa;
    }

    /**
     * Set coTransacao
     *
     * @param \Corporativo\NutrirBoxBundle\Entity\Transacao $coTransacao
     * @return Pedido
     */
    public function setCoTransacao(\Corporativo\NutrirBoxBundle\Entity\Transacao $coTransacao = null)
    {
        $this->coTransacao = $coTransacao;

        return $this;
    }

    /**
     * Get coTransacao
     *
     * @return \Corporativo\NutrirBoxBundle\Entity\Transacao 
     */
    public function getCoTransacao()
    {
        return $this->coTransacao;
    }
}
