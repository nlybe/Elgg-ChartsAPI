<?php
/**
 * Elgg Charts API plugin
 * @package charts_api
 */
 
elgg_register_event_handler('init', 'system', 'charts_api_init');

/**
 * charts_api plugin initialization functions.
 */
function charts_api_init() {
 	
    elgg_define_js('charts_bundle_js', array(
        'src' => "//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.min.js", 
        'deps' => array('jquery'),
        'exports' => 'charts_bundle_js',
    ));
    
    elgg_define_js('charts_js', array(
        'src' => "//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js", 
        'deps' => array('jquery'),
        'exports' => 'charts_js',
    ));    
    
    elgg_define_js('chart_horizontal', array(
        'deps' => array('jquery', 'charts_js'),
        'exports' => 'chart_horizontal',
    )); 
}
