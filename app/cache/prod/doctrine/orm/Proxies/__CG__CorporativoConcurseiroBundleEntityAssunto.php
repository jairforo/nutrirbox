<?php

namespace Proxies\__CG__\Corporativo\ConcurseiroBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Assunto extends \Corporativo\ConcurseiroBundle\Entity\Assunto implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Assunto' . "\0" . 'coAssunto', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Assunto' . "\0" . 'noNome', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Assunto' . "\0" . 'hrQtdEstudo', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Assunto' . "\0" . 'coAssuntoPai', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Assunto' . "\0" . 'coDisciplina'];
        }

        return ['__isInitialized__', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Assunto' . "\0" . 'coAssunto', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Assunto' . "\0" . 'noNome', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Assunto' . "\0" . 'hrQtdEstudo', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Assunto' . "\0" . 'coAssuntoPai', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Assunto' . "\0" . 'coDisciplina'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Assunto $proxy) {
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
    public function getCoAssunto()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getCoAssunto();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoAssunto', []);

        return parent::getCoAssunto();
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
    public function setHrQtdEstudo($hrQtdEstudo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHrQtdEstudo', [$hrQtdEstudo]);

        return parent::setHrQtdEstudo($hrQtdEstudo);
    }

    /**
     * {@inheritDoc}
     */
    public function getHrQtdEstudo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHrQtdEstudo', []);

        return parent::getHrQtdEstudo();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoAssuntoPai(\Corporativo\ConcurseiroBundle\Entity\Assunto $coAssuntoPai = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoAssuntoPai', [$coAssuntoPai]);

        return parent::setCoAssuntoPai($coAssuntoPai);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoAssuntoPai()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoAssuntoPai', []);

        return parent::getCoAssuntoPai();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoDisciplina(\Corporativo\ConcurseiroBundle\Entity\Disciplina $coDisciplina = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoDisciplina', [$coDisciplina]);

        return parent::setCoDisciplina($coDisciplina);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoDisciplina()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoDisciplina', []);

        return parent::getCoDisciplina();
    }

}
