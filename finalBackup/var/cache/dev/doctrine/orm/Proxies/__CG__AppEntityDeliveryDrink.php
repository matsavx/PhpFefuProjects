<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class DeliveryDrink extends \App\Entity\DeliveryDrink implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\DeliveryDrink' . "\0" . 'id', '' . "\0" . 'App\\Entity\\DeliveryDrink' . "\0" . 'drinkName', '' . "\0" . 'App\\Entity\\DeliveryDrink' . "\0" . 'drinkPrice', '' . "\0" . 'App\\Entity\\DeliveryDrink' . "\0" . 'drinkComposition', '' . "\0" . 'App\\Entity\\DeliveryDrink' . "\0" . 'deliveryKits', '' . "\0" . 'App\\Entity\\DeliveryDrink' . "\0" . 'drinkVolume'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\DeliveryDrink' . "\0" . 'id', '' . "\0" . 'App\\Entity\\DeliveryDrink' . "\0" . 'drinkName', '' . "\0" . 'App\\Entity\\DeliveryDrink' . "\0" . 'drinkPrice', '' . "\0" . 'App\\Entity\\DeliveryDrink' . "\0" . 'drinkComposition', '' . "\0" . 'App\\Entity\\DeliveryDrink' . "\0" . 'deliveryKits', '' . "\0" . 'App\\Entity\\DeliveryDrink' . "\0" . 'drinkVolume'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (DeliveryDrink $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getDrinkName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDrinkName', []);

        return parent::getDrinkName();
    }

    /**
     * {@inheritDoc}
     */
    public function setDrinkName(string $drinkName): \App\Entity\DeliveryDrink
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDrinkName', [$drinkName]);

        return parent::setDrinkName($drinkName);
    }

    /**
     * {@inheritDoc}
     */
    public function getDrinkPrice(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDrinkPrice', []);

        return parent::getDrinkPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setDrinkPrice(int $drinkPrice): \App\Entity\DeliveryDrink
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDrinkPrice', [$drinkPrice]);

        return parent::setDrinkPrice($drinkPrice);
    }

    /**
     * {@inheritDoc}
     */
    public function getDrinkComposition(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDrinkComposition', []);

        return parent::getDrinkComposition();
    }

    /**
     * {@inheritDoc}
     */
    public function setDrinkComposition(?string $drinkComposition): \App\Entity\DeliveryDrink
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDrinkComposition', [$drinkComposition]);

        return parent::setDrinkComposition($drinkComposition);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeliveryKits(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeliveryKits', []);

        return parent::getDeliveryKits();
    }

    /**
     * {@inheritDoc}
     */
    public function addDeliveryKit(\App\Entity\DeliveryKit $deliveryKit): \App\Entity\DeliveryDrink
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDeliveryKit', [$deliveryKit]);

        return parent::addDeliveryKit($deliveryKit);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDeliveryKit(\App\Entity\DeliveryKit $deliveryKit): \App\Entity\DeliveryDrink
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDeliveryKit', [$deliveryKit]);

        return parent::removeDeliveryKit($deliveryKit);
    }

    /**
     * {@inheritDoc}
     */
    public function getDrinkVolume(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDrinkVolume', []);

        return parent::getDrinkVolume();
    }

    /**
     * {@inheritDoc}
     */
    public function setDrinkVolume(?int $drinkVolume): \App\Entity\DeliveryDrink
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDrinkVolume', [$drinkVolume]);

        return parent::setDrinkVolume($drinkVolume);
    }

}
