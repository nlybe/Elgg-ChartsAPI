<?php
/**
 * Elgg Charts API plugin
 * @package charts_api
 */

return [
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
