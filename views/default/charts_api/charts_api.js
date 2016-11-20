define(function (require) {
    var elgg = require('elgg');
    var $ = require('jquery');
    require('charts_bundle_js');
       
    $(document).ready(function() {
        var ctx = document.getElementById("myChart");
        
        var ch_labels_js = $('#ch_labels_js').val();
        var ch_data_js = $('#ch_data_js').val();
        
        var parsed = JSON.parse(ch_labels_js);
        var ch_labels = [];
        for (var x in parsed) {
            ch_labels.push(parsed[x]);
        }
        
        var parsed = JSON.parse(ch_data_js);
        var ch_data = [];
        for (var x in parsed) {
            ch_data.push(parsed[x]);
        }
        
        var barChartData = {
            labels : ch_labels,
            datasets: [{
                label: '# of Views',
                data: ch_data,
                backgroundColor: 'rgba(84, 157, 198, 0.8)',
                borderColor: 'rgba(255,99,132,1)',
                borderWidth: 0
            }]
        };        
       
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    });
    
});
