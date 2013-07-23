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
                    'route'    => '/proba',
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
            'Proba' => __DIR__ . '/../view',
        ),
        'template_map' => array(
            'proba' => __DIR__ . '/../view/proba/defoc/index.phtml',
            'proba\defoc' => __DIR__ . '/../view/proba/defoc/index.phtml',
        ),
    ),
);