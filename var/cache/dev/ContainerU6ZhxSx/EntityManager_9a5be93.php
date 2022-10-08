<?php

namespace ContainerU6ZhxSx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder30154 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercd6f1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesef14a = [
        
    ];

    public function getConnection()
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'getConnection', array(), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'getMetadataFactory', array(), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'getExpressionBuilder', array(), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'beginTransaction', array(), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'getCache', array(), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->getCache();
    }

    public function transactional($func)
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'transactional', array('func' => $func), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'wrapInTransaction', array('func' => $func), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'commit', array(), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->commit();
    }

    public function rollback()
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'rollback', array(), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'getClassMetadata', array('className' => $className), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'createQuery', array('dql' => $dql), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'createNamedQuery', array('name' => $name), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'createQueryBuilder', array(), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'flush', array('entity' => $entity), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'clear', array('entityName' => $entityName), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->clear($entityName);
    }

    public function close()
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'close', array(), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->close();
    }

    public function persist($entity)
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'persist', array('entity' => $entity), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'remove', array('entity' => $entity), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'refresh', array('entity' => $entity), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'detach', array('entity' => $entity), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'merge', array('entity' => $entity), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'getRepository', array('entityName' => $entityName), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'contains', array('entity' => $entity), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'getEventManager', array(), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'getConfiguration', array(), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'isOpen', array(), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'getUnitOfWork', array(), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'getProxyFactory', array(), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'initializeObject', array('obj' => $obj), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'getFilters', array(), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'isFiltersStateClean', array(), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'hasFilters', array(), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return $this->valueHolder30154->hasFilters();
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

        $instance->initializercd6f1 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder30154) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder30154 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder30154->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, '__get', ['name' => $name], $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        if (isset(self::$publicPropertiesef14a[$name])) {
            return $this->valueHolder30154->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30154;

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

        $targetObject = $this->valueHolder30154;
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
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30154;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder30154;
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
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, '__isset', array('name' => $name), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30154;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder30154;
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
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, '__unset', array('name' => $name), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30154;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder30154;
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
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, '__clone', array(), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        $this->valueHolder30154 = clone $this->valueHolder30154;
    }

    public function __sleep()
    {
        $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, '__sleep', array(), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;

        return array('valueHolder30154');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercd6f1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercd6f1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercd6f1 && ($this->initializercd6f1->__invoke($valueHolder30154, $this, 'initializeProxy', array(), $this->initializercd6f1) || 1) && $this->valueHolder30154 = $valueHolder30154;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder30154;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder30154;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
