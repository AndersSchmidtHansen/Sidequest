<div id="keen_chart_revenue_over_time"></div>
<script>
Keen.ready(function(){

    // ======================================
    // Create Revenue Over Time Line Chart
    // ======================================

    var revSeries = new Keen.Query('sum', {
        eventCollection: 'Stripe_Events',
        timeframe: 'this_6_months',
        targetProperty: 'data.object.amount',
        interval: 'monthly',
        filters: [{
            'property_name':'type',
            'operator':'eq',
            'property_value':'charge.succeeded'
        }]
    });

    // ===============================
    // Create a new Dataviz instance
    // ===============================

    var monthlyRevChart = new Keen.Dataviz()
      .el(document.getElementById('keen_chart_revenue_over_time'))
      .chartType('areachart')
      .chartOptions({
        hAxis: {
          slantedText: true,
          slantedTextAngle: 45
        },
        legend: { position: 'none' },
      })
      .height(450)
      .prepare(); // start spinner

    // ===============================
    // Run query and handle the result
    // ===============================

    client.run(revSeries, function(err, response){
        
        if (err) throw(err);
        
        monthlyRevChart
          .parseRequest(this)
          .title('Revenue per month in Dollars')
          .call(function(){
              this.dataset.updateColumn(1, function(value, index, column){
                return value / 100;
            });
          })
          .render();
    });
});
</script> 