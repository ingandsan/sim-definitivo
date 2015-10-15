google.load("visualization", "1.1", {packages:["bar"], language: 'en'});
      
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "/base_consul4",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);

	
		
        var options = {
          
          width: 480,
		  legend: {position: 'none'},
		  vAxis: {title: 'Número de personas', format: "decimal"},
          
		  colors: ['#00BFFF'],
		  
		  chartArea:{top:30},
		  width: data.getNumberOfRows() * 100,
          bar: { groupWidth: "50%" }
        };

		
        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };