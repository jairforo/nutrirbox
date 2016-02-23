<?php

namespace Proxies\__CG__\Corporativo\ConcurseiroBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PlanejamentoSemanal extends \Corporativo\ConcurseiroBundle\Entity\PlanejamentoSemanal implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\PlanejamentoSemanal' . "\0" . 'coPlanejamentoSemanal', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\PlanejamentoSemanal' . "\0" . 'dtCadastro', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\PlanejamentoSemanal' . "\0" . 'isAtivo', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\PlanejamentoSemanal' . "\0" . 'coPessoa'];
        }

        return ['__isInitialized__', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\PlanejamentoSemanal' . "\0" . 'coPlanejamentoSemanal', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\PlanejamentoSemanal' . "\0" . 'dtCadastro', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\PlanejamentoSemanal' . "\0" . 'isAtivo', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\PlanejamentoSemanal' . "\0" . 'coPessoa'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PlanejamentoSemanal $proxy) {
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
    public function getCoPlanejamentoSemanal()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getCoPlanejamentoSemanal();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoPlanejamentoSemanal', []);

        return parent::getCoPlanejamentoSemanal();
    }

    /**
     * {@inheritDoc}
     */
    public function setDtCadastro($dtCadastro)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDtCadastro', [$dtCadastro]);

        return parent::setDtCadastro($dtCadastro);
    }

    /**
     * {@inheritDoc}
     */
    public function getDtCadastro()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDtCadastro', []);

        return parent::getDtCadastro();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsAtivo($isAtivo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsAtivo', [$isAtivo]);

        return parent::setIsAtivo($isAtivo);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsAtivo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsAtivo', []);

        return parent::getIsAtivo();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoPessoa(\Corporativo\ConcurseiroBundle\Entity\Pessoa $coPessoa = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoPessoa', [$coPessoa]);

        return parent::setCoPessoa($coPessoa);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoPessoa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoPessoa', []);

        return parent::getCoPessoa();
    }

}
