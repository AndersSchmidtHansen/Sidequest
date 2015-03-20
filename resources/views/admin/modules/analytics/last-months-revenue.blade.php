<div id="keen_chart_last_months_revenue"></div>
<script>
Keen.ready(function(){

    // ===============================
    // Calculate Stripe Revenue Metric
    // ===============================

    var revenue = new Keen.Query('sum', {
        eventCollection: 'Stripe_Events',
        timeframe: 'last_30_days',
        targetProperty: 'data.object.amount',
        filters: [{
            'property_name':'type',
            'operator':'eq',
            'property_value':'charge.succeeded'
        }]
    });


    // ===============================
    // Create a new Dataviz instance
    // ===============================

    var revMetric = new Keen.Dataviz()
      .el(document.getElementById('keen_chart_last_months_revenue'))
      .chartOptions({
          prefix: '$'
      })
      .colors(["#3498db"])
      .prepare(); // start spinner

    // ===============================
    // Run query and handle the result
    // ===============================

    client.run(revenue, function(err, response){
        // if (err) throw(err);
        revMetric
          .parseRawData({ result: Math.round(response.result/100) })
          .title('last 30 days')
          .render();
    });
});
</script> 