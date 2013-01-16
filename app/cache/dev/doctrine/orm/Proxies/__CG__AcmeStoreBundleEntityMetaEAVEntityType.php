<?php

namespace Proxies\__CG__\Acme\StoreBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class MetaEAVEntityType extends \Acme\StoreBundle\Entity\MetaEAVEntityType implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getEntityTypeId()
    {
        $this->__load();
        return parent::getEntityTypeId();
    }

    public function setEntityTypeName($entityTypeName)
    {
        $this->__load();
        return parent::setEntityTypeName($entityTypeName);
    }

    public function getEntityTypeName()
    {
        $this->__load();
        return parent::getEntityTypeName();
    }

    public function addEntitie(\Acme\StoreBundle\Entity\EAVEntity $entities)
    {
        $this->__load();
        return parent::addEntitie($entities);
    }

    public function removeEntitie(\Acme\StoreBundle\Entity\EAVEntity $entities)
    {
        $this->__load();
        return parent::removeEntitie($entities);
    }

    public function getEntities()
    {
        $this->__load();
        return parent::getEntities();
    }

    public function addAttributeSet(\Acme\StoreBundle\Entity\MetaEAVAttributeSet $attributeSets)
    {
        $this->__load();
        return parent::addAttributeSet($attributeSets);
    }

    public function removeAttributeSet(\Acme\StoreBundle\Entity\MetaEAVAttributeSet $attributeSets)
    {
        $this->__load();
        return parent::removeAttributeSet($attributeSets);
    }

    public function getAttributeSets()
    {
        $this->__load();
        return parent::getAttributeSets();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'EntityTypeId', 'EntityTypeName', 'entities', 'attributeSets');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}