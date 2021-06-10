<?php

namespace ContainerANVkUdI;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc035a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer76779 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdc0df = [
        
    ];

    public function getConnection()
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'getConnection', array(), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'getMetadataFactory', array(), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'getExpressionBuilder', array(), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'beginTransaction', array(), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'getCache', array(), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'transactional', array('func' => $func), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->transactional($func);
    }

    public function commit()
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'commit', array(), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->commit();
    }

    public function rollback()
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'rollback', array(), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'getClassMetadata', array('className' => $className), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'createQuery', array('dql' => $dql), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'createNamedQuery', array('name' => $name), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'createQueryBuilder', array(), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'flush', array('entity' => $entity), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'clear', array('entityName' => $entityName), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->clear($entityName);
    }

    public function close()
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'close', array(), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->close();
    }

    public function persist($entity)
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'persist', array('entity' => $entity), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'remove', array('entity' => $entity), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'refresh', array('entity' => $entity), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'detach', array('entity' => $entity), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'merge', array('entity' => $entity), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'contains', array('entity' => $entity), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'getEventManager', array(), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'getConfiguration', array(), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'isOpen', array(), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'getUnitOfWork', array(), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'getProxyFactory', array(), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'initializeObject', array('obj' => $obj), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'getFilters', array(), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'isFiltersStateClean', array(), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'hasFilters', array(), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return $this->valueHolderc035a->hasFilters();
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

        $instance->initializer76779 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc035a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc035a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc035a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, '__get', ['name' => $name], $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        if (isset(self::$publicPropertiesdc0df[$name])) {
            return $this->valueHolderc035a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc035a;

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

        $targetObject = $this->valueHolderc035a;
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
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc035a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc035a;
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
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, '__isset', array('name' => $name), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc035a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc035a;
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
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, '__unset', array('name' => $name), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc035a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc035a;
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
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, '__clone', array(), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        $this->valueHolderc035a = clone $this->valueHolderc035a;
    }

    public function __sleep()
    {
        $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, '__sleep', array(), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;

        return array('valueHolderc035a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer76779 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer76779;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer76779 && ($this->initializer76779->__invoke($valueHolderc035a, $this, 'initializeProxy', array(), $this->initializer76779) || 1) && $this->valueHolderc035a = $valueHolderc035a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc035a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc035a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
