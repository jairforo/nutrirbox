<?php

namespace Proxies\__CG__\Corporativo\ConcurseiroBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class DiaHorarioEstudo extends \Corporativo\ConcurseiroBundle\Entity\DiaHorarioEstudo implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\DiaHorarioEstudo' . "\0" . 'coDiaHorarioEstudo', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\DiaHorarioEstudo' . "\0" . 'dtDia', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\DiaHorarioEstudo' . "\0" . 'hrInicio', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\DiaHorarioEstudo' . "\0" . 'hrFim', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\DiaHorarioEstudo' . "\0" . 'isEstudado', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\DiaHorarioEstudo' . "\0" . 'coPlanejamentoEstudo'];
        }

        return ['__isInitialized__', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\DiaHorarioEstudo' . "\0" . 'coDiaHorarioEstudo', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\DiaHorarioEstudo' . "\0" . 'dtDia', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\DiaHorarioEstudo' . "\0" . 'hrInicio', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\DiaHorarioEstudo' . "\0" . 'hrFim', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\DiaHorarioEstudo' . "\0" . 'isEstudado', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\DiaHorarioEstudo' . "\0" . 'coPlanejamentoEstudo'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (DiaHorarioEstudo $proxy) {
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
    public function getCoDiaHorarioEstudo()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getCoDiaHorarioEstudo();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoDiaHorarioEstudo', []);

        return parent::getCoDiaHorarioEstudo();
    }

    /**
     * {@inheritDoc}
     */
    public function setDtDia($dtDia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDtDia', [$dtDia]);

        return parent::setDtDia($dtDia);
    }

    /**
     * {@inheritDoc}
     */
    public function getDtDia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDtDia', []);

        return parent::getDtDia();
    }

    /**
     * {@inheritDoc}
     */
    public function setHrInicio($hrInicio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHrInicio', [$hrInicio]);

        return parent::setHrInicio($hrInicio);
    }

    /**
     * {@inheritDoc}
     */
    public function getHrInicio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHrInicio', []);

        return parent::getHrInicio();
    }

    /**
     * {@inheritDoc}
     */
    public function setHrFim($hrFim)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHrFim', [$hrFim]);

        return parent::setHrFim($hrFim);
    }

    /**
     * {@inheritDoc}
     */
    public function getHrFim()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHrFim', []);

        return parent::getHrFim();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsEstudado($isEstudado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsEstudado', [$isEstudado]);

        return parent::setIsEstudado($isEstudado);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsEstudado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsEstudado', []);

        return parent::getIsEstudado();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoPlanejamentoEstudo(\Corporativo\ConcurseiroBundle\Entity\PlanejamentoEstudo $coPlanejamentoEstudo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoPlanejamentoEstudo', [$coPlanejamentoEstudo]);

        return parent::setCoPlanejamentoEstudo($coPlanejamentoEstudo);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoPlanejamentoEstudo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoPlanejamentoEstudo', []);

        return parent::getCoPlanejamentoEstudo();
    }

}
