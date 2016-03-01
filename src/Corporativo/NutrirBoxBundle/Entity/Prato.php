<?php

namespace Corporativo\NutrirBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prato
 *
 * @ORM\Table(name="prato", indexes={@ORM\Index(name="fk_prato_categoria1_idx", columns={"co_categoria"})})
 * @ORM\Entity
 */
class Prato
{
    /**
     * @var string
     *
     * @ORM\Column(name="no_nome", type="string", length=60, nullable=false)
     */
    private $noNome;

    /**
     * @var float
     *
     * @ORM\Column(name="vl_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $vlValor;

    /**
     * @var integer
     *
     * @ORM\Column(name="nu_qtd", type="integer", nullable=true)
     */
    private $nuQtd;

    /**
     * @var string
     *
     * @ORM\Column(name="de_descricao", type="text", nullable=true)
     */
    private $deDescricao;

    /**
     * @var integer
     *
     * @ORM\Column(name="co_prato", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $coPrato;

    /**
     * @var \Corporativo\NutrirBoxBundle\Entity\Categoria
     *
     * @ORM\ManyToOne(targetEntity="Corporativo\NutrirBoxBundle\Entity\Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_categoria", referencedColumnName="co_categoria")
     * })
     */
    private $coCategoria;



    /**
     * Set noNome
     *
     * @param string $noNome
     * @return Prato
     */
    public function setNoNome($noNome)
    {
        $this->noNome = $noNome;

        return $this;
    }

    /**
     * Get noNome
     *
     * @return string 
     */
    public function getNoNome()
    {
        return $this->noNome;
    }

    /**
     * Set vlValor
     *
     * @param float $vlValor
     * @return Prato
     */
    public function setVlValor($vlValor)
    {
        $this->vlValor = $vlValor;

        return $this;
    }

    /**
     * Get vlValor
     *
     * @return float 
     */
    public function getVlValor()
    {
        return $this->vlValor;
    }

    /**
     * Set nuQtd
     *
     * @param integer $nuQtd
     * @return Prato
     */
    public function setNuQtd($nuQtd)
    {
        $this->nuQtd = $nuQtd;

        return $this;
    }

    /**
     * Get nuQtd
     *
     * @return integer 
     */
    public function getNuQtd()
    {
        return $this->nuQtd;
    }

    /**
     * Set deDescricao
     *
     * @param string $deDescricao
     * @return Prato
     */
    public function setDeDescricao($deDescricao)
    {
        $this->deDescricao = $deDescricao;

        return $this;
    }

    /**
     * Get deDescricao
     *
     * @return string 
     */
    public function getDeDescricao()
    {
        return $this->deDescricao;
    }

    /**
     * Get coPrato
     *
     * @return integer 
     */
    public function getCoPrato()
    {
        return $this->coPrato;
    }

    /**
     * Set coCategoria
     *
     * @param \Corporativo\NutrirBoxBundle\Entity\Categoria $coCategoria
     * @return Prato
     */
    public function setCoCategoria(\Corporativo\NutrirBoxBundle\Entity\Categoria $coCategoria = null)
    {
        $this->coCategoria = $coCategoria;

        return $this;
    }

    /**
     * Get coCategoria
     *
     * @return \Corporativo\NutrirBoxBundle\Entity\Categoria 
     */
    public function getCoCategoria()
    {
        return $this->coCategoria;
    }
}
