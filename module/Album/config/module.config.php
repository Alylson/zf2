<?php
/**
 * Created by PhpStorm.
 * User: alylson
 * Date: 24/07/18
 * Time: 08:52
 */
return array(
    'controllers' => array(
        'invokables' => array(
            'Album\Controller\Album' => 'Album\Controller\AlbumController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'album' => __DIR__ . '/../view',
        ),
    ),
);