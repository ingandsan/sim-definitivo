google.load("visualization", "1.1", {packages:["corechart"], language: 'En'});	  
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "/base_consulta3",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);

	var options = {
		  width: 700,
      height:450,
      backgroundColor: { fill:'transparent' },
		  vAxis: {title: 'Millones de dólares', format: "currency"},
		  hAxis:  {title: 'Trimestre' },
      colors: ['#DA81F5','#0431B4','#FF3300','#FFFF00', '#00BFFF', '#E3CEF6'],
		  tooltip: { isHtml: true },
		  chartArea:{top:30},
          pointSize: 7,

        };
		
        var chart = new google.visualization.LineChart(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };