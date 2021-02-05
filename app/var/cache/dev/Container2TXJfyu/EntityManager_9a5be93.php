<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder21e20 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere9d5b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4e0b2 = [
        
    ];

    public function getConnection()
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'getConnection', array(), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'getMetadataFactory', array(), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'getExpressionBuilder', array(), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'beginTransaction', array(), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'getCache', array(), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->getCache();
    }

    public function transactional($func)
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'transactional', array('func' => $func), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->transactional($func);
    }

    public function commit()
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'commit', array(), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->commit();
    }

    public function rollback()
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'rollback', array(), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'getClassMetadata', array('className' => $className), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'createQuery', array('dql' => $dql), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'createNamedQuery', array('name' => $name), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'createQueryBuilder', array(), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'flush', array('entity' => $entity), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'clear', array('entityName' => $entityName), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->clear($entityName);
    }

    public function close()
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'close', array(), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->close();
    }

    public function persist($entity)
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'persist', array('entity' => $entity), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'remove', array('entity' => $entity), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'refresh', array('entity' => $entity), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'detach', array('entity' => $entity), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'merge', array('entity' => $entity), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'getRepository', array('entityName' => $entityName), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'contains', array('entity' => $entity), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'getEventManager', array(), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'getConfiguration', array(), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'isOpen', array(), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'getUnitOfWork', array(), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'getProxyFactory', array(), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'initializeObject', array('obj' => $obj), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'getFilters', array(), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'isFiltersStateClean', array(), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'hasFilters', array(), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return $this->valueHolder21e20->hasFilters();
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

        $instance->initializere9d5b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder21e20) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder21e20 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder21e20->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, '__get', ['name' => $name], $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        if (isset(self::$publicProperties4e0b2[$name])) {
            return $this->valueHolder21e20->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder21e20;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder21e20;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder21e20;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder21e20;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, '__isset', array('name' => $name), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder21e20;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder21e20;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, '__unset', array('name' => $name), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder21e20;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder21e20;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, '__clone', array(), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        $this->valueHolder21e20 = clone $this->valueHolder21e20;
    }

    public function __sleep()
    {
        $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, '__sleep', array(), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;

        return array('valueHolder21e20');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere9d5b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere9d5b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere9d5b && ($this->initializere9d5b->__invoke($valueHolder21e20, $this, 'initializeProxy', array(), $this->initializere9d5b) || 1) && $this->valueHolder21e20 = $valueHolder21e20;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder21e20;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder21e20;
    }


}
