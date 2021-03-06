<?php

namespace Proxies\__CG__\dsw\AmpliBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Espace extends \dsw\AmpliBundle\Entity\Espace implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'id', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'titre', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'slug', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'animateur', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'etape', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'withIdees', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'withModeration', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'withCoeurs', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'withFooter', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'withCommentaires', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'withTemps', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'withArgent', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'withEquipe', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'categories', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'objectifsAlias', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'methodeAlias', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'calendrierAlias', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'propulserAlias', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'publicQuestion'];
        }

        return ['__isInitialized__', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'id', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'titre', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'slug', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'animateur', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'etape', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'withIdees', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'withModeration', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'withCoeurs', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'withFooter', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'withCommentaires', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'withTemps', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'withArgent', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'withEquipe', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'categories', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'objectifsAlias', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'methodeAlias', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'calendrierAlias', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'propulserAlias', '' . "\0" . 'dsw\\AmpliBundle\\Entity\\Espace' . "\0" . 'publicQuestion'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Espace $proxy) {
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
    public function getId()
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
    public function setTitre($titre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', [$titre]);

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', []);

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtape($etape)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtape', [$etape]);

        return parent::setEtape($etape);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtape()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtape', []);

        return parent::getEtape();
    }

    /**
     * {@inheritDoc}
     */
    public function setWithCoeurs($withCoeurs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWithCoeurs', [$withCoeurs]);

        return parent::setWithCoeurs($withCoeurs);
    }

    /**
     * {@inheritDoc}
     */
    public function getWithCoeurs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWithCoeurs', []);

        return parent::getWithCoeurs();
    }

    /**
     * {@inheritDoc}
     */
    public function addCategory(\dsw\AmpliBundle\Entity\Categorie $category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCategory', [$category]);

        return parent::addCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCategory(\dsw\AmpliBundle\Entity\Categorie $category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCategory', [$category]);

        return parent::removeCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategories()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategories', []);

        return parent::getCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnimateur(\dsw\UserBundle\Entity\User $animateur = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnimateur', [$animateur]);

        return parent::setAnimateur($animateur);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnimateur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnimateur', []);

        return parent::getAnimateur();
    }

    /**
     * {@inheritDoc}
     */
    public function setWithIdees($withIdees)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWithIdees', [$withIdees]);

        return parent::setWithIdees($withIdees);
    }

    /**
     * {@inheritDoc}
     */
    public function getWithIdees()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWithIdees', []);

        return parent::getWithIdees();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug($slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setWithModeration($withModeration)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWithModeration', [$withModeration]);

        return parent::setWithModeration($withModeration);
    }

    /**
     * {@inheritDoc}
     */
    public function getWithModeration()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWithModeration', []);

        return parent::getWithModeration();
    }

    /**
     * {@inheritDoc}
     */
    public function setWithCommentaires($withCommentaires)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWithCommentaires', [$withCommentaires]);

        return parent::setWithCommentaires($withCommentaires);
    }

    /**
     * {@inheritDoc}
     */
    public function getWithCommentaires()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWithCommentaires', []);

        return parent::getWithCommentaires();
    }

    /**
     * {@inheritDoc}
     */
    public function setWithTemps($withTemps)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWithTemps', [$withTemps]);

        return parent::setWithTemps($withTemps);
    }

    /**
     * {@inheritDoc}
     */
    public function getWithTemps()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWithTemps', []);

        return parent::getWithTemps();
    }

    /**
     * {@inheritDoc}
     */
    public function setWithArgent($withArgent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWithArgent', [$withArgent]);

        return parent::setWithArgent($withArgent);
    }

    /**
     * {@inheritDoc}
     */
    public function getWithArgent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWithArgent', []);

        return parent::getWithArgent();
    }

    /**
     * {@inheritDoc}
     */
    public function setWithEquipe($withEquipe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWithEquipe', [$withEquipe]);

        return parent::setWithEquipe($withEquipe);
    }

    /**
     * {@inheritDoc}
     */
    public function getWithEquipe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWithEquipe', []);

        return parent::getWithEquipe();
    }

    /**
     * {@inheritDoc}
     */
    public function setObjectifsAlias($objectifsAlias)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObjectifsAlias', [$objectifsAlias]);

        return parent::setObjectifsAlias($objectifsAlias);
    }

    /**
     * {@inheritDoc}
     */
    public function getObjectifsAlias()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObjectifsAlias', []);

        return parent::getObjectifsAlias();
    }

    /**
     * {@inheritDoc}
     */
    public function setMethodeAlias($methodeAlias)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMethodeAlias', [$methodeAlias]);

        return parent::setMethodeAlias($methodeAlias);
    }

    /**
     * {@inheritDoc}
     */
    public function getMethodeAlias()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMethodeAlias', []);

        return parent::getMethodeAlias();
    }

    /**
     * {@inheritDoc}
     */
    public function setCalendrierAlias($calendrierAlias)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCalendrierAlias', [$calendrierAlias]);

        return parent::setCalendrierAlias($calendrierAlias);
    }

    /**
     * {@inheritDoc}
     */
    public function getCalendrierAlias()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCalendrierAlias', []);

        return parent::getCalendrierAlias();
    }

    /**
     * {@inheritDoc}
     */
    public function setPropulserAlias($propulserAlias)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPropulserAlias', [$propulserAlias]);

        return parent::setPropulserAlias($propulserAlias);
    }

    /**
     * {@inheritDoc}
     */
    public function getPropulserAlias()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPropulserAlias', []);

        return parent::getPropulserAlias();
    }

    /**
     * {@inheritDoc}
     */
    public function setWithFooter($withFooter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWithFooter', [$withFooter]);

        return parent::setWithFooter($withFooter);
    }

    /**
     * {@inheritDoc}
     */
    public function getWithFooter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWithFooter', []);

        return parent::getWithFooter();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublicQuestion($publicQuestion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublicQuestion', [$publicQuestion]);

        return parent::setPublicQuestion($publicQuestion);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublicQuestion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublicQuestion', []);

        return parent::getPublicQuestion();
    }

}
