<?php

namespace Corporativo\NutrirBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoria
 *
 * @ORM\Table(name="categoria")
 * @ORM\Entity
 */
class Categoria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_categoria", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $coCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="no_nome", type="string", length=45, nullable=false)
     */
    private $noNome;



    /**
     * Get coCategoria
     *
     * @return integer 
     */
    public function getCoCategoria()
    {
        return $this->coCategoria;
    }

    /**
     * Set noNome
     *
     * @param string $noNome
     * @return Categoria
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
}