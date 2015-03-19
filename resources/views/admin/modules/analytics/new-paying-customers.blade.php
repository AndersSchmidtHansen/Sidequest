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

    // ===============================
    // Run query and draw the result
    // ===============================

    client.draw(countNewPayingCustomers, document.getElementById('keen_chart_new_paying_customers'), {
        chartType: 'areachart',
        title: 'New Paying Customers (' + timeframe + ')',
        chartOptions: {
            hAxis: {
              slantedText: true,
              slantedTextAngle: 45
            },
            legend: { position: 'none' }
        },
        height: 450
    });

});  
</script> 