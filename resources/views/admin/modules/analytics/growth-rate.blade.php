<div id="keen_chart_growth_rate"></div>
<script>

Keen.ready(function(){

    // ===============================
    // Calculate Stripe Revenue Metric
    // ===============================

    var currentWeekRevenue = new Keen.Query('sum', {
        eventCollection: 'Stripe_Events',
        timeframe: 'this_week',
        targetProperty: 'data.object.amount',
        filters: [{
            'property_name':'type',
            'operator':'eq',
            'property_value':'charge.succeeded'
        }]
    });

    var firstWeekRevenue = new Keen.Query('sum', {
        eventCollection: 'Stripe_Events',
        timeframe: 'last_week',
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
      .el(document.getElementById('keen_chart_growth_rate'))
      .chartOptions({
          suffix: '%'
      })
      .colors(['#8e44ad'])
      .prepare(); // start spinner

    // ===============================
    // Run query and handle the result
    // ===============================

    client.run([currentWeekRevenue, firstWeekRevenue], function(err, res){
      
      var $currentWeekRevenue = res[0].result,
          $firstWeekRevenue = res[1].result,
          $growthRate = (Math.pow($currentWeekRevenue/$firstWeekRevenue,1/2)-1) * 100,
          $calculatedGrowthRate = Math.round($growthRate * 100) / 100;

      if (err) {
        revMetric.error(err.message);
      }
      else {
        revMetric
          .parseRawData({
            result: $calculatedGrowthRate
          })
          .title('since last week')
          .render();
      }
    });

});
</script>
<br>
<p><em>“A good growth rate during YC is 5-7% a week. If you can hit 10% a week you're doing exceptionally well. If you can only manage 1%, it's a sign you haven't yet figured out what you're doing.”</em> – <a href="http://www.paulgraham.com/growth.html" target="_blank">Paul Graham</a>, Y Combinator</p>