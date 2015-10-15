google.load("visualization", "1.1", {packages:["corechart"], language: 'En'});	  
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "/data_coyuntura/03",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);

	
		
        var options = {
         hAxis:  {title: 'Mes' },
          width: 1000,
          vAxis: {title: 'Porcentaje', format: "decimal"},
		  chartArea:{top:30, left:30},
          colors: ['#FF9900','#000099'],
		  tooltip: { isHtml: true },
		  chartArea:{top:30},
          pointSize: 10,
        };

		  
        var chart = new google.visualization.LineChart(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };