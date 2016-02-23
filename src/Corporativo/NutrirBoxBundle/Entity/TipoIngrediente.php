<?php

namespace Corporativo\NutrirBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoIngrediente
 *
 * @ORM\Table(name="tipo_ingrediente")
 * @ORM\Entity
 */
class TipoIngrediente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_tipo_ingrediente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $coTipoIngrediente;

    /**
     * @var string
     *
     * @ORM\Column(name="no_nome", type="string", length=45, nullable=false)
     */
    private $noNome;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_ativo", type="boolean", nullable=true)
     */
    private $isAtivo;



    /**
     * Get coTipoIngrediente
     *
     * @return integer 
     */
    public function getCoTipoIngrediente()
    {
        return $this->coTipoIngrediente;
    }

    /**
     * Set noNome
     *
     * @param string $noNome
     * @return TipoIngrediente
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
     * Set isAtivo
     *
     * @param boolean $isAtivo
     * @return TipoIngrediente
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
