<div id="keen_chart_total_customers"></div>
<script>
Keen.ready(function(){

  var customers = {{ $total_customers or 5 }};
  
  var chart = new Keen.Dataviz()
    .el(document.getElementById('keen_chart_total_customers'))
    .parseRawData({ result: customers })
    .chartType("metric")
    .colors(["#f39c12"])
    .title("customers")
    .render();

});  
</script>