<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5e53d = null;
    private $initializer01887 = null;
    private static $publicProperties193eb = [
        
    ];
    public function getConnection()
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'getConnection', array(), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'getMetadataFactory', array(), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'getExpressionBuilder', array(), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'beginTransaction', array(), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'getCache', array(), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->getCache();
    }
    public function transactional($func)
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'transactional', array('func' => $func), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'commit', array(), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->commit();
    }
    public function rollback()
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'rollback', array(), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'getClassMetadata', array('className' => $className), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'createQuery', array('dql' => $dql), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'createNamedQuery', array('name' => $name), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'createQueryBuilder', array(), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'flush', array('entity' => $entity), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'clear', array('entityName' => $entityName), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->clear($entityName);
    }
    public function close()
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'close', array(), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->close();
    }
    public function persist($entity)
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'persist', array('entity' => $entity), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'remove', array('entity' => $entity), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'refresh', array('entity' => $entity), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'detach', array('entity' => $entity), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'merge', array('entity' => $entity), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'contains', array('entity' => $entity), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'getEventManager', array(), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'getConfiguration', array(), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'isOpen', array(), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'getUnitOfWork', array(), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'getProxyFactory', array(), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'initializeObject', array('obj' => $obj), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'getFilters', array(), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'isFiltersStateClean', array(), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'hasFilters', array(), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer01887 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder5e53d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5e53d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder5e53d->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, '__get', ['name' => $name], $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        if (isset(self::$publicProperties193eb[$name])) {
            return $this->valueHolder5e53d->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5e53d;
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
        $targetObject = $this->valueHolder5e53d;
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
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5e53d;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder5e53d;
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
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, '__isset', array('name' => $name), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5e53d;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder5e53d;
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
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, '__unset', array('name' => $name), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5e53d;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5e53d;
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
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, '__clone', array(), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        $this->valueHolder5e53d = clone $this->valueHolder5e53d;
    }
    public function __sleep()
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, '__sleep', array(), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return array('valueHolder5e53d');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer01887 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer01887;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'initializeProxy', array(), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5e53d;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5e53d;
    }
}
