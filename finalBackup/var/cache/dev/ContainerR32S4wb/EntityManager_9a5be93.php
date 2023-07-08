<?php

namespace ContainerR32S4wb;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder76624 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer03f81 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6350b = [
        
    ];

    public function getConnection()
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'getConnection', array(), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'getMetadataFactory', array(), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'getExpressionBuilder', array(), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'beginTransaction', array(), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'getCache', array(), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->getCache();
    }

    public function transactional($func)
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'transactional', array('func' => $func), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'wrapInTransaction', array('func' => $func), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'commit', array(), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->commit();
    }

    public function rollback()
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'rollback', array(), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'getClassMetadata', array('className' => $className), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'createQuery', array('dql' => $dql), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'createNamedQuery', array('name' => $name), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'createQueryBuilder', array(), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'flush', array('entity' => $entity), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'clear', array('entityName' => $entityName), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->clear($entityName);
    }

    public function close()
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'close', array(), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->close();
    }

    public function persist($entity)
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'persist', array('entity' => $entity), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'remove', array('entity' => $entity), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'refresh', array('entity' => $entity), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'detach', array('entity' => $entity), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'merge', array('entity' => $entity), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'getRepository', array('entityName' => $entityName), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'contains', array('entity' => $entity), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'getEventManager', array(), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'getConfiguration', array(), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'isOpen', array(), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'getUnitOfWork', array(), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'getProxyFactory', array(), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'initializeObject', array('obj' => $obj), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'getFilters', array(), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'isFiltersStateClean', array(), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'hasFilters', array(), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return $this->valueHolder76624->hasFilters();
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

        $instance->initializer03f81 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder76624) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder76624 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder76624->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, '__get', ['name' => $name], $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        if (isset(self::$publicProperties6350b[$name])) {
            return $this->valueHolder76624->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder76624;

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

        $targetObject = $this->valueHolder76624;
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
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder76624;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder76624;
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
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, '__isset', array('name' => $name), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder76624;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder76624;
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
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, '__unset', array('name' => $name), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder76624;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder76624;
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
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, '__clone', array(), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        $this->valueHolder76624 = clone $this->valueHolder76624;
    }

    public function __sleep()
    {
        $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, '__sleep', array(), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;

        return array('valueHolder76624');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer03f81 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer03f81;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer03f81 && ($this->initializer03f81->__invoke($valueHolder76624, $this, 'initializeProxy', array(), $this->initializer03f81) || 1) && $this->valueHolder76624 = $valueHolder76624;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder76624;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder76624;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
