<?php
/**
 * Created by PhpStorm.
 * User: alylson
 * Date: 30/07/18
 * Time: 21:18
 */

namespace Anoreg;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}