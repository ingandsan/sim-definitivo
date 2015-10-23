  google.load("visualization", "1.1", {packages:["corechart"], language: 'En'});	  
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "/base_consul5",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);

	
		
        var options = {
          
      backgroundColor: { fill:'transparent' },
		  chartArea:{top:30},
      legend: { position: 'bottom' },
          vAxis: {title: 'Porcentaje', format: "decimal"},
          tooltip: { isHtml: true },
		  pointSize: 7,
		  chartArea:{top:30, left:40, height: 400, width:50000},
		  fontSize:10,
		  colors: ['#0000FF','#B8860B'],
		   width: data.getNumberOfRows() * 50,
		  bar: { groupWidth: "50%" }
        };

		
        var chart = new google.visualization.LineChart(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };