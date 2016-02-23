<?php

namespace Proxies\__CG__\Corporativo\ConcurseiroBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Pessoa extends \Corporativo\ConcurseiroBundle\Entity\Pessoa implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'coPessoa', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'noEmail', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'noSenha', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'nuCpf', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'noNome', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'tpSexo', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'noSalt', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'dtNascimento', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'dtCadastro', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'nuTelefone', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'nuCelular', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'imFoto', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'isAtivo', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'coPerfil'];
        }

        return ['__isInitialized__', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'coPessoa', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'noEmail', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'noSenha', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'nuCpf', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'noNome', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'tpSexo', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'noSalt', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'dtNascimento', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'dtCadastro', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'nuTelefone', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'nuCelular', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'imFoto', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'isAtivo', '' . "\0" . 'Corporativo\\ConcurseiroBundle\\Entity\\Pessoa' . "\0" . 'coPerfil'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Pessoa $proxy) {
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
    public function getCoPessoa()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getCoPessoa();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoPessoa', []);

        return parent::getCoPessoa();
    }

    /**
     * {@inheritDoc}
     */
    public function setNoEmail($noEmail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNoEmail', [$noEmail]);

        return parent::setNoEmail($noEmail);
    }

    /**
     * {@inheritDoc}
     */
    public function getNoEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNoEmail', []);

        return parent::getNoEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setNoSenha($noSenha)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNoSenha', [$noSenha]);

        return parent::setNoSenha($noSenha);
    }

    /**
     * {@inheritDoc}
     */
    public function getNoSenha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNoSenha', []);

        return parent::getNoSenha();
    }

    /**
     * {@inheritDoc}
     */
    public function setNuCpf($nuCpf)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNuCpf', [$nuCpf]);

        return parent::setNuCpf($nuCpf);
    }

    /**
     * {@inheritDoc}
     */
    public function getNuCpf()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNuCpf', []);

        return parent::getNuCpf();
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
    public function setTpSexo($tpSexo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTpSexo', [$tpSexo]);

        return parent::setTpSexo($tpSexo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTpSexo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTpSexo', []);

        return parent::getTpSexo();
    }

    /**
     * {@inheritDoc}
     */
    public function setNoSalt($noSalt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNoSalt', [$noSalt]);

        return parent::setNoSalt($noSalt);
    }

    /**
     * {@inheritDoc}
     */
    public function getNoSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNoSalt', []);

        return parent::getNoSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function setDtNascimento($dtNascimento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDtNascimento', [$dtNascimento]);

        return parent::setDtNascimento($dtNascimento);
    }

    /**
     * {@inheritDoc}
     */
    public function getDtNascimento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDtNascimento', []);

        return parent::getDtNascimento();
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
    public function setNuTelefone($nuTelefone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNuTelefone', [$nuTelefone]);

        return parent::setNuTelefone($nuTelefone);
    }

    /**
     * {@inheritDoc}
     */
    public function getNuTelefone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNuTelefone', []);

        return parent::getNuTelefone();
    }

    /**
     * {@inheritDoc}
     */
    public function setNuCelular($nuCelular)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNuCelular', [$nuCelular]);

        return parent::setNuCelular($nuCelular);
    }

    /**
     * {@inheritDoc}
     */
    public function getNuCelular()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNuCelular', []);

        return parent::getNuCelular();
    }

    /**
     * {@inheritDoc}
     */
    public function setImFoto($imFoto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImFoto', [$imFoto]);

        return parent::setImFoto($imFoto);
    }

    /**
     * {@inheritDoc}
     */
    public function getImFoto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImFoto', []);

        return parent::getImFoto();
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
    public function setCoPerfil(\Corporativo\ConcurseiroBundle\Entity\Perfil $coPerfil = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoPerfil', [$coPerfil]);

        return parent::setCoPerfil($coPerfil);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoPerfil()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoPerfil', []);

        return parent::getCoPerfil();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function equals(\Symfony\Component\Security\Core\User\AdvancedUserInterface $pessoa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'equals', [$pessoa]);

        return parent::equals($pessoa);
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonExpired', []);

        return parent::isAccountNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonLocked', []);

        return parent::isAccountNonLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function isCredentialsNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCredentialsNonExpired', []);

        return parent::isCredentialsNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnabled', []);

        return parent::isEnabled();
    }

}
