<html>
  <head>
  
    <script type="text/javascript" src="https://www.google.com/jsapi" charset="UTF-8"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	
	
	
	<?PHP
	$variable= $_REQUEST["id"];
	
    if ($variable=="01"){
	?>
	<script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar"], language: 'en'});
      
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "data_prue.php?id=01",
          dataType:"json",
          async: false
          }).responseText;    
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);

	
		
        var options = {
          
          width: 480,
		  tooltip: {isHtml: true},
		  legend: {position: 'none'},
		  vAxis: {title: 'Millones de pesos', format: "currency"},
          
		  colors: ['#FF9900'],
		  chartArea:{top:30, left:50},
          bar: { groupWidth: "50%" }
        };

		
        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
	<?php
	}
	
	if ($variable=="02"){
	?>
	<script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar"], language: 'en'});
      
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "data_prue.php?id=02",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);

	
		
        var options = {
          
          width: 480,
		  legend: {position: 'none'},
		  vAxis: {title: 'Millones de pesos', format: "currency"},
          
		  colors: ['#000099'],
		  chartArea:{top:30, left:50},
          bar: { groupWidth: "50%" }
        };

		
        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
	<?php
	}
	
	
	if ($variable=="03"){
	?>
	<script type="text/javascript">
      
		google.load("visualization", "1.1", {packages:["corechart"], language: 'En'});	  
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "data_prue.php?id=03",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);

	
		
        var options = {
         hAxis:  {title: 'Mes' },
          width: 480,
          vAxis: {title: 'Porcentaje', format: "decimal"},
		  chartArea:{top:30, left:50},
          colors: ['#FF9900','#000099'],
		  tooltip: { isHtml: true },
		  chartArea:{top:30},
          pointSize: 10,
        };

		  
        var chart = new google.visualization.LineChart(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
	<?php
	}
	if ($variable=="6556456"){
	?>
	<script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar"]});
      
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "data_prue.php?id=03",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);

	
		
        var options = {
          title: 'Indicador global de la actividad económica (IGAE)',
          width: 480,
          vAxis: {title: 'Índice', format: 'decimal'},
          chart: { subtitle: '(Índice de volumen físico 2008 = 100)' },
		
		  axes: {
            
          },
          bar: { groupWidth: "50%" }
        };

		
        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
	<?php
	}
		if ($variable=="04554465"){
	?>
	<script type="text/javascript">
       google.load('visualization', '1.1', {packages: ['line']});  
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "data_prue.php?id=06454",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);

	
		
        var options = {
          
          width: 480,
          vAxis: {title: 'Porcentaje', format: "decimal"},
          chartArea:{top:30},
          bar: { groupWidth: "50%" }
        };

		
        var chart = new google.charts.Line(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Line.convertOptions(options));
      };
    </script>
	<?php
	}
		if ($variable=="04"){
	?>
	<script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar"], language: 'en'});
      
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "data_prue.php?id=04",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);
		
	
		
        var options = {
          
          width: 480,
		   legend: {position: 'none'},
		   chartArea:{top:30},
		  vAxis: {title: 'Índice', format: "decimal"},
          
		  width: data.getNumberOfRows() * 50,
		  bar: { groupWidth: "50%" },
		  colors: ['#000099']
        };
		
	
    
		
        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
	<?php
	}
	if ($variable=="05"){
	?>
	<script type="text/javascript">
     google.load("visualization", "1.1", {packages:["corechart"], language: 'En'});	  
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "data_prue.php?id=05",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);

	
		
        var options = {
          legend: {position: 'none'},
		  
          width: 480,
          vAxis: {title: 'Porcentaje', format: "decimal"},
          
          colors: ['#000099'],
		  tooltip: { isHtml: true },
		  pointSize: 10,
		  chartArea:{top:30, left:40},
		  fontSize:9,
		  width: data.getNumberOfRows() * 50,
		  bar: { groupWidth: "50%" }
        };

		  
        var chart = new google.visualization.LineChart(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
	<?php
	}
	if ($variable=="06"){
	?>
	<script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar"] , language: 'en'});
      
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "data_prue.php?id=06",
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
    </script>
	<?php
	}
	if ($variable=="07"){
	?>
	<script type="text/javascript">
     google.load("visualization", "1.1", {packages:["corechart"], language: 'En'});	  
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "data_prue.php?id=07",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);

	
		
        var options = {
          legend: {position: 'none'},
		  
          width: 480,
		  tooltip: { isHtml: true },
		  pointSize: 10,
		  chartArea:{top:30, left:40},
		  fontSize:9,
          vAxis: {title: 'Porcentaje', format: "decimal"},
          colors: ['#000099'],
		  width: data.getNumberOfRows() * 50,
		  bar: { groupWidth: "50%" }
        };

		  
        var chart = new google.visualization.LineChart(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
	<?php
	}
	if ($variable=="08"){
	?>
	<script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar"], language: 'en'});
      
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "data_prue.php?id=08",
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
		  colors: ['#000099'],
		  chartArea:{top:30},
		  bar: { groupWidth: "50%" }
        };
		
	
    
		
        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
	<?php
	}
	if ($variable=="09"){
	?>
	<script type="text/javascript">
     google.load("visualization", "1.1", {packages:["corechart"], language: 'En'});	  
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "data_prue.php?id=09",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);

	
		
        var options = {
          legend: {position: 'none'},
		  
          width: 480,
          vAxis: {title: 'Porcentaje', format: "decimal"},
          
          colors: ['#000099'],
		  tooltip: { isHtml: true },
		  pointSize: 10,
		  chartArea:{top:30, left:40},
		  fontSize:9,
		  width: data.getNumberOfRows() * 50,
		  bar: { groupWidth: "50%" }
        };

		  
        var chart = new google.visualization.LineChart(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
	<?php
	}
	if ($variable=="10"){
	?>
	<script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar"], language: 'en'});
      
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "data_prue.php?id=10",
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
		  colors: ['#000099'],
		  chartArea:{top:30},
		  bar: { groupWidth: "50%" }
        };
		
	
    
		
        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
	<?php
	}
	if ($variable=="11"){
	?>
	<script type="text/javascript">
     google.load("visualization", "1.1", {packages:["corechart"], language: 'En'});	  
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "data_prue.php?id=11",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);

	
		
        var options = {
          legend: {position: 'none'},
		  
          width: 480,
          vAxis: {title: 'Porcentaje', format: "decimal"},
		  tooltip: { isHtml: true },
		  pointSize: 10,
		  chartArea:{top:30, left:40},
		  fontSize:9,
          
          colors: ['#000099'],
		  width: data.getNumberOfRows() * 50,
		  bar: { groupWidth: "50%" }
        };

		  
        var chart = new google.visualization.LineChart(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
	<?php
	}
	
	
	
	
	
	
	
	if ($variable=="0545556"){
	?>
	<script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar"], language: 'En'});
      
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "data_prue.php?id=06",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);

	
		
        var options = {
          title: 'Indicador global de la actividad económica (ITAEE)\nEstado de Puebla',
          width: 480,
          vAxis: {title: 'Porcentaje', format: "decimal"},
          chart: { subtitle: '(Índice de volumen físico 2008 = 100)' },
		
		  axes: {
            
          },
          bar: { groupWidth: "50%" }
        };

		
        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
	<?php
	}
	
	if ($variable=="12"){
	?>
	<script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar"], language: 'En'});
      
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "data_prue.php?id=12",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);

	
		
        var options = {
          
          width: 480,
          vAxis: {title: 'Personas', format: "decimal"},
          
		  colors: ['#000099'],
		  legend: {position: 'none'},
		  width: data.getNumberOfRows() * 80,
		  colors: ['#000099'],
		  chartArea:{top:30},
		  bar: { groupWidth: "50%" }
        };

		
        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
	<?php
	}
	
	if ($variable=="13"){
	?>
	<script type="text/javascript">
      
	  google.load("visualization", "1.1", {packages:["corechart"], language: 'En'});	  
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "data_prue.php?id=13",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);

	
		
        var options = {
          
          width: 480,
          vAxis: {title: 'Porcentaje', format: "decimal"},
          tooltip: { isHtml: true },
		  colors: ['#FF9900','#000099'],
		  pointSize: 10,
		  chartArea:{top:30, left:40},
		  fontSize:10,
		  width: data.getNumberOfRows() * 50,
		  bar: { groupWidth: "50%" }
        };

		
        var chart = new google.visualization.LineChart(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
	<?php
	}
	
	
	if ($variable=="14"){
	?>
	<script type="text/javascript">
      
	  google.load("visualization", "1.1", {packages:["corechart"], language: 'En'});	  
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "data_prue.php?id=14",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);

	
		
        var options = {
          
          width: 480,
		  chartArea:{top:30},
          vAxis: {title: 'Porcentaje', format: "decimal"},
          tooltip: { isHtml: true },
		  pointSize: 10,
		  chartArea:{top:30, left:40},
		  fontSize:10,
		  colors: ['#0000FF','#B8860B'],
		   width: data.getNumberOfRows() * 50,
		  bar: { groupWidth: "50%" }
        };

		
        var chart = new google.visualization.LineChart(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
	<?php
	}
	if ($variable=="15"){
	?>
	<script type="text/javascript">
      
	  google.load("visualization", "1.1", {packages:["corechart"], language: 'En'});	  
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "data_prue.php?id=15",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);

	
		
        var options = {
          
          width: 480,
          vAxis: {title: 'Porcentaje', format: "decimal"},
         
		  tooltip: { isHtml: true },
		  pointSize: 10,
		  chartArea:{top:30, left:40},
		  fontSize:9,
		  colors: ['#000099','#FF9900'],
		   width: data.getNumberOfRows() * 80,
		  bar: { groupWidth: "50%" }
        };

		
        var chart = new google.visualization.LineChart(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
	<?php
	}
	if ($variable=="16"){
	?>
	<script type="text/javascript">
      
	  google.load("visualization", "1.1", {packages:["corechart"], language: 'En'});	  
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "data_prue.php?id=16",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);

	
		
        var options = {
          
          width: 480,
		  tooltip: { isHtml: true },
		  pointSize: 10,
		  chartArea:{top:30, left:40},
		  fontSize:9,
          vAxis: {title: 'Porcentaje', format: "decimal"},
          
		
		  colors: ['#00BFFF','#FF9900'],
		   width: data.getNumberOfRows() * 80,
		  bar: { groupWidth: "50%" }
        };

		
        var chart = new google.visualization.LineChart(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
	<?php
	}
	if ($variable=="17"){
	?>
	<script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar"], language: 'en'});
      
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "data_prue.php?id=17",
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
    </script>
	<?php
	}
	if ($variable=="18"){
	?>
	<script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar"], language: 'en'});
      
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "data_prue.php?id=18",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);

	
		
        var options = {
          
          width: 480,
		  legend: {position: 'none'},
		  chartArea:{top:30},
		  vAxis: {title: 'Porcentaje', format: "decimal"},
          
		  colors: ['#00BFFF'],
		  width: data.getNumberOfRows() * 100,
          bar: { groupWidth: "50%" }
        };

		
        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
	<?php
	}
	if ($variable=="19"){
	?>
	<script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar"], language: 'en'});
      
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "data_prue.php?id=19",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);

	
		
        var options = {
          
          width: 480,
		  legend: {position: 'none'},
		  chartArea:{top:30},
		  vAxis: {title: 'Días', format: "decimal"},
          
		  colors: ['#00BFFF'],
		  width: data.getNumberOfRows() * 80,
          bar: { groupWidth: "50%" }
        };

		
        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
	<?php
	}
	if ($variable=="21"){
	?>
	<script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar"], language: 'en'});
      
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "data_prue.php?id=21",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);

	
		
        var options = {
          
          width: 480,
		  legend: {position: 'none'},
		  vAxis: {title: 'Millones de dolares', format: "currency"},
          
		  chartArea:{top:30},
		  colors: ['#00BFFF'],
		  tooltip: { isHtml: true },
		  width: data.getNumberOfRows() * 80,
          bar: { groupWidth: "50%" }
        };

		
        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
	<?php
	}
	?>
	
  </head>
  <body>
  <?php
	if ($variable=="01"){
	?>
    <DIV ALIGN="center"><h3>Producto Interno Bruto Nacional<br><font style="opacity:.4"> Millones de pesos precios constantes de 2008</font></h3></div>
     <?php
	}
	?>
	<?php
	if ($variable=="02"){
	?>
    <DIV ALIGN="center"><h3>Producto Interno Bruto Estado de Puebla<br><font style="opacity:.4"> Millones de pesos precios constantes de 2008</font></h3></div>
     <?php
	}
	?>
	<?php
	if ($variable=="03"){
	?>
    <DIV ALIGN="center"><h3>Producto Interno Bruto<br><font style="opacity:.4"> Variación % real anual</font></h3></div>
     <?php
	}
	?>
	<?php
	if ($variable=="04"){
	?>
    <DIV ALIGN="center"><h3>Indicador global de la actividad económica (ITAEE)<br>Estado de Puebla<br><font style="opacity:.4">(Índice de volumen físico 2008 = 100)</font></h3></div>
     <?php
	}
	?>	
	<?php
	if ($variable=="05"){
	?>
    <DIV ALIGN="center"><h3>Indicador global de la actividad económica (ITAEE)<br>Estado de Puebla<br><font style="opacity:.4">Variación % anual respecto al mismo trimestre del año anterior</font></h3></div>
     <?php
	}
	?>	
	<?php
	if ($variable=="06"){
	?>
    <DIV ALIGN="center"><h3>Indicador global de la actividad económica (ITAEE)<br>Actividades Primarias<br>Estado de Puebla<br><font style="opacity:.4">(Índice de volumen físico 2008 = 100)</font></h3></div>
     <?php
	}
	?>	
	<?php
	if ($variable=="07"){
	?>
    <DIV ALIGN="center"><h3>Indicador global de la actividad económica (ITAEE)<br>Actividades Primarias<br>Estado de Puebla<br><font style="opacity:.4">Variación % anual respecto al mismo trimestre del año anterior</font></h3></div>
     <?php
	}
	?>	
	<?php
	if ($variable=="08"){
	?>
    <DIV ALIGN="center"><h3>Indicador global de la actividad económica (ITAEE)<br>Actividades Secundarias<br>Estado de Puebla<br><font style="opacity:.4">(Índice de volumen físico 2008 = 100)</font></h3></div>
     <?php
	}
	?>	
	<?php
	if ($variable=="09"){
	?>
    <DIV ALIGN="center"><h3>Indicador global de la actividad económica (ITAEE)<br>Actividades Secundarias<br>Estado de Puebla<br><font style="opacity:.4">Variación % anual respecto al mismo trimestre del año anterior</font></h3></div>
     <?php
	}
	?>	
	<?php
	if ($variable=="10"){
	?>
    <DIV ALIGN="center"><h3>Indicador global de la actividad económica (ITAEE)<br>Actividades Tercearias<br>Estado de Puebla<br><font style="opacity:.4">(Índice de volumen físico 2008 = 100)</font></h3></div>
     <?php
	}
	?>	
	<?php
	if ($variable=="11"){
	?>
    <DIV ALIGN="center"><h3>Indicador global de la actividad económica (ITAEE)<br>Actividades Tercearias<br>Estado de Puebla<br><font style="opacity:.4">Variación % anual respecto al mismo trimestre del año anterior</font></h3></div>
     <?php
	}
	?>	
	<?php
	if ($variable=="12"){
	?>
    <DIV ALIGN="center"><h3>Trabajadores Asegurados en el IMSS<br>Cifras INEGI<br>Ciudad de Puebla<br><font style="opacity:.4">(Número de personas)</font></h3></div>
     <?php
	}
	?>	
	<?php
	if ($variable=="13"){
	?>
    <DIV ALIGN="center"><h3>Tasa de desocupación trimestral<br>Nacional - Estado de Puebla<br><font style="opacity:.4">(%)</font></h3></div>
     <?php
	}
	?>	
	<?php
	if ($variable=="14"){
	?>
    <DIV ALIGN="center"><h3>Tasa de desocupación trimestral<BR>Ciudad de Puebla - Urbana agregado 32 ciudades<br><font style="opacity:.4">(%)</font></h3></div>
     <?php
	}
	?>	
	<?php
	if ($variable=="15"){
	?>
    <DIV ALIGN="center"><h3>Tasa de desocupación mensual<BR>Nacional - Estado de Puebla<br><font style="opacity:.4">(%)</font></h3></div>
     <?php
	}
	?>	
	<?php
	if ($variable=="16"){
	?>
    <DIV ALIGN="center"><h3>Inflación interanual<BR>Nacional - Ciudad de Puebla<br><font style="opacity:.4">Variación % respecto al mismo mes del año anterior</font></h3></div>
     <?php
	}
	?>	
	
	<?php
	if ($variable=="17"){
	?>
    <DIV ALIGN="center"><h3>Llegada de turistas total<BR> Ciudad de Puebla<br><font style="opacity:.4">(Número de personas)</font></h3></div>
     <?php
	}
	?>	
	<?php
	if ($variable=="18"){
	?>
    <DIV ALIGN="center"><h3>Porcentaje de ocupación hotelera<br> Ciudad de Puebla<br><font style="opacity:.4">(%)</font></h3></div>
     <?php
	}
	?>	
	<?php
	if ($variable=="19"){
	?>
    <DIV ALIGN="center"><h3>Estadía Promedio<br>Ciudad de Puebla<br><font style="opacity:.4">(Días)</font></h3></div>
     <?php
	}
	?>	
	<?php
	if ($variable=="21"){
	?>
    <DIV ALIGN="center"><h3>Inversión Extranjera Directa Estado de Puebla<br><font style="opacity:.4">(Millones de dolares)</font></h3></div>
     <?php
	}
	?>	
	
	
	
	
	
	
    <div id="top_x_div" style="width: 530px; height: 300px; overflow-x: scroll;overflow-y: hidden;"></div>
		<?PHP
	$variable= $_REQUEST["id"];
	if ($variable=="01"){
		$vari="07";
		};
		if ($variable=="02"){
		$vari="07";
		};
		if ($variable=="03"){
		$vari="08";
		};
		if ($variable=="04"){
		$vari="85";
		};
		if ($variable=="05"){
		$vari="85";
		};
		if ($variable=="06"){
		$vari="43";
		};
		if ($variable=="07"){
		$vari="43";
		};
		if ($variable=="08"){
		$vari="43";
		};
		if ($variable=="09"){
		$vari="43";
		};
		if ($variable=="10"){
		$vari="43";
		};
		if ($variable=="11"){
		$vari="43";
		};
		if ($variable=="12"){
		$vari="96";
		};
		if ($variable=="13"){
		$vari="92";
		};
		if ($variable=="14"){
		$vari="92";
		};
		if ($variable=="15"){
		$vari="93";
		};
		if ($variable=="16"){
		$vari="78";
		};
		if ($variable=="17"){
		$vari="45";
		};
		if ($variable=="18"){
		$vari="48";
		};
		if ($variable=="19"){
		$vari="49";
		};
	
		if ($variable=="21"){
		$vari="63";
		};
	echo "<table align='left'><tr><td><div align='center'><button align='right'><a href='impre.php?id=".$vari."' target='_blank'>Exportar</a></button><button align='right' onclick='mos()'>Definición</button><button align='right' onclick='mostrardiv()'>Metadato</button></div></td></tr></table>";
    
	?>
	<br><br><br>
	
	<script> 
function mos() { 
table = document.getElementById('flo'); 
table.style.display = ''; 
} 
function cer() { 
table = document.getElementById('flo'); 
table.style.display='none'; 
} 
</script> 
	
	<script> 
function mostrardiv() { 
table = document.getElementById('flotante'); 
table.style.display = ''; 
} 
function cerrar() { 
table = document.getElementById('flotante'); 
table.style.display='none'; 
} 
</script> 
</head> 
<?PHP

		include_once 'config/conex.php'; 
		$link = conectarse();
		if ($variable=="01"){
		$vari="07";
		};
		if ($variable=="02"){
		$vari="07";
		};
		if ($variable=="03"){
		$vari="08";
		};
		if ($variable=="04"){
		$vari="85";
		};
		if ($variable=="05"){
		$vari="85";
		};
		if ($variable=="06"){
		$vari="43";
		};
		if ($variable=="07"){
		$vari="43";
		};
		if ($variable=="08"){
		$vari="43";
		};
		if ($variable=="09"){
		$vari="43";
		};
		if ($variable=="10"){
		$vari="43";
		};
		if ($variable=="11"){
		$vari="43";
		};
		if ($variable=="12"){
		$vari="96";
		};
		if ($variable=="13"){
		$vari="92";
		};
		if ($variable=="14"){
		$vari="92";
		};
		if ($variable=="15"){
		$vari="93";
		};
		if ($variable=="16"){
		$vari="78";
		};
		if ($variable=="17"){
		$vari="45";
		};
		if ($variable=="18"){
		$vari="48";
		};
		if ($variable=="19"){
		$vari="49";
		};
	
		if ($variable=="21"){
		$vari="63";
		};
		$Select = "select * from meta where id_variable=". $vari . " order by id_variable";
		$res = mysqli_query($link, $Select);
?>
<table id="flotante" style="display:none;width:500px">
<tr>
<td>
<table>
<B>METADATO</B>:
<tr><td>Variable:</td>
<?php
		while ($row = mysqli_fetch_array($res)) {
		echo "<td>". $row["var"] . "</td>";
		
?>

</tr>
<tr><td>Unidad de Medida:</td>
<?php
		
		echo "<td>". $row["um"] . "</td>";
		
?>

</tr>
<tr><td>Tema:</td>
<?php
		
		echo "<td>". $row["tema"] . "</td>";
		
?>
</tr>
<tr><td>Subtema:</td>
<?php
		
		echo "<td>". $row["subtema"] . "</td>";
		
?>
</tr>
<tr><td>Tipo:</td>
<?php
		
		echo "<td>". $row["tip_var"] . "</td>";
		
?>
</tr>
<tr><td>Interpretación:</td>
<?php
		
		echo "<td>". $row["inter"] . "</td>";
		
?>
</tr>
<tr><td>Periodicidad:</td>
<?php
		
		echo "<td>". $row["per"] . "</td>";
		
?>
</tr>
<tr><td>Cobertura Temporalidad Nacional:</td>
<?php
		
		echo "<td>". $row["Cob_tem_nac"] . "</td>";
		
?>
</tr>
<tr><td>Cobertura Temporalidad Estatal:</td>
<?php
		
		echo "<td>". $row["Cob_tem_est"] . "</td>";
		
?>
</tr>
<tr><td>Cobertura Geográfica:</td>
<?php
		
		echo "<td>". $row["cob_geo"] . "</td>";
		
?>
</tr>
<tr><td>Fuente:</td>
<?php
		
		echo "<td>". $row["fuente"] . "</td>";
		
?>
</tr>
<tr><td>Nota:</td>
<?php
		echo "<td>". $row["nota"] . "</td>";
		};
?>
</tr>
</table>
<a href="javascript:cerrar();">cerrar</a> 
<br>
<br>
<br>
</td> 
</tr> 
</table> 

<?PHP
		include_once 'config/conex.php'; 
		$link = conectarse();
		if ($variable=="01"){
		$vari="07";
		};
		if ($variable=="02"){
		$vari="07";
		};
		if ($variable=="03"){
		$vari="08";
		};
		if ($variable=="04"){
		$vari="85";
		};
		if ($variable=="05"){
		$vari="85";
		};
		if ($variable=="06"){
		$vari="43";
		};
		if ($variable=="07"){
		$vari="43";
		};
		if ($variable=="08"){
		$vari="43";
		};
		if ($variable=="09"){
		$vari="43";
		};
		if ($variable=="10"){
		$vari="43";
		};
		if ($variable=="11"){
		$vari="43";
		};
		if ($variable=="12"){
		$vari="96";
		};
		if ($variable=="13"){
		$vari="92";
		};
		if ($variable=="14"){
		$vari="92";
		};
		if ($variable=="15"){
		$vari="93";
		};
		if ($variable=="16"){
		$vari="78";
		};
		if ($variable=="17"){
		$vari="45";
		};
		if ($variable=="18"){
		$vari="48";
		};
		if ($variable=="19"){
		$vari="49";
		};
	
		if ($variable=="21"){
		$vari="63";
		};
		$Select = "select * from def where id_variable=". $vari . "  order by id_variable";
		$res = mysqli_query($link, $Select);
?>

<table id="flo" style="display:none;">
<tr>
<td>
<B>DEFINICIÓN</B>:
<table WIDTH="500px">

<?php
		
		while ($row = mysqli_fetch_array($res)) {
		
		echo "<tr WIDTH='100%'><td WIDTH='50%' ALIGN='justify'>". $row["DATO"] . ":</td><td WIDTH='50%' ALIGN='justify'>". $row["DEF"] . "</tr></td>";			
		};
?>
</tr>
</table>
<a href="javascript:cer();">cerrar</a> 
<br><br><br><br>
</td> 
</tr> 
</table> 

			

  </body>
</html>