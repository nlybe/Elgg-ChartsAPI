<?php
/**
 * Elgg Charts API plugin
 * @package charts_api
 */

namespace ChartsApi\Elgg;

use Elgg\DefaultPluginBootstrap;

class Bootstrap extends DefaultPluginBootstrap {
	
	const HANDLERS = [];
	
	/**
	 * {@inheritdoc}
	 */
	public function init() {
		$this->initViews();
	}

	/**
	 * Init views
	 *
	 * @return void
	 */
	protected function initViews() {
		
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
}
