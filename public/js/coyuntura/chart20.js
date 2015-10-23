    google.load('visualization', '1.1', {packages: ['line'], language: 'En'});  
    google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "/data_coyuntura/20", 
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);

  
    
        var options = {
          
      legend: { position: 'bottom' },
          width: 600,
        height: 500,
          vAxis: {title: 'Millones de Dolares', format: "currency"},
        series: {1: {type: 'line'},0: {type: 'bars'}},
      backgroundColor: { fill:'transparent' },
      
      
      pointSize: 7,
      tooltip: { isHtml: true },
      chartArea:{top:30},
          hAxis: {title: 'Año'},
          colors: ['#000099','#C0C0C0']
        };

      
    var chart = new google.visualization.ComboChart(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Line.convertOptions(options));
      };
