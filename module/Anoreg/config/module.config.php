<?php
/**
 * Created by PhpStorm.
 * User: alylson
 * Date: 24/07/18
 * Time: 08:52
 */
namespace Anoreg;

use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;
use Anoreg\Controller\AnoregController;

return array(
    'router' => array(
        'routes' => array(
            'anoreg' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/anoreg[/][:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Controller\AnoregController::class',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'anoreg' => __DIR__ . '/../view',
        ),
    ),
);