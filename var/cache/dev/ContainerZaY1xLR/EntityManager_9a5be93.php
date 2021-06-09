<?php

namespace ContainerZaY1xLR;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder33bf6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3b32c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd967d = [
        
    ];

    public function getConnection()
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'getConnection', array(), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'getMetadataFactory', array(), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'getExpressionBuilder', array(), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'beginTransaction', array(), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'getCache', array(), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'transactional', array('func' => $func), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->transactional($func);
    }

    public function commit()
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'commit', array(), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->commit();
    }

    public function rollback()
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'rollback', array(), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'getClassMetadata', array('className' => $className), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'createQuery', array('dql' => $dql), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'createNamedQuery', array('name' => $name), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'createQueryBuilder', array(), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'flush', array('entity' => $entity), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'clear', array('entityName' => $entityName), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->clear($entityName);
    }

    public function close()
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'close', array(), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->close();
    }

    public function persist($entity)
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'persist', array('entity' => $entity), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'remove', array('entity' => $entity), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'refresh', array('entity' => $entity), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'detach', array('entity' => $entity), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'merge', array('entity' => $entity), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'contains', array('entity' => $entity), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'getEventManager', array(), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'getConfiguration', array(), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'isOpen', array(), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'getUnitOfWork', array(), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'getProxyFactory', array(), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'initializeObject', array('obj' => $obj), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'getFilters', array(), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'isFiltersStateClean', array(), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'hasFilters', array(), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return $this->valueHolder33bf6->hasFilters();
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

        $instance->initializer3b32c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder33bf6) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder33bf6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder33bf6->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, '__get', ['name' => $name], $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        if (isset(self::$publicPropertiesd967d[$name])) {
            return $this->valueHolder33bf6->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33bf6;

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

        $targetObject = $this->valueHolder33bf6;
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
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33bf6;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder33bf6;
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
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, '__isset', array('name' => $name), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33bf6;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder33bf6;
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
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, '__unset', array('name' => $name), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33bf6;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder33bf6;
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
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, '__clone', array(), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        $this->valueHolder33bf6 = clone $this->valueHolder33bf6;
    }

    public function __sleep()
    {
        $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, '__sleep', array(), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;

        return array('valueHolder33bf6');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3b32c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3b32c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3b32c && ($this->initializer3b32c->__invoke($valueHolder33bf6, $this, 'initializeProxy', array(), $this->initializer3b32c) || 1) && $this->valueHolder33bf6 = $valueHolder33bf6;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder33bf6;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder33bf6;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
