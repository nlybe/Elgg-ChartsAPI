<?php
/**
 * Elgg Charts API plugin
 * @package charts_api
 */

elgg_require_js("charts_api/charts_api");

$ch_labels = elgg_extract('ch_labels', $vars, '');
$ch_data = elgg_extract('ch_data', $vars, '');

$ch_labels_js = json_encode($ch_labels);
$ch_data_js = json_encode($ch_data);

echo elgg_view_field([
    '#type' => 'hidden',
    'id' => 'ch_labels_js',
    'name' => 'ch_labels_js',
    'value' => $ch_labels_js,
]);

echo elgg_view_field([
    '#type' => 'hidden',
    'id' => 'ch_data_js',
    'name' => 'ch_data_js',
    'value' => $ch_data_js,
]);

echo elgg_format_element('canvas', ['id' => 'myChart', 'style' => 'max-height: 600px;'], '');

unset($vars);
