<?php

namespace Corporativo\NutrirBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingrediente
 *
 * @ORM\Table(name="ingrediente")
 * @ORM\Entity
 */
class Ingrediente {

    /**
     * @var integer
     *
     * @ORM\Column(name="co_ingrediente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $coIngrediente;

    /**
     * @var \TipoIngrediente
     *
     * @ORM\ManyToOne(targetEntity="TipoIngrediente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_tipo_ingrediente", referencedColumnName="co_tipo_ingrediente")
     * })
     */
    private $coTipoIngrediente;

    /**
     * @var \Ingrediente
     *
     * @ORM\ManyToOne(targetEntity="Ingrediente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_ingrediente_pai", referencedColumnName="co_ingrediente")
     * })
     */
    private $coIngredientePai;

    /**
     * @var string
     *
     * @ORM\Column(name="no_nome", type="string", length=100, nullable=false)
     */
    private $noNome;

    /**
     * @var string
     *
     * @ORM\Column(name="de_descricao", type="text", nullable=true)
     */
    private $deDescricao;

    /**
     * @var float
     *
     * @ORM\Column(name="vl_valor", type="float", precision=10, scale=0, nullable=true)
     */
    private $vlValor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_ativo", type="boolean", nullable=false)
     */
    private $isAtivo;

    /**
     * Set coIngrediente
     *
     * @param integer $coIngrediente
     * @return Ingrediente
     */
    public function setCoIngrediente($coIngrediente) {
        $this->coIngrediente = $coIngrediente;

        return $this;
    }

    /**
     * Get coIngrediente
     *
     * @return integer 
     */
    public function getCoIngrediente() {
        return $this->coIngrediente;
    }

    /**
     * 
     * @return type
     */
    function getCoTipoIngrediente() {
        return $this->coTipoIngrediente;
    }

    /**
     * 
     * @param \TipoIngrediente $coTipoIngrediente
     * @return \Corporativo\NutrirBoxBundle\Entity\Ingrediente
     */
    function setCoTipoIngrediente(\TipoIngrediente $coTipoIngrediente) {
        $this->coTipoIngrediente = $coTipoIngrediente;
        return $this;
    }

    /**
     * 
     * @return type
     */
    function getCoIngredientePai() {
        return $this->coIngredientePai;
    }

    /**
     * 
     * @param \Ingrediente $coIngredientePai
     * @return \Corporativo\NutrirBoxBundle\Entity\Ingrediente
     */
    function setCoIngredientePai(\Ingrediente $coIngredientePai) {
        $this->coIngredientePai = $coIngredientePai;
        return $this;
    }

    /**
     * Set noNome
     *
     * @param string $noNome
     * @return Ingrediente
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
     * Set deDescricao
     *
     * @param string $deDescricao
     * @return Ingrediente
     */
    public function setDeDescricao($deDescricao) {
        $this->deDescricao = $deDescricao;

        return $this;
    }

    /**
     * Get deDescricao
     *
     * @return string 
     */
    public function getDeDescricao() {
        return $this->deDescricao;
    }

    /**
     * Set vlValor
     *
     * @param float $vlValor
     * @return Ingrediente
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

    /**
     * Set isAtivo
     *
     * @param boolean $isAtivo
     * @return Ingrediente
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
