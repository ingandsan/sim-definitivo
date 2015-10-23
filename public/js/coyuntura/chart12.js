google.load("visualization", "1.1", {packages:["bar"], language: 'En'});
      
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "/data_coyuntura/12",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);

	
		
        var options = {
          backgroundColor: { fill:'transparent' },
          
          vAxis: {title: 'Personas', format: "decimal"},
          
		  colors: ['#000099'],
		  legend: {position: 'none'},
		  width: data.getNumberOfRows() * 80,
		  
		  chartArea:{top:30, left:40, height: 400, width:50000},
		  bar: { groupWidth: "50%" }
        };

		
        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };