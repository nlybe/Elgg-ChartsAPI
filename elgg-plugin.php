<?php
/**
 * Elgg Charts API plugin
 * @package charts_api
 */

 use ChartsApi\Elgg\Bootstrap;

return [
    'plugin' => [
        'name' => 'Charts API',
		'version' => '5.5',
		'dependencies' => [],
	],	
    'bootstrap' => Bootstrap::class,
    'actions' => [],
    'routes' => [],
    'widgets' => [],
    'views' => [
        'default' => [
            'chart_horizontal.js' => __DIR__ . '/vendors/bower_components/Chart.HorizontalBar.js/Chart.HorizontalBar.js',          
        ],
    ],
    'upgrades' => [],
];
