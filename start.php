<?php
/**
 * Elgg Charts API plugin
 * @package charts_api
 */
 
require_once(dirname(__FILE__) . '/lib/hooks.php');
require_once(dirname(__FILE__) . '/lib/widgets.php');

elgg_register_event_handler('init', 'system', 'charts_api_init');

/**
 * charts_api plugin initialization functions.
 */
function charts_api_init() {
 	
    // register a library of helper functions
    elgg_register_library('elgg:charts_api', elgg_get_plugins_path() . 'charts_api/lib/charts_api.php');
    
    // register extra css
    elgg_extend_view('elgg.css', 'charts_api/charts_api.css');
    elgg_extend_view('css/admin', 'charts_api/charts_api_admin.css');
    
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
        
//    elgg_define_js('datatables', array(
//        'deps' => array('jquery'),
//        'exports' => 'datatables',
//    ));
    
    // loads the widgets
    // charts_api_widgets_init();

    // Register actions admin
    // $action_path = elgg_get_plugins_path() . 'charts_api/actions/charts_api';
    
}


?>
