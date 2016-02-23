<?php

namespace Proxies\__CG__\Corporativo\ConcurseiroBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Transacao extends \Corporativo\ConcurseiroBundle\Entity\Transacao implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Transacao' . "\0" . 'coTransacao', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Transacao' . "\0" . 'noReferenciaTransacao', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Transacao' . "\0" . 'tsTransacao', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Transacao' . "\0" . 'vlTransacao', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Transacao' . "\0" . 'coPromocao', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Transacao' . "\0" . 'coStatusTransacao'];
        }

        return ['__isInitialized__', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Transacao' . "\0" . 'coTransacao', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Transacao' . "\0" . 'noReferenciaTransacao', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Transacao' . "\0" . 'tsTransacao', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Transacao' . "\0" . 'vlTransacao', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Transacao' . "\0" . 'coPromocao', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Transacao' . "\0" . 'coStatusTransacao'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Transacao $proxy) {
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
    public function getCoTransacao()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getCoTransacao();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoTransacao', []);

        return parent::getCoTransacao();
    }

    /**
     * {@inheritDoc}
     */
    public function setNoReferenciaTransacao($noReferenciaTransacao)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNoReferenciaTransacao', [$noReferenciaTransacao]);

        return parent::setNoReferenciaTransacao($noReferenciaTransacao);
    }

    /**
     * {@inheritDoc}
     */
    public function getNoReferenciaTransacao()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNoReferenciaTransacao', []);

        return parent::getNoReferenciaTransacao();
    }

    /**
     * {@inheritDoc}
     */
    public function setTsTransacao($tsTransacao)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTsTransacao', [$tsTransacao]);

        return parent::setTsTransacao($tsTransacao);
    }

    /**
     * {@inheritDoc}
     */
    public function getTsTransacao()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTsTransacao', []);

        return parent::getTsTransacao();
    }

    /**
     * {@inheritDoc}
     */
    public function setVlTransacao($vlTransacao)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVlTransacao', [$vlTransacao]);

        return parent::setVlTransacao($vlTransacao);
    }

    /**
     * {@inheritDoc}
     */
    public function getVlTransacao()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVlTransacao', []);

        return parent::getVlTransacao();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoPromocao(\Corporativo\ConcurseiroBundle\Entity\Promocao $coPromocao = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoPromocao', [$coPromocao]);

        return parent::setCoPromocao($coPromocao);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoPromocao()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoPromocao', []);

        return parent::getCoPromocao();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoStatusTransacao(\Corporativo\ConcurseiroBundle\Entity\StatusTransacao $coStatusTransacao = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoStatusTransacao', [$coStatusTransacao]);

        return parent::setCoStatusTransacao($coStatusTransacao);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoStatusTransacao()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoStatusTransacao', []);

        return parent::getCoStatusTransacao();
    }

}