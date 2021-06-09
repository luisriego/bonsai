<?php

namespace ContainerZXGLcW9;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6021a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer08493 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties749f2 = [
        
    ];

    public function getConnection()
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'getConnection', array(), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'getMetadataFactory', array(), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'getExpressionBuilder', array(), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'beginTransaction', array(), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'getCache', array(), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'transactional', array('func' => $func), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->transactional($func);
    }

    public function commit()
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'commit', array(), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->commit();
    }

    public function rollback()
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'rollback', array(), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'getClassMetadata', array('className' => $className), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'createQuery', array('dql' => $dql), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'createNamedQuery', array('name' => $name), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'createQueryBuilder', array(), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'flush', array('entity' => $entity), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'clear', array('entityName' => $entityName), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->clear($entityName);
    }

    public function close()
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'close', array(), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->close();
    }

    public function persist($entity)
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'persist', array('entity' => $entity), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'remove', array('entity' => $entity), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'refresh', array('entity' => $entity), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'detach', array('entity' => $entity), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'merge', array('entity' => $entity), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'contains', array('entity' => $entity), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'getEventManager', array(), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'getConfiguration', array(), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'isOpen', array(), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'getUnitOfWork', array(), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'getProxyFactory', array(), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'initializeObject', array('obj' => $obj), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'getFilters', array(), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'isFiltersStateClean', array(), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'hasFilters', array(), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return $this->valueHolder6021a->hasFilters();
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

        $instance->initializer08493 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6021a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6021a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6021a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, '__get', ['name' => $name], $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        if (isset(self::$publicProperties749f2[$name])) {
            return $this->valueHolder6021a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6021a;

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

        $targetObject = $this->valueHolder6021a;
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
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6021a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6021a;
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
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, '__isset', array('name' => $name), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6021a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6021a;
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
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, '__unset', array('name' => $name), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6021a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6021a;
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
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, '__clone', array(), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        $this->valueHolder6021a = clone $this->valueHolder6021a;
    }

    public function __sleep()
    {
        $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, '__sleep', array(), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;

        return array('valueHolder6021a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer08493 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer08493;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer08493 && ($this->initializer08493->__invoke($valueHolder6021a, $this, 'initializeProxy', array(), $this->initializer08493) || 1) && $this->valueHolder6021a = $valueHolder6021a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6021a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6021a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
