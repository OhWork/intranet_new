 <html>
  <head>
    <?php 
        $hdata = array("ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
        $data=array(5100,40000,9500,4335,11534,6510,7530,3540,9510,12519,6510,9510);
        $data2=array(5100,30000,9500,4335,11534,6510,7530,3540,9510,12519,6510,9510);
    ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'สวนสัตว์ดุสิต', 'สวนสัตว์เปิดเขาเขียว'],
          <?php
            for($i=0;$i<count($hdata);$i++){
              echo "['".$hdata[$i]."',".$data[$i].",".$data2[$i]."],";
            }
          ?>
        ]);
        
        var options = {
          title: 'รายงานผู้เข้าชมทุกสวนสัตว์',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>