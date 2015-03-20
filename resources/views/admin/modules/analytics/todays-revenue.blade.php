<div id="keen_chart_todays_revenue"></div>
<script>
Keen.ready(function(){

    // ===============================
    // Calculate Stripe Revenue Metric
    // ===============================

    var revenue = new Keen.Query('sum', {
        eventCollection: 'Stripe_Events',
        timeframe: 'today',
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
      .el(document.getElementById('keen_chart_todays_revenue'))
      .chartOptions({
          prefix: '$'
      })
      .colors(["#27ae60"])
      .prepare(); // start spinner

    // ===============================
    // Run query and handle the result
    // ===============================

    client.run(revenue, function(err, response){
        // if (err) throw(err);
        revMetric
          .parseRawData({ result: Math.round(response.result/100) })
          .title('earned today')
          .render();
    });
});
</script> 