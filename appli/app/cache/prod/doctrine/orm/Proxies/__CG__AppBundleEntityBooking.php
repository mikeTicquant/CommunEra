<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Booking extends \AppBundle\Entity\Booking implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Booking' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Booking' . "\0" . 'user_nom', '' . "\0" . 'AppBundle\\Entity\\Booking' . "\0" . 'email', '' . "\0" . 'AppBundle\\Entity\\Booking' . "\0" . 'sitter', '' . "\0" . 'AppBundle\\Entity\\Booking' . "\0" . 'adresse', '' . "\0" . 'AppBundle\\Entity\\Booking' . "\0" . 'dateBooking', '' . "\0" . 'AppBundle\\Entity\\Booking' . "\0" . 'duree', '' . "\0" . 'AppBundle\\Entity\\Booking' . "\0" . 'dateArrived', '' . "\0" . 'AppBundle\\Entity\\Booking' . "\0" . 'cp', '' . "\0" . 'AppBundle\\Entity\\Booking' . "\0" . 'ville');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Booking' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Booking' . "\0" . 'user_nom', '' . "\0" . 'AppBundle\\Entity\\Booking' . "\0" . 'email', '' . "\0" . 'AppBundle\\Entity\\Booking' . "\0" . 'sitter', '' . "\0" . 'AppBundle\\Entity\\Booking' . "\0" . 'adresse', '' . "\0" . 'AppBundle\\Entity\\Booking' . "\0" . 'dateBooking', '' . "\0" . 'AppBundle\\Entity\\Booking' . "\0" . 'duree', '' . "\0" . 'AppBundle\\Entity\\Booking' . "\0" . 'dateArrived', '' . "\0" . 'AppBundle\\Entity\\Booking' . "\0" . 'cp', '' . "\0" . 'AppBundle\\Entity\\Booking' . "\0" . 'ville');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Booking $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function setDateBooking($dateBooking)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateBooking', array($dateBooking));

        return parent::setDateBooking($dateBooking);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateBooking()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateBooking', array());

        return parent::getDateBooking();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDepart($dateDepart)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDepart', array($dateDepart));

        return parent::setDateDepart($dateDepart);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDepart()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDepart', array());

        return parent::getDateDepart();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateArrived($dateArrived)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateArrived', array($dateArrived));

        return parent::setDateArrived($dateArrived);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateArrived()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateArrived', array());

        return parent::getDateArrived();
    }

    /**
     * {@inheritDoc}
     */
    public function getUserNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserNom', array());

        return parent::getUserNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserNom($user_nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserNom', array($user_nom));

        return parent::setUserNom($user_nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getSitter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSitter', array());

        return parent::getSitter();
    }

    /**
     * {@inheritDoc}
     */
    public function setSitter($sitter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSitter', array($sitter));

        return parent::setSitter($sitter);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', array());

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse($adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', array($adresse));

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getDuree()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDuree', array());

        return parent::getDuree();
    }

    /**
     * {@inheritDoc}
     */
    public function setDuree($duree)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDuree', array($duree));

        return parent::setDuree($duree);
    }

    /**
     * {@inheritDoc}
     */
    public function getHour()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHour', array());

        return parent::getHour();
    }

    /**
     * {@inheritDoc}
     */
    public function setHour($hour)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHour', array($hour));

        return parent::setHour($hour);
    }

    /**
     * {@inheritDoc}
     */
    public function getCp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCp', array());

        return parent::getCp();
    }

    /**
     * {@inheritDoc}
     */
    public function setCp($cp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCp', array($cp));

        return parent::setCp($cp);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', array());

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille($ville)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', array($ville));

        return parent::setVille($ville);
    }

}