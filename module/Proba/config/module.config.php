<?php
// ORIGINAL ZEND_TOOL module.config was empty
// Following one has been copy&pasted from git sample project


return array(	
	'controllers' => array(
        'invokables' => array(
            'Proba\Controller\DeFoc' => 'Proba\Controller\DeFocController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'proba' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Proba\Controller\DeFoc',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
	'view_manager' => array(
        'template_path_stack' => array(
            'Album' => __DIR__ . '/../view',
        ),
    ),
);