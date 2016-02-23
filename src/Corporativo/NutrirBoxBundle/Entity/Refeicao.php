<?php

namespace Corporativo\NutrirBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Refeicao
 *
 * @ORM\Table(name="refeicao")
 * @ORM\Entity
 */
class Refeicao {

    /**
     * @var integer
     *
     * @ORM\Column(name="co_refeicao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $coRefeicao;

    /**
     * @var \Pedido
     *
     * @ORM\ManyToOne(targetEntity="Pedido")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_pedido", referencedColumnName="co_pedido")
     * })
     */
    private $coPedido;

    /**
     * @var string
     *
     * @ORM\Column(name="de_observacao", type="text", nullable=true)
     */
    private $deObservacao;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_entregue", type="boolean", nullable=false)
     */
    private $isEntregue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_entrega", type="datetime", nullable=false)
     */
    private $dtEntrega;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_ativo", type="boolean", nullable=false)
     */
    private $isAtivo;

    /**
     * Set coRefeicao
     *
     * @param integer $coRefeicao
     * @return Refeicao
     */
    public function setCoRefeicao($coRefeicao) {
        $this->coRefeicao = $coRefeicao;

        return $this;
    }

    /**
     * Get coRefeicao
     *
     * @return integer 
     */
    public function getCoRefeicao() {
        return $this->coRefeicao;
    }

    /**
     * 
     * @return type
     */
    function getCoPedido() {
        return $this->coPedido;
    }

    /**
     * 
     * @param \Pedido $coPedido
     * @return \Corporativo\NutrirBoxBundle\Entity\Refeicao
     */
    function setCoPedido(\Pedido $coPedido) {
        $this->coPedido = $coPedido;
        return $this;
    }

    /**
     * Set deObservacao
     *
     * @param string $deObservacao
     * @return Refeicao
     */
    public function setDeObservacao($deObservacao) {
        $this->deObservacao = $deObservacao;

        return $this;
    }

    /**
     * Get deObservacao
     *
     * @return string 
     */
    public function getDeObservacao() {
        return $this->deObservacao;
    }

    /**
     * Set isEntregue
     *
     * @param boolean $isEntregue
     * @return Refeicao
     */
    public function setIsEntregue($isEntregue) {
        $this->isEntregue = $isEntregue;

        return $this;
    }

    /**
     * Get isEntregue
     *
     * @return boolean 
     */
    public function getIsEntregue() {
        return $this->isEntregue;
    }

    /**
     * Set dtEntrega
     *
     * @param \DateTime $dtEntrega
     * @return Refeicao
     */
    public function setDtEntrega($dtEntrega) {
        $this->dtEntrega = $dtEntrega;

        return $this;
    }

    /**
     * Get dtEntrega
     *
     * @return \DateTime 
     */
    public function getDtEntrega() {
        return $this->dtEntrega;
    }

    /**
     * Set isAtivo
     *
     * @param boolean $isAtivo
     * @return Refeicao
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
