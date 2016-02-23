<?php

namespace Proxies\__CG__\Corporativo\ConcurseiroBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Cargo extends \Corporativo\ConcurseiroBundle\Entity\Cargo implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Cargo' . "\0" . 'coCargo', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Cargo' . "\0" . 'noNome', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Cargo' . "\0" . 'deDescricao', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Cargo' . "\0" . 'vlSalarioBase', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Cargo' . "\0" . 'nuCargaHorario', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Cargo' . "\0" . 'nuCargo', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Cargo' . "\0" . 'nuQtdVagas', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Cargo' . "\0" . 'coConcurso', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Cargo' . "\0" . 'coNivel'];
        }

        return ['__isInitialized__', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Cargo' . "\0" . 'coCargo', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Cargo' . "\0" . 'noNome', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Cargo' . "\0" . 'deDescricao', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Cargo' . "\0" . 'vlSalarioBase', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Cargo' . "\0" . 'nuCargaHorario', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Cargo' . "\0" . 'nuCargo', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Cargo' . "\0" . 'nuQtdVagas', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Cargo' . "\0" . 'coConcurso', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Cargo' . "\0" . 'coNivel'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Cargo $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getCoCargo()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getCoCargo();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoCargo', []);

        return parent::getCoCargo();
    }

    /**
     * {@inheritDoc}
     */
    public function setNoNome($noNome)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNoNome', [$noNome]);

        return parent::setNoNome($noNome);
    }

    /**
     * {@inheritDoc}
     */
    public function getNoNome()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNoNome', []);

        return parent::getNoNome();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeDescricao($deDescricao)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeDescricao', [$deDescricao]);

        return parent::setDeDescricao($deDescricao);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeDescricao()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeDescricao', []);

        return parent::getDeDescricao();
    }

    /**
     * {@inheritDoc}
     */
    public function setVlSalarioBase($vlSalarioBase)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVlSalarioBase', [$vlSalarioBase]);

        return parent::setVlSalarioBase($vlSalarioBase);
    }

    /**
     * {@inheritDoc}
     */
    public function getVlSalarioBase()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVlSalarioBase', []);

        return parent::getVlSalarioBase();
    }

    /**
     * {@inheritDoc}
     */
    public function setNuCargaHorario($nuCargaHorario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNuCargaHorario', [$nuCargaHorario]);

        return parent::setNuCargaHorario($nuCargaHorario);
    }

    /**
     * {@inheritDoc}
     */
    public function getNuCargaHorario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNuCargaHorario', []);

        return parent::getNuCargaHorario();
    }

    /**
     * {@inheritDoc}
     */
    public function setNuCargo($nuCargo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNuCargo', [$nuCargo]);

        return parent::setNuCargo($nuCargo);
    }

    /**
     * {@inheritDoc}
     */
    public function getNuCargo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNuCargo', []);

        return parent::getNuCargo();
    }

    /**
     * {@inheritDoc}
     */
    public function setNuQtdVagas($nuQtdVagas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNuQtdVagas', [$nuQtdVagas]);

        return parent::setNuQtdVagas($nuQtdVagas);
    }

    /**
     * {@inheritDoc}
     */
    public function getNuQtdVagas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNuQtdVagas', []);

        return parent::getNuQtdVagas();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoConcurso(\Corporativo\ConcurseiroBundle\Entity\Concurso $coConcurso = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoConcurso', [$coConcurso]);

        return parent::setCoConcurso($coConcurso);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoConcurso()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoConcurso', []);

        return parent::getCoConcurso();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoNivel(\Corporativo\ConcurseiroBundle\Entity\Nivel $coNivel = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoNivel', [$coNivel]);

        return parent::setCoNivel($coNivel);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoNivel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoNivel', []);

        return parent::getCoNivel();
    }

}
