<?php

namespace ContainerScqsUcx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere080d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere986a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3167e = [
        
    ];

    public function getConnection()
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'getConnection', array(), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'getMetadataFactory', array(), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'getExpressionBuilder', array(), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'beginTransaction', array(), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'getCache', array(), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->getCache();
    }

    public function transactional($func)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'transactional', array('func' => $func), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'wrapInTransaction', array('func' => $func), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'commit', array(), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->commit();
    }

    public function rollback()
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'rollback', array(), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'getClassMetadata', array('className' => $className), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'createQuery', array('dql' => $dql), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'createNamedQuery', array('name' => $name), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'createQueryBuilder', array(), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'flush', array('entity' => $entity), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'clear', array('entityName' => $entityName), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->clear($entityName);
    }

    public function close()
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'close', array(), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->close();
    }

    public function persist($entity)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'persist', array('entity' => $entity), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'remove', array('entity' => $entity), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'refresh', array('entity' => $entity), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'detach', array('entity' => $entity), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'merge', array('entity' => $entity), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'getRepository', array('entityName' => $entityName), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'contains', array('entity' => $entity), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'getEventManager', array(), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'getConfiguration', array(), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'isOpen', array(), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'getUnitOfWork', array(), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'getProxyFactory', array(), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'initializeObject', array('obj' => $obj), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'getFilters', array(), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'isFiltersStateClean', array(), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'hasFilters', array(), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return $this->valueHoldere080d->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializere986a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere080d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere080d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere080d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, '__get', ['name' => $name], $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        if (isset(self::$publicProperties3167e[$name])) {
            return $this->valueHoldere080d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere080d;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere080d;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere080d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere080d;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, '__isset', array('name' => $name), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere080d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere080d;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, '__unset', array('name' => $name), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere080d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere080d;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, '__clone', array(), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        $this->valueHoldere080d = clone $this->valueHoldere080d;
    }

    public function __sleep()
    {
        $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, '__sleep', array(), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;

        return array('valueHoldere080d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere986a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere986a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere986a && ($this->initializere986a->__invoke($valueHoldere080d, $this, 'initializeProxy', array(), $this->initializere986a) || 1) && $this->valueHoldere080d = $valueHoldere080d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere080d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere080d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
