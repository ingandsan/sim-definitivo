google.load("visualization", "1.1", {packages:["corechart"], language: 'En'});	  
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "/data_coyuntura/16",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);

	
		
        var options = {
          legend: { position: 'bottom' },
      backgroundColor: { fill:'transparent' },
		  tooltip: { isHtml: true },
		  pointSize: 7,
		  chartArea:{top:30, left:40, height: 400, width:50000},

		  fontSize:8,
          vAxis: {title: 'Porcentaje', format: "decimal"},
          
		
		  colors: ['#00BFFF','#FF9900'],
		   width: data.getNumberOfRows() * 70,
		  bar: { groupWidth: "100%" }
        };

		
        var chart = new google.visualization.LineChart(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };