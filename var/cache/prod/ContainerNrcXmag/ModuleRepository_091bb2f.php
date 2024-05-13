<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5e53d = null;
    private $initializer01887 = null;
    private static $publicProperties193eb = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'getList', array(), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'getInstalledModules', array(), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'getMustBeConfiguredModules', array(), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'getUpgradableModules', array(), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'setActionUrls', array('collection' => $collection), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        return $this->valueHolder5e53d->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer01887 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder5e53d) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder5e53d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder5e53d->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer01887 && ($this->initializer01887->__invoke($valueHolder5e53d, $this, '__get', ['name' => $name], $this->initializer01887) || 1) && $this->valueHolder5e53d = $valueHolder5e53d;
        if (isset(self::$publicProperties193eb[$name])) {
            return $this->valueHolder5e53d->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
