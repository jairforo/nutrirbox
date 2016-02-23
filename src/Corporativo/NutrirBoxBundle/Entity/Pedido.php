<?php

namespace Corporativo\NutrirBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pedido
 *
 * @ORM\Table(name="pedido", uniqueConstraints={@ORM\UniqueConstraint(name="nu_referencia_UNIQUE", columns={"nu_referencia"})})
 * @ORM\Entity
 */
class Pedido {

    /**
     * @var integer
     *
     * @ORM\Column(name="co_pedido", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $coPedido;

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
     * Set coPedido
     *
     * @param integer $coPedido
     * @return Pedido
     */
    public function setCoPedido($coPedido) {
        $this->coPedido = $coPedido;

        return $this;
    }

    /**
     * Get coPedido
     *
     * @return integer 
     */
    public function getCoPedido() {
        return $this->coPedido;
    }

    /**
     * 
     * @param \Pessoa $coPessoa
     * @return \Corporativo\NutrirBoxBundle\Entity\Pedido
     */
    function setCoPessoa(\Pessoa $coPessoa) {
        $this->coPessoa = $coPessoa;
        return $this;
    }

    /**
     * 
     * @return type
     */
    function getCoPessoa() {
        return $this->coPessoa;
    }

    /**
     * 
     * @param \Transacao $coTransacao
     * @return \Corporativo\NutrirBoxBundle\Entity\Pedido
     */
    function setCoTransacao(\Transacao $coTransacao) {
        $this->coTransacao = $coTransacao;
        return $this;
    }

    /**
     * 
     * @return type
     */
    function getCoTransacao() {
        return $this->coTransacao;
    }

    /**
     * Set nuReferencia
     *
     * @param string $nuReferencia
     * @return Pedido
     */
    public function setNuReferencia($nuReferencia) {
        $this->nuReferencia = $nuReferencia;

        return $this;
    }

    /**
     * Get nuReferencia
     *
     * @return string 
     */
    public function getNuReferencia() {
        return $this->nuReferencia;
    }

    /**
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     * @return Pedido
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
     * Set isAtivo
     *
     * @param boolean $isAtivo
     * @return Pedido
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

}
