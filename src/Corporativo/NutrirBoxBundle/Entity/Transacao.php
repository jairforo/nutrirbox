<?php

namespace Corporativo\NutrirBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transacao
 *
 * @ORM\Table(name="transacao")
 * @ORM\Entity
 */
class Transacao
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_transacao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $coTransacao;

    /**
     * @var string
     *
     * @ORM\Column(name="no_nome", type="string", length=45, nullable=false)
     */
    private $noNome;

    /**
     * @var string
     *
     * @ORM\Column(name="de_descricao", type="text", nullable=true)
     */
    private $deDescricao;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_ativo", type="boolean", nullable=false)
     */
    private $isAtivo;



    /**
     * Get coTransacao
     *
     * @return integer 
     */
    public function getCoTransacao()
    {
        return $this->coTransacao;
    }

    /**
     * Set noNome
     *
     * @param string $noNome
     * @return Transacao
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
     * Set deDescricao
     *
     * @param string $deDescricao
     * @return Transacao
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
     * Set isAtivo
     *
     * @param boolean $isAtivo
     * @return Transacao
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
