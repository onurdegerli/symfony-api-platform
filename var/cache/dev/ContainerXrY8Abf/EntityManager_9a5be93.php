<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7bcc4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer96d3d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9e4e0 = [
        
    ];

    public function getConnection()
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'getConnection', array(), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'getMetadataFactory', array(), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'getExpressionBuilder', array(), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'beginTransaction', array(), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'getCache', array(), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->getCache();
    }

    public function transactional($func)
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'transactional', array('func' => $func), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->transactional($func);
    }

    public function commit()
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'commit', array(), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->commit();
    }

    public function rollback()
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'rollback', array(), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'getClassMetadata', array('className' => $className), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'createQuery', array('dql' => $dql), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'createNamedQuery', array('name' => $name), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'createQueryBuilder', array(), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'flush', array('entity' => $entity), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'clear', array('entityName' => $entityName), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->clear($entityName);
    }

    public function close()
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'close', array(), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->close();
    }

    public function persist($entity)
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'persist', array('entity' => $entity), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'remove', array('entity' => $entity), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'refresh', array('entity' => $entity), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'detach', array('entity' => $entity), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'merge', array('entity' => $entity), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'getRepository', array('entityName' => $entityName), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'contains', array('entity' => $entity), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'getEventManager', array(), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'getConfiguration', array(), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'isOpen', array(), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'getUnitOfWork', array(), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'getProxyFactory', array(), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'initializeObject', array('obj' => $obj), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'getFilters', array(), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'isFiltersStateClean', array(), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'hasFilters', array(), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return $this->valueHolder7bcc4->hasFilters();
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

        $instance->initializer96d3d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7bcc4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7bcc4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7bcc4->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, '__get', ['name' => $name], $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        if (isset(self::$publicProperties9e4e0[$name])) {
            return $this->valueHolder7bcc4->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7bcc4;

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

        $targetObject = $this->valueHolder7bcc4;
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
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7bcc4;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder7bcc4;
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
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, '__isset', array('name' => $name), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7bcc4;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder7bcc4;
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
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, '__unset', array('name' => $name), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7bcc4;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder7bcc4;
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
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, '__clone', array(), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        $this->valueHolder7bcc4 = clone $this->valueHolder7bcc4;
    }

    public function __sleep()
    {
        $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, '__sleep', array(), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;

        return array('valueHolder7bcc4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer96d3d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer96d3d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer96d3d && ($this->initializer96d3d->__invoke($valueHolder7bcc4, $this, 'initializeProxy', array(), $this->initializer96d3d) || 1) && $this->valueHolder7bcc4 = $valueHolder7bcc4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7bcc4;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder7bcc4;
    }


}
