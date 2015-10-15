google.load("visualization", "1.1", {packages:["corechart"], language: 'En'});	  
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "/base_consulta2",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);
		 var options = {
		  width: 500,
		  height:300,
		  vAxis: {title: 'Días', format: "decimal"},
		  hAxis:  {title: 'Mes' },
          colors: ['#B8860B','#FF00FF', '#909090', '#B40431','#FFFF00', '#210B61'],
          
		  tooltip: { isHtml: true },
		  chartArea:{top:30},
          pointSize: 10,

        };  
        var chart = new google.visualization.LineChart(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };