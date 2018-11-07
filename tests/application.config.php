<?php

return array(
    'magl_legacy_application' => array(
        'doc_root' => array('public-alternative/'),
    ),
    'view_manager' => array(
        'template_map' => array(
            'legacy-template' => __DIR__ . '/view/legacy-template.phtml',
            'layout/layout' => __DIR__ . '/view/dummy-template.phtml',
            'error' => __DIR__ . '/view/dummy-template.phtml',
            '404' => __DIR__ . '/view/dummy-template.phtml',
        ),
    ),
    'router' => array(
        'routes' => array(
            // example for transferring mod rewrite rules to zf2 routes
            'legacy-seo-calendar' => array(
                'type' => 'Zend\Mvc\Router\Http\Regex',
                'options' => array(
                    'regex' => '/calendar/(?<foo>.+)',
                    'defaults' => array(
                        'controller' => 'MaglLegacyApplication\Controller\Legacy',
                        'action' => 'index',
                        'script' => 'legacy-index.php',
                    ),
                    'spec' => '/',
                ),
            ),
        ),
    ),
);
