<?php
/**
 * Created by PhpStorm.
 * User: alylson
 * Date: 24/07/18
 * Time: 08:41
 */
namespace Album;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}