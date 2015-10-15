google.load("visualization", "1.1", {packages:["bar"] , language: 'en'});
      
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "/data_coyuntura/6",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);
		
	
		
        var options = {
          
          width: 480,
		   legend: {position: 'none'},
		  vAxis: {title: 'Índice', format: "decimal"},
          
		  width: data.getNumberOfRows() * 50,
		  chartArea:{top:30},
		  colors: ['#000099'],
		  bar: { groupWidth: "50%" }
        };
		
	
    
		
        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };