<?php

namespace Corporativo\NutrirBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefeicaoIngrediente
 *
 * @ORM\Table(name="refeicao_ingrediente")
 * @ORM\Entity
 */
class RefeicaoIngrediente {

    /**
     * @var integer
     *
     * @ORM\Column(name="co_refeicao_ingrediente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $coRefeicaoIngrediente;

    /**
     * @var \Refeicao
     *
     * @ORM\ManyToOne(targetEntity="Refeicao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_refeicao", referencedColumnName="co_refeicao")
     * })
     */
    private $coRefeicao;

    /**
     * @var \Ingrediente
     *
     * @ORM\ManyToOne(targetEntity="Ingrediente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_ingrediente", referencedColumnName="co_ingrediente")
     * })
     */
    private $coIngrediente;

    /**
     * @var float
     *
     * @ORM\Column(name="vl_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $vlValor;

    /**
     * Set coRefeicaoIngrediente
     *
     * @param integer $coRefeicaoIngrediente
     * @return RefeicaoIngrediente
     */
    public function setCoRefeicaoIngrediente($coRefeicaoIngrediente) {
        $this->coRefeicaoIngrediente = $coRefeicaoIngrediente;

        return $this;
    }

    /**
     * Get coRefeicaoIngrediente
     *
     * @return integer 
     */
    public function getCoRefeicaoIngrediente() {
        return $this->coRefeicaoIngrediente;
    }

    /**
     * 
     * @return type
     */
    function getCoRefeicao() {
        return $this->coRefeicao;
    }

    /**
     * 
     * @param \Refeicao $coRefeicao
     * @return \Corporativo\NutrirBoxBundle\Entity\RefeicaoIngrediente
     */
    function setCoRefeicao(\Refeicao $coRefeicao) {
        $this->coRefeicao = $coRefeicao;
        return $this;
    }

    /**
     * 
     * @return type
     */
    function getCoIngrediente() {
        return $this->coIngrediente;
    }

    /**
     * 
     * @param \Ingrediente $coIngrediente
     * @return \Corporativo\NutrirBoxBundle\Entity\RefeicaoIngrediente
     */
    function setCoIngrediente(\Ingrediente $coIngrediente) {
        $this->coIngrediente = $coIngrediente;
        return $this;
    }

    /**
     * Set vlValor
     *
     * @param float $vlValor
     * @return RefeicaoIngrediente
     */
    public function setVlValor($vlValor) {
        $this->vlValor = $vlValor;

        return $this;
    }

    /**
     * Get vlValor
     *
     * @return float 
     */
    public function getVlValor() {
        return $this->vlValor;
    }

}
