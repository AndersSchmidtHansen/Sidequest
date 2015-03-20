<div id="keen_chart_new_paying_customers"></div>
<script>
Keen.ready(function(){

    // ========================================================
    // Create Line Chart of New Customers Paying for First Time
    // ========================================================

    var timeframe = 'this_2_months';

    var countNewPayingCustomers = new Keen.Query('count', {
        eventCollection: 'Stripe_Events',
        timeframe: timeframe,
        interval: 'monthly',
        filters: [{
            'property_name':'type',
            'operator':'eq',
            'property_value':'customer.subscription.created'
        }]
    });

    var newPayingCustomersChart = new Keen.Dataviz()
      .el(document.getElementById('keen_chart_new_paying_customers'))
      .chartType('areachart')
      .chartOptions({
        chartArea: {
          left: "8%",
          top: "2%",
          height: "88%",
          bottom: "0%",
          width: "92%"
        },  
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

    client.run(countNewPayingCustomers, function(err, response){
        
        if (err) throw(err);
        
        newPayingCustomersChart
          .parseRequest(this)
          .title(false)
          .render();
    });

});  
</script> 