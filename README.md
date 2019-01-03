Charts API for Elgg
===================

![Elgg 3.0](https://img.shields.io/badge/Elgg-3.0-orange.svg?style=flat-square)

[Chart.js](http://www.chartjs.org/) integration in Elgg. This plugin offers an API which can be used from other plugins on Elgg platforms in order to populate information in charts using the Chart.js.

At the moment plugin offers the option to create a simple Bar Chart.

## How to Use

The sample code below will create a Bar Chart.

```php
// set an array with labels 
$ch_labels = [];
// set an array with data 
$ch_data = [];

$entities = elgg_get_entities($options);
foreach (entities as $e) {
    array_push($ch_labels, $e->title);
    array_push($ch_data, calculate_likes($e));
}
$vars['ch_labels'] = $ch_labels;
$vars['ch_data'] = $ch_data;
   
echo elgg_view('charts_api/charts_api', $vars);
```

## Future Tasks List

- [ ] Make a class for charts, so all parameters will be passed by using methods of this class
- [ ] Integrate more options from [Chart.js](http://www.chartjs.org/docs/) like select type of chart, chart styling etc
