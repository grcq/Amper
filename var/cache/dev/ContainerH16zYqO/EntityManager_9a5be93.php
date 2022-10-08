<?php

namespace ContainerH16zYqO;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder29321 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdb980 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties63eea = [
        
    ];

    public function getConnection()
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'getConnection', array(), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'getMetadataFactory', array(), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'getExpressionBuilder', array(), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'beginTransaction', array(), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'getCache', array(), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'transactional', array('func' => $func), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'commit', array(), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->commit();
    }

    public function rollback()
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'rollback', array(), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'getClassMetadata', array('className' => $className), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'createQuery', array('dql' => $dql), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'createNamedQuery', array('name' => $name), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'createQueryBuilder', array(), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'flush', array('entity' => $entity), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'clear', array('entityName' => $entityName), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->clear($entityName);
    }

    public function close()
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'close', array(), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->close();
    }

    public function persist($entity)
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'persist', array('entity' => $entity), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'remove', array('entity' => $entity), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'refresh', array('entity' => $entity), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'detach', array('entity' => $entity), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'merge', array('entity' => $entity), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'contains', array('entity' => $entity), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'getEventManager', array(), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'getConfiguration', array(), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'isOpen', array(), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'getUnitOfWork', array(), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'getProxyFactory', array(), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'initializeObject', array('obj' => $obj), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'getFilters', array(), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'isFiltersStateClean', array(), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'hasFilters', array(), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return $this->valueHolder29321->hasFilters();
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

        $instance->initializerdb980 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder29321) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder29321 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder29321->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, '__get', ['name' => $name], $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        if (isset(self::$publicProperties63eea[$name])) {
            return $this->valueHolder29321->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder29321;

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

        $targetObject = $this->valueHolder29321;
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
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder29321;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder29321;
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
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, '__isset', array('name' => $name), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder29321;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder29321;
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
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, '__unset', array('name' => $name), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder29321;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder29321;
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
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, '__clone', array(), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        $this->valueHolder29321 = clone $this->valueHolder29321;
    }

    public function __sleep()
    {
        $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, '__sleep', array(), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;

        return array('valueHolder29321');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdb980 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdb980;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdb980 && ($this->initializerdb980->__invoke($valueHolder29321, $this, 'initializeProxy', array(), $this->initializerdb980) || 1) && $this->valueHolder29321 = $valueHolder29321;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder29321;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder29321;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
