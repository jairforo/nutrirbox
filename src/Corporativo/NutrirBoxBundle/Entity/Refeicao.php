<?php

namespace Corporativo\NutrirBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Refeicao
 *
 * @ORM\Table(name="refeicao", indexes={@ORM\Index(name="fk_refeicao_prato1_idx", columns={"prato_co_prato"}), @ORM\Index(name="fk_refeicao_pedido1_idx", columns={"co_pedido"})})
 * @ORM\Entity
 */
class Refeicao
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_refeicao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $coRefeicao;

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
     * @var string
     *
     * @ORM\Column(name="de_observacao", type="text", nullable=true)
     */
    private $deObservacao;

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
     * @var \Prato
     *
     * @ORM\ManyToOne(targetEntity="Prato")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prato_co_prato", referencedColumnName="co_prato")
     * })
     */
    private $pratoCoPrato;



    /**
     * Get coRefeicao
     *
     * @return integer 
     */
    public function getCoRefeicao()
    {
        return $this->coRefeicao;
    }

    /**
     * Set isEntregue
     *
     * @param boolean $isEntregue
     * @return Refeicao
     */
    public function setIsEntregue($isEntregue)
    {
        $this->isEntregue = $isEntregue;

        return $this;
    }

    /**
     * Get isEntregue
     *
     * @return boolean 
     */
    public function getIsEntregue()
    {
        return $this->isEntregue;
    }

    /**
     * Set dtEntrega
     *
     * @param \DateTime $dtEntrega
     * @return Refeicao
     */
    public function setDtEntrega($dtEntrega)
    {
        $this->dtEntrega = $dtEntrega;

        return $this;
    }

    /**
     * Get dtEntrega
     *
     * @return \DateTime 
     */
    public function getDtEntrega()
    {
        return $this->dtEntrega;
    }

    /**
     * Set isAtivo
     *
     * @param boolean $isAtivo
     * @return Refeicao
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
     * Set deObservacao
     *
     * @param string $deObservacao
     * @return Refeicao
     */
    public function setDeObservacao($deObservacao)
    {
        $this->deObservacao = $deObservacao;

        return $this;
    }

    /**
     * Get deObservacao
     *
     * @return string 
     */
    public function getDeObservacao()
    {
        return $this->deObservacao;
    }

    /**
     * Set coPedido
     *
     * @param \Corporativo\NutrirBoxBundle\Entity\Pedido $coPedido
     * @return Refeicao
     */
    public function setCoPedido(\Corporativo\NutrirBoxBundle\Entity\Pedido $coPedido = null)
    {
        $this->coPedido = $coPedido;

        return $this;
    }

    /**
     * Get coPedido
     *
     * @return \Corporativo\NutrirBoxBundle\Entity\Pedido 
     */
    public function getCoPedido()
    {
        return $this->coPedido;
    }

    /**
     * Set pratoCoPrato
     *
     * @param \Corporativo\NutrirBoxBundle\Entity\Prato $pratoCoPrato
     * @return Refeicao
     */
    public function setPratoCoPrato(\Corporativo\NutrirBoxBundle\Entity\Prato $pratoCoPrato = null)
    {
        $this->pratoCoPrato = $pratoCoPrato;

        return $this;
    }

    /**
     * Get pratoCoPrato
     *
     * @return \Corporativo\NutrirBoxBundle\Entity\Prato 
     */
    public function getPratoCoPrato()
    {
        return $this->pratoCoPrato;
    }
}
