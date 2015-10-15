		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<?php
		header('Pragma: public'); 
		header('Expires: Sat, 26 Jul 1997 05:00:00 GMT'); // Date in the past    
		header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); 
		header('Cache-Control: no-store, no-cache, must-revalidate'); // HTTP/1.1 
		header('Cache-Control: pre-check=0, post-check=0, max-age=0'); // HTTP/1.1 
		header('Pragma: no-cache'); 
		header('Expires: 0'); 
		header('Content-Transfer-Encoding: none'); 
		header('Content-Type: application/vnd.ms-excel'); // This should work for IE & Opera 
		header('Content-type: application/x-msexcel'); // This should work for the rest 
		header('Content-Disposition: attachment; filename="SIM.xls"');
		include_once('inegifacil/INEGI_library.php');
		$inegi = new INEGI_library();
		


		echo '<table>';
		echo '<tr>';
		echo '<td>';







switch ($variable) {
case 4:
?>
<caption  align='center'>Producto Interno Bruto (PIB)</caption>
<caption align='center'>Millones de pesos a precios corrientes</caption>
<thead align='center' border='2px'>
<tr width:'100%' align='center' border='2px'>
<th scope='col' width:'33.3%' align='center' border='2px'>Año</th>
<th scope='col' width:'33.3%' align='center' border='2px'>Nacional</th>
<th scope='col' width:'33.3%' align='center' border='2px'>Estado de<br>Puebla</th>
</tr>
</thead>
<tbody align='center'>
	<?php
		$indice = 388100; //
		$lugar = 00;
		$indice1 = 388121; //
		$lugar1 = 21;
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i]['OBS_VALUE']);
		$array4 = json_encode($response1 ['indices'][$i]['TIME_PERIOD']);
		$array5 = json_encode($response1 ['indices'][$i]['OBS_VALUE']);
		$texto=str_replace('"','',$array); 
		$texto=str_replace('\/','',$texto); 
		$texto2=str_replace('"','',$array2); 
		$texto11=str_replace('"','',$array4); 
		$texto11=str_replace('\/','',$texto11); 
		$texto12=str_replace('"','',$array5); 

		echo '<tr>';
		echo '<td>'.$texto .'</td>';
		echo '<td>'.number_format($texto2, 2, '.', ' ') .'</td>';
		if ( $texto==$texto11){
		echo '<td>'.number_format($texto12, 2, '.', ' ') .'</td>';
		};	
		echo '</tr>';
		};
		$i++;
		echo "</tbody>";
break;
case 7:
?>
<caption  align='center'>Producto Interno Bruto (PIB)</caption>
<caption  align='center'>Millones de pesos a precios constantes de 2008</caption>";
<thead  align='center' border='2px'>
<tr width:'100%' align='center' border='2px'>
<th scope='col' width:'33.3%' align='center' border='2px'>Año</th>
<th scope='col' width:'33.3%' align='center' border='2px'>Nacional</th>
<th scope='col' width:'33.3%' align='center' border='2px'>Estado de<br>Puebla</th>
</tr>
</thead>
<tbody align='center'>
	<?php
		$indice = 392984; //
		$lugar = 00;
		$indice1 = 393761; //
		$lugar1 = 21;
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i]['OBS_VALUE']);
		$array4 = json_encode($response1 ['indices'][$i]['TIME_PERIOD']);
		$array5 = json_encode($response1 ['indices'][$i]['OBS_VALUE']);
		$texto=str_replace('"','',$array); 
		$texto=str_replace('\/','',$texto); 
		$texto2=str_replace('"','',$array2); 
		$texto11=str_replace('"','',$array4); 
		$texto11=str_replace('\/','',$texto11); 
		$texto12=str_replace('"','',$array5); 
		echo '<tr>';
		echo '<td>'.$texto .'</td>';
		echo '<td>'.number_format($texto2, 2, '.', ' ') .'</td>';
		if ( $texto==$texto11){
		echo '<td>'.number_format($texto12, 2, '.', ' ') .'</td>';
		};	
		echo '</tr>';
		};
		$i++;
		echo "</tbody>";		
	break;
	case 8:
	?>
		<caption  align='center'>Producto Interno Bruto (PIB)</caption>
		<caption  align='center'>Variación % real anual</caption>
		<thead  align='center' border='2px'>
           <tr align='center' border='2px'>
            <th scope='col' width:'33.3%' align='center' border='2px'>Año</th>
             <th scope='col' width:'33.3%' align='center' border='2px'>Nacional</th>
             <th scope='col' width:'33.3%' align='center' border='2px'>Estado de<br>Puebla</th>
           </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice = 386879; //
		$lugar = 00;
		$indice1 = 386900; //
		$lugar1 = 21;
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i]['OBS_VALUE']);
		$array4 = json_encode($response1 ['indices'][$i]['TIME_PERIOD']);
		$array5 = json_encode($response1 ['indices'][$i]['OBS_VALUE']);
		$texto=str_replace('"','',$array); 
		$texto=str_replace('\/','',$texto); 
		$texto2=str_replace('"','',$array2); 
		$texto11=str_replace('"','',$array4); 
		$texto11=str_replace('\/','',$texto11); 
		$texto12=str_replace('"','',$array5); 
		echo '<tr>';
		echo '<td>'.$texto .'</td>';
		echo '<td>'.number_format($texto2, 2, '.', ' ') .'</td>';
		if ( $texto==$texto11){
		echo '<td>'.number_format($texto12, 2, '.', ' ') .'</td>';
		};	
		echo '</tr>';
		};
		$i++;
		echo "</tbody>";
break;

case 12:
		
		
	?>	
	
		<caption width:'100%' align='center'>PIB por Actividad Económica Estado de Puebla</caption>
		<caption width:'100%' align='center'>(Millones de pesos a precios de 2008)</caption>
		
		<thead width:'100%' align='center' border='2px'>
           <tr width:'100%' align='center' border='2px'>
             <th scope='col' width:'20%' align='center' border='2px'>Periodo</th>
             <th scope='col' width:'20' align='center' border='2px'>Total de la<br>actividad<br>económica</th>
             <th scope='col' width:'20%' align='center' border='2px'>Actividades<br>primarias</th>
			 <th scope='col' width:'20' align='center' border='2px'>Actividades<br>secundarias</th>
             <th scope='col' width:'20%' align='center' border='2px'>Actividades<br>tercearias</th>
          </tr>
        </thead>


		<tbody align='center'>
		<?php
		$indice = 383237; //
		$lugar = 21;
		$indice1 = 383270; //
		$lugar1 = 21;
		$indice2 = 383336; //
		$lugar2 = 21;
		$indice3 = 383963; //
		$lugar3 = 21;
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		$response3 = $inegi->index($indice3, $lugar3);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i]['OBS_VALUE']);
		$array4 = json_encode($response1 ['indices'][$i]['TIME_PERIOD']);
		$array5 = json_encode($response1 ['indices'][$i]['OBS_VALUE']);
		$array6 = json_encode($response2 ['indices'][$i]['TIME_PERIOD']);
		$array7 = json_encode($response2 ['indices'][$i]['OBS_VALUE']);
		$array8 = json_encode($response3 ['indices'][$i]['TIME_PERIOD']);
		$array9 = json_encode($response3 ['indices'][$i]['OBS_VALUE']);
		$texto=str_replace('"','',$array); 
		$texto=str_replace('\/','',$texto); 
		$texto2=str_replace('"','',$array2); 
		$texto11=str_replace('"','',$array4); 
		$texto11=str_replace('\/','',$texto11); 
		$texto12=str_replace('"','',$array5); 
		$texto22=str_replace('"','',$array6); 
		$texto22=str_replace('\/','',$texto22); 
		$texto23=str_replace('"','',$array7);
		$texto33=str_replace('"','',$array8); 
		$texto33=str_replace('\/','',$texto33); 
		$texto34=str_replace('"','',$array9);
		echo '<tr>';
		echo '<td>'.$texto .'</td>';
		echo '<td>'.number_format($texto2, 2, '.', ' ') .'</td>';
		if ( $texto==$texto11){
		echo '<td>'.number_format($texto12, 2, '.', ' ') .'</td>';
		};	
		if ( $texto==$texto22){
		echo '<td>'.number_format($texto23, 2, '.', ' ') .'</td>';
		};	
		if ( $texto==$texto33){
		echo '<td>'.number_format($texto34, 2, '.', ' ') .'</td>';
		};	
		echo '</tr>';
		};
		$i++;
		echo "</tbody>";
break;


case 14:
?>
			
		<caption align='center'>PIB Actividades Secundarias Nacional</caption>
		<caption align='center'>(Millones de pesos a precios de 2008)</caption>
		<thead align='center' border='2px'>
           <tr align='center' border='2px'>
             <th scope='col' width:'16%' align='center' border='2px'>Periodo</th>
             <th scope='col' width:'16%' align='center' border='2px'>Total Actividades<br>Secundarias</th>
             <th scope='col' width:'16%' align='center' border='2px'>Mineria</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Generación,<br>transmisión y<br>distribución de <br>energía eléctrica,<br>suministro de<br>agua y de gas por<br>ductos al<br>consumidor final</th>
			 <th scope='col' width:'16%' align='center' border='2px'>Construcción</th>
			 <th scope='col' width:'16%' align='center' border='2px'>Industrias<br>Manufactureras</th>
		   </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice = 383315; //
		$lugar = 00;
		$indice1 = 383348; //
		$lugar1 = 00;
		$indice2 = 383447; //
		$lugar2 = 00;
		$indice3 = 383480; //
		$lugar3 = 00;
		$indice4 = 383513; //
		$lugar4 = 00;
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		$response3 = $inegi->index($indice3, $lugar3);
		$response4 = $inegi->index($indice4, $lugar4);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i]['OBS_VALUE']);
		$array4 = json_encode($response1 ['indices'][$i]['TIME_PERIOD']);
		$array5 = json_encode($response1 ['indices'][$i]['OBS_VALUE']);
		$array6 = json_encode($response2 ['indices'][$i]['TIME_PERIOD']);
		$array7 = json_encode($response2 ['indices'][$i]['OBS_VALUE']);
		$array8 = json_encode($response3 ['indices'][$i]['TIME_PERIOD']);
		$array9 = json_encode($response3 ['indices'][$i]['OBS_VALUE']);
		$array10 = json_encode($response4 ['indices'][$i]['TIME_PERIOD']);
		$array11 = json_encode($response4 ['indices'][$i]['OBS_VALUE']);
		$texto=str_replace('"','',$array); 
		$texto=str_replace('\/','',$texto); 
		$texto2=str_replace('"','',$array2); 
		$texto11=str_replace('"','',$array4); 
		$texto11=str_replace('\/','',$texto11); 
		$texto12=str_replace('"','',$array5); 
		$texto22=str_replace('"','',$array6); 
		$texto22=str_replace('\/','',$texto22); 
		$texto23=str_replace('"','',$array7);
		$texto33=str_replace('"','',$array8); 
		$texto33=str_replace('\/','',$texto33); 
		$texto34=str_replace('"','',$array9);
		$texto44=str_replace('"','',$array10); 
		$texto44=str_replace('\/','',$texto44); 
		$texto45=str_replace('"','',$array11);
		
		echo '<tr>';
		echo '<td>'.$texto .'</td>';
		echo '<td>'.number_format($texto2, 2, '.', ' ') .'</td>';
		if ( $texto==$texto11){
		echo '<td>'.number_format($texto12, 2, '.', ' ') .'</td>';
		};	
		if ( $texto==$texto22){
		echo '<td>'.number_format($texto23, 2, '.', ' ') .'</td>';
		};	
		if ( $texto==$texto33){
		echo '<td>'.number_format($texto34, 2, '.', ' ') .'</td>';
		};
		if ( $texto==$texto44){
		echo '<td>'.number_format($texto45, 2, '.', ' ') .'</td>';
		};	
		echo '</tr>';
		};
		$i++;
		
		
		echo "</tbody>";
break;

case 15:
	?>		
		
		<caption width:'100%' align='center'>PIB Actividades Secundarias Estado de Puebla</caption>
		<caption width:'100%' align='center'>(Millones de pesos a precios de 2008)</caption>
		
		
		
		
		
		<thead width:'100%' align='center' border='2px'>
         <tr width:'100%' align='center' border='2px'>
            <th scope='col' width:'16%' align='center' border='2px'>Periodo</th>
             <th scope='col' width:'16%' align='center' border='2px'>Total Actividades<br>Secundarias</th>
             <th scope='col' width:'16%' align='center' border='2px'>Mineria</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Generación,<br>transmisión y<br>distribución de <br>energía eléctrica,<br>suministro de<br>agua y de gas por<br>ductos al<br>consumidor final</th>
			 <th scope='col' width:'16%' align='center' border='2px'>Construcción</th>
			 <th scope='col' width:'16%' align='center' border='2px'>Industrias<br>Manufactureras</th>
		   </tr>
        </thead>

		<tbody align='center'>
		<?php
		$indice = 383336; //
		$lugar = 21;
		$indice1 = 383369; //
		$lugar1 = 21;
		$indice2 = 383468; //
		$lugar2 = 21;
		$indice3 = 383501; //
		$lugar3 = 21;
		$indice4 = 383534; //
		$lugar4 = 21;
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		$response3 = $inegi->index($indice3, $lugar3);
		$response4 = $inegi->index($indice4, $lugar4);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i]['OBS_VALUE']);
		$array4 = json_encode($response1 ['indices'][$i]['TIME_PERIOD']);
		$array5 = json_encode($response1 ['indices'][$i]['OBS_VALUE']);
		$array6 = json_encode($response2 ['indices'][$i]['TIME_PERIOD']);
		$array7 = json_encode($response2 ['indices'][$i]['OBS_VALUE']);
		$array8 = json_encode($response3 ['indices'][$i]['TIME_PERIOD']);
		$array9 = json_encode($response3 ['indices'][$i]['OBS_VALUE']);
		$array10 = json_encode($response4 ['indices'][$i]['TIME_PERIOD']);
		$array11 = json_encode($response4 ['indices'][$i]['OBS_VALUE']);
		$texto=str_replace('"','',$array); 
		$texto=str_replace('\/','',$texto); 
		$texto2=str_replace('"','',$array2); 
		$texto11=str_replace('"','',$array4); 
		$texto11=str_replace('\/','',$texto11); 
		$texto12=str_replace('"','',$array5); 
		$texto22=str_replace('"','',$array6); 
		$texto22=str_replace('\/','',$texto22); 
		$texto23=str_replace('"','',$array7);
		$texto33=str_replace('"','',$array8); 
		$texto33=str_replace('\/','',$texto33); 
		$texto34=str_replace('"','',$array9);
		$texto44=str_replace('"','',$array10); 
		$texto44=str_replace('\/','',$texto44); 
		$texto45=str_replace('"','',$array11);
		
		echo '<tr>';
		echo '<td>'.$texto .'</td>';
		echo '<td>'.number_format($texto2, 2, '.', ' ') .'</td>';
		if ( $texto=$texto11){
		echo '<td>'.number_format($texto12, 2, '.', ' ') .'</td>';
		};	
		if ( $texto==$texto22){
		echo '<td>'.number_format($texto23, 2, '.', ' ') .'</td>';
		};	
		if ( $texto==$texto33){
		echo '<td>'.number_format($texto34, 2, '.', ' ') .'</td>';
		};
		if ( $texto==$texto44){
		echo '<td>'.number_format($texto45, 2, '.', ' ') .'</td>';
		};	
		echo '</tr>';
		};
		$i++;
		
		
		echo "</tbody>";

		
		break;

case 17:
	
?>
		
		<caption  align='center'>PIB Industrias Manufactureras Nacional</caption>
		<caption width:'100%' align='center'>(Millones de pesos a precios de 2008)</caption>
		
	
		
		
		
		<thead  align='center' border='2px'>
          <tr  align='center' border='2px'>
             <th scope='col' align='center' border='2px'>Periodo</th>
             <th scope='col' align='center' border='2px'>Industrias Manufactureras</th>
             <th scope='col' align='center' border='2px'>Industria alimentaria</th>
			 <th scope='col' align='center' border='2px'>Industria de las<br>bebidas y del tabaco</th>
			 <th scope='col' align='center' border='2px'>Fabricación de insumos textiles y acabado de textiles; Fabricación de productos textiles, excepto prendas de vestir</th>
			 <th scope='col' align='center' border='2px'>Fabricación de prendas de vestir; Curtido y acabado de cuero y piel,  y fabricación de productosde cuero, piel y materiales sucedáneos</th>
			 <th scope='col' align='center' border='2px'>Industria de la madera</th>
			 <th scope='col' align='center' border='2px'>Industrias del papel; Impresión e industrias conexas</th>
			 <th scope='col' align='center' border='2px'>Fabricación de productos derivados del petróleo y carbón; Industria química; Industria del plástico y del hule</th>
             <th scope='col' align='center' border='2px'>Fabricación de productos a base de minerales no metálicos</th>
             <th scope='col' align='center' border='2px'>Industrias metálicas básicas; Fabricación de productos metálicos</th>
			 <th scope='col' align='center' border='2px'>Fabricación de maquinaria y equipo; Fabricación de equipo de computación, comunicación, medición y de otros equipos, componentes y accesorios electrónicos electrónicos; Fabricación de accesorios, aparatos eléctricos y equipo de generación de energía eléctrica</th>
			 <th scope='col' align='center' border='2px'>Fabricación de muebles, colchones y persianas</th>
			 <th scope='col' align='center' border='2px'>Otras industrias manufactureras</th>
		  </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice =383513; //
		$lugar = 00;
		$indice1 =383546; //
		$lugar1 = 00;
		$indice2 =383579; //
		$lugar2 = 00;
		$indice3 =383612; //
		$lugar3 = 00;
		$indice4 =383645; //
		$lugar4 = 00;
		$indice5 =383678; //
		$lugar5 = 00;
		$indice6 =383711; //
		$lugar6 = 00;
		$indice7 =383744; //
		$lugar7 = 00;
		$indice8 =383777; //
		$lugar8 = 00;
		$indice9 =383810; //
		$lugar9 = 00;
		$indice10 =383843; //
		$lugar10 = 00;
		$indice11 =383876; //
		$lugar11 = 00;
		$indice12 =383909; //
		$lugar12 = 00;
		

		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		$response3 = $inegi->index($indice3, $lugar3);
		$response4 = $inegi->index($indice4, $lugar4);
		$response5 = $inegi->index($indice5, $lugar5);
		$response6 = $inegi->index($indice6, $lugar6);
		$response7 = $inegi->index($indice7, $lugar7);
		$response8 = $inegi->index($indice8, $lugar8);
		$response9 = $inegi->index($indice9, $lugar9);
		$response10 = $inegi->index($indice10, $lugar10);
		$response11 = $inegi->index($indice11, $lugar11);
		$response12 = $inegi->index($indice12, $lugar12);
		
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
			if($variable1=="01"){
			echo '<td>ENERO</td>';
			};
			if($variable1=="02"){
			echo '<td>FEBRERO</td>';
			};
			if($variable1=="03"){
			echo '<td>MARZO</td>';
			};
			if($variable1=="04"){
			echo '<td>ABRIL</td>';
			};
			if($variable1=="05"){
			echo '<td>MAYO</td>';
			};
			if($variable1=="06"){
			echo '<td>JUNIO</td>';
			};
			if($variable1=="07"){
			echo '<td>JULIO</td>';
			};
			if($variable1=="08"){
			echo '<td>AGOSTO</td>';
			};
			if($variable1=="09"){
			echo '<td>SEPTIEMBRE</td>';
			};
			if($variable1=="10"){
			echo '<td>OCTUBRE</td>';
			};
			if($variable1=="11"){
			echo '<td>NOVIEMBRE</td>';
			};
			if($variable1=="12"){
			echo '<td>DICIEMBRE</td>';
			};
			
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		for($i3=0;$i3<count($response2 ["indices"]);$i3++){
		$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
		$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
		if ($array==$array5){
		$texto6=str_replace('"','',$array6); 
		echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
		};		
		};	
		for($i4=0;$i4<count($response3 ["indices"]);$i4++){
		$array7 = json_encode($response3 ['indices'][$i4]['TIME_PERIOD']);
		$array8 = json_encode($response3 ['indices'][$i4]['OBS_VALUE']);
		if ($array==$array7){
		$texto8=str_replace('"','',$array8); 
		echo '<td>'.number_format($texto8, 2, '.', ' ') .'</td>';
		};		
		}
		for($i5=0;$i5<count($response4 ["indices"]);$i5++){
		$array9 = json_encode($response4 ['indices'][$i5]['TIME_PERIOD']);
		$array10 = json_encode($response4 ['indices'][$i5]['OBS_VALUE']);
		if ($array==$array9){
		$texto10=str_replace('"','',$array10); 
		echo '<td>'.number_format($texto10, 2, '.', ' ') .'</td>';
		};		
		}
		for($i6=0;$i6<count($response5 ["indices"]);$i6++){
		$array11 = json_encode($response5 ['indices'][$i6]['TIME_PERIOD']);
		$array12 = json_encode($response5 ['indices'][$i6]['OBS_VALUE']);
		if ($array==$array11){
		$texto12=str_replace('"','',$array12); 
		echo '<td>'.number_format($texto12, 2, '.', ' ') .'</td>';
		};		
		}
		for($i7=0;$i7<count($response6 ["indices"]);$i7++){
		$array13 = json_encode($response6 ['indices'][$i7]['TIME_PERIOD']);
		$array14 = json_encode($response6 ['indices'][$i7]['OBS_VALUE']);
		if ($array==$array13){
		$texto14=str_replace('"','',$array14); 
		echo '<td>'.number_format($texto14, 2, '.', ' ') .'</td>';
		};		
		}
		for($i8=0;$i8<count($response7 ["indices"]);$i8++){
		$array15 = json_encode($response7 ['indices'][$i8]['TIME_PERIOD']);
		$array16 = json_encode($response7 ['indices'][$i8]['OBS_VALUE']);
		if ($array==$array15){
		$texto16=str_replace('"','',$array16); 
		echo '<td>'.number_format($texto16, 2, '.', ' ') .'</td>';
		};		
		}
		for($i9=0;$i9<count($response8 ["indices"]);$i9++){
		$array17 = json_encode($response8 ['indices'][$i9]['TIME_PERIOD']);
		$array18 = json_encode($response8 ['indices'][$i9]['OBS_VALUE']);
		if ($array==$array17){
		$texto18=str_replace('"','',$array18); 
		echo '<td>'.number_format($texto18, 2, '.', ' ') .'</td>';
		};		
		}
		for($i10=0;$i10<count($response9 ["indices"]);$i10++){
		$array19 = json_encode($response9 ['indices'][$i10]['TIME_PERIOD']);
		$array20 = json_encode($response9 ['indices'][$i10]['OBS_VALUE']);
		if ($array==$array19){
		$texto20=str_replace('"','',$array20); 
		echo '<td>'.number_format($texto20, 2, '.', ' ') .'</td>';
		};		
		}
		for($i11=0;$i11<count($response10 ["indices"]);$i11++){
		$array21 = json_encode($response10 ['indices'][$i11]['TIME_PERIOD']);
		$array22 = json_encode($response10 ['indices'][$i11]['OBS_VALUE']);
		if ($array==$array21){
		$texto22=str_replace('"','',$array22); 
		echo '<td>'.number_format($texto22, 2, '.', ' ') .'</td>';
		};		
		}
		for($i12=0;$i12<count($response11 ["indices"]);$i12++){
		$array23 = json_encode($response11 ['indices'][$i12]['TIME_PERIOD']);
		$array24 = json_encode($response11 ['indices'][$i12]['OBS_VALUE']);
		if ($array==$array23){
		$texto24=str_replace('"','',$array24); 
		echo '<td>'.number_format($texto24, 2, '.', ' ') .'</td>';
		};		
		}
		for($i13=0;$i13<count($response12 ["indices"]);$i13++){
		$array25 = json_encode($response12 ['indices'][$i13]['TIME_PERIOD']);
		$array26 = json_encode($response12 ['indices'][$i13]['OBS_VALUE']);
		if ($array==$array25){
		$texto26=str_replace('"','',$array26); 
		echo '<td>'.number_format($texto26, 2, '.', ' ') .'</td>';
		};		
		};	
		
		echo '</tr>';
		};
		$i++;
		$i1++;
		$i2++;	
		$i3++;
		$i4++;
		$i5++;
		$i6++;
		$i7++;	
		$i8++;
		$i9++;
		$i10++;	
		$i11++;
		$i12++;
		$i13++;
		echo "</tbody>";
	break;

	case 18:
		?>

		<caption  align='center'>PIB Industrias Manufactureras Estado de Puebla</caption>
		<caption  align='center'>(Millones de pesos a precios de 2008)</caption>
		
		
		
		<thead width:'100%'  align='center' border='2px'>
           <tr width:'100%'  align='center' border='2px'>
            <th scope='col' align='center' border='2px'>Periodo</th>
             <th scope='col' align='center' border='2px'>Industrias Manufactureras</th>
             <th scope='col' align='center' border='2px'>Industria alimentaria</th>
			 <th scope='col' align='center' border='2px'>Industria de las bebidas y del tabaco</th>
			 <th scope='col' align='center' border='2px'>Fabricación de insumos textiles y acabado de textiles; Fabricación de productos textiles, excepto prendas de vestir</th>
			 <th scope='col' align='center' border='2px'>Fabricación de prendas de vestir; Curtido y acabado de cuero y piel,  y fabricación de productosde cuero, piel y materiales sucedáneos</th>
			 <th scope='col' align='center' border='2px'>Industria de la madera</th>
			 <th scope='col' align='center' border='2px'>Industrias del papel; Impresión e industrias conexas</th>
			 <th scope='col' align='center' border='2px'>Fabricación de productos derivados del petróleo y carbón; Industria química; Industria del plástico y del hule</th>
             <th scope='col' align='center' border='2px'>Fabricación de productos a base de minerales no metálicos</th>
             <th scope='col' align='center' border='2px'>Industrias metálicas básicas; Fabricación de productos metálicos</th>
			 <th scope='col' align='center' border='2px'>Fabricación de maquinaria y equipo; Fabricación de equipo de computación, comunicación, medición y de otros equipos, componentes y accesorios electrónicos electrónicos; Fabricación de accesorios, aparatos eléctricos y equipo de generación de energía eléctrica</th>
			 <th scope='col' align='center' border='2px'>Fabricación de muebles, colchones y persianas</th>
			 <th scope='col' align='center' border='2px'>Otras industrias manufactureras</th>
		   </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice =383534; //
		$lugar = 00;
		$indice1 =383567; //
		$lugar1 = 00;
		$indice2 =383600; //
		$lugar2 = 00;
		$indice3 =383633; //
		$lugar3 = 00;
		$indice4 =383666; //
		$lugar4 = 00;
		$indice5 =383699; //
		$lugar5 = 00;
		$indice6 =383732; //
		$lugar6 = 00;
		$indice7 =383765; //
		$lugar7 = 00;
		$indice8 =383798; //
		$lugar8 = 00;
		$indice9 =383831; //
		$lugar9 = 00;
		$indice10 =383864; //
		$lugar10 = 00;
		$indice11 =383897; //
		$lugar11 = 00;
		$indice12 =383930; //
		$lugar12 = 00;
		

		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		$response3 = $inegi->index($indice3, $lugar3);
		$response4 = $inegi->index($indice4, $lugar4);
		$response5 = $inegi->index($indice5, $lugar5);
		$response6 = $inegi->index($indice6, $lugar6);
		$response7 = $inegi->index($indice7, $lugar7);
		$response8 = $inegi->index($indice8, $lugar8);
		$response9 = $inegi->index($indice9, $lugar9);
		$response10 = $inegi->index($indice10, $lugar10);
		$response11 = $inegi->index($indice11, $lugar11);
		$response12 = $inegi->index($indice12, $lugar12);
		
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
			if($variable1=="01"){
			echo '<td>ENERO</td>';
			};
			if($variable1=="02"){
			echo '<td>FEBRERO</td>';
			};
			if($variable1=="03"){
			echo '<td>MARZO</td>';
			};
			if($variable1=="04"){
			echo '<td>ABRIL</td>';
			};
			if($variable1=="05"){
			echo '<td>MAYO</td>';
			};
			if($variable1=="06"){
			echo '<td>JUNIO</td>';
			};
			if($variable1=="07"){
			echo '<td>JULIO</td>';
			};
			if($variable1=="08"){
			echo '<td>AGOSTO</td>';
			};
			if($variable1=="09"){
			echo '<td>SEPTIEMBRE</td>';
			};
			if($variable1=="10"){
			echo '<td>OCTUBRE</td>';
			};
			if($variable1=="11"){
			echo '<td>NOVIEMBRE</td>';
			};
			if($variable1=="12"){
			echo '<td>DICIEMBRE</td>';
			};
			
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		for($i3=0;$i3<count($response2 ["indices"]);$i3++){
		$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
		$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
		if ($array==$array5){
		$texto6=str_replace('"','',$array6); 
		echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
		};		
		};	
		for($i4=0;$i4<count($response3 ["indices"]);$i4++){
		$array7 = json_encode($response3 ['indices'][$i4]['TIME_PERIOD']);
		$array8 = json_encode($response3 ['indices'][$i4]['OBS_VALUE']);
		if ($array==$array7){
		$texto8=str_replace('"','',$array8); 
		echo '<td>'.number_format($texto8, 2, '.', ' ') .'</td>';
		};		
		}
		for($i5=0;$i5<count($response4 ["indices"]);$i5++){
		$array9 = json_encode($response4 ['indices'][$i5]['TIME_PERIOD']);
		$array10 = json_encode($response4 ['indices'][$i5]['OBS_VALUE']);
		if ($array==$array9){
		$texto10=str_replace('"','',$array10); 
		echo '<td>'.number_format($texto10, 2, '.', ' ') .'</td>';
		};		
		}
		for($i6=0;$i6<count($response5 ["indices"]);$i6++){
		$array11 = json_encode($response5 ['indices'][$i6]['TIME_PERIOD']);
		$array12 = json_encode($response5 ['indices'][$i6]['OBS_VALUE']);
		if ($array==$array11){
		$texto12=str_replace('"','',$array12); 
		echo '<td>'.number_format($texto12, 2, '.', ' ') .'</td>';
		};		
		}
		for($i7=0;$i7<count($response6 ["indices"]);$i7++){
		$array13 = json_encode($response6 ['indices'][$i7]['TIME_PERIOD']);
		$array14 = json_encode($response6 ['indices'][$i7]['OBS_VALUE']);
		if ($array==$array13){
		$texto14=str_replace('"','',$array14); 
		echo '<td>'.number_format($texto14, 2, '.', ' ') .'</td>';
		};		
		}
		for($i8=0;$i8<count($response7 ["indices"]);$i8++){
		$array15 = json_encode($response7 ['indices'][$i8]['TIME_PERIOD']);
		$array16 = json_encode($response7 ['indices'][$i8]['OBS_VALUE']);
		if ($array==$array15){
		$texto16=str_replace('"','',$array16); 
		echo '<td>'.number_format($texto16, 2, '.', ' ') .'</td>';
		};		
		}
		for($i9=0;$i9<count($response8 ["indices"]);$i9++){
		$array17 = json_encode($response8 ['indices'][$i9]['TIME_PERIOD']);
		$array18 = json_encode($response8 ['indices'][$i9]['OBS_VALUE']);
		if ($array==$array17){
		$texto18=str_replace('"','',$array18); 
		echo '<td>'.number_format($texto18, 2, '.', ' ') .'</td>';
		};		
		}
		for($i10=0;$i10<count($response9 ["indices"]);$i10++){
		$array19 = json_encode($response9 ['indices'][$i10]['TIME_PERIOD']);
		$array20 = json_encode($response9 ['indices'][$i10]['OBS_VALUE']);
		if ($array==$array19){
		$texto20=str_replace('"','',$array20); 
		echo '<td>'.number_format($texto20, 2, '.', ' ') .'</td>';
		};		
		}
		for($i11=0;$i11<count($response10 ["indices"]);$i11++){
		$array21 = json_encode($response10 ['indices'][$i11]['TIME_PERIOD']);
		$array22 = json_encode($response10 ['indices'][$i11]['OBS_VALUE']);
		if ($array==$array21){
		$texto22=str_replace('"','',$array22); 
		echo '<td>'.number_format($texto22, 2, '.', ' ') .'</td>';
		};		
		}
		for($i12=0;$i12<count($response11 ["indices"]);$i12++){
		$array23 = json_encode($response11 ['indices'][$i12]['TIME_PERIOD']);
		$array24 = json_encode($response11 ['indices'][$i12]['OBS_VALUE']);
		if ($array==$array23){
		$texto24=str_replace('"','',$array24); 
		echo '<td>'.number_format($texto24, 2, '.', ' ') .'</td>';
		};		
		}
	
	
	
	
		for($i13=0;$i13<count($response12 ["indices"]);$i13++){
		$array25 = json_encode($response12 ['indices'][$i13]['TIME_PERIOD']);
		$array26 = json_encode($response12 ['indices'][$i13]['OBS_VALUE']);
		if ($array==$array25){
		$texto26=str_replace('"','',$array26); 
		echo '<td>'.number_format($texto26, 2, '.', ' ') .'</td>';
		};		
		};	
		
		echo '</tr>';
		};
		$i++;
		$i1++;
		$i2++;	
		$i3++;
		$i4++;
		$i5++;
		$i6++;
		$i7++;	
		$i8++;
		$i9++;
		$i10++;	
		$i11++;
		$i12++;
		$i13++;
		echo "</tbody>";
		break;


		case 20:
		?>
		
		
		<caption  align='center'>PIB Actividades Terciarias Nacional</caption>
		<caption  align='center'>(Millones de pesos a precios de 2008)</caption>
		
		<thead align='center' border='2px'>
          <tr  align='center' border='2px'>
             <th scope='col' align='center' border='2px'>Periodo</th>
             <th scope='col' align='center' border='2px'>Total Actividades terciarias</th>
             <th scope='col' align='center' border='2px'>Comercio</th>
			 <th scope='col' align='center' border='2px'>Transportes, correo y almacenamiento</th>
			 <th scope='col' align='center' border='2px'>Información en medios masivos</th>
			 <th scope='col' align='center' border='2px'>Servicios financieros y de seguros</th>
			 <th scope='col' align='center' border='2px'>Servicios inmobiliarios y de alquiler de bienes muebles e intangibles</th>
			 <th scope='col' align='center' border='2px'>Servicios profesionales, científicos y técnicos</th>
			 <th scope='col' align='center' border='2px'>Corporativos</th>
             <th scope='col' align='center' border='2px'>Servicios de apoyo a negocios y manejo de desechos y servicios de remediación</th>
             <th scope='col' align='center' border='2px'>Servicios educativos</th>
			 <th scope='col' align='center' border='2px'>Servicios de salud y asistencia social</th>
			 <th scope='col' align='center' border='2px'>Servicios de esparcimiento culturales y deportivos, y otros servicios recreativos</th>
			 <th scope='col' align='center' border='2px'>Servicios de alojamiento temporal y de preparación de alimentos y bebidas</th>
			 <th scope='col' align='center' border='2px'>Otros servicios excepto actividades gubernamentales</th>
			 <th scope='col' align='center' border='2px'>Actividades legislativas, gubernamentales, de impartición de justicia y de organismos internacionales y extraterritoriales</th>
		  </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice =383942; //
		$lugar = 00;
		$indice1 =383975; //
		$lugar1 = 00;
		$indice2 =384008; //
		$lugar2 = 00;
		$indice3 =384041; //
		$lugar3 = 00;
		$indice4 =384074; //
		$lugar4 = 00;
		$indice5 =384107; //
		$lugar5 = 00;
		$indice6 =384140; //
		$lugar6 = 00;
		$indice7 =384173; //
		$lugar7 = 00;
		$indice8 =384206; //
		$lugar8 = 00;
		$indice9 =384239; //
		$lugar9 = 00;
		$indice10 =384272; //
		$lugar10 = 00;
		$indice11 =384305; //
		$lugar11 = 00;
		$indice12 =384338; //
		$lugar12 = 00;
		$indice13 =384371; //
		$lugar13 = 00;
		$indice14 =384404; //
		$lugar14 = 00;
		
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		$response3 = $inegi->index($indice3, $lugar3);
		$response4 = $inegi->index($indice4, $lugar4);
		$response5 = $inegi->index($indice5, $lugar5);
		$response6 = $inegi->index($indice6, $lugar6);
		$response7 = $inegi->index($indice7, $lugar7);
		$response8 = $inegi->index($indice8, $lugar8);
		$response9 = $inegi->index($indice9, $lugar9);
		$response10 = $inegi->index($indice10, $lugar10);
		$response11 = $inegi->index($indice11, $lugar11);
		$response12 = $inegi->index($indice12, $lugar12);
		$response13 = $inegi->index($indice13, $lugar13);
		$response14 = $inegi->index($indice14, $lugar14);
		
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
			if($variable1=="01"){
			echo '<td>ENERO</td>';
			};
			if($variable1=="02"){
			echo '<td>FEBRERO</td>';
			};
			if($variable1=="03"){
			echo '<td>MARZO</td>';
			};
			if($variable1=="04"){
			echo '<td>ABRIL</td>';
			};
			if($variable1=="05"){
			echo '<td>MAYO</td>';
			};
			if($variable1=="06"){
			echo '<td>JUNIO</td>';
			};
			if($variable1=="07"){
			echo '<td>JULIO</td>';
			};
			if($variable1=="08"){
			echo '<td>AGOSTO</td>';
			};
			if($variable1=="09"){
			echo '<td>SEPTIEMBRE</td>';
			};
			if($variable1=="10"){
			echo '<td>OCTUBRE</td>';
			};
			if($variable1=="11"){
			echo '<td>NOVIEMBRE</td>';
			};
			if($variable1=="12"){
			echo '<td>DICIEMBRE</td>';
			};
			
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		for($i3=0;$i3<count($response2 ["indices"]);$i3++){
		$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
		$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
		if ($array==$array5){
		$texto6=str_replace('"','',$array6); 
		echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
		};		
		};	
		for($i4=0;$i4<count($response3 ["indices"]);$i4++){
		$array7 = json_encode($response3 ['indices'][$i4]['TIME_PERIOD']);
		$array8 = json_encode($response3 ['indices'][$i4]['OBS_VALUE']);
		if ($array==$array7){
		$texto8=str_replace('"','',$array8); 
		echo '<td>'.number_format($texto8, 2, '.', ' ') .'</td>';
		};		
		}
		for($i5=0;$i5<count($response4 ["indices"]);$i5++){
		$array9 = json_encode($response4 ['indices'][$i5]['TIME_PERIOD']);
		$array10 = json_encode($response4 ['indices'][$i5]['OBS_VALUE']);
		if ($array==$array9){
		$texto10=str_replace('"','',$array10); 
		echo '<td>'.number_format($texto10, 2, '.', ' ') .'</td>';
		};		
		}
		for($i6=0;$i6<count($response5 ["indices"]);$i6++){
		$array11 = json_encode($response5 ['indices'][$i6]['TIME_PERIOD']);
		$array12 = json_encode($response5 ['indices'][$i6]['OBS_VALUE']);
		if ($array==$array11){
		$texto12=str_replace('"','',$array12); 
		echo '<td>'.number_format($texto12, 2, '.', ' ') .'</td>';
		};		
		}
		for($i7=0;$i7<count($response6 ["indices"]);$i7++){
		$array13 = json_encode($response6 ['indices'][$i7]['TIME_PERIOD']);
		$array14 = json_encode($response6 ['indices'][$i7]['OBS_VALUE']);
		if ($array==$array13){
		$texto14=str_replace('"','',$array14); 
		echo '<td>'.number_format($texto14, 2, '.', ' ') .'</td>';
		};		
		}
		for($i8=0;$i8<count($response7 ["indices"]);$i8++){
		$array15 = json_encode($response7 ['indices'][$i8]['TIME_PERIOD']);
		$array16 = json_encode($response7 ['indices'][$i8]['OBS_VALUE']);
		if ($array==$array15){
		$texto16=str_replace('"','',$array16); 
		echo '<td>'.number_format($texto16, 2, '.', ' ') .'</td>';
		};		
		}
		for($i9=0;$i9<count($response8 ["indices"]);$i9++){
		$array17 = json_encode($response8 ['indices'][$i9]['TIME_PERIOD']);
		$array18 = json_encode($response8 ['indices'][$i9]['OBS_VALUE']);
		if ($array==$array17){
		$texto18=str_replace('"','',$array18); 
		echo '<td>'.number_format($texto18, 2, '.', ' ') .'</td>';
		};		
		}
		for($i10=0;$i10<count($response9 ["indices"]);$i10++){
		$array19 = json_encode($response9 ['indices'][$i10]['TIME_PERIOD']);
		$array20 = json_encode($response9 ['indices'][$i10]['OBS_VALUE']);
		if ($array==$array19){
		$texto20=str_replace('"','',$array20); 
		echo '<td>'.number_format($texto20, 2, '.', ' ') .'</td>';
		};		
		}
		for($i11=0;$i11<count($response10 ["indices"]);$i11++){
		$array21 = json_encode($response10 ['indices'][$i11]['TIME_PERIOD']);
		$array22 = json_encode($response10 ['indices'][$i11]['OBS_VALUE']);
		if ($array==$array21){
		$texto22=str_replace('"','',$array22); 
		echo '<td>'.number_format($texto22, 2, '.', ' ') .'</td>';
		};		
		}
		for($i12=0;$i12<count($response11 ["indices"]);$i12++){
		$array23 = json_encode($response11 ['indices'][$i12]['TIME_PERIOD']);
		$array24 = json_encode($response11 ['indices'][$i12]['OBS_VALUE']);
		if ($array==$array23){
		$texto24=str_replace('"','',$array24); 
		echo '<td>'.number_format($texto24, 2, '.', ' ') .'</td>';
		};		
		}
		for($i13=0;$i13<count($response12 ["indices"]);$i13++){
		$array25 = json_encode($response12 ['indices'][$i13]['TIME_PERIOD']);
		$array26 = json_encode($response12 ['indices'][$i13]['OBS_VALUE']);
		if ($array==$array25){
		$texto26=str_replace('"','',$array26); 
		echo '<td>'.number_format($texto26, 2, '.', ' ') .'</td>';
		};		
		};	
		for($i14=0;$i14<count($response13 ["indices"]);$i14++){
		$array27 = json_encode($response13 ['indices'][$i14]['TIME_PERIOD']);
		$array28 = json_encode($response13 ['indices'][$i14]['OBS_VALUE']);
		if ($array==$array27){
		$texto28=str_replace('"','',$array28); 
		echo '<td>'.number_format($texto28, 2, '.', ' ') .'</td>';
		};		
		}
		for($i15=0;$i15<count($response14 ["indices"]);$i15++){
		$array29 = json_encode($response14 ['indices'][$i15]['TIME_PERIOD']);
		$array30 = json_encode($response14 ['indices'][$i15]['OBS_VALUE']);
		if ($array==$array29){
		$texto30=str_replace('"','',$array30); 
		echo '<td>'.number_format($texto30, 2, '.', ' ') .'</td>';
		};		
		}
		
		
		echo '</tr>';
		};
		$i++;
		$i1++;
		
		echo "</tbody>";

		break;

	case 21:
		
		?>
		
		<caption align='center'>PIB Actividades Terciarias Estado de Puebla</caption>
		<caption align='center'>(Millones de pesos a precios de 2008)</caption>
		
		<thead width:'100%'  align='center' border='2px'>
           <tr width:'100%'  align='center' border='2px'>
             <th scope='col' align='center' border='2px'>Periodo</th>
             <th scope='col' align='center' border='2px'>Total Actividades terciarias</th>
             <th scope='col' align='center' border='2px'>Comercio</th>
			 <th scope='col' align='center' border='2px'>Transportes, correo y almacenamiento</th>
			 <th scope='col' align='center' border='2px'>Información en medios masivos</th>
			 <th scope='col' align='center' border='2px'>Servicios financieros y de seguros</th>
			 <th scope='col' align='center' border='2px'>Servicios inmobiliarios y de alquiler de bienes muebles e intangibles</th>
			 <th scope='col' align='center' border='2px'>Servicios profesionales, científicos y técnicos</th>
			 <th scope='col' align='center' border='2px'>Corporativos</th>
             <th scope='col' align='center' border='2px'>Servicios de apoyo a negocios y manejo de desechos y servicios de remediación</th>
             <th scope='col' align='center' border='2px'>Servicios educativos</th>
			 <th scope='col' align='center' border='2px'>Servicios de salud y asistencia social</th>
			 <th scope='col' align='center' border='2px'>Servicios de esparcimiento culturales y deportivos, y otros servicios recreativos</th>
			 <th scope='col' align='center' border='2px'>Servicios de alojamiento temporal y de preparación de alimentos y bebidas</th>
			 <th scope='col' align='center' border='2px'>Otros servicios excepto actividades gubernamentales</th>
			 <th scope='col' align='center' border='2px'>Actividades legislativas, gubernamentales, de impartición de justicia y de organismos internacionales y extraterritoriales</th>
		  </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice =383963; //
		$lugar = 00;
		$indice1 =383996; //
		$lugar1 = 00;
		$indice2 =384029; //
		$lugar2 = 00;
		$indice3 =384062; //
		$lugar3 = 00;
		$indice4 =384095; //
		$lugar4 = 00;
		$indice5 =384128; //
		$lugar5 = 00;
		$indice6 =384161; //
		$lugar6 = 00;
		$indice7 =384194; //
		$lugar7 = 00;
		$indice8 =384227; //
		$lugar8 = 00;
		$indice9 =384260; //
		$lugar9 = 00;
		$indice10 =384293; //
		$lugar10 = 00;
		$indice11 =384326; //
		$lugar11 = 00;
		$indice12 =384359; //
		$lugar12 = 00;
		$indice13 =384392; //
		$lugar13 = 00;
		$indice14 =384425; //
		$lugar14 = 00;
		
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		$response3 = $inegi->index($indice3, $lugar3);
		$response4 = $inegi->index($indice4, $lugar4);
		$response5 = $inegi->index($indice5, $lugar5);
		$response6 = $inegi->index($indice6, $lugar6);
		$response7 = $inegi->index($indice7, $lugar7);
		$response8 = $inegi->index($indice8, $lugar8);
		$response9 = $inegi->index($indice9, $lugar9);
		$response10 = $inegi->index($indice10, $lugar10);
		$response11 = $inegi->index($indice11, $lugar11);
		$response12 = $inegi->index($indice12, $lugar12);
		$response13 = $inegi->index($indice13, $lugar13);
		$response14 = $inegi->index($indice14, $lugar14);
		
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
			if($variable1=="01"){
			echo '<td>ENERO</td>';
			};
			if($variable1=="02"){
			echo '<td>FEBRERO</td>';
			};
			if($variable1=="03"){
			echo '<td>MARZO</td>';
			};
			if($variable1=="04"){
			echo '<td>ABRIL</td>';
			};
			if($variable1=="05"){
			echo '<td>MAYO</td>';
			};
			if($variable1=="06"){
			echo '<td>JUNIO</td>';
			};
			if($variable1=="07"){
			echo '<td>JULIO</td>';
			};
			if($variable1=="08"){
			echo '<td>AGOSTO</td>';
			};
			if($variable1=="09"){
			echo '<td>SEPTIEMBRE</td>';
			};
			if($variable1=="10"){
			echo '<td>OCTUBRE</td>';
			};
			if($variable1=="11"){
			echo '<td>NOVIEMBRE</td>';
			};
			if($variable1=="12"){
			echo '<td>DICIEMBRE</td>';
			};
			
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		for($i3=0;$i3<count($response2 ["indices"]);$i3++){
		$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
		$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
		if ($array==$array5){
		$texto6=str_replace('"','',$array6); 
		echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
		};		
		};	
		for($i4=0;$i4<count($response3 ["indices"]);$i4++){
		$array7 = json_encode($response3 ['indices'][$i4]['TIME_PERIOD']);
		$array8 = json_encode($response3 ['indices'][$i4]['OBS_VALUE']);
		if ($array==$array7){
		$texto8=str_replace('"','',$array8); 
		echo '<td>'.number_format($texto8, 2, '.', ' ') .'</td>';
		};		
		}
		for($i5=0;$i5<count($response4 ["indices"]);$i5++){
		$array9 = json_encode($response4 ['indices'][$i5]['TIME_PERIOD']);
		$array10 = json_encode($response4 ['indices'][$i5]['OBS_VALUE']);
		if ($array==$array9){
		$texto10=str_replace('"','',$array10); 
		echo '<td>'.number_format($texto10, 2, '.', ' ') .'</td>';
		};		
		}
		for($i6=0;$i6<count($response5 ["indices"]);$i6++){
		$array11 = json_encode($response5 ['indices'][$i6]['TIME_PERIOD']);
		$array12 = json_encode($response5 ['indices'][$i6]['OBS_VALUE']);
		if ($array==$array11){
		$texto12=str_replace('"','',$array12); 
		echo '<td>'.number_format($texto12, 2, '.', ' ') .'</td>';
		};		
		}
		for($i7=0;$i7<count($response6 ["indices"]);$i7++){
		$array13 = json_encode($response6 ['indices'][$i7]['TIME_PERIOD']);
		$array14 = json_encode($response6 ['indices'][$i7]['OBS_VALUE']);
		if ($array==$array13){
		$texto14=str_replace('"','',$array14); 
		echo '<td>'.number_format($texto14, 2, '.', ' ') .'</td>';
		};		
		}
		for($i8=0;$i8<count($response7 ["indices"]);$i8++){
		$array15 = json_encode($response7 ['indices'][$i8]['TIME_PERIOD']);
		$array16 = json_encode($response7 ['indices'][$i8]['OBS_VALUE']);
		if ($array==$array15){
		$texto16=str_replace('"','',$array16); 
		echo '<td>'.number_format($texto16, 2, '.', ' ') .'</td>';
		};		
		}
		for($i9=0;$i9<count($response8 ["indices"]);$i9++){
		$array17 = json_encode($response8 ['indices'][$i9]['TIME_PERIOD']);
		$array18 = json_encode($response8 ['indices'][$i9]['OBS_VALUE']);
		if ($array==$array17){
		$texto18=str_replace('"','',$array18); 
		echo '<td>'.number_format($texto18, 2, '.', ' ') .'</td>';
		};		
		}
		for($i10=0;$i10<count($response9 ["indices"]);$i10++){
		$array19 = json_encode($response9 ['indices'][$i10]['TIME_PERIOD']);
		$array20 = json_encode($response9 ['indices'][$i10]['OBS_VALUE']);
		if ($array==$array19){
		$texto20=str_replace('"','',$array20); 
		echo '<td>'.number_format($texto20, 2, '.', ' ') .'</td>';
		};		
		}
		for($i11=0;$i11<count($response10 ["indices"]);$i11++){
		$array21 = json_encode($response10 ['indices'][$i11]['TIME_PERIOD']);
		$array22 = json_encode($response10 ['indices'][$i11]['OBS_VALUE']);
		if ($array==$array21){
		$texto22=str_replace('"','',$array22); 
		echo '<td>'.number_format($texto22, 2, '.', ' ') .'</td>';
		};		
		}
		for($i12=0;$i12<count($response11 ["indices"]);$i12++){
		$array23 = json_encode($response11 ['indices'][$i12]['TIME_PERIOD']);
		$array24 = json_encode($response11 ['indices'][$i12]['OBS_VALUE']);
		if ($array==$array23){
		$texto24=str_replace('"','',$array24); 
		echo '<td>'.number_format($texto24, 2, '.', ' ') .'</td>';
		};		
		}
		for($i13=0;$i13<count($response12 ["indices"]);$i13++){
		$array25 = json_encode($response12 ['indices'][$i13]['TIME_PERIOD']);
		$array26 = json_encode($response12 ['indices'][$i13]['OBS_VALUE']);
		if ($array==$array25){
		$texto26=str_replace('"','',$array26); 
		echo '<td>'.number_format($texto26, 2, '.', ' ') .'</td>';
		};		
		};	
		for($i14=0;$i14<count($response13 ["indices"]);$i14++){
		$array27 = json_encode($response13 ['indices'][$i14]['TIME_PERIOD']);
		$array28 = json_encode($response13 ['indices'][$i14]['OBS_VALUE']);
		if ($array==$array27){
		$texto28=str_replace('"','',$array28); 
		echo '<td>'.number_format($texto28, 2, '.', ' ') .'</td>';
		};		
		}
		for($i15=0;$i15<count($response14 ["indices"]);$i15++){
		$array29 = json_encode($response14 ['indices'][$i15]['TIME_PERIOD']);
		$array30 = json_encode($response14 ['indices'][$i15]['OBS_VALUE']);
		if ($array==$array29){
		$texto30=str_replace('"','',$array30); 
		echo '<td>'.number_format($texto30, 2, '.', ' ') .'</td>';
		};		
		}
		
		
		echo '</tr>';
		};
		$i++;
		$i1++;
		$i2++;	
		$i3++;
		$i4++;
		$i5++;
		$i6++;
		$i7++;	
		$i8++;
		$i9++;
		$i10++;	
		$i11++;
		$i12++;
		$i13++;
		$i14++;
		$i15++;
		echo "</tbody>";		
		
		break;

		case 82:
?>
		<caption align='center'>Indicador global de la actividad económica (IGAE)</caption>
		<caption align='center'>(Índice de volumen físico 2008 = 100 - series desestacionalizadas)</caption>
		
		
		
		<thead align='center' border='2px'>
           <tr align='center' border='2px'>
          
             <th scope='col' width:'20%' align='center' border='2px'>Año</th>
             <th scope='col' width:'20%' align='center' border='2px'>Mes</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Índice</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Variación<br>% mensual</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Variación<br>% anual</th>
		   </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice =405698; //
		$lugar = 00;
		$indice1 =405699; //
		$lugar1 =00 ;
		$indice2 =448564; //
		$lugar2 =00 ;

		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
						if($variable1=="01"){
						echo '<td>ENERO</td>';
						};
						if($variable1=="02"){
						echo '<td>FEBRERO</td>';
						};
						if($variable1=="03"){
						echo '<td>MARZO</td>';
						};
						if($variable1=="04"){
						echo '<td>ABRIL</td>';
						};
						if($variable1=="05"){
						echo '<td>MAYO</td>';
						};
						if($variable1=="06"){
						echo '<td>JUNIO</td>';
						};
						if($variable1=="07"){
						echo '<td>JULIO</td>';
						};
						if($variable1=="08"){
						echo '<td>AGOSTO</td>';
						};
						if($variable1=="09"){
						echo '<td>SEPTIEMBRE</td>';
						};
						if($variable1=="10"){
						echo '<td>OCTUBRE</td>';
						};
						if($variable1=="11"){
						echo '<td>NOVIEMBRE</td>';
						};
						if($variable1=="12"){
						echo '<td>DICIEMBRE</td>';
						};
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		if ($i<="0")
		{
		echo '<td>N.D.</td>';
		};
				
				
				
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
	
		};
		if ($i<="11")
		{
		echo '<td>N.D.</td>';
		};
			
		for($i3=0;$i3<count($response2 ["indices"]);$i3++){
		$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
		$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
		if ($array==$array5){
		$texto6=str_replace('"','',$array6); 
		echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
		};		
		};

	
	

		echo '</tr>';
		
		};
		$i++;
		$i1++;
		$i2++;		
		echo "</tbody>";		
		break;

		case 83:
		
		
		?>
		<caption align='center'>Indicador  global de la actividad económica (IGAE) por actividad</caption>
		<caption align='center'>(Índice de volumen físico 2008 = 100)</caption>
		
		
		
		<thead align='center' border='2px'>
           <tr align='center' border='2px'>
          
             <th scope='col' align='center' border='2px'>Año</th>
             <th scope='col' align='center' border='2px'>Mes</th>
			 <th scope='col' align='center' border='2px'>Actividades<br>Primarias</th>
			 <th scope='col' align='center' border='2px'>Variación<br>% anual</th>
			 <th scope='col' align='center' border='2px'>Actividades<br>Secundarias</th>
			 <th scope='col' align='center' border='2px'>Variación<br>% anual</th>
			 <th scope='col' align='center' border='2px'>Actividades<br>Tercearias</th>
			 <th scope='col' align='center' border='2px'>Variación<br>% anual</th>
		   </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice =383153; //
		$lugar = 00;
		$indice1 =383169; //
		$lugar1 =00 ;
		$indice2 =383154; //
		$lugar2 = 00;
		$indice3 =383170; //
		$lugar3 = 00;
		$indice4 =383159; //
		$lugar4 = 00;
		$indice5 =383175; //
		$lugar5 = 00;
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		$response3 = $inegi->index($indice3, $lugar3);
		$response4 = $inegi->index($indice4, $lugar4);
		$response5 = $inegi->index($indice5, $lugar5);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
						if($variable1=="01"){
						echo '<td>ENERO</td>';
						};
						if($variable1=="02"){
						echo '<td>FEBRERO</td>';
						};
						if($variable1=="03"){
						echo '<td>MARZO</td>';
						};
						if($variable1=="04"){
						echo '<td>ABRIL</td>';
						};
						if($variable1=="05"){
						echo '<td>MAYO</td>';
						};
						if($variable1=="06"){
						echo '<td>JUNIO</td>';
						};
						if($variable1=="07"){
						echo '<td>JULIO</td>';
						};
						if($variable1=="08"){
						echo '<td>AGOSTO</td>';
						};
						if($variable1=="09"){
						echo '<td>SEPTIEMBRE</td>';
						};
						if($variable1=="10"){
						echo '<td>OCTUBRE</td>';
						};
						if($variable1=="11"){
						echo '<td>NOVIEMBRE</td>';
						};
						if($variable1=="12"){
						echo '<td>DICIEMBRE</td>';
						};
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		
		if ($i<="11")
		{
		echo '<td>N.D.</td>';
		};
		
		for($i3=0;$i3<count($response2 ["indices"]);$i3++){
		$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
		$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
		if ($array==$array5){
		$texto6=str_replace('"','',$array6); 
		echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
		};		
		};	
		for($i4=0;$i4<count($response3 ["indices"]);$i4++){
		$array7 = json_encode($response3 ['indices'][$i4]['TIME_PERIOD']);
		$array8 = json_encode($response3 ['indices'][$i4]['OBS_VALUE']);
		if ($array==$array7){
		$texto8=str_replace('"','',$array8); 
		echo '<td>'.number_format($texto8, 2, '.', ' ') .'</td>';
		};		
		}
		if ($i<="11")
		{
		echo '<td>N.D.</td>';
		};
		for($i5=0;$i5<count($response4 ["indices"]);$i5++){
		$array9 = json_encode($response4 ['indices'][$i5]['TIME_PERIOD']);
		$array10 = json_encode($response4 ['indices'][$i5]['OBS_VALUE']);
		if ($array==$array9){
		$texto10=str_replace('"','',$array10); 
		echo '<td>'.number_format($texto10, 2, '.', ' ') .'</td>';
		};		
		}
		for($i6=0;$i6<count($response5 ["indices"]);$i6++){
		$array11 = json_encode($response5 ['indices'][$i6]['TIME_PERIOD']);
		$array12 = json_encode($response5 ['indices'][$i6]['OBS_VALUE']);
		if ($array==$array11){
		$texto12=str_replace('"','',$array12); 
		echo '<td>'.number_format($texto12, 2, '.', ' ') .'</td>';
		};
		}
		
		
		if ($i<="11")
		{
		echo '<td>N.D.</td>';
		};
		
		
		echo '</tr>';
		
		};
		$i++;
		$i1++;
		$i2++;
		
		
		
		echo "</tbody>";
		break;


		case 84:
		
		?>
		<caption align='center'>Indicador  global de la actividad económica (IGAE) por actividad</caption>
		<caption align='center'>(Índice de volumen físico 2008 = 100 - series desestacionalizadas)</caption>
		
		
		
		<thead  align='center' border='2px'>
           <tr  align='center' border='2px'>
          
             <th scope='col' align='center' border='2px'>Año</th>
             <th scope='col' align='center' border='2px'>Mes</th>
			 <th scope='col' align='center' border='2px'>Actividades<br>Primarias</th>
			 <th scope='col' align='center' border='2px'>Variación<br>% mensual</th>
			 <th scope='col' align='center' border='2px'>Variación<br>% anual</th>
			 <th scope='col' align='center' border='2px'>Actividades<br>Secundarias</th>
			 <th scope='col' align='center' border='2px'>Variación<br>% mensual</th>
			 <th scope='col' align='center' border='2px'>Variación<br>% anual</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Actividades<br>Tercearias</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Variación<br>% mensual</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Variación<br>% anual</th>
		   </tr>
        </thead>
<tbody align='center'>
	<?php
		$indice =405704; //
		$lugar = 00;
		$indice1 =405705; //
		$lugar1 =00 ;
		$indice2 =448565; //
		$lugar2 = 00;
		$indice3 =405708; //
		$lugar3 = 00;
		$indice4 =405709; //
		$lugar4 = 00;
		$indice5 =448566; //
		$lugar5 = 00;
		$indice6 =405714; //
		$lugar6 = 00;
		$indice7 =405715; //
		$lugar7 = 00;
		$indice8 =448583; //
		$lugar8 = 00;
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		$response3 = $inegi->index($indice3, $lugar3);
		$response4 = $inegi->index($indice4, $lugar4);
		$response5 = $inegi->index($indice5, $lugar5);
		$response6 = $inegi->index($indice6, $lugar6);
		$response7 = $inegi->index($indice, $lugar7);
		$response8 = $inegi->index($indice8, $lugar8);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
						if($variable1=="01"){
						echo '<td>ENERO</td>';
						};
						if($variable1=="02"){
						echo '<td>FEBRERO</td>';
						};
						if($variable1=="03"){
						echo '<td>MARZO</td>';
						};
						if($variable1=="04"){
						echo '<td>ABRIL</td>';
						};
						if($variable1=="05"){
						echo '<td>MAYO</td>';
						};
						if($variable1=="06"){
						echo '<td>JUNIO</td>';
						};
						if($variable1=="07"){
						echo '<td>JULIO</td>';
						};
						if($variable1=="08"){
						echo '<td>AGOSTO</td>';
						};
						if($variable1=="09"){
						echo '<td>SEPTIEMBRE</td>';
						};
						if($variable1=="10"){
						echo '<td>OCTUBRE</td>';
						};
						if($variable1=="11"){
						echo '<td>NOVIEMBRE</td>';
						};
						if($variable1=="12"){
						echo '<td>DICIEMBRE</td>';
						};
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		
	
		if ($i<="0")
		{
		echo '<td>N.D.</td>';
		};
		for($i3=0;$i3<count($response2 ["indices"]);$i3++){
		$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
		$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
		if ($array==$array5){
		$texto6=str_replace('"','',$array6); 
		echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
		};		
		};	
		if ($i<="11")
		{
		echo '<td>N.D.</td>';
		};
		
		
		for($i4=0;$i4<count($response3 ["indices"]);$i4++){
		$array7 = json_encode($response3 ['indices'][$i4]['TIME_PERIOD']);
		$array8 = json_encode($response3 ['indices'][$i4]['OBS_VALUE']);
		if ($array==$array7){
		$texto8=str_replace('"','',$array8); 
		echo '<td>'.number_format($texto8, 2, '.', ' ') .'</td>';
		};		
		}
		
		for($i5=0;$i5<count($response4 ["indices"]);$i5++){
		$array9 = json_encode($response4 ['indices'][$i5]['TIME_PERIOD']);
		$array10 = json_encode($response4 ['indices'][$i5]['OBS_VALUE']);
		if ($array==$array9){
		$texto10=str_replace('"','',$array10); 
		echo '<td>'.number_format($texto10, 2, '.', ' ') .'</td>';
		};		
		}
		if ($i<="0")
		{
		echo '<td>N.D.</td>';
		};
		for($i6=0;$i6<count($response5 ["indices"]);$i6++){
		$array11 = json_encode($response5 ['indices'][$i6]['TIME_PERIOD']);
		$array12 = json_encode($response5 ['indices'][$i6]['OBS_VALUE']);
		if ($array==$array11){
		$texto12=str_replace('"','',$array12); 
		echo '<td>'.number_format($texto12, 2, '.', ' ') .'</td>';
		};		
		}
		if ($i<="11")
		{
		echo '<td>N.D.</td>';
		};
		
		for($i7=0;$i7<count($response6 ["indices"]);$i7++){
		$array13 = json_encode($response6 ['indices'][$i7]['TIME_PERIOD']);
		$array14 = json_encode($response6 ['indices'][$i7]['OBS_VALUE']);
		if ($array==$array13){
		$texto14=str_replace('"','',$array14); 
		echo '<td>'.number_format($texto14, 2, '.', ' ') .'</td>';
		};		
		}
		
		for($i8=0;$i8<count($response7 ["indices"]);$i8++){
		$array15 = json_encode($response7 ['indices'][$i8]['TIME_PERIOD']);
		$array16 = json_encode($response7 ['indices'][$i8]['OBS_VALUE']);
		if ($array==$array15){
		$texto16=str_replace('"','',$array16); 
		echo '<td>'.number_format($texto16, 2, '.', ' ') .'</td>';
		};		
		}
		
		for($i9=0;$i9<count($response8 ["indices"]);$i9++){
		$array17 = json_encode($response8 ['indices'][$i9]['TIME_PERIOD']);
		$array18 = json_encode($response8 ['indices'][$i9]['OBS_VALUE']);
		if ($array==$array17){
		$texto18=str_replace('"','',$array18); 
		echo '<td>'.number_format($texto18, 2, '.', ' ') .'</td>';
		};		
		}
		if ($i<="11")
		{
		echo '<td>N.D.</td>';
		};
		
		echo '</tr>';
		
		};
		$i++;
		$i1++;
		$i2++;
		$i3++;
		$i4++;
		
		
		
		echo "</tbody>";
		break;

		case 85:
		
		?>
		<caption align='center'>Indicador trimestral de la actividad económica estatal (ITAEE)<br>Estado de Puebla</caption>
		<caption align='center'>(Índice de volumen físico 2008 = 100 - series originales)</caption>
		
		
		
		<thead align='center' border='2px'>
         <tr align='center' border='2px'>
          
          <th scope='col'  align='center' border='2px'>Año</th>
           <th scope='col'  align='center' border='2px'>Trimestre</th>
			<th scope='col'  align='center' border='2px'>Índice</th>
			 <th scope='col'  align='center' border='2px'>Variación % respecto<br>al mismo trimestre<br>del año anterior</th>
		   </tr>
        </thead>
		<tbody align='center'>
		<?php	
		$indice =428050; //
		$lugar = 00;
		$indice1 =428091; //
		$lugar1 =00 ;
		
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);

		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
						if($variable1=="01"){
						echo '<td>I</td>';
						};
						if($variable1=="02"){
						echo '<td>II</td>';
						};
						if($variable1=="03"){
						echo '<td>III</td>';
						};
						if($variable1=="04"){
						echo '<td>IV</td>';
						};
						
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		
		if ($i<="3")
		{
		echo '<td>N.D.</td>';
		};
		
		
		echo '</tr>';
		
		};
		$i++;
		$i1++;
		$i2++;
		
		
		
		echo "</tbody>";		
		break;

		case 86:	
	?>
		<caption  align='center'>Indicador trimestral de la actividad económica estatal (ITAEE)<br>Estado de Puebla</caption>
		<caption  align='center'>(Índice de volumen físico 2008 = 100)</caption>
		
		
		
		<thead align='center' border='2px'>
         <tr align='center' border='2px'>
          
             <th scope='col'  align='center' border='2px'>Año</th>
             <th scope='col'  align='center' border='2px'>Trimestre</th>
			 <th scope='col'  align='center' border='2px'>Índice</th>
			 <th scope='col'  align='center' border='2px'>Variación trimestral<BR>(Variación porcentual) </th>
			 <th scope='col'  align='center' border='2px'>Variación % respecto<br>al mismo trimestre<br>del año anterior</th>
		   </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice =436071; //
		$lugar = 00;
		$indice1 =453196; //
		$lugar1 =00 ;
		$indice2 =453197; //
		$lugar2 =00 ;
		
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);

		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
						if($variable1=="01"){
						echo '<td>I</td>';
						};
						if($variable1=="02"){
						echo '<td>II</td>';
						};
						if($variable1=="03"){
						echo '<td>III</td>';
						};
						if($variable1=="04"){
						echo '<td>IV</td>';
						};
						
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		
		
		for($i3=0;$i3<count($response2 ["indices"]);$i3++){
		$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
		$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
		if ($array==$array5){
		$texto6=str_replace('"','',$array6); 
		echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
		};		
		};
		if ($i<="0")
		{
		echo '<td>N.D.</td>';
		};
		
		
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		if ($i<="3")
		{
		echo '<td>N.D.</td>';
		};
		
		
		
		
		echo '</tr>';
		
		};
		$i++;
		$i1++;
		$i2++;
		
		
		
		echo "</tbody>";		
		break;

case 43:
	?>	
		<caption align='center'> Trimestral de la actividad económica estatal (ITAEE) por actividad<br>Estado de Puebla</caption>
		<caption align='center'>(Índice de volumen físico 2008 = 100 - series originales)</caption>
		
		
		
		<thead align='center' border='2px'>
         <tr align='center' border='2px'>
          
             <th scope='col'  align='center' border='2px'>Año</th>
             <th scope='col'  align='center' border='2px'>Trimestre</th>
			 <th scope='col'  align='center' border='2px'>Actividades<br>Primarias</th>
			 <th scope='col'  align='center' border='2px'>Variación %<br>anual</th>
			 <th scope='col'  align='center' border='2px'>Actividades<br>secundarias</th>
			 <th scope='col'  align='center' border='2px'>Variación %<br>anual</th>
			 <th scope='col'  align='center' border='2px'>Actividades<br>tercearias</th>
			 <th scope='col'  align='center' border='2px'>Variación %<br>anual</th>
		   </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice =428128; //
		$lugar = 00;
		$indice1 =428160; //
		$lugar1 =00 ;
		$indice2 =428196; //
		$lugar2 = 00;
		$indice3 =428237; //
		$lugar3 = 00;
		$indice4 =428274; //
		$lugar4 = 00;
		$indice5 =428306; //
		$lugar5 = 00;
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		$response3 = $inegi->index($indice3, $lugar3);
		$response4 = $inegi->index($indice4, $lugar4);
		$response5 = $inegi->index($indice5, $lugar5);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
						if($variable1=="01"){
						echo '<td>I</td>';
						};
						if($variable1=="02"){
						echo '<td>II</td>';
						};
						if($variable1=="03"){
						echo '<td>III</td>';
						};
						if($variable1=="04"){
						echo '<td>IV</td>';
						};
						
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		
		if ($i<="3")
		{
		echo '<td>N.D.</td>';
		};
		
		for($i3=0;$i3<count($response2 ["indices"]);$i3++){
		$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
		$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
		if ($array==$array5){
		$texto6=str_replace('"','',$array6); 
		echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
		};		
		};	
		for($i4=0;$i4<count($response3 ["indices"]);$i4++){
		$array7 = json_encode($response3 ['indices'][$i4]['TIME_PERIOD']);
		$array8 = json_encode($response3 ['indices'][$i4]['OBS_VALUE']);
		if ($array==$array7){
		$texto8=str_replace('"','',$array8); 
		echo '<td>'.number_format($texto8, 2, '.', ' ') .'</td>';
		};		
		}
		if ($i<="3")
		{
		echo '<td>N.D.<br>';
		};
		for($i5=0;$i5<count($response4 ["indices"]);$i5++){
		$array9 = json_encode($response4 ['indices'][$i5]['TIME_PERIOD']);
		$array10 = json_encode($response4 ['indices'][$i5]['OBS_VALUE']);
		if ($array==$array9){
		$texto10=str_replace('"','',$array10); 
		echo '<td>'.number_format($texto10, 2, '.', ' ') .'</td>';
		};		
		}
		for($i6=0;$i6<count($response5 ["indices"]);$i6++){
		$array11 = json_encode($response5 ['indices'][$i6]['TIME_PERIOD']);
		$array12 = json_encode($response5 ['indices'][$i6]['OBS_VALUE']);
		if ($array==$array11){
		$texto12=str_replace('"','',$array12); 
		echo '<td>'.number_format($texto12, 2, '.', ' ') .'</td>';
		};
		}
		if ($i<="3")
		{
		echo '<td>N.D.</td>';
		};
		echo '</tr>';
		};
		$i++;
		$i1++;
		$i2++;
		echo "</tbody>";
		
		break;		

		case 53:
		?>

		<caption align='center'>Exportaciones nacionales petroleras y no petroleras</caption>
		<caption align='center'>(Millones de dólares)</caption>
		<thead align='center' border='2px'>
        <tr align='center' border='2px'>
          
             <th scope='col'  align='center' border='2px'>Año</th>
             <th scope='col'  align='center' border='2px'>Mes</th>
			 <th scope='col'  align='center' border='2px'>Total FOB a/</th>
			 <th scope='col'  align='center' border='2px'>Exportaciones<br>petroleras</th>
			 <th scope='col'  align='center' border='2px'>Exportaciones<br>no petroleras<br>/a</th>
		   </tr>
        </thead>
        <tbody align='center'>
		<?php
		$indice =33815; //
		$lugar = 00;
		$indice1 =33816; //
		$lugar1 = 00;
		$indice2 =33817; //
		$lugar2 = 00;

		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
			if($variable1=="01"){
			echo '<td>ENERO</td>';
			};
			if($variable1=="02"){
			echo '<td>FEBRERO</td>';
			};
			if($variable1=="03"){
			echo '<td>MARZO</td>';
			};
			if($variable1=="04"){
			echo '<td>ABRIL</td>';
			};
			if($variable1=="05"){
			echo '<td>MAYO</td>';
			};
			if($variable1=="06"){
			echo '<td>JUNIO</td>';
			};
			if($variable1=="07"){
			echo '<td>JULIO</td>';
			};
			if($variable1=="08"){
			echo '<td>AGOSTO</td>';
			};
			if($variable1=="09"){
			echo '<td>SEPTIEMBRE</td>';
			};
			if($variable1=="10"){
			echo '<td>OCTUBRE</td>';
			};
			if($variable1=="11"){
			echo '<td>NOVIEMBRE</td>';
			};
			if($variable1=="12"){
			echo '<td>DICIEMBRE</td>';
			};
			
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		for($i3=0;$i3<count($response2 ["indices"]);$i3++){
		$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
		$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
		if ($array==$array5){
		$texto6=str_replace('"','',$array6); 
		echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
		};		
		};	
		
	

		echo '</tr>';
		
		};
		$i++;
		$i1++;
		$i2++;	
		$i3++;	
		echo "</tbody>";
		
		break;
		case 54:
		?>	
		<caption align='center'>Exportaciones nacionales por grandes grupos de actividad económica</caption>
		<caption align='center'>(Millones de dólares)</caption>
		
		
		
		<thead align='center' border='2px'>
         <tr align='center' border='2px'>
          
             <th scope='col'  align='center' border='2px'>Año</th>
             <th scope='col'  align='center' border='2px'>Mes</th>
			 <th scope='col'  align='center' border='2px'>Total a/</th>
			 <th scope='col'  align='center' border='2px'>Agropecuarias b/</th>
			 <th scope='col'  align='center' border='2px'>Extraactivas c/</th>
			 <th scope='col'  align='center' border='2px'>Manufactureras</th>
		   </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice =33838; //
		$lugar = 00;
		$indice1 =33839; //
		$lugar1 = 00;
		$indice2 =33840; //
		$lugar2 = 00;
		$indice3 =33841; //
		$lugar3 = 00;

		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		$response3 = $inegi->index($indice3, $lugar3);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
			if($variable1=="01"){
			echo '<td>ENERO</td>';
			};
			if($variable1=="02"){
			echo '<td>FEBRERO</td>';
			};
			if($variable1=="03"){
			echo '<td>MARZO</td>';
			};
			if($variable1=="04"){
			echo '<td>ABRIL</td>';
			};
			if($variable1=="05"){
			echo '<td>MAYO</td>';
			};
			if($variable1=="06"){
			echo '<td>JUNIO</td>';
			};
			if($variable1=="07"){
			echo '<td>JULIO</td>';
			};
			if($variable1=="08"){
			echo '<td>AGOSTO</td>';
			};
			if($variable1=="09"){
			echo '<td>SEPTIEMBRE</td>';
			};
			if($variable1=="10"){
			echo '<td>OCTUBRE</td>';
			};
			if($variable1=="11"){
			echo '<td>NOVIEMBRE</td>';
			};
			if($variable1=="12"){
			echo '<td>DICIEMBRE</td>';
			};
			
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		for($i3=0;$i3<count($response2 ["indices"]);$i3++){
		$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
		$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
		if ($array==$array5){
		$texto6=str_replace('"','',$array6); 
		echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
		};		
		};	
		for($i4=0;$i4<count($response3 ["indices"]);$i4++){
		$array7 = json_encode($response3 ['indices'][$i4]['TIME_PERIOD']);
		$array8 = json_encode($response3 ['indices'][$i4]['OBS_VALUE']);
		if ($array==$array7){
		$texto8=str_replace('"','',$array8); 
		echo '<td>'.number_format($texto8, 2, '.', ' ') .'</td>';
		};		
		}
	

		echo '</tr>';
		
		};
		$i++;
		$i1++;
		$i2++;	
		$i3++;
		$i4++;
		
		echo "</tbody>";		
		break;
		case 55:
		?>	
		<caption align='center'>Exportaciones nacionales por grandes grupos de actividad agropecuarias</caption>
		<caption align='center'>(Millones de dólares)</caption>
		
		
		
		<thead align='center' border='2px'>
           <tr align='center' border='2px'>
          
             <th scope='col'  align='center' border='2px'>Año</th>
             <th scope='col'  align='center' border='2px'>Mes</th>
			 <th scope='col'  align='center' border='2px'>Total a/</th>
			 <th scope='col'  align='center' border='2px'>Ganado<br>Vacuno</th>
			 <th scope='col'  align='center' border='2px'>Miel</th>
			 <th scope='col'  align='center' border='2px'>Flores</th>
			 <th scope='col'  align='center' border='2px'>Pimiento</th>
			 <th scope='col'  align='center' border='2px'>Jitomate</th>
			 <th scope='col'  align='center' border='2px'>Cebolla<br>y Ajos</th>
			 <th scope='col'  align='center' border='2px'>Pepino</th>
			 <th scope='col'  align='center' border='2px'>Frijol</th>
			 <th scope='col'  align='center' border='2px'>Garbanzo</th>
			 <th scope='col'  align='center' border='2px'>Frutas y<br>frutos<br>comestibles</th>
			 <th scope='col'  align='center' border='2px'>Bananas o <br>plátanos </th>
			 <th scope='col'  align='center' border='2px'>Aguacate</th>
			 <th scope='col'  align='center' border='2px'>Mangos</th>
			 <th scope='col'  align='center' border='2px'>Citrícos</th>
			 <th scope='col'  align='center' border='2px'>Uvas y <br>pasas</th>
			 <th scope='col'  align='center' border='2px'>Melón<br>sandia y<br>papaya</th>
			 <th scope='col'  align='center' border='2px'>Fresas<BR>frescas</th>
			 <th scope='col'  align='center' border='2px'>Café Crudo en grano</th>
			 <th scope='col'  align='center' border='2px'>Trigo</th>
			 <th scope='col'  align='center' border='2px'>Maíz</th>
			 <th scope='col'  align='center' border='2px'>Tabaco</th>
			 <th scope='col'  align='center' border='2px'>Algodón</th>
			 <th scope='col'  align='center' border='2px'>Otras<br>legumbres<br>y hortalizas<br>frescas</th>
			 <th scope='col'  align='center' border='2px'>Otros productos agropecuarios</th>
			 <th scope='col'  align='center' border='2px'>Camarón Congelado</th>
			 <th scope='col'  align='center' border='2px'>Otros pescados crustáceos y moluscos</th>
		
			 
		   </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice =203866; //
		$lugar = 00;
		$indice1 =203867; //
		$lugar1 = 00;
		$indice2 =203868; //
		$lugar2 = 00;
		$indice3 =203869; //
		$lugar3 = 00;
		$indice4 =203870; //
		$lugar4 = 00;
		$indice5 =203871; //
		$lugar5 = 00;
		$indice6 =203872; //
		$lugar6 = 00;
		$indice7 =203873; //
		$lugar7 = 00;
		$indice8 =203874; //
		$lugar8 = 00;
		$indice9 =203875; //
		$lugar9 = 00;
		$indice10 =203876; //
		$lugar10 = 00;
		$indice11 =203877; //
		$lugar11 = 00;
		$indice12 =203878; //
		$lugar12 = 00;
		$indice13 =203879; //
		$lugar13 = 00;
		$indice14 =203880; //
		$lugar14 = 00;
		$indice15 =203881; //
		$lugar15 = 00;
		$indice16 =203882; //
		$lugar16 = 00;
		$indice17 =203883; //
		$lugar17 = 00;
		$indice18 =203884; //
		$lugar18 = 00;
		$indice19 =203885; //
		$lugar19 = 00;
		$indice20 =203886; //
		$lugar20 = 00;
		$indice21 =203887; //
		$lugar21 = 00;
		$indice22 =203888; //
		$lugar22 = 00;
		$indice23 =203889; //
		$lugar23 = 00;
		$indice24 =203890; //
		$lugar24 = 00;
		$indice25 =203891; //
		$lugar25 = 00;
		$indice26 =203892; //
		$lugar26 = 00;

		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		$response3 = $inegi->index($indice3, $lugar3);
		$response4 = $inegi->index($indice4, $lugar4);
		$response5 = $inegi->index($indice5, $lugar5);
		$response6 = $inegi->index($indice6, $lugar6);
		$response7 = $inegi->index($indice7, $lugar7);
		$response8 = $inegi->index($indice8, $lugar8);
		$response9 = $inegi->index($indice9, $lugar9);
		$response10 = $inegi->index($indice10, $lugar10);
		$response11 = $inegi->index($indice11, $lugar11);
		$response12 = $inegi->index($indice12, $lugar12);
		$response13 = $inegi->index($indice13, $lugar13);
		$response14 = $inegi->index($indice14, $lugar14);
		$response15 = $inegi->index($indice15, $lugar15);
		$response16 = $inegi->index($indice16, $lugar16);
		$response17 = $inegi->index($indice17, $lugar17);
		$response18 = $inegi->index($indice18, $lugar18);
		$response19 = $inegi->index($indice19, $lugar19);
		$response20 = $inegi->index($indice20, $lugar20);
		$response21 = $inegi->index($indice21, $lugar21);
		$response22 = $inegi->index($indice22, $lugar22);
		$response23 = $inegi->index($indice23, $lugar23);
		$response24 = $inegi->index($indice24, $lugar24);
		$response25 = $inegi->index($indice25, $lugar25);
		$response26 = $inegi->index($indice26, $lugar26);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
			if($variable1=="01"){
			echo '<td>ENERO</td>';
			};
			if($variable1=="02"){
			echo '<td>FEBRERO</td>';
			};
			if($variable1=="03"){
			echo '<td>MARZO</td>';
			};
			if($variable1=="04"){
			echo '<td>ABRIL</td>';
			};
			if($variable1=="05"){
			echo '<td>MAYO</td>';
			};
			if($variable1=="06"){
			echo '<td>JUNIO</td>';
			};
			if($variable1=="07"){
			echo '<td>JULIO</td>';
			};
			if($variable1=="08"){
			echo '<td>AGOSTO</td>';
			};
			if($variable1=="09"){
			echo '<td>SEPTIEMBRE</td>';
			};
			if($variable1=="10"){
			echo '<td>OCTUBRE</td>';
			};
			if($variable1=="11"){
			echo '<td>NOVIEMBRE</td>';
			};
			if($variable1=="12"){
			echo '<td>DICIEMBRE</td>';
			};
			
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		for($i3=0;$i3<count($response2 ["indices"]);$i3++){
		$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
		$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
		if ($array==$array5){
		$texto6=str_replace('"','',$array6); 
		echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
		};		
		};	
		for($i4=0;$i4<count($response3 ["indices"]);$i4++){
		$array7 = json_encode($response3 ['indices'][$i4]['TIME_PERIOD']);
		$array8 = json_encode($response3 ['indices'][$i4]['OBS_VALUE']);
		if ($array==$array7){
		$texto8=str_replace('"','',$array8); 
		echo '<td>'.number_format($texto8, 2, '.', ' ') .'</td>';
		};		
		}
		for($i5=0;$i5<count($response4 ["indices"]);$i5++){
		$array9 = json_encode($response4 ['indices'][$i5]['TIME_PERIOD']);
		$array10 = json_encode($response4 ['indices'][$i5]['OBS_VALUE']);
		if ($array==$array9){
		$texto10=str_replace('"','',$array10); 
		echo '<td>'.number_format($texto10, 2, '.', ' ') .'</td>';
		};		
		}
		for($i6=0;$i6<count($response5 ["indices"]);$i6++){
		$array11 = json_encode($response5 ['indices'][$i6]['TIME_PERIOD']);
		$array12 = json_encode($response5 ['indices'][$i6]['OBS_VALUE']);
		if ($array==$array11){
		$texto12=str_replace('"','',$array12); 
		echo '<td>'.number_format($texto12, 2, '.', ' ') .'</td>';
		};		
		}
		for($i7=0;$i7<count($response6 ["indices"]);$i7++){
		$array13 = json_encode($response6 ['indices'][$i7]['TIME_PERIOD']);
		$array14 = json_encode($response6 ['indices'][$i7]['OBS_VALUE']);
		if ($array==$array13){
		$texto14=str_replace('"','',$array14); 
		echo '<td>'.number_format($texto14, 2, '.', ' ') .'</td>';
		};		
		}
		for($i8=0;$i8<count($response7 ["indices"]);$i8++){
		$array15 = json_encode($response7 ['indices'][$i8]['TIME_PERIOD']);
		$array16 = json_encode($response7 ['indices'][$i8]['OBS_VALUE']);
		if ($array==$array15){
		$texto16=str_replace('"','',$array16); 
		echo '<td>'.number_format($texto16, 2, '.', ' ') .'</td>';
		};		
		}
		for($i9=0;$i9<count($response8 ["indices"]);$i9++){
		$array17 = json_encode($response8 ['indices'][$i9]['TIME_PERIOD']);
		$array18 = json_encode($response8 ['indices'][$i9]['OBS_VALUE']);
		if ($array==$array17){
		$texto18=str_replace('"','',$array18); 
		echo '<td>'.number_format($texto18, 2, '.', ' ') .'</td>';
		};		
		}
		for($i10=0;$i10<count($response9 ["indices"]);$i10++){
		$array19 = json_encode($response9 ['indices'][$i10]['TIME_PERIOD']);
		$array20 = json_encode($response9 ['indices'][$i10]['OBS_VALUE']);
		if ($array==$array19){
		$texto20=str_replace('"','',$array20); 
		echo '<td>'.number_format($texto20, 2, '.', ' ') .'</td>';
		};		
		}
		for($i11=0;$i11<count($response10 ["indices"]);$i11++){
		$array21 = json_encode($response10 ['indices'][$i11]['TIME_PERIOD']);
		$array22 = json_encode($response10 ['indices'][$i11]['OBS_VALUE']);
		if ($array==$array21){
		$texto22=str_replace('"','',$array22); 
		echo '<td>'.number_format($texto22, 2, '.', ' ') .'</td>';
		};		
		}
		for($i12=0;$i12<count($response11 ["indices"]);$i12++){
		$array23 = json_encode($response11 ['indices'][$i12]['TIME_PERIOD']);
		$array24 = json_encode($response11 ['indices'][$i12]['OBS_VALUE']);
		if ($array==$array23){
		$texto24=str_replace('"','',$array24); 
		echo '<td>'.number_format($texto24, 2, '.', ' ') .'</td>';
		};		
		}
		for($i13=0;$i13<count($response12 ["indices"]);$i13++){
		$array25 = json_encode($response12 ['indices'][$i13]['TIME_PERIOD']);
		$array26 = json_encode($response12 ['indices'][$i13]['OBS_VALUE']);
		if ($array==$array25){
		$texto26=str_replace('"','',$array26); 
		echo '<td>'.number_format($texto26, 2, '.', ' ') .'</td>';
		};		
		};	
		for($i14=0;$i14<count($response13 ["indices"]);$i14++){
		$array27 = json_encode($response13 ['indices'][$i14]['TIME_PERIOD']);
		$array28 = json_encode($response13 ['indices'][$i14]['OBS_VALUE']);
		if ($array==$array27){
		$texto28=str_replace('"','',$array28); 
		echo '<td>'.number_format($texto28, 2, '.', ' ') .'</td>';
		};		
		}
		for($i15=0;$i15<count($response14 ["indices"]);$i15++){
		$array29 = json_encode($response14 ['indices'][$i15]['TIME_PERIOD']);
		$array30 = json_encode($response14 ['indices'][$i15]['OBS_VALUE']);
		if ($array==$array29){
		$texto30=str_replace('"','',$array30); 
		echo '<td>'.number_format($texto30, 2, '.', ' ') .'</td>';
		};		
		}
		for($i16=0;$i16<count($response15 ["indices"]);$i16++){
		$array31 = json_encode($response15 ['indices'][$i16]['TIME_PERIOD']);
		$array32 = json_encode($response15 ['indices'][$i16]['OBS_VALUE']);
		if ($array==$array31){
		$texto32=str_replace('"','',$array32); 
		echo '<td>'.number_format($texto32, 2, '.', ' ') .'</td>';
		};		
		}
		for($i17=0;$i17<count($response16 ["indices"]);$i17++){
		$array33 = json_encode($response16 ['indices'][$i17]['TIME_PERIOD']);
		$array34 = json_encode($response16 ['indices'][$i17]['OBS_VALUE']);
		if ($array==$array33){
		$texto34=str_replace('"','',$array34); 
		echo '<td>'.number_format($texto34, 2, '.', ' ') .'</td>';
		};		
		}
		for($i18=0;$i18<count($response17 ["indices"]);$i18++){
		$array35 = json_encode($response17 ['indices'][$i18]['TIME_PERIOD']);
		$array36 = json_encode($response17 ['indices'][$i18]['OBS_VALUE']);
		if ($array==$array35){
		$texto36=str_replace('"','',$array36); 
		echo '<td>'.number_format($texto36, 2, '.', ' ') .'</td>';
		};		
		}
		for($i19=0;$i19<count($response18 ["indices"]);$i19++){
		$array37 = json_encode($response18 ['indices'][$i19]['TIME_PERIOD']);
		$array38 = json_encode($response18 ['indices'][$i19]['OBS_VALUE']);
		if ($array==$array37){
		$texto38=str_replace('"','',$array38); 
		echo '<td>'.number_format($texto38, 2, '.', ' ') .'</td>';
		};		
		}
		for($i20=0;$i20<count($response19 ["indices"]);$i20++){
		$array39 = json_encode($response19 ['indices'][$i20]['TIME_PERIOD']);
		$array40 = json_encode($response19 ['indices'][$i20]['OBS_VALUE']);
		if ($array==$array39){
		$texto40=str_replace('"','',$array40); 
		echo '<td>'.number_format($texto40, 2, '.', ' ') .'</td>';
		};		
		}
		for($i21=0;$i21<count($response20 ["indices"]);$i21++){
		$array41 = json_encode($response20 ['indices'][$i21]['TIME_PERIOD']);
		$array42 = json_encode($response20 ['indices'][$i21]['OBS_VALUE']);
		if ($array==$array41){
		$texto42=str_replace('"','',$array42); 
		echo '<td>'.number_format($texto42, 2, '.', ' ') .'</td>';
		};		
		}
		for($i22=0;$i22<count($response21 ["indices"]);$i22++){
		$array43 = json_encode($response21 ['indices'][$i22]['TIME_PERIOD']);
		$array44 = json_encode($response21 ['indices'][$i22]['OBS_VALUE']);
		if ($array==$array43){
		$texto44=str_replace('"','',$array44); 
		echo '<td>'.number_format($texto44, 2, '.', ' ') .'</td>';
		};		
		}
	
		for($i23=0;$i23<count($response22 ["indices"]);$i23++){
		$array45 = json_encode($response22 ['indices'][$i23]['TIME_PERIOD']);
		$array46 = json_encode($response22 ['indices'][$i23]['OBS_VALUE']);
		if ($array==$array45){
		$texto46=str_replace('"','',$array46); 
		echo '<td>'.number_format($texto46, 2, '.', ' ') .'</td>';
		};		
		};	
		for($i24=0;$i24<count($response23 ["indices"]);$i24++){
		$array47 = json_encode($response23 ['indices'][$i24]['TIME_PERIOD']);
		$array48 = json_encode($response23 ['indices'][$i24]['OBS_VALUE']);
		if ($array==$array47){
		$texto48=str_replace('"','',$array48); 
		echo '<td>'.number_format($texto48, 2, '.', ' ') .'</td>';
		};		
		}
		for($i25=0;$i25<count($response24 ["indices"]);$i25++){
		$array49 = json_encode($response24 ['indices'][$i25]['TIME_PERIOD']);
		$array50 = json_encode($response24 ['indices'][$i25]['OBS_VALUE']);
		if ($array==$array49){
		$texto50=str_replace('"','',$array50); 
		echo '<td>'.number_format($texto50, 2, '.', ' ') .'</td>';
		};		
		}
		for($i26=0;$i26<count($response25 ["indices"]);$i26++){
		$array51 = json_encode($response25 ['indices'][$i26]['TIME_PERIOD']);
		$array52 = json_encode($response25 ['indices'][$i26]['OBS_VALUE']);
		if ($array==$array51){
		$texto52=str_replace('"','',$array52); 
		echo '<td>'.number_format($texto52, 2, '.', ' ') .'</td>';
		};		
		}
		for($i27=0;$i27<count($response26 ["indices"]);$i27++){
		$array53 = json_encode($response26 ['indices'][$i27]['TIME_PERIOD']);
		$array54 = json_encode($response26 ['indices'][$i27]['OBS_VALUE']);
		if ($array==$array53){
		$texto54=str_replace('"','',$array54); 
		echo '<td>'.number_format($texto54, 2, '.', ' ') .'</td>';
		};		
		}
		
		echo '</tr>';
		};
		$i++;
		$i1++;
		$i2++;	
		$i3++;
		$i4++;
		$i5++;
		$i6++;
		$i7++;	
		$i8++;
		$i9++;
		$i10++;	
		$i11++;
		$i12++;
		$i13++;
		$i14++;
		$i15++;
		$i16++;
		$i17++;	
		$i18++;
		$i19++;
		$i20++;	
		$i21++;
		$i22++;	
		$i23++;
		$i24++;
		$i25++;
		$i26++;
		$i27++;			
		
		echo "</tbody>";			
		break;

		case 56:
		?>
		<caption align='center'>Exportaciones nacionales de la industria manufacturera</caption>
		<caption align='center'>(Millones de dólares)</caption>
		
		
		
		   <thead align='center' border='2px'>
           <tr align='center' border='2px'>
          
             <th scope='col'  align='center' border='2px'>Año</th>
             <th scope='col'  align='center' border='2px'>Mes</th>
			 <th scope='col'  align='center' border='2px'>Total a/</th>
			 <th scope='col'  align='center' border='2px'>Alimentos<br>bebidas<br>tabaco</th>
			 <th scope='col'  align='center' border='2px'>Textiles<br>artículos de <br>vestir e<br>industria<br>del cuero</th>
			 <th scope='col'  align='center' border='2px'>Industria de<br>la madera</th>
			 <th scope='col'  align='center' border='2px'>Papel,<br>imprentas e<br>industria<br>editorial</th>
			 <th scope='col'  align='center' border='2px'>Quimica</th>
			 <th scope='col'  align='center' border='2px'>Productos<br>plásticos y<br>de caucho</th>
			 <th scope='col'  align='center' border='2px'>Fabricación<br>de otros<br>productos<br>minerales<br>no<br>metálicos</th>
			 <th scope='col'  align='center' border='2px'>Siderurgia</th>
			 <th scope='col'  align='center' border='2px'>Minerometalurgia</th>
			 <th scope='col'  align='center' border='2px'>Productos<br>metálicos<br>maquinaria<br>y equipo<br>Total<br>productos<br>metálicos<br>maquinaria<br>y equipos</th>
			 <th scope='col'  align='center' border='2px'>Otras <br>industrias<br>manufactureras</th>
			
		
			 
		   </tr>
        </thead>
		<tbody align='center'><font size='3'>
		<?php
		$indice =133023; //
		$lugar = 00;
		$indice1 =133024; //
		$lugar1 = 00;
		$indice2 =133025; //
		$lugar2 = 00;
		$indice3 =133026; //
		$lugar3 = 00;
		$indice4 =133027; //
		$lugar4 = 00;
		$indice5 =133028; //
		$lugar5 = 00;
		$indice6 =133029; //
		$lugar6 = 00;
		$indice7 =133030; //
		$lugar7 = 00;
		$indice8 =133031; //
		$lugar8 = 00;
		$indice9 =133032; //
		$lugar9 = 00;
		$indice10 =133033; //
		$lugar10 = 00;
		$indice11 =133043; //
		$lugar11 = 00;

		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		$response3 = $inegi->index($indice3, $lugar3);
		$response4 = $inegi->index($indice4, $lugar4);
		$response5 = $inegi->index($indice5, $lugar5);
		$response6 = $inegi->index($indice6, $lugar6);
		$response7 = $inegi->index($indice7, $lugar7);
		$response8 = $inegi->index($indice8, $lugar8);
		$response9 = $inegi->index($indice9, $lugar9);
		$response10 = $inegi->index($indice10, $lugar10);
		$response11 = $inegi->index($indice11, $lugar11);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
			if($variable1=="01"){
			echo '<td>ENERO</td>';
			};
			if($variable1=="02"){
			echo '<td>FEBRERO</td>';
			};
			if($variable1=="03"){
			echo '<td>MARZO</td>';
			};
			if($variable1=="04"){
			echo '<td>ABRIL</td>';
			};
			if($variable1=="05"){
			echo '<td>MAYO</td>';
			};
			if($variable1=="06"){
			echo '<td>JUNIO</td>';
			};
			if($variable1=="07"){
			echo '<td>JULIO</td>';
			};
			if($variable1=="08"){
			echo '<td>AGOSTO</td>';
			};
			if($variable1=="09"){
			echo '<td>SEPTIEMBRE</td>';
			};
			if($variable1=="10"){
			echo '<td>OCTUBRE</td>';
			};
			if($variable1=="11"){
			echo '<td>NOVIEMBRE</td>';
			};
			if($variable1=="12"){
			echo '<td>DICIEMBRE</td>';
			};
			
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		for($i3=0;$i3<count($response2 ["indices"]);$i3++){
		$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
		$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
		if ($array==$array5){
		$texto6=str_replace('"','',$array6); 
		echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
		};		
		};	
		for($i4=0;$i4<count($response3 ["indices"]);$i4++){
		$array7 = json_encode($response3 ['indices'][$i4]['TIME_PERIOD']);
		$array8 = json_encode($response3 ['indices'][$i4]['OBS_VALUE']);
		if ($array==$array7){
		$texto8=str_replace('"','',$array8); 
		echo '<td>'.number_format($texto8, 2, '.', ' ') .'</td>';
		};		
		}
		for($i5=0;$i5<count($response4 ["indices"]);$i5++){
		$array9 = json_encode($response4 ['indices'][$i5]['TIME_PERIOD']);
		$array10 = json_encode($response4 ['indices'][$i5]['OBS_VALUE']);
		if ($array==$array9){
		$texto10=str_replace('"','',$array10); 
		echo '<td>'.number_format($texto10, 2, '.', ' ') .'</td>';
		};		
		}
		for($i6=0;$i6<count($response5 ["indices"]);$i6++){
		$array11 = json_encode($response5 ['indices'][$i6]['TIME_PERIOD']);
		$array12 = json_encode($response5 ['indices'][$i6]['OBS_VALUE']);
		if ($array==$array11){
		$texto12=str_replace('"','',$array12); 
		echo '<td>'.number_format($texto12, 2, '.', ' ') .'</td>';
		};		
		}
		for($i7=0;$i7<count($response6 ["indices"]);$i7++){
		$array13 = json_encode($response6 ['indices'][$i7]['TIME_PERIOD']);
		$array14 = json_encode($response6 ['indices'][$i7]['OBS_VALUE']);
		if ($array==$array13){
		$texto14=str_replace('"','',$array14); 
		echo '<td>'.number_format($texto14, 2, '.', ' ') .'</td>';
		};		
		}
		for($i8=0;$i8<count($response7 ["indices"]);$i8++){
		$array15 = json_encode($response7 ['indices'][$i8]['TIME_PERIOD']);
		$array16 = json_encode($response7 ['indices'][$i8]['OBS_VALUE']);
		if ($array==$array15){
		$texto16=str_replace('"','',$array16); 
		echo '<td>'.number_format($texto16, 2, '.', ' ') .'</td>';
		};		
		}
		for($i9=0;$i9<count($response8 ["indices"]);$i9++){
		$array17 = json_encode($response8 ['indices'][$i9]['TIME_PERIOD']);
		$array18 = json_encode($response8 ['indices'][$i9]['OBS_VALUE']);
		if ($array==$array17){
		$texto18=str_replace('"','',$array18); 
		echo '<td>'.number_format($texto18, 2, '.', ' ') .'</td>';
		};		
		}
		for($i10=0;$i10<count($response9 ["indices"]);$i10++){
		$array19 = json_encode($response9 ['indices'][$i10]['TIME_PERIOD']);
		$array20 = json_encode($response9 ['indices'][$i10]['OBS_VALUE']);
		if ($array==$array19){
		$texto20=str_replace('"','',$array20); 
		echo '<td>'.number_format($texto20, 2, '.', ' ') .'</td>';
		};		
		}
		for($i11=0;$i11<count($response10 ["indices"]);$i11++){
		$array21 = json_encode($response10 ['indices'][$i11]['TIME_PERIOD']);
		$array22 = json_encode($response10 ['indices'][$i11]['OBS_VALUE']);
		if ($array==$array21){
		$texto22=str_replace('"','',$array22); 
		echo '<td>'.number_format($texto22, 2, '.', ' ') .'</td>';
		};		
		}
		for($i12=0;$i12<count($response11 ["indices"]);$i12++){
		$array23 = json_encode($response11 ['indices'][$i12]['TIME_PERIOD']);
		$array24 = json_encode($response11 ['indices'][$i12]['OBS_VALUE']);
		if ($array==$array23){
		$texto24=str_replace('"','',$array24); 
		echo '<td>'.number_format($texto24, 2, '.', ' ') .'</td>';
		};		
		}
	

		echo '</tr>';
		
		};
		$i++;
		$i1++;
		$i2++;	
		$i3++;
		$i4++;
		$i5++;
		$i6++;
		$i7++;	
		$i8++;
		$i9++;
		$i10++;	
		$i11++;
		$i12++;
		
		
		echo "</font></tbody>";
		break;

		case 59:
		?>
		<caption align='center'>Exportaciones por grandes grupos de actividad económica Estado de Puebla</caption>
		<caption align='center'>(Millones de dólares)</caption>
		
		
		
		<thead align='center' border='2px'>
           <tr align='center' border='2px'>
          
            <th scope='col'  align='center' border='2px'>Año</th>
			 <th scope='col'  align='center' border='2px'>Total a/</th>
			 <th scope='col'  align='center' border='2px'>Minería</th>
			 <th scope='col'  align='center' border='2px'>Manufacturas</th>
			 
		   </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice =438000; //
		$lugar = 21;
		$indice1 =438001; //
		$lugar1 = 21;
		$indice2 =438004; //
		$lugar2 = 21;

		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		for($i3=0;$i3<count($response2 ["indices"]);$i3++){
		$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
		$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
		if ($array==$array5){
		$texto6=str_replace('"','',$array6); 
		echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
		};		
		};	
		
	

		echo '</tr>';
		
		};
		$i++;
		$i1++;
		$i2++;	
		$i3++;	
		echo "</tbody>";
		
		break;
	    case 60:
		?>
		
		<caption width:'100%' align='center'>Exportaciones de la industria manufacturera Estado de Puebla</caption>
		<caption width:'100%' align='center'>(Millones de dólares)</caption>
		
		
		
		<thead align='center' border='2px'>
           <tr align='center' border='2px'>
          
            <th scope='col'  align='center' border='2px'>Perido</th>
             <th scope='col'  align='center' border='2px'>Total de Industrias<br>Manufacturas</th>
			 <th scope='col'  align='center' border='2px'>Industria alimentaria</th>
			 <th scope='col'  align='center' border='2px'>Industria de las bebidas y del tabaco</th>
			 <th scope='col'  align='center' border='2px'>Fabricación de insumos textiles y acabados de textiles</th>
			 <th scope='col'  align='center' border='2px'>Fabricacion de productos textiles, excepto prendas de vestir </th>
			 <th scope='col'  align='center' border='2px'>Fabricación de prendas de vestir</th>
			 <th scope='col'  align='center' border='2px'>Curtidos y acabado de cuero, piel y fabricacion de productos de cuero, piel y materiales sucedáneos</th>
			 <th scope='col'  align='center' border='2px'>Industria de la madera</th>
			 <th scope='col'  align='center' border='2px'>Industria del papel</th>
			 <th scope='col'  align='center' border='2px'>Impresión e industrias conexas</th>
			 <th scope='col'  align='center' border='2px'>Fabricación de productos derivados del petróleo y del carbón</th>
			 <th scope='col'  align='center' border='2px'>Industria química</th>
			 <th scope='col'  align='center' border='2px'>Industria del plástico y del hule</th>
			 <th scope='col'  align='center' border='2px'>Fabricación de productos a base de minerales no metálicos</th>
			 <th scope='col'  align='center' border='2px'>Industrias metálicas básicas</th>
			 <th scope='col'  align='center' border='2px'>Fabricación de productos metálicos</th>
			 <th scope='col'  align='center' border='2px'>Fabricación de maquinaria y equipo</th>
			 <th scope='col'  align='center' border='2px'>Fabricación de equipo de computación, comunicación medición y otros equipos</th>
			 <th scope='col'  align='center' border='2px'>Fabricación de accesorios, aparatos eléctricos y equipo de generación de energía eléctrica</th>
			 <th scope='col'  align='center' border='2px'>Fabricación de equipo de transporte</th>
			 <th scope='col'  align='center' border='2px'>Fabricación de muebles, colchones y persianas</th>
			 <th scope='col'  align='center' border='2px'>Otras industrias manufactureras</th>
			
		
			 
		   </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice =438004; //
		$lugar = 00;
		$indice1 =438005; //
		$lugar1 = 00;
		$indice2 =438006; //
		$lugar2 = 00;
		$indice3 =438007; //
		$lugar3 = 00;
		$indice4 =438008; //
		$lugar4 = 00;
		$indice5 =438009; //
		$lugar5 = 00;
		$indice6 =438010; //
		$lugar6 = 00;
		$indice7 =438011; //
		$lugar7 = 00;
		$indice8 =438012; //
		$lugar8 = 00;
		$indice9 =438013; //
		$lugar9 = 00;
		$indice10 =438014; //
		$lugar10 = 00;
		$indice11 =438015; //
		$lugar11 = 00;
		$indice12 =438016; //
		$lugar12 = 00;
		$indice13 =438017; //
		$lugar13 = 00;
		$indice14 =438018; //
		$lugar14 = 00;
		$indice15 =438019; //
		$lugar15 = 00;
		$indice16 =438020; //
		$lugar16 = 00;
		$indice17 =438021; //
		$lugar17 = 00;
		$indice18 =438022; //
		$lugar18 = 00;
		$indice19 =438023; //
		$lugar19 = 00;
		$indice20 =438024; //
		$lugar20 = 00;
		$indice21 =438025; //
		$lugar21 = 00;

		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		$response3 = $inegi->index($indice3, $lugar3);
		$response4 = $inegi->index($indice4, $lugar4);
		$response5 = $inegi->index($indice5, $lugar5);
		$response6 = $inegi->index($indice6, $lugar6);
		$response7 = $inegi->index($indice7, $lugar7);
		$response8 = $inegi->index($indice8, $lugar8);
		$response9 = $inegi->index($indice9, $lugar9);
		$response10 = $inegi->index($indice10, $lugar10);
		$response11 = $inegi->index($indice11, $lugar11);
		$response12 = $inegi->index($indice12, $lugar12);
		$response13 = $inegi->index($indice13, $lugar13);
		$response14 = $inegi->index($indice14, $lugar14);
		$response15 = $inegi->index($indice15, $lugar15);
		$response16 = $inegi->index($indice16, $lugar16);
		$response17 = $inegi->index($indice17, $lugar17);
		$response18 = $inegi->index($indice18, $lugar18);
		$response19 = $inegi->index($indice19, $lugar19);
		$response20 = $inegi->index($indice20, $lugar20);
		$response21 = $inegi->index($indice21, $lugar21);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
			if($variable1=="01"){
			echo '<td>ENERO</td>';
			};
			if($variable1=="02"){
			echo '<td>FEBRERO</td>';
			};
			if($variable1=="03"){
			echo '<td>MARZO</td>';
			};
			if($variable1=="04"){
			echo '<td>ABRIL</td>';
			};
			if($variable1=="05"){
			echo '<td>MAYO</td>';
			};
			if($variable1=="06"){
			echo '<td>JUNIO</td>';
			};
			if($variable1=="07"){
			echo '<td>JULIO</td>';
			};
			if($variable1=="08"){
			echo '<td>AGOSTO</td>';
			};
			if($variable1=="09"){
			echo '<td>SEPTIEMBRE</td>';
			};
			if($variable1=="10"){
			echo '<td>OCTUBRE</td>';
			};
			if($variable1=="11"){
			echo '<td>NOVIEMBRE</td>';
			};
			if($variable1=="12"){
			echo '<td>DICIEMBRE</td>';
			};
			
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		for($i3=0;$i3<count($response2 ["indices"]);$i3++){
		$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
		$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
		if ($array==$array5){
		$texto6=str_replace('"','',$array6); 
		echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
		};		
		};	
		for($i4=0;$i4<count($response3 ["indices"]);$i4++){
		$array7 = json_encode($response3 ['indices'][$i4]['TIME_PERIOD']);
		$array8 = json_encode($response3 ['indices'][$i4]['OBS_VALUE']);
		if ($array==$array7){
		$texto8=str_replace('"','',$array8); 
		echo '<td>'.number_format($texto8, 2, '.', ' ') .'</td>';
		};		
		}
		for($i5=0;$i5<count($response4 ["indices"]);$i5++){
		$array9 = json_encode($response4 ['indices'][$i5]['TIME_PERIOD']);
		$array10 = json_encode($response4 ['indices'][$i5]['OBS_VALUE']);
		if ($array==$array9){
		$texto10=str_replace('"','',$array10); 
		echo '<td>'.number_format($texto10, 2, '.', ' ') .'</td>';
		};		
		}
		for($i6=0;$i6<count($response5 ["indices"]);$i6++){
		$array11 = json_encode($response5 ['indices'][$i6]['TIME_PERIOD']);
		$array12 = json_encode($response5 ['indices'][$i6]['OBS_VALUE']);
		if ($array==$array11){
		$texto12=str_replace('"','',$array12); 
		echo '<td>'.number_format($texto12, 2, '.', ' ') .'</td>';
		};		
		}
		for($i7=0;$i7<count($response6 ["indices"]);$i7++){
		$array13 = json_encode($response6 ['indices'][$i7]['TIME_PERIOD']);
		$array14 = json_encode($response6 ['indices'][$i7]['OBS_VALUE']);
		if ($array==$array13){
		$texto14=str_replace('"','',$array14); 
		echo '<td>'.number_format($texto14, 2, '.', ' ') .'</td>';
		};		
		}
		for($i8=0;$i8<count($response7 ["indices"]);$i8++){
		$array15 = json_encode($response7 ['indices'][$i8]['TIME_PERIOD']);
		$array16 = json_encode($response7 ['indices'][$i8]['OBS_VALUE']);
		if ($array==$array15){
		$texto16=str_replace('"','',$array16); 
		echo '<td>'.number_format($texto16, 2, '.', ' ') .'</td>';
		};		
		}
		for($i9=0;$i9<count($response8 ["indices"]);$i9++){
		$array17 = json_encode($response8 ['indices'][$i9]['TIME_PERIOD']);
		$array18 = json_encode($response8 ['indices'][$i9]['OBS_VALUE']);
		if ($array==$array17){
		$texto18=str_replace('"','',$array18); 
		echo '<td>'.number_format($texto18, 2, '.', ' ') .'</td>';
		};		
		}
		for($i10=0;$i10<count($response9 ["indices"]);$i10++){
		$array19 = json_encode($response9 ['indices'][$i10]['TIME_PERIOD']);
		$array20 = json_encode($response9 ['indices'][$i10]['OBS_VALUE']);
		if ($array==$array19){
		$texto20=str_replace('"','',$array20); 
		echo '<td>'.number_format($texto20, 2, '.', ' ') .'</td>';
		};		
		}
		for($i11=0;$i11<count($response10 ["indices"]);$i11++){
		$array21 = json_encode($response10 ['indices'][$i11]['TIME_PERIOD']);
		$array22 = json_encode($response10 ['indices'][$i11]['OBS_VALUE']);
		if ($array==$array21){
		$texto22=str_replace('"','',$array22); 
		echo '<td>'.number_format($texto22, 2, '.', ' ') .'</td>';
		};		
		}
		for($i12=0;$i12<count($response11 ["indices"]);$i12++){
		$array23 = json_encode($response11 ['indices'][$i12]['TIME_PERIOD']);
		$array24 = json_encode($response11 ['indices'][$i12]['OBS_VALUE']);
		if ($array==$array23){
		$texto24=str_replace('"','',$array24); 
		echo '<td>'.number_format($texto24, 2, '.', ' ') .'</td>';
		};		
		}
	
	
	
	
		for($i13=0;$i13<count($response12 ["indices"]);$i13++){
		$array25 = json_encode($response12 ['indices'][$i13]['TIME_PERIOD']);
		$array26 = json_encode($response12 ['indices'][$i13]['OBS_VALUE']);
		if ($array==$array25){
		$texto26=str_replace('"','',$array26); 
		echo '<td>'.number_format($texto26, 2, '.', ' ') .'</td>';
		};		
		};	
		for($i14=0;$i14<count($response13 ["indices"]);$i14++){
		$array27 = json_encode($response13 ['indices'][$i14]['TIME_PERIOD']);
		$array28 = json_encode($response13 ['indices'][$i14]['OBS_VALUE']);
		if ($array==$array27){
		$texto28=str_replace('"','',$array28); 
		echo '<td>'.number_format($texto28, 2, '.', ' ') .'</td>';
		};		
		}
		for($i15=0;$i15<count($response14 ["indices"]);$i15++){
		$array29 = json_encode($response14 ['indices'][$i15]['TIME_PERIOD']);
		$array30 = json_encode($response14 ['indices'][$i15]['OBS_VALUE']);
		if ($array==$array29){
		$texto30=str_replace('"','',$array30); 
		echo '<td>'.number_format($texto30, 2, '.', ' ') .'</td>';
		};		
		}
		for($i16=0;$i16<count($response15 ["indices"]);$i16++){
		$array31 = json_encode($response15 ['indices'][$i16]['TIME_PERIOD']);
		$array32 = json_encode($response15 ['indices'][$i16]['OBS_VALUE']);
		if ($array==$array31){
		$texto32=str_replace('"','',$array32); 
		echo '<td>'.number_format($texto32, 2, '.', ' ') .'</td>';
		};		
		}
		for($i17=0;$i17<count($response16 ["indices"]);$i17++){
		$array33 = json_encode($response16 ['indices'][$i17]['TIME_PERIOD']);
		$array34 = json_encode($response16 ['indices'][$i17]['OBS_VALUE']);
		if ($array==$array33){
		$texto34=str_replace('"','',$array34); 
		echo '<td>'.number_format($texto34, 2, '.', ' ') .'</td>';
		};		
		}
		for($i18=0;$i18<count($response17 ["indices"]);$i18++){
		$array35 = json_encode($response17 ['indices'][$i18]['TIME_PERIOD']);
		$array36 = json_encode($response17 ['indices'][$i18]['OBS_VALUE']);
		if ($array==$array35){
		$texto36=str_replace('"','',$array36); 
		echo '<td>'.number_format($texto36, 2, '.', ' ') .'</td>';
		};		
		}
		for($i19=0;$i19<count($response18 ["indices"]);$i19++){
		$array37 = json_encode($response18 ['indices'][$i19]['TIME_PERIOD']);
		$array38 = json_encode($response18 ['indices'][$i19]['OBS_VALUE']);
		if ($array==$array37){
		$texto38=str_replace('"','',$array38); 
		echo '<td>'.number_format($texto38, 2, '.', ' ') .'</td>';
		};		
		}
		for($i20=0;$i20<count($response19 ["indices"]);$i20++){
		$array39 = json_encode($response19 ['indices'][$i20]['TIME_PERIOD']);
		$array40 = json_encode($response19 ['indices'][$i20]['OBS_VALUE']);
		if ($array==$array39){
		$texto40=str_replace('"','',$array40); 
		echo '<td>'.number_format($texto40, 2, '.', ' ') .'</td>';
		};		
		}
		for($i21=0;$i21<count($response20 ["indices"]);$i21++){
		$array41 = json_encode($response20 ['indices'][$i21]['TIME_PERIOD']);
		$array42 = json_encode($response20 ['indices'][$i21]['OBS_VALUE']);
		if ($array==$array41){
		$texto42=str_replace('"','',$array42); 
		echo '<td>'.number_format($texto42, 2, '.', ' ') .'</td>';
		};		
		}
		for($i22=0;$i22<count($response21 ["indices"]);$i22++){
		$array43 = json_encode($response21 ['indices'][$i22]['TIME_PERIOD']);
		$array44 = json_encode($response21 ['indices'][$i22]['OBS_VALUE']);
		if ($array==$array43){
		$texto44=str_replace('"','',$array44); 
		echo '<td>'.number_format($texto44, 2, '.', ' ') .'</td>';
		};		
		}
		echo '</tr>';
		};
		$i++;
		$i1++;
		$i2++;	
		$i3++;
		$i4++;
		$i5++;
		$i6++;
		$i7++;	
		$i8++;
		$i9++;
		$i10++;	
		$i11++;
		$i12++;
		$i13++;
		$i14++;
		$i15++;
		$i16++;
		$i17++;	
		$i18++;
		$i19++;
		$i20++;	
		$i21++;
		$i22++;	
		echo "</tbody>";
		break;
		case 93:
		?>
		<caption width:'100%' align='center'>Tasa de desocupación mensual</caption>
		<caption width:'100%' align='center'>(%)</caption>
		
		
		
		<thead width:'100%'  align='center' border='2px'>
           <tr width:'100%'  align='center' border='2px'>
          
            <th scope='col'  align='center' border='2px'>Año</th>
			 <th scope='col'  align='center' border='2px'>Mes</th>
			 <th scope='col'  align='center' border='2px'>Nacional</th>
			 <th scope='col'  align='center' border='2px'>Estado de <br>Puebla</th>
			 
			 <th scope='col'  align='center' border='2px'>Urbana<br>agregado<br>32<br>ciudades</th>
		       </tr>
				</thead>
				<tbody align='center'>
				<?php
				$indice = 444666; //
				$lugar = 00;
				$indice1 = 444862; //
				$lugar1 = 21;
				$indice2 = 444785; //
				$lugar2 = 00;
				$response = $inegi->index($indice, $lugar);
				$response1 = $inegi->index($indice1, $lugar1);
				$response2 = $inegi->index($indice2, $lugar2);
				for($i=0;$i<count($response ["indices"]);$i++){
				$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
				echo '<tr>';
				$antes=0;
				for($i1=0;$i1<count($response ["indices"]);$i1++){
				$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
				$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
				
				if ($array==$array1){
				$texto2=str_replace('"','',$array2); 
				$texto=str_replace('"','',$array1); 
				$texto=str_replace('\/','',$texto);
				$variable=substr($texto,0,4);
				$variable1=substr($texto,4,2);
				if ($antes!== $variable){
				echo '<td>'.$variable.'</td>';
				}
				else{
				echo '<td></td>';	
				};
						if($variable1=="01"){
						echo '<td>ENERO</td>';
						};
						if($variable1=="02"){
						echo '<td>FEBRERO</td>';
						};
						if($variable1=="03"){
						echo '<td>MARZO</td>';
						};
						if($variable1=="04"){
						echo '<td>ABRIL</td>';
						};
						if($variable1=="05"){
						echo '<td>MAYO</td>';
						};
						if($variable1=="06"){
						echo '<td>JUNIO</td>';
						};
						if($variable1=="07"){
						echo '<td>JULIO</td>';
						};
						if($variable1=="08"){
						echo '<td>AGOSTO</td>';
						};
						if($variable1=="09"){
						echo '<td>SEPTIEMBRE</td>';
						};
						if($variable1=="10"){
						echo '<td>OCTUBRE</td>';
						};
						if($variable1=="11"){
						echo '<td>NOVIEMBRE</td>';
						};
						if($variable1=="12"){
						echo '<td>DICIEMBRE</td>';
						};
				echo '<td>'.number_format($texto2, 2, '.', ' ').'<BR>';
				};
				$antes=substr($texto,0,4);
				};
				for($i2=0;$i2<count($response1 ["indices"]);$i2++){
				$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
				$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
				if ($array==$array3){
				$texto4=str_replace('"','',$array4); 
				echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
				};		
				};
				if ($i <= 1){
						echo '<td>N.D.</td>';
				};

				
				for($i3=0;$i3<count($response2 ["indices"]);$i3++){
				$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
				$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
				if ($array==$array5){
				$texto6=str_replace('"','',$array6); 
				echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
				};		
				};
				

				echo '</tr>';
				
				};
				$i++;
				$i1++;
				$i3++;
				$i2++;
		echo "</tbody>";		
		break;


		case 96:
		
		?>

		<caption width:'100%' align='center'>Trabajadores Asegurados en el IMSS<br>Cifras INEGI</caption>
		<caption width:'100%' align='center'>(Número de personas)</caption>
		
		
		
		<thead width:'100%'  align='center' border='2px'>
          <tr width:'100%'  align='center' border='2px'>
          
             <th scope='col'  align='center' border='2px'>Año</th>
			 <th scope='col'  align='center' border='2px'>Mes</th>
			 <th scope='col'  align='center' border='2px'>Nacional</th>
			 <th scope='col'  align='center' border='2px'>Estado de <br>Puebla</th>
			 
		   </tr>
			</thead>
			<tbody align='center'>
				<?php
				$indice =215780; //
				$lugar = 00;
				$indice1 =215803; //
				$lugar1 =00 ;
				

				$response = $inegi->index($indice, $lugar);
				$response1 = $inegi->index($indice1, $lugar1);
			
				for($i=0;$i<count($response ["indices"]);$i++){
				$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
				echo '<tr>';
				$antes=0;
				for($i1=0;$i1<count($response ["indices"]);$i1++){
				$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
				$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
				
				if ($array==$array1){
				$texto2=str_replace('"','',$array2); 
				$texto=str_replace('"','',$array1); 
				$texto=str_replace('\/','',$texto);
				$variable=substr($texto,0,4);
				$variable1=substr($texto,4,2);
				if ($antes!== $variable){
				echo '<td>'.$variable.'</td>';
				}
				else{
				echo '<td></td>';	
				};
								if($variable1=="01"){
								echo '<td>ENERO</td>';
								};
								if($variable1=="02"){
								echo '<td>FEBRERO</td>';
								};
								if($variable1=="03"){
								echo '<td>MARZO</td>';
								};
								if($variable1=="04"){
								echo '<td>ABRIL</td>';
								};
								if($variable1=="05"){
								echo '<td>MAYO</td>';
								};
								if($variable1=="06"){
								echo '<td>JUNIO</td>';
								};
								if($variable1=="07"){
								echo '<td>JULIO</td>';
								};
								if($variable1=="08"){
								echo '<td>AGOSTO</td>';
								};
								if($variable1=="09"){
								echo '<td>SEPTIEMBRE</td>';
								};
								if($variable1=="10"){
								echo '<td>OCTUBRE</td>';
								};
								if($variable1=="11"){
								echo '<td>NOVIEMBRE</td>';
								};
								if($variable1=="12"){
								echo '<td>DICIEMBRE</td>';
								};
				echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
				};
				$antes=substr($texto,0,4);
				};
							
				for($i2=0;$i2<count($response1 ["indices"]);$i2++){
				$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
				$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
				if ($array==$array3){
				$texto4=str_replace('"','',$array4); 
				echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
				};		
			
				};
				
					

			
			

				echo '</tr>';
				
				};
				$i++;
				$i1++;
				$i2++;		
				echo "</tbody>";		
				break;

		case 69:
		?>
		<caption align='center'>Tasa de informalidad laboral 1 *</caption>
		<caption align='center'>(% mensual)</caption>
		
		
		
		<thead align='center' border='2px'>
           <tr align='center' border='2px'>
          
             <th scope='col'  align='center' border='2px'>Año</th>
			 <th scope='col'  align='center' border='2px'>Mes</th>
			 <th scope='col'  align='center' border='2px'>Nacional</th>
			 <th scope='col'  align='center' border='2px'>Urbana<br>agregado<br>32<br>ciudades</th>
		   </tr>
        </thead>
		
		
		
		<tbody align='center'>
		<?php
		$indice =444673; //
		$lugar = 00;
		$indice1 =444806; //
		$lugar1 = 21;
	

		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);

		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
						if($variable1=="01"){
						echo '<td>ENERO</td>';
						};
						if($variable1=="02"){
						echo '<td>FEBRERO</td>';
						};
						if($variable1=="03"){
						echo '<td>MARZO</td>';
						};
						if($variable1=="04"){
						echo '<td>ABRIL</td>';
						};
						if($variable1=="05"){
						echo '<td>MAYO</td>';
						};
						if($variable1=="06"){
						echo '<td>JUNIO</td>';
						};
						if($variable1=="07"){
						echo '<td>JULIO</td>';
						};
						if($variable1=="08"){
						echo '<td>AGOSTO</td>';
						};
						if($variable1=="09"){
						echo '<td>SEPTIEMBRE</td>';
						};
						if($variable1=="10"){
						echo '<td>OCTUBRE</td>';
						};
						if($variable1=="11"){
						echo '<td>NOVIEMBRE</td>';
						};
						if($variable1=="12"){
						echo '<td>DICIEMBRE</td>';
						};
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};

	

		echo '</tr>';
		
		};
		$i++;
		$i1++;
		$i2++;
		break;

		case 76:
		
		
		?>
		<caption width:'100%' align='center'>Índice de precios al consumidor</caption>
		<caption width:'100%' align='center'>(Índice)</caption>
		
		<thead width:'100%'  align='center' border='2px'>
        <tr width:'100%'  align='center' border='2px'>
          
             <th scope='col'  align='center' border='2px'>Año</th>
			 <th scope='col'  align='center' border='2px'>Mes</th>
			 <th scope='col'  align='center' border='2px'>Nacional</th>
			 <th scope='col'  align='center' border='2px'>Ciudad de <br>Puebla</th>
			 
		   </tr>
        </thead>
		<tbody  align='center'>
			<?php
				$indice = 216064; //
				$lugar = 00;
				$indice1 = 216105; //
				$lugar1 = 00;
				$response = $inegi->index($indice, $lugar);
				$response1 = $inegi->index($indice1, $lugar1);
				for($i=0;$i<count($response ["indices"]);$i++){
				$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
				echo '<tr>';
				$antes=0;
				for($i1=0;$i1<count($response ["indices"]);$i1++){
				$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
				$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
				
				if ($array==$array1){
				$texto2=str_replace('"','',$array2); 
				$texto=str_replace('"','',$array1); 
				$texto=str_replace('\/','',$texto);
				$variable=substr($texto,0,4);
				$variable1=substr($texto,4,2);
				if ($antes!== $variable){
				echo '<td>'.$variable.'</td>';
				}
				else{
				echo '<td></td>';	
				};
				if($variable1=="01"){
				echo '<td>ENERO</td>';
				};
				if($variable1=="02"){
				echo '<td>FEBRERO</td>';
				};
				if($variable1=="03"){
				echo '<td>MARZO</td>';
				};
				if($variable1=="04"){
				echo '<td>ABRIL</td>';
				};
				if($variable1=="05"){
				echo '<td>MAYO</td>';
				};
				if($variable1=="06"){
				echo '<td>JUNIO</td>';
				};
				if($variable1=="07"){
				echo '<td>JULIO</td>';
				};
				if($variable1=="08"){
				echo '<td>AGOSTO</td>';
				};
				if($variable1=="09"){
				echo '<td>SEPTIEMBRE</td>';
				};
				if($variable1=="10"){
				echo '<td>OCTUBRE</td>';
				};
				if($variable1=="11"){
				echo '<td>NOVIEMBRE</td>';
				};
				if($variable1=="12"){
				echo '<td>DICIEMBRE</td>';
				};
				echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
				};
				$antes=substr($texto,0,4);
				};
				for($i2=0;$i2<count($response1 ["indices"]);$i2++){
				$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
				$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
				if ($array==$array3){
				$texto4=str_replace('"','',$array4); 
				echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
				};		
				};
				if ($i <= 119){
				echo '<td>N.D.</td>';
				};

				echo '</tr>';
		
		};
		$i++;
		$i1++;
		$i2++;
		
		echo "</tbody>";
		break;

		case 77:
	
		?>
		
		<caption width:'100%' align='center'>Inflación mensual</caption>
		<caption width:'100%' align='center'>(Variación % respecto al mes anterior)</caption>
		
		<thead width:'100%'  align='center' border='2px'>
          <tr width:'100%'  align='center' border='2px'>
          
             <th scope='col'  align='center' border='2px'>Año</th>
			 <th scope='col'  align='center' border='2px'>Mes</th>
			 <th scope='col'  align='center' border='2px'>Nacional</th>
			 <th scope='col'  align='center' border='2px'>Ciudad de <br>Puebla</th>
			 
		   </tr>
        </thead>

		 <tbody  align='center'>
		 <?php
				$indice = 216151; //
				$lugar = 00;
				$indice1 = 216192; //
				$lugar1 = 00;
				$response = $inegi->index($indice, $lugar);
				$response1 = $inegi->index($indice1, $lugar1);
				for($i=0;$i<count($response ["indices"]);$i++){
				$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
				echo '<tr>';
				$antes=0;
				for($i1=0;$i1<count($response ["indices"]);$i1++){
				$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
				$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
				
				if ($array==$array1){
				$texto2=str_replace('"','',$array2); 
				$texto=str_replace('"','',$array1); 
				$texto=str_replace('\/','',$texto);
				$variable=substr($texto,0,4);
				$variable1=substr($texto,4,2);
				if ($antes!== $variable){
				echo '<td>'.$variable.'</td>';
				}
				else{
				echo '<td></td>';	
				};
				if($variable1=="01"){
				echo '<td>ENERO</td>';
				};
				if($variable1=="02"){
				echo '<td>FEBRERO</td>';
				};
				if($variable1=="03"){
				echo '<td>MARZO</td>';
				};
				if($variable1=="04"){
				echo '<td>ABRIL</td>';
				};
				if($variable1=="05"){
				echo '<td>MAYO</td>';
				};
				if($variable1=="06"){
				echo '<td>JUNIO</td>';
				};
				if($variable1=="07"){
				echo '<td>JULIO</td>';
				};
				if($variable1=="08"){
				echo '<td>AGOSTO</td>';
				};
				if($variable1=="09"){
				echo '<td>SEPTIEMBRE</td>';
				};
				if($variable1=="10"){
				echo '<td>OCTUBRE</td>';
				};
				if($variable1=="11"){
				echo '<td>NOVIEMBRE</td>';
				};
				if($variable1=="12"){
				echo '<td>DICIEMBRE</td>';
				};
				echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
				};
				$antes=substr($texto,0,4);
				};
				for($i2=0;$i2<count($response1 ["indices"]);$i2++){
				$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
				$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
				if ($array==$array3){
				$texto4=str_replace('"','',$array4); 
				echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
				};		
				};
				if ($i <= 119){
				echo '<td>N.D.</td>';
				};

				echo '</tr>';
		
		};
		$i++;
		$i1++;
		$i2++;
		
		echo "</tbody>";

		
		break;	

		case 78:
		?>
		
		
		<caption width:'100%' align='center'>Inflación interanual</caption>
		<caption width:'100%' align='center'>(Variación % respecto al mismo mes del año anterior)</caption>
		
		<thead width:'100%'  align='center' border='2px'>
          <tr width:'100%'  align='center' border='2px'>
          
             <th scope='col'  align='center' border='2px'>Año</th>
			 <th scope='col'  align='center' border='2px'>Mes</th>
			 <th scope='col'  align='center' border='2px'>Nacional</th>
			 <th scope='col'  align='center' border='2px'>Ciudad de <br>Puebla</th>
			 
		   </tr>
        </thead>
		
		 <tbody  align='center'>
		 	<?php
				$indice = 216238; //
				$lugar = 00;
				$indice1 = 216279; //
				$lugar1 = 00;
				$response = $inegi->index($indice, $lugar);
				$response1 = $inegi->index($indice1, $lugar1);
				for($i=0;$i<count($response ["indices"]);$i++){
				$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
				echo '<tr>';
				$antes=0;
				for($i1=0;$i1<count($response ["indices"]);$i1++){
				$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
				$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
				
				if ($array==$array1){
				$texto2=str_replace('"','',$array2); 
				$texto=str_replace('"','',$array1); 
				$texto=str_replace('\/','',$texto);
				$variable=substr($texto,0,4);
				$variable1=substr($texto,4,2);
				if ($antes!== $variable){
				echo '<td>'.$variable.'</td>';
				}
				else{
				echo '<td></td>';	
				};
				if($variable1=="01"){
				echo '<td>ENERO</td>';
				};
				if($variable1=="02"){
				echo '<td>FEBRERO</td>';
				};
				if($variable1=="03"){
				echo '<td>MARZO</td>';
				};
				if($variable1=="04"){
				echo '<td>ABRIL</td>';
				};
				if($variable1=="05"){
				echo '<td>MAYO</td>';
				};
				if($variable1=="06"){
				echo '<td>JUNIO</td>';
				};
				if($variable1=="07"){
				echo '<td>JULIO</td>';
				};
				if($variable1=="08"){
				echo '<td>AGOSTO</td>';
				};
				if($variable1=="09"){
				echo '<td>SEPTIEMBRE</td>';
				};
				if($variable1=="10"){
				echo '<td>OCTUBRE</td>';
				};
				if($variable1=="11"){
				echo '<td>NOVIEMBRE</td>';
				};
				if($variable1=="12"){
				echo '<td>DICIEMBRE</td>';
				};
				echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
				};
				$antes=substr($texto,0,4);
				};
				for($i2=0;$i2<count($response1 ["indices"]);$i2++){
				$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
				$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
				if ($array==$array3){
				$texto4=str_replace('"','',$array4); 
				echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
				};		
				};
				if ($i <= 119){
				echo '<td>N.D.</td>';
				};

				echo '</tr>';
		
		};
		$i++;
		$i1++;
		$i2++;
		
		echo "</tbody>";
	
		break;

		case 79:
		
	?>
		<caption width:'100%' align='center'>Inflación acumulada anual</caption>
		<caption width:'100%' align='center'>(Variación %)</caption>
		
		
		<thead width:'100%'  align='center' border='2px'>
          <tr width:'100%'  align='center' border='2px'>
          
            <th scope='col'  align='center' border='2px'>Año</th>
			 <th scope='col'  align='center' border='2px'>Mes</th>
			 <th scope='col'  align='center' border='2px'>Nacional</th>
			 <th scope='col'  align='center' border='2px'>Ciudad de <br>Puebla</th>
				
		   </tr>
		   </thead>
		   
		   
		   <tbody  align='center'>
		   	<?php
				$indice = 216325; //
				$lugar = 00;
				$indice1 = 216366; //
				$lugar1 = 00;
				$response = $inegi->index($indice, $lugar);
				$response1 = $inegi->index($indice1, $lugar1);
				for($i=0;$i<count($response ["indices"]);$i++){
				$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
				echo '<tr>';
				$antes=0;
				for($i1=0;$i1<count($response ["indices"]);$i1++){
				$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
				$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
				
				if ($array==$array1){
				$texto2=str_replace('"','',$array2); 
				$texto=str_replace('"','',$array1); 
				$texto=str_replace('\/','',$texto);
				$variable=substr($texto,0,4);
				$variable1=substr($texto,4,2);
				if ($antes!== $variable){
				echo '<td>'.$variable.'</td>';
				}
				else{
				echo '<td></td>';	
				};
				if($variable1=="01"){
				echo '<td>ENERO</td>';
				};
				if($variable1=="02"){
				echo '<td>FEBRERO</td>';
				};
				if($variable1=="03"){
				echo '<td>MARZO</td>';
				};
				if($variable1=="04"){
				echo '<td>ABRIL</td>';
				};
				if($variable1=="05"){
				echo '<td>MAYO</td>';
				};
				if($variable1=="06"){
				echo '<td>JUNIO</td>';
				};
				if($variable1=="07"){
				echo '<td>JULIO</td>';
				};
				if($variable1=="08"){
				echo '<td>AGOSTO</td>';
				};
				if($variable1=="09"){
				echo '<td>SEPTIEMBRE</td>';
				};
				if($variable1=="10"){
				echo '<td>OCTUBRE</td>';
				};
				if($variable1=="11"){
				echo '<td>NOVIEMBRE</td>';
				};
				if($variable1=="12"){
				echo '<td>DICIEMBRE</td>';
				};
				echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
				};
				$antes=substr($texto,0,4);
				};
				for($i2=0;$i2<count($response1 ["indices"]);$i2++){
				$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
				$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
				if ($array==$array3){
				$texto4=str_replace('"','',$array4); 
				echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
				};		
				};
				if ($i <= 119){
				echo '<td>N.D.</td>';
				};

				echo '</tr>';
		
		};
		$i++;
		$i1++;
		$i2++;
		
		echo "</tbody>";
        
		break;

	case 106:
		?>
				
		<caption align='center'>Índice de Actividad Industrial por Sector</caption>
		<caption align='center'>Series originales<br>(Índice base 2008 = 100) </caption>
		
		
		
		<thead align='center' border='2px'>
          <tr align='center' border='2px'>
          
             <th scope='col' width:'20%' align='center' border='2px'>Año</th>
             <th scope='col' width:'20%' align='center' border='2px'>Mes</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Total Nacional</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Minería</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Generación, transmisión y distribución de energía eléctrica, suministro de agua y de gas por ductos al consumidor final</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Construcción</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Industrias manufactureras</th>
			 
		  </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice =402752; //
		$lugar = 00;
		$indice1 =402753; //
		$lugar1 =00 ;
		$indice2 =402757; //
		$lugar2 =00 ;
		$indice3 =402760; //
		$lugar3 =00 ;
		$indice4 =402764; //
		$lugar4 =00 ;
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		$response3 = $inegi->index($indice3, $lugar3);
		$response4 = $inegi->index($indice4, $lugar4);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
						if($variable1=="01"){
						echo '<td>ENERO</td>';
						};
						if($variable1=="02"){
						echo '<td>FEBRERO</td>';
						};
						if($variable1=="03"){
						echo '<td>MARZO</td>';
						};
						if($variable1=="04"){
						echo '<td>ABRIL</td>';
						};
						if($variable1=="05"){
						echo '<td>MAYO</td>';
						};
						if($variable1=="06"){
						echo '<td>JUNIO</td>';
						};
						if($variable1=="07"){
						echo '<td>JULIO</td>';
						};
						if($variable1=="08"){
						echo '<td>AGOSTO</td>';
						};
						if($variable1=="09"){
						echo '<td>SEPTIEMBRE</td>';
						};
						if($variable1=="10"){
						echo '<td>OCTUBRE</td>';
						};
						if($variable1=="11"){
						echo '<td>NOVIEMBRE</td>';
						};
						if($variable1=="12"){
						echo '<td>DICIEMBRE</td>';
						};
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		
		for($i3=0;$i3<count($response2 ["indices"]);$i3++){
		$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
		$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
		if ($array==$array5){
		$texto6=str_replace('"','',$array6); 
		echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
		};		
		};
		
		for($i4=0;$i4<count($response3 ["indices"]);$i4++){
		$array7 = json_encode($response3 ['indices'][$i4]['TIME_PERIOD']);
		$array8 = json_encode($response3 ['indices'][$i4]['OBS_VALUE']);
		if ($array==$array7){
		$texto8=str_replace('"','',$array8); 
		echo '<td>'.number_format($texto8, 2, '.', ' ') .'</td>';
		};		
		};
		for($i5=0;$i5<count($response4 ["indices"]);$i5++){
		$array9 = json_encode($response4 ['indices'][$i5]['TIME_PERIOD']);
		$array10 = json_encode($response4 ['indices'][$i5]['OBS_VALUE']);
		if ($array==$array9){
		$texto10=str_replace('"','',$array10); 
		echo '<td>'.number_format($texto10, 2, '.', ' ') .'</td>';
		};		
		};
		echo '</tr>';
		};
		$i++;
		$i1++;
		$i2++;		
		echo "</tbody>";				
		break;

		case 107:
		?>

		<caption width:'100%' align='center'>Índice de Actividad Industrial por Sector</caption>	
		<caption width:'100%' align='center'>Series originales<br>(Variación Porcentual)</caption>
		
		
		
		<thead width:'100%'  align='center' border='2px'>
          <tr width:'100%'  align='center' border='2px'>
          
             <th scope='col' width:'20%' align='center' border='2px'>Año</th>
             <th scope='col' width:'20%' align='center' border='2px'>Mes</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Total Nacional</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Minería</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Generación, transmisión y distribución de energía eléctrica, suministro de agua y de gas por ductos al consumidor final</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Construcción</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Industrias manufactureras</th>
			 
		 </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice =402786; //
		$lugar = 00;
		$indice1 =402787; //
		$lugar1 =00 ;
		$indice2 =402791; //
		$lugar2 =00 ;
		$indice3 =402794; //
		$lugar3 =00 ;
		$indice4 =402798; //
		$lugar4 =00 ;
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		$response3 = $inegi->index($indice3, $lugar3);
		$response4 = $inegi->index($indice4, $lugar4);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
						if($variable1=="01"){
						echo '<td>ENERO</td>';
						};
						if($variable1=="02"){
						echo '<td>FEBRERO</td>';
						};
						if($variable1=="03"){
						echo '<td>MARZO</td>';
						};
						if($variable1=="04"){
						echo '<td>ABRIL</td>';
						};
						if($variable1=="05"){
						echo '<td>MAYO</td>';
						};
						if($variable1=="06"){
						echo '<td>JUNIO</td>';
						};
						if($variable1=="07"){
						echo '<td>JULIO</td>';
						};
						if($variable1=="08"){
						echo '<td>AGOSTO</td>';
						};
						if($variable1=="09"){
						echo '<td>SEPTIEMBRE</td>';
						};
						if($variable1=="10"){
						echo '<td>OCTUBRE</td>';
						};
						if($variable1=="11"){
						echo '<td>NOVIEMBRE</td>';
						};
						if($variable1=="12"){
						echo '<td>DICIEMBRE</td>';
						};
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		
		for($i3=0;$i3<count($response2 ["indices"]);$i3++){
		$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
		$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
		if ($array==$array5){
		$texto6=str_replace('"','',$array6); 
		echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
		};		
		};
		
		for($i4=0;$i4<count($response3 ["indices"]);$i4++){
		$array7 = json_encode($response3 ['indices'][$i4]['TIME_PERIOD']);
		$array8 = json_encode($response3 ['indices'][$i4]['OBS_VALUE']);
		if ($array==$array7){
		$texto8=str_replace('"','',$array8); 
		echo '<td>'.number_format($texto8, 2, '.', ' ') .'</td>';
		};		
		};
		for($i5=0;$i5<count($response4 ["indices"]);$i5++){
		$array9 = json_encode($response4 ['indices'][$i5]['TIME_PERIOD']);
		$array10 = json_encode($response4 ['indices'][$i5]['OBS_VALUE']);
		if ($array==$array9){
		$texto10=str_replace('"','',$array10); 
		echo '<td>'.number_format($texto10, 2, '.', ' ') .'</td>';
		};		
		};
		
		
		
		echo '</tr>';
		
		};
		$i++;
		$i1++;
		$i2++;		
		echo "</tbody>";				
		break;


		case 109:
		?>
		<caption width:'100%' align='center'>Índice de Actividad Industrial por Sector Estado de Puebla</caption>
		<caption width:'100%' align='center'>Series originales<br>(Índice base 2008 = 100) </caption>
		
		
		
		<thead width:'100%'  align='center' border='2px'>
         <tr width:'100%'  align='center' border='2px'>
          
             <th scope='col' width:'20%' align='center' border='2px'>Año</th>
             <th scope='col' width:'20%' align='center' border='2px'>Mes</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Total Estado de Puebla</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Minería</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Generación, transmisión y distribución de energía eléctrica, suministro de agua y de gas por ductos al consumidor final</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Construcción</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Industrias manufactureras</th>
			 
		   </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice =440050; //
		$lugar = 00;
		$indice1 =440082; //
		$lugar1 =00 ;
		$indice2 =440114; //
		$lugar2 =00 ;
		$indice3 =440178; //
		$lugar3 =00 ;
		$indice4 =440210; //
		$lugar4 =00 ;
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		$response3 = $inegi->index($indice3, $lugar3);
		$response4 = $inegi->index($indice4, $lugar4);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
						if($variable1=="01"){
						echo '<td>ENERO</td>';
						};
						if($variable1=="02"){
						echo '<td>FEBRERO</td>';
						};
						if($variable1=="03"){
						echo '<td>MARZO</td>';
						};
						if($variable1=="04"){
						echo '<td>ABRIL</td>';
						};
						if($variable1=="05"){
						echo '<td>MAYO</td>';
						};
						if($variable1=="06"){
						echo '<td>JUNIO</td>';
						};
						if($variable1=="07"){
						echo '<td>JULIO</td>';
						};
						if($variable1=="08"){
						echo '<td>AGOSTO</td>';
						};
						if($variable1=="09"){
						echo '<td>SEPTIEMBRE</td>';
						};
						if($variable1=="10"){
						echo '<td>OCTUBRE</td>';
						};
						if($variable1=="11"){
						echo '<td>NOVIEMBRE</td>';
						};
						if($variable1=="12"){
						echo '<td>DICIEMBRE</td>';
						};
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		
		for($i3=0;$i3<count($response2 ["indices"]);$i3++){
		$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
		$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
		if ($array==$array5){
		$texto6=str_replace('"','',$array6); 
		echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
		};		
		};
		
		for($i4=0;$i4<count($response3 ["indices"]);$i4++){
		$array7 = json_encode($response3 ['indices'][$i4]['TIME_PERIOD']);
		$array8 = json_encode($response3 ['indices'][$i4]['OBS_VALUE']);
		if ($array==$array7){
		$texto8=str_replace('"','',$array8); 
		echo '<td>'.number_format($texto8, 2, '.', ' ') .'</td>';
		};		
		};
		for($i5=0;$i5<count($response4 ["indices"]);$i5++){
		$array9 = json_encode($response4 ['indices'][$i5]['TIME_PERIOD']);
		$array10 = json_encode($response4 ['indices'][$i5]['OBS_VALUE']);
		if ($array==$array9){
		$texto10=str_replace('"','',$array10); 
		echo '<td>'.number_format($texto10, 2, '.', ' ') .'</td>';
		};		
		};
		
		
		
		echo '</tr>';
		
		};
		$i++;
		$i1++;
		$i2++;		
		echo "</tbody>";				
		break;


		case 110:
		?>	
	
		<caption width:'100%' align='center'>Índice de Actividad Industrial por Sector Estado de Puebla</caption>
		<caption width:'100%' align='center'>Series originales<br>(Variación Porcentual)</caption>
		
		<thead width:'100%'  align='center' border='2px'>
          <tr width:'100%'  align='center' border='2px'>
          
             <th scope='col' width:'20%' align='center' border='2px'>Año</th>
             <th scope='col' width:'20%' align='center' border='2px'>Mes</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Total Estado de Puebla</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Minería</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Generación, transmisión y distribución de energía eléctrica, suministro de agua y de gas por ductos al consumidor final</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Construcción</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Industrias manufactureras</th>
			 
		   </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice =440242; //
		$lugar = 00;
		$indice1 =440274; //
		$lugar1 =00 ;
		$indice2 =440306; //
		$lugar2 =00 ;
		$indice3 =440370; //
		$lugar3 =00 ;
		$indice4 =440402; //
		$lugar4 =00 ;
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		$response3 = $inegi->index($indice3, $lugar3);
		$response4 = $inegi->index($indice4, $lugar4);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
						if($variable1=="01"){
						echo '<td>ENERO</td>';
						};
						if($variable1=="02"){
						echo '<td>FEBRERO</td>';
						};
						if($variable1=="03"){
						echo '<td>MARZO</td>';
						};
						if($variable1=="04"){
						echo '<td>ABRIL</td>';
						};
						if($variable1=="05"){
						echo '<td>MAYO</td>';
						};
						if($variable1=="06"){
						echo '<td>JUNIO</td>';
						};
						if($variable1=="07"){
						echo '<td>JULIO</td>';
						};
						if($variable1=="08"){
						echo '<td>AGOSTO</td>';
						};
						if($variable1=="09"){
						echo '<td>SEPTIEMBRE</td>';
						};
						if($variable1=="10"){
						echo '<td>OCTUBRE</td>';
						};
						if($variable1=="11"){
						echo '<td>NOVIEMBRE</td>';
						};
						if($variable1=="12"){
						echo '<td>DICIEMBRE</td>';
						};
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		
		for($i3=0;$i3<count($response2 ["indices"]);$i3++){
		$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
		$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
		if ($array==$array5){
		$texto6=str_replace('"','',$array6); 
		echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
		};		
		};
		
		for($i4=0;$i4<count($response3 ["indices"]);$i4++){
		$array7 = json_encode($response3 ['indices'][$i4]['TIME_PERIOD']);
		$array8 = json_encode($response3 ['indices'][$i4]['OBS_VALUE']);
		if ($array==$array7){
		$texto8=str_replace('"','',$array8); 
		echo '<td>'.number_format($texto8, 2, '.', ' ') .'</td>';
		};		
		};
		for($i5=0;$i5<count($response4 ["indices"]);$i5++){
		$array9 = json_encode($response4 ['indices'][$i5]['TIME_PERIOD']);
		$array10 = json_encode($response4 ['indices'][$i5]['OBS_VALUE']);
		if ($array==$array9){
		$texto10=str_replace('"','',$array10); 
		echo '<td>'.number_format($texto10, 2, '.', ' ') .'</td>';
		};		
		};
		
		
		
		echo '</tr>';
		
		};
		$i++;
		$i1++;
		$i2++;		
		echo "</tbody>";				
		break;

		case 113:
		?>
	
		<caption width:'100%' align='center'>Índice de Actividad Industrial por Sector</caption>
		<caption width:'100%' align='center'>Series desestacionalizadas<br>(Índice base 2008 = 100) </caption>
		
		
		
		<thead width:'100%'  align='center' border='2px'>
           <tr width:'100%'  align='center' border='2px'>
          
            <th scope='col' width:'20%' align='center' border='2px'>Año</th>
             <th scope='col' width:'20%' align='center' border='2px'>Mes</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Total Nacional</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Minería</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Generación, transmisión y distribución de energía eléctrica, suministro de agua y de gas por ductos al consumidor final</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Construcción</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Industrias manufactureras</th>
			 
		   </tr>
       </thead>
		<tbody align='center'>
		<?php
		$indice =405680; //
		$lugar = 00;
		$indice1 =405685; //
		$lugar1 =00 ;
		$indice2 =405688; //
		$lugar2 =00 ;
		$indice3 =405691; //
		$lugar3 =00 ;
		$indice4 =405694; //
		$lugar4 =00 ;
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		$response3 = $inegi->index($indice3, $lugar3);
		$response4 = $inegi->index($indice4, $lugar4);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
						if($variable1=="01"){
						echo '<td>ENERO</td>';
						};
						if($variable1=="02"){
						echo '<td>FEBRERO</td>';
						};
						if($variable1=="03"){
						echo '<td>MARZO</td>';
						};
						if($variable1=="04"){
						echo '<td>ABRIL</td>';
						};
						if($variable1=="05"){
						echo '<td>MAYO</td>';
						};
						if($variable1=="06"){
						echo '<td>JUNIO</td>';
						};
						if($variable1=="07"){
						echo '<td>JULIO</td>';
						};
						if($variable1=="08"){
						echo '<td>AGOSTO</td>';
						};
						if($variable1=="09"){
						echo '<td>SEPTIEMBRE</td>';
						};
						if($variable1=="10"){
						echo '<td>OCTUBRE</td>';
						};
						if($variable1=="11"){
						echo '<td>NOVIEMBRE</td>';
						};
						if($variable1=="12"){
						echo '<td>DICIEMBRE</td>';
						};
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		
		for($i3=0;$i3<count($response2 ["indices"]);$i3++){
		$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
		$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
		if ($array==$array5){
		$texto6=str_replace('"','',$array6); 
		echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
		};		
		};
		
		for($i4=0;$i4<count($response3 ["indices"]);$i4++){
		$array7 = json_encode($response3 ['indices'][$i4]['TIME_PERIOD']);
		$array8 = json_encode($response3 ['indices'][$i4]['OBS_VALUE']);
		if ($array==$array7){
		$texto8=str_replace('"','',$array8); 
		echo '<td>'.number_format($texto8, 2, '.', ' ') .'</td>';
		};		
		};
		for($i5=0;$i5<count($response4 ["indices"]);$i5++){
		$array9 = json_encode($response4 ['indices'][$i5]['TIME_PERIOD']);
		$array10 = json_encode($response4 ['indices'][$i5]['OBS_VALUE']);
		if ($array==$array9){
		$texto10=str_replace('"','',$array10); 
		echo '<td>'.number_format($texto10, 2, '.', ' ') .'</td>';
		};		
		};
		
		
		
		echo '</tr>';
		
		};
		$i++;
		$i1++;
		$i2++;		
		echo "</tbody>";				
		break;


		case 114:
		?>
		
		<caption width:'100%' align='center'>Índice de Actividad Industrial por Sector</caption>
		<caption width:'100%' align='center'>Series desestacionalizadas<br>(Variación porcentual)</caption>
		
		
		
		<thead width:'100%'  align='center' border='2px'>
         <tr width:'100%'  align='center' border='2px'>
          
             <th scope='col' width:'20%' align='center' border='2px'>Año</th>
             <th scope='col' width:'20%' align='center' border='2px'>Mes</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Total Nacional</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Minería</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Generación, transmisión y distribución de energía eléctrica, suministro de agua y de gas por ductos al consumidor final</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Construcción</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Industrias manufactureras</th>
			 
		   </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice =405681; //
		$lugar = 00;
		$indice1 =448942; //
		$lugar1 =00 ;
		$indice2 =448958; //
		$lugar2 =00 ;
		$indice3 =448970; //
		$lugar3 =00 ;
		$indice4 =448986; //
		$lugar4 =00 ;
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		$response3 = $inegi->index($indice3, $lugar3);
		$response4 = $inegi->index($indice4, $lugar4);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
						if($variable1=="01"){
						echo '<td>ENERO</td>';
						};
						if($variable1=="02"){
						echo '<td>FEBRERO</td>';
						};
						if($variable1=="03"){
						echo '<td>MARZO</td>';
						};
						if($variable1=="04"){
						echo '<td>ABRIL</td>';
						};
						if($variable1=="05"){
						echo '<td>MAYO</td>';
						};
						if($variable1=="06"){
						echo '<td>JUNIO</td>';
						};
						if($variable1=="07"){
						echo '<td>JULIO</td>';
						};
						if($variable1=="08"){
						echo '<td>AGOSTO</td>';
						};
						if($variable1=="09"){
						echo '<td>SEPTIEMBRE</td>';
						};
						if($variable1=="10"){
						echo '<td>OCTUBRE</td>';
						};
						if($variable1=="11"){
						echo '<td>NOVIEMBRE</td>';
						};
						if($variable1=="12"){
						echo '<td>DICIEMBRE</td>';
						};
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		
		for($i3=0;$i3<count($response2 ["indices"]);$i3++){
		$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
		$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
		if ($array==$array5){
		$texto6=str_replace('"','',$array6); 
		echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
		};		
		};
		
		for($i4=0;$i4<count($response3 ["indices"]);$i4++){
		$array7 = json_encode($response3 ['indices'][$i4]['TIME_PERIOD']);
		$array8 = json_encode($response3 ['indices'][$i4]['OBS_VALUE']);
		if ($array==$array7){
		$texto8=str_replace('"','',$array8); 
		echo '<td>'.number_format($texto8, 2, '.', ' ') .'</td>';
		};		
		};
		for($i5=0;$i5<count($response4 ["indices"]);$i5++){
		$array9 = json_encode($response4 ['indices'][$i5]['TIME_PERIOD']);
		$array10 = json_encode($response4 ['indices'][$i5]['OBS_VALUE']);
		if ($array==$array9){
		$texto10=str_replace('"','',$array10); 
		echo '<td>'.number_format($texto10, 2, '.', ' ') .'</td>';
		};		
		};
		
		
		
		echo '</tr>';
		
		};
		$i++;
		echo "</tbody>";				
		break;

		case 116:
		?>
		<caption width:'100%' align='center'>Índice de Actividad Industrial por Sector Estado de Puebla</caption>
		<caption width:'100%' align='center'>Series desestacionalizadas<br>(Índice base 2008 = 100) </caption>
		
		
		
		<thead width:'100%'  align='center' border='2px'>
           <tr width:'100%'  align='center' border='2px'>
          
             <th scope='col' width:'20%' align='center' border='2px'>Año</th>
             <th scope='col' width:'20%' align='center' border='2px'>Mes</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Total Estado de Puebla</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Generación, transmisión y distribución de energía eléctrica, suministro de agua y de gas por ductos al consumidor final</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Industrias manufactureras</th>
			 
		   </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice =448299; //
		$lugar = 00;
		$indice1 =454443; //
		$lugar1 =00 ;
		$indice2 =440781; //
		$lugar2 =00 ;
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
						if($variable1=="01"){
						echo '<td>ENERO</td>';
						};
						if($variable1=="02"){
						echo '<td>FEBRERO</td>';
						};
						if($variable1=="03"){
						echo '<td>MARZO</td>';
						};
						if($variable1=="04"){
						echo '<td>ABRIL</td>';
						};
						if($variable1=="05"){
						echo '<td>MAYO</td>';
						};
						if($variable1=="06"){
						echo '<td>JUNIO</td>';
						};
						if($variable1=="07"){
						echo '<td>JULIO</td>';
						};
						if($variable1=="08"){
						echo '<td>AGOSTO</td>';
						};
						if($variable1=="09"){
						echo '<td>SEPTIEMBRE</td>';
						};
						if($variable1=="10"){
						echo '<td>OCTUBRE</td>';
						};
						if($variable1=="11"){
						echo '<td>NOVIEMBRE</td>';
						};
						if($variable1=="12"){
						echo '<td>DICIEMBRE</td>';
						};
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		
		for($i3=0;$i3<count($response2 ["indices"]);$i3++){
		$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
		$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
		if ($array==$array5){
		$texto6=str_replace('"','',$array6); 
		echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
		};		
		};
		
		
		
		
		echo '</tr>';
		
		};
		$i++;
		$i1++;
		$i2++;		
		echo "</tbody>";				
		break;


		case 117:
		?>
		
		<caption width:'100%' align='center'>Índice de Actividad Industrial por Sector Estado de Puebla</caption>
		<caption width:'100%' align='center'>Series desestacionalizadas<br>(Variación porcentual)</caption>
		
		
		
		<thead width:'100%'  align='center' border='2px'>
           <tr width:'100%'  align='center' border='2px'>
          
            <th scope='col' width:'20%' align='center' border='2px'>Año</th>
             <th scope='col' width:'20%' align='center' border='2px'>Mes</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Total Estado de Puebla</th>
			 
			 <th scope='col' width:'20%' align='center' border='2px'>Generación, transmisión y distribución de energía eléctrica, suministro de agua y de gas por ductos al consumidor final</th>
			 
			 <th scope='col' width:'20%' align='center' border='2px'>Industrias manufactureras</th>
			 
		   </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice =452935; //
		$lugar = 00;
		$indice1 =454444; //
		$lugar1 =00 ;
		$indice2 =452507; //
		$lugar2 =00 ;

		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);

		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
						if($variable1=="01"){
						echo '<td>ENERO</td>';
						};
						if($variable1=="02"){
						echo '<td>FEBRERO</td>';
						};
						if($variable1=="03"){
						echo '<td>MARZO</td>';
						};
						if($variable1=="04"){
						echo '<td>ABRIL</td>';
						};
						if($variable1=="05"){
						echo '<td>MAYO</td>';
						};
						if($variable1=="06"){
						echo '<td>JUNIO</td>';
						};
						if($variable1=="07"){
						echo '<td>JULIO</td>';
						};
						if($variable1=="08"){
						echo '<td>AGOSTO</td>';
						};
						if($variable1=="09"){
						echo '<td>SEPTIEMBRE</td>';
						};
						if($variable1=="10"){
						echo '<td>OCTUBRE</td>';
						};
						if($variable1=="11"){
						echo '<td>NOVIEMBRE</td>';
						};
						if($variable1=="12"){
						echo '<td>DICIEMBRE</td>';
						};
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		
		for($i3=0;$i3<count($response2 ["indices"]);$i3++){
		$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
		$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
		if ($array==$array5){
		$texto6=str_replace('"','',$array6); 
		echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
		};		
		};
		
		
		
		
		echo '</tr>';
		
		};
		$i++;
		$i1++;
		$i2++;		
		echo "</tbody>";				
		break;

		case 24:
		?>
		
		<caption width:'100%' align='center'>CENSOS ECONÓMICOS 1999 República Mexicana<br></caption>
		<thead width:'100%'  align='center' border='2px'>
           <tr width:'100%'  align='center' border='2px'>
             <th scope='col' align='center' border='2px' width:'10%'>Código</th>
             <th scope='col' align='center' border='2px' width:'10%'>Actividad Económica</th>
             <th scope='col' align='center' border='2px'>Unidades Económicas</th>
			 <th scope='col' align='center' border='2px'>Personal ocupado total</th>
			 <th scope='col' align='center' border='2px'>Producción bruta total (miles de pesos)</th>
			 <th scope='col' align='center' border='2px'>Valor agregado censal bruto<BR>(miles de pesos)</th>
		   </tr>
        </thead>

			<tbody>
			<?php
			$vars=\sim\censo_nac_1999::All();
			?>
			@foreach ($vars as $vari)
			<?php
			if(strlen($vari->Actividad)=="0"){
			echo '<tr><th  COLSPAN="2" width:"20%" align="left" >'. $vari->Codigo . '</th>';
			if(empty($vari->Unidades )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Unidades, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Personal )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Personal, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Produccion)){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Produccion, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Valor )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Valor, 0, '.', ' ') . '</td>';
			};
			echo '</tr>';
			}
			else{
			echo '<tr><td width:"10%">'. $vari->Codigo . '</td><td width:"10%">'. $vari->Actividad . '</td>';
			if(empty($vari->Unidades )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Unidades, 0, '.', ' ') . '</td>';
			};
			
				
			if(empty($vari->Personal )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Personal, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Produccion )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Produccion, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Valor )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Valor, 0, '.', ' ') . '</td>';
			};
				echo '</tr>';
			};
		?>
			@endforeach
		<?php
		echo "</tbody>";		
		break;

		case 25:
		?>
		<caption width:'100%' align='center'>CENSOS ECONÓMICOS 2004 República Mexicana<br></caption>
		<thead width:'100%'  align='center' border='2px'>
           <tr width:'100%'  align='center' border='2px'>
             <th scope='col' align='center' border='2px' width:'10%'>Código</th>
             <th scope='col' align='center' border='2px' width:'10%'>Actividad Económica</th>
             <th scope='col' align='center' border='2px'>Unidades Económicas</th>
			 <th scope='col' align='center' border='2px'>Personal ocupado total</th>
			 <th scope='col' align='center' border='2px'>Producción bruta total (miles de pesos)</th>
			 <th scope='col' align='center' border='2px'>Valor agregado censal bruto<BR>(miles de pesos)</th>
		 </tr>
        </thead>
			<tbody>
			<?php
		   	$vars=\sim\censo_nac_2004::All();
			?>
			@foreach ($vars as $vari)
			<?php
			
			if(strlen($vari->Actividad)=="0"){
			echo '<tr><th  COLSPAN="2"  width:"20%" align="left" >'. $vari->Codigo . '</th>';
			if(empty($vari->Unidades )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Unidades, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Personal )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Personal, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Produccion )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Produccion, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Valor)){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Valor, 0, '.', ' ') . '</td>';
			};
			echo '</tr>';
			}
			else{
			echo '<tr><td width:"10%">'. $vari->Codigo . '</td><td width:"10%">'. $vari->Actividad . '</td>';
			if(empty($vari->Unidades )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Unidades, 0, '.', ' ') . '</td>';
			};
			
				
			if(empty($vari->Personal )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Personal, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Produccion )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Produccion, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Valor )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Valor, 0, '.', ' ') . '</td>';
			};
				echo '</tr>';
			};
		?>
		@endforeach
		<?php

		echo "</tbody>";		
		break;

		case 26:
		?>
		<caption width:'100%' align='center'>CENSOS ECONÓMICOS 2009 República Mexicana<br></caption>
		<thead width:'100%'  align='center' border='2px'>
           <tr width:'100%'  align='center' border='2px'>
             <th scope='col' align='center' border='2px' width:'10%'>Código</th>
             <th scope='col' align='center' border='2px' width:'10%'>Actividad Económica</th>
             <th scope='col' align='center' border='2px'>Unidades Económicas</th>
			 <th scope='col' align='center' border='2px'>Personal ocupado total</th>
			 <th scope='col' align='center' border='2px'>Producción bruta total (miles de pesos)</th>
			 <th scope='col' align='center' border='2px'>Valor agregado censal bruto<BR>(miles de pesos)</th>
		  </tr>
        </thead>


		<tbody>
		<?php
	    $vars=\sim\censo_nac_2009::All();
			?>
			@foreach ($vars as $vari)
			<?php

			if(strlen($vari->Actividad)=="0"){
			echo '<tr><th  COLSPAN="2"  width:"20%" align="left" >'. $vari->Codigo . '</th>';
			if(empty($vari->Unidades )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Unidades, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Personal )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Personal, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Produccion )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Produccion, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Valor )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Valor, 0, '.', ' ') . '</td>';
			};
			echo '</tr>';
			}
			else{
			echo '<tr><td width:"10%">'. $vari->Codigo . '</td><td width:"10%">'. $vari->Actividad . '</td>';
			if(empty($vari->Unidades )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Unidades, 0, '.', ' ') . '</td>';
			};
			
				
			if(empty($vari->Personal )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Personal, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Produccion)){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Produccion, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Valor)){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Valor, 0, '.', ' ') . '</td>';
			};
				echo '</tr>';
			};
		?>
		@endforeach
		<?php
		echo "</tbody>";				
		break;

		case 27:
		?>
		<caption width:'100%' align='center'>CENSOS ECONÓMICOS 2014 República Mexicana<br></caption>
		
		
		<thead width:'100%'  align='center' border='2px'>
           <tr width:'100%'  align='center' border='2px'>
            <th scope='col' align='center' border='2px' width:'10%'>Código</th>
             <th scope='col' align='center' border='2px' width:'10%'>Actividad Económica</th>
             <th scope='col' align='center' border='2px'>Unidades Económicas</th>
			 <th scope='col' align='center' border='2px'>Personal ocupado total</th>
			 <th scope='col' align='center' border='2px'>Producción bruta total (miles de pesos)</th>
			 <th scope='col' align='center' border='2px'>Valor agregado censal bruto<BR>(miles de pesos)</th>
		   </tr>
        </thead>

		<tbody>
		   <?php
	    	$vars=\sim\censo_nac_2014::All();
			?>
			@foreach ($vars as $vari)
			<?php	
			
			if(strlen($vari->Actividad)=="0"){
			echo '<tr><th  COLSPAN="2"  width:"20%" align="left" >'. $vari->Codigo . '</th>';
			if(empty($vari->Unidades)){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Unidades, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Personal )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Personal, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Produccion )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Produccion, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Valor )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. $vari->Valor . '</td>';
			};
			echo '</tr>';
			}
			else{
			echo '<tr><td width:"10%">'. $vari->Codigo . '</td><td width:"10%">'. $vari->Actividad . '</td>';
			if(empty($vari->Unidades )){
			echo '<th>N.D.</th>'; 
			}else{
			echo '<td>'. number_format($vari->Unidades, 0, '.', ' ') . '</td>';
			};
			
				
				if(empty($vari->Personal )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Personal, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Produccion )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Produccion, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Valor )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. $vari->Valor . '</td>';
			};
				echo '</tr>';
			};
		?>
		@endforeach
		<?php
		echo "</tbody>";				
		break;

		case 29:
		?>
		<caption width:'100%' align='center'>CENSOS ECONÓMICOS 1999 ESTADO DE PUEBLA<br></caption>
		<thead width:'100%'  align='center' border='2px'>
        <tr width:'100%'  align='center' border='2px'>
        <th scope='col' align='center' border='2px' width:'10%'>Código</th>
           <th scope='col' align='center' border='2px' width:'10%'>Actividad Económica</th>
           <th scope='col' align='center' border='2px'>Unidades Económicas</th>
			 <th scope='col' align='center' border='2px'>Personal ocupado total</th>
			 <th scope='col' align='center' border='2px'>Producción bruta total (miles de pesos)</th>
			 <th scope='col' align='center' border='2px'>Valor agregado censal bruto<BR>(miles de pesos)</th>
		   </tr>
        </thead>
		
		
		<tbody>
		   <?php
	    	$vars=\sim\censo_pue_1999::All();
			?>
			@foreach ($vars as $vari)
			<?php	
			
			if(strlen($vari->Actividad)=="0"){
			echo '<tr><th  COLSPAN="2"  width:"20%" align="left" >'. $vari->Codigo . '</th>';
			if(empty($vari->Unidades )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Unidades, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Personal )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Personal, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Produccion)){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Produccion, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Valor )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Valor, 0, '.', ' ') . '</td>';
			};
			echo '</tr>';
			}
			else{
			echo '<tr><td width:"10%">'. $vari->Codigo . '</td><td width:"10%">'. $vari->Actividad . '</td>';
			if(empty($vari->Unidades )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Unidades, 0, '.', ' ') . '</td>';
			};
			
				
			if(empty($vari->Personal )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Personal, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Produccion )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Produccion, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Valor )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Valor, 0, '.', ' ') . '</td>';
			};
				echo '</tr>';
			};
		?>
		@endforeach
		<?php
		echo "</tbody>";

		
		break;

		case 30:
	
		?>		
		<caption width:'100%' align='center'>CENSOS ECONÓMICOS 2004 ESTADO DE PUEBLA<br></caption>
		
		
		<thead width:'100%'  align='center' border='2px'>
        <tr width:'100%'  align='center' border='2px'>
             <th scope='col' align='center' border='2px' width:'10%'>Código</th>
             <th scope='col' align='center' border='2px' width:'10%'>Actividad Económica</th>
             <th scope='col' align='center' border='2px'>Unidades Económicas</th>
			 <th scope='col' align='center' border='2px'>Personal ocupado total</th>
			 <th scope='col' align='center' border='2px'>Producción bruta total (miles de pesos)</th>
			 <th scope='col' align='center' border='2px'>Valor agregado censal bruto<BR>(miles de pesos)</th>
		   </tr>
        </thead>
		
		
		<tbody>
		   <?php
	    	$vars=\sim\censo_pue_2004::All();
			?>
			@foreach ($vars as $vari)
			<?php	
			
			if(strlen($vari->Actividad)=="0"){
			echo '<tr><th  COLSPAN="2"  width:"20%" align="left" >'. $vari->Codigo . '</th>';
			if(empty($$vari->Unidades )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Unidades, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Personal )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Personal, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Produccion)){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Produccion, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Valor)){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Valor, 0, '.', ' ') . '</td>';
			};
			echo '</tr>';
			}
			else{
			echo '<tr><td width:"10%">'. $vari->Codigo . '</td><td width:"10%">'. $vari->Actividad . '</td>';
			if(empty($vari->Unidades )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Unidades, 0, '.', ' ') . '</td>';
			};
			
				
			if(empty($vari->Personal )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Personal, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Produccion )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Produccion, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Valor )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Valor, 0, '.', ' ') . '</td>';
			};
				echo '</tr>';
			};
		?>
		@endforeach
		<?php
		echo "</tbody>";
		break;		
		case 31:
		?>
		
		<caption width:'100%' align='center'>CENSOS ECONÓMICOS 2009 ESTADO DE PUEBLA<br></caption>
		<thead width:'100%'  align='center' border='2px'>
           <tr width:'100%'  align='center' border='2px'>
            <th scope='col' align='center' border='2px' width:'10%'>Código</th>
             <th scope='col' align='center' border='2px' width:'10%'>Actividad Económica</th>
             <th scope='col' align='center' border='2px'>Unidades Económicas</th>
			 <th scope='col' align='center' border='2px'>Personal ocupado total</th>
			 <th scope='col' align='center' border='2px'>Producción bruta total (miles de pesos)</th>
			 <th scope='col' align='center' border='2px'>Valor agregado censal bruto<BR>(miles de pesos)</th>
		   </tr>
        </thead>
		
		
		<tbody>
		   <?php
	    	$vars=\sim\censo_pue_2009::All();
			?>
			@foreach ($vars as $vari)
			<?php
			
			if(strlen($vari->Actividad)=="0"){
			echo '<tr><th  COLSPAN="2"  width:"20%" align="left" >'. $vari->Codigo . '</th>';
			if(empty($vari->Unidades )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Unidades, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Personal )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Personal, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Produccion )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Produccion, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Valor )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Valor, 0, '.', ' ') . '</td>';
			};
			echo '</tr>';
			}
			else{
			echo '<tr><td width:"10%">'. $vari->Codigo . '</td><td width:"10%">'. $vari->Actividad . '</td>';
			if(empty($vari->Unidades )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Unidades, 0, '.', ' ') . '</td>';
			};
			
				
			if(empty($vari->Personal )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Personal, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Produccion )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Produccion, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Valor)){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Valor, 0, '.', ' ') . '</td>';
			};
				echo '</tr>';
			};
		?>
		@endforeach
		<?php
		echo "</tbody>";
		
		break;

    	case 32:
		?>
		<caption width:'100%' align='center'>CENSOS ECONÓMICOS 2014 ESTADO DE PUEBLA<br></caption>
		
		<thead width:'100%'  align='center' border='2px'>
           <tr width:'100%'  align='center' border='2px'>
             <th scope='col' align='center' border='2px' width:'10%'>Código</th>
             <th scope='col' align='center' border='2px' width:'10%'>Actividad Económica</th>
             <th scope='col' align='center' border='2px'>Unidades Económicas</th>
			 <th scope='col' align='center' border='2px'>Personal ocupado total</th>
			 <th scope='col' align='center' border='2px'>Producción bruta total (miles de pesos)</th>
			 <th scope='col' align='center' border='2px'>Valor agregado censal bruto<BR>(miles de pesos)</th>
		 </tr>
        </thead>

		<tbody>
			<?php
	    	$vars=\sim\censo_pue_2014::All();
			?>
			@foreach ($vars as $vari)
			<?php	
			
			if(strlen($vari->Actividad)=="0"){
			echo '<tr><th  COLSPAN="2"  width:"20%" align="left" >'. $vari->Codigo . '</th>';
			if(empty($vari->Unidades )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Unidades, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Personal )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Personal, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Produccion )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Produccion, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Valor )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Valor, 0, '.', ' ') . '</td>';
			};
			echo '</tr>';
			}
			else{
			echo '<tr><td width:"10%">'. $vari->Codigo . '</td><td width:"10%">'. $vari->Actividad . '</td>';
			if(empty($row["Unidades"] )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Unidades, 0, '.', ' ') . '</td>';
			};
			
				
			if(empty($vari->Personal )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Personal, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Produccion )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Produccion, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Valor )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Valor, 0, '.', ' ') . '</td>';
			};
				echo '</tr>';
			};
		
		?>
		@endforeach
		<?php
		echo "</tbody>";
		
		break;

		case 34:
		?>
		<caption width:'100%' align='center'>CENSOS ECONÓMICOS 1999 MUNICIPIO DE PUEBLA<br></caption>
		
		
		<thead width:'100%'  align='center' border='2px'>
           <tr width:'100%'  align='center' border='2px'>
           <th scope='col' align='center' border='2px' width:'10%'>Código</th>
             <th scope='col' align='center' border='2px' width:'10%'>Actividad Económica</th>
             <th scope='col' align='center' border='2px'>Unidades Económicas</th>
			 <th scope='col' align='center' border='2px'>Personal ocupado total</th>
			 <th scope='col' align='center' border='2px'>Producción bruta total (miles de pesos)</th>
			 <th scope='col' align='center' border='2px'>Valor agregado censal bruto<BR>(miles de pesos)</th>
		   </tr>
        </thead>
		
		
		
		
		<tbody>
		   <?php
	    	$vars=\sim\censo_ciudad_1999::All();
			?>
			@foreach ($vars as $vari)
			<?php
			
			if(strlen($vari->Actividad)=="0"){
			echo '<tr><th  COLSPAN="2"  width:"20%" align="left" >'. $vari->Codigo . '</th>';
			if(empty($vari->Unidades )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Unidades, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Personal )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Personal, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Produccion )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Produccion, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Valor )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Valor, 0, '.', ' ') . '</td>';
			};
			echo '</tr>';
			}
			else{
			echo '<tr><td width:"10%">'. $vari->Codigo . '</td><td width:"10%">'. $vari->Actividad . '</td>';
			if(empty($vari->Unidades)){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Unidades, 0, '.', ' ') . '</td>';
			};
			
				
				if(empty($vari->Personal )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Personal, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Produccion )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Produccion, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Valor )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Valor, 0, '.', ' ') . '</td>';
			};
				echo '</tr>';
			};
		
		?>
		@endforeach
		<?php
		echo "</tbody>";
		break;
		case 35:
		
		?>
		
		echo "<caption width:'100%' align='center'>CENSOS ECONÓMICOS 2004 MUNICIPIO DE PUEBLA<br></caption>";
		
		
		<thead width:'100%'  align='center' border='2px'>
          <tr width:'100%'  align='center' border='2px'>
           <th scope='col' align='center' border='2px' width:'10%'>Código</th>
           <th scope='col' align='center' border='2px' width:'10%'>Actividad Económica</th>
            <th scope='col' align='center' border='2px'>Unidades Económicas</th>
			<th scope='col' align='center' border='2px'>Personal ocupado total</th>
			<th scope='col' align='center' border='2px'>Producción bruta total (miles de pesos)</th>
			<th scope='col' align='center' border='2px'>Valor agregado censal bruto<BR>(miles de pesos)</th>
		   </tr>
        </thead>



		<tbody>
		   <?php
	    	$vars=\sim\censo_ciudad_2004::All();
			?>
			@foreach ($vars as $vari)
			<?php	
			
			if(strlen($vari->Actividad)=="0"){
			echo '<tr><th  COLSPAN="2"  width:"20%" align="left" >'. $vari->Codigo . '</th>';
			if(empty($vari->Unidades )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Unidades, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Personal )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Personal, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Produccion )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Produccion, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Valor )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Valor, 0, '.', ' ') . '</td>';
			};
			echo '</tr>';
			}
			else{
			echo '<tr><td width:"10%">'. $vari->Codigo . '</td><td width:"10%">'. $vari->Actividad . '</td>';
			if(empty($vari->Unidades )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. $vari->Unidades. '</td>';
			};
			
				
			if(empty($vari->Personal)){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Personal, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Produccion )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Produccion, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Valor )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Valor, 0, '.', ' ') . '</td>';
			};
				echo '</tr>';
			};
		?>
		@endforeach
		<?php
		echo "</tbody>";		
		break;

		case 36:
		
		?>
		
		<caption width:'100%' align='center'>CENSOS ECONÓMICOS 2009 MUNICIPIO DE PUEBLA<br></caption>
		
		
		<thead width:'100%'  align='center' border='2px'>
           <tr width:'100%'  align='center' border='2px'>
             <th scope='col' align='center' border='2px' width:'10%'>Código</th>
             <th scope='col' align='center' border='2px' width:'10%'>Actividad Económica</th>
             <th scope='col' align='center' border='2px'>Unidades Económicas</th>
			 <th scope='col' align='center' border='2px'>Personal ocupado total</th>
			 <th scope='col' align='center' border='2px'>Producción bruta total (miles de pesos)</th>
			 <th scope='col' align='center' border='2px'>Valor agregado censal bruto<BR>(miles de pesos)</th>
		   </tr>
        </thead>
		
		
		<tbody>
		   <?php
	    	$vars=\sim\censo_ciudad_2009::All();
			?>
			@foreach ($vars as $vari)
			<?php
			
			if(strlen($vari->Actividad)=="0"){
			echo '<tr><th  COLSPAN="2"  width:"20%" align="left" >'. $vari->Codigo . '</th>';
			if(empty($vari->Unidades )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Unidades, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Personal )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Personal, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Produccion )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Produccion, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Valor )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Valor, 0, '.', ' ') . '</td>';
			};
			echo '</tr>';
			}
			else{
			echo '<tr><td width:"10%">'. $vari->Codigo . '</td><td width:"10%">'. $vari->Actividad . '</td>';
			if(empty($row["Unidades"] )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Unidades, 0, '.', ' ') . '</td>';
			};
			
				
			if(empty($vari->Personal )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Personal, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Produccion )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Produccion, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Valor )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Valor, 0, '.', ' ') . '</td>';
			};
				echo '</tr>';
			};
		?>
		@endforeach
		<?php
		echo "</tbody>";		
		break;

	case 37:
		?>
		
		<caption width:'100%' align='center'>CENSOS ECONÓMICOS 2014 MUNICIPIO DE PUEBLA<br></caption>
		
		
		<thead width:'100%'  align='center' border='2px'>
         <tr width:'100%'  align='center' border='2px'>
             <th scope='col' align='center' border='2px' width:'10%'>Código</th>
             <th scope='col' align='center' border='2px' width:'10%'>Actividad Económica</th>
             <th scope='col' align='center' border='2px'>Unidades Económicas</th>
			 <th scope='col' align='center' border='2px'>Personal ocupado total</th>
			 <th scope='col' align='center' border='2px'>Producción bruta total (miles de pesos)</th>
			 <th scope='col' align='center' border='2px'>Valor agregado censal bruto<BR>(miles de pesos)</th>
		   </tr>
        </thead>
		
		
			<tbody>
		    <?php
	    	$vars=\sim\censo_ciudad_2014::All();
			?>
			@foreach ($vars as $vari)
			<?php
			
			if(strlen($vari->Actividad)=="0"){
			echo '<tr><th  COLSPAN="2"  width:"20%" align="left" >'. $vari->Codigo . '</th>';
			if(empty($vari->Unidades )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Unidades, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Personal)){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Personal, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Produccion )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Produccion, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Valor )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Valor, 0, '.', ' ') . '</td>';
			};
			echo '</tr>';
			}
			else{
			echo '<tr><td width:"10%">'. $vari->Codigo . '</td><td width:"10%">'. $vari->Actividad . '</td>';
			if(empty($vari->Unidades )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Unidades, 0, '.', ' ') . '</td>';
			};
			
				
			if(empty($vari->Personal )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Personal, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Produccion )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Produccion, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Valor )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Valor, 0, '.', ' ') . '</td>';
			};
				echo '</tr>';
			};
		?>
		@endforeach
		<?php
		echo "</tbody>";		
		break;

case 81:
		?>
		
	    <caption width:'100%' align='center'>Indicador  global de la actividad económica (IGAE)</caption>
		<caption width:'100%' align='center'>(Índice de volumen físico 2008 = 100)</caption>
		
		
		
		<thead width:'100%'  align='center' border='2px'>
           <tr width:'100%'  align='center' border='2px'>
          
             <th scope='col' width:'20%' align='center' border='2px'>Año</th>
             <th scope='col' width:'20%' align='center' border='2px'>Mes</th>
			 <th scope='col' width:'20%' align='center' border='2px'>Índice</th>
			 
			 <th scope='col' width:'20%' align='center' border='2px'>Variación<br>% anual</th>
		   </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice =383152; //
		$lugar = 00;
		$indice1 =383168; //
		$lugar1 =00 ;

		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
						if($variable1=="01"){
						echo '<td>ENERO</td>';
						};
						if($variable1=="02"){
						echo '<td>FEBRERO</td>';
						};
						if($variable1=="03"){
						echo '<td>MARZO</td>';
						};
						if($variable1=="04"){
						echo '<td>ABRIL</td>';
						};
						if($variable1=="05"){
						echo '<td>MAYO</td>';
						};
						if($variable1=="06"){
						echo '<td>JUNIO</td>';
						};
						if($variable1=="07"){
						echo '<td>JULIO</td>';
						};
						if($variable1=="08"){
						echo '<td>AGOSTO</td>';
						};
						if($variable1=="09"){
						echo '<td>SEPTIEMBRE</td>';
						};
						if($variable1=="10"){
						echo '<td>OCTUBRE</td>';
						};
						if($variable1=="11"){
						echo '<td>NOVIEMBRE</td>';
						};
						if($variable1=="12"){
						echo '<td>DICIEMBRE</td>';
						};
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
			
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		if ($i<="11")
		{
		echo '<td>N.D.</td>';
		};
		
	

		echo '</tr>';
		
		};
		$i++;
		$i1++;
		$i2++;		
		echo "</tbody>";				
		break;

		case 87:
		?>
		<caption width:'100%' align='center'> Población Nacional 2010</caption>
		<caption width:'100%' align='center'>(Personas)</caption>
		
		
		
		<thead width:'100%'  align='center' border='2px'>
           <tr width:'100%'  align='center' border='2px'>
			<th scope='col'  align='center' border='2px' COLSPAN='4'>Nacional</th>
		   </tr>
			<tr width:'100%'  align='center' border='2px'>
			<th scope='col'  align='center' border='2px'>Categoria</th>
			<th scope='col'  align='center' border='2px'>Total</th>
			 <th scope='col'  align='center' border='2px'>Hombres</th>
			 <th scope='col'  align='center' border='2px'>Mujeres</th>
		   </tr>
        </thead>
		
		<tbody ALIGN='CENTER'>
		<?php
	    	$vars=\sim\pob_nac::All();
			?>
			@foreach ($vars as $vari)
			<?php
	
			echo '<tr>';
			echo '<td>'.$vari->Cate.'</td>';
			echo '<td>'. number_format($vari->Total, 0, '.', ' ') .'</td>';
			echo '<td>'. number_format($vari->Hombres, 0, '.', ' ') .'</td>';
			echo '<td>'. number_format($vari->Mujeres, 0, '.', ' ') .'</td>';
			
			echo '</tr>';
			?>
			@endforeach
			<?php
		echo "</tbody>";
		
		break;
		
		case 88:
		?>
		<caption width:'100%' align='center'> Población Estado de Puebla 2010</caption>
		<caption width:'100%' align='center'>(Personas)</caption>
		
		<thead width:'100%'  align='center' border='2px'>
           <tr width:'100%'  align='center' border='2px'>
			 <th scope='col'  align='center' border='2px' COLSPAN='4'>Estado de Puebla</th>
		   </tr>
			<tr width:'100%'  align='center' border='2px'>
			<th scope='col'  align='center' border='2px'>Categoria</th>
			 <th scope='col'  align='center' border='2px'>Total</th>
			 <th scope='col'  align='center' border='2px'>Hombres</th>
			 <th scope='col'  align='center' border='2px'>Mujeres</th>
		   </tr>
        </thead>
		
		<tbody ALIGN='CENTER'>
		  
		<?php
	    	$vars=\sim\pob_esta::All();
			?>
			@foreach ($vars as $vari)
			<?php
			echo '<tr>';
			echo '<td>'.$vari->Cate.'</td>';
			echo '<td>'. number_format($vari->Total, 0, '.', ' ') .'</td>';
			echo '<td>'. number_format($vari->Hombres, 0, '.', ' ') .'</td>';
			echo '<td>'. number_format($vari->Mujeres, 0, '.', ' ') .'</td>';
			echo '</tr>';
			
			?>
			@endforeach
			<?php
		echo "</tbody>";
		break;



case 121:
?>		
		
		
		
		<caption width:'100%' align='center'> Población Municipio de Puebla 2010</caption>
		<caption width:'100%' align='center'>(Personas)</caption>
		
		<thead width:'100%'  align='center' border='2px'>
        <tr width:'100%'  align='center' border='2px'>
		<th scope='col'  align='center' border='2px' COLSPAN='4'>Municipio de Puebla</th>
		  </tr>
		  <tr width:'100%'  align='center' border='2px'>
			<th scope='col'  align='center' border='2px'>Categoria</th>
			 <th scope='col'  align='center' border='2px'>Total</th>
			 <th scope='col'  align='center' border='2px'>Hombres</th>
			 <th scope='col'  align='center' border='2px'>Mujeres</th>
		   </tr>
        </thead>
		
		<tbody ALIGN='CENTER'>
		  	
			<?php
	    	$vars=\sim\pob_mun1::All();
			?>
			@foreach ($vars as $vari)
			<?php
	
			echo '<tr>';
			echo '<td>'.$vari->Cate.'</td>';
			echo '<td>'. number_format($vari->Total, 0, '.', ' ') .'</td>';
			echo '<td>'. number_format($vari->Hombres, 0, '.', ' ') .'</td>';
			echo '<td>'. number_format($vari->Mujeres, 0, '.', ' ') .'</td>';
			
			echo '</tr>';
			?>
			@endforeach
			<?php

		echo "</tbody>";
		break;

		case 120:
		?>
		
		<caption width:'100%' align='center'> Población Municipio de Puebla 2010</caption>
		<caption width:'100%' align='center'>(Personas)</caption>
		
		
		
		<thead width:'100%'  align='center' border='2px'>
           <tr width:'100%'  align='center' border='2px'>
		   <th></th>
		   <th scope='col'  align='center' border='2px' COLSPAN='3'>Nacional</th>
			 <th scope='col'  align='center' border='2px' COLSPAN='3'>Estado de Puebla</th>
			 <th scope='col'  align='center' border='2px' COLSPAN='3'>Municipio de Puebla</th>
		   </tr>
			<tr width:'100%'  align='center' border='2px'>
			<th scope='col'  align='center' border='2px'>Año</th>
			<th scope='col'  align='center' border='2px'>Población a mitad de año</th>
			<th scope='col'  align='center' border='2px'>Hombres</th>
			<th scope='col'  align='center' border='2px'>Mujeres</th>
			<th scope='col'  align='center' border='2px'>Población a mitad de año</th>
			<th scope='col'  align='center' border='2px'>Hombres</th>
			<th scope='col'  align='center' border='2px'>Mujeres</th>
			<th scope='col'  align='center' border='2px'>Población a mitad de año</th>
			<th scope='col'  align='center' border='2px'>Hombres</th>
			 <th scope='col'  align='center' border='2px'>Mujeres</th>
			 
		   </tr>
        </thead>
		
		<tbody ALIGN='CENTER'>
		<?php
	    	$vars=\sim\pro_pob::All();
			?>
			@foreach ($vars as $vari)
			<?php
			echo '<tr>';
			echo '<td>'.$vari->anio.'</td>';
			echo '<td>'. number_format($vari->mitad_anio) .'</td>';
			echo '<td>'. number_format($vari->Hombres, 0, '.', ' ') .'</td>';
			echo '<td>'. number_format($vari->Mujeres, 0, '.', ' ') .'</td>';
			echo '<td>'. number_format($vari->mitadanio, 0, '.', ',') .'</td>';
			echo '<td>'. number_format($vari->homb, 0, '.', ',') .'</td>';
			echo '<td>'. number_format($vari->Muje, 0, '.', ',') .'</td>';
			echo '<td>'. $vari->mitadanioo .'</td>';
			echo '<td>'. $vari->Hom .'</td>';
			echo '<td>'. $vari->Muj .'</td>';
			
			echo '</tr>';
			?>
			@endforeach
			<?php
		echo "</tbody>";
		
		break;

		case 89:
		?>
		<caption width:'100%' align='center'> Principales Caracteristicas de la  vivienda</caption>
		<caption width:'100%' align='center'>(Viviendas)</caption>
		
		
		
		<thead width:'100%'  align='center' border='2px'>
           <tr width:'100%'  align='center' border='2px'>
			 <th width:'30%' scope='col'  align='center' border='2px'>Categoria</th>
             <th width:'23%' scope='col'  align='center' border='2px'>Nacional Total</th>
             <th width:'23%' scope='col'  align='center' border='2px'>Estado de Puebla<br>Total</th>
			 <th width:'23%' scope='col'  align='center' border='2px' COLSPAN='3'>Municipio de Puebla<br>Total</th>
		   </tr>
        </thead>
		
		<tbody ALIGN='CENTER'>
		   
			<?php
	    	$vars=\sim\vivienda::All();
			?>
			@foreach ($vars as $vari)
			<?php

			echo '<tr>';
			echo '<td>'.$vari->catego.'</td>';
			echo '<td>'. number_format($vari->nacional, 0, '.', ' ') .'</td>';
			echo '<td>'. number_format($vari->estatal, 0, '.', ' ') .'</td>';
			echo '<td>'. number_format($vari->ciudad, 0, '.', ' ') .'</td>';
		
			echo '</tr>';
			?>
			@endforeach
			<?php
			echo "</tbody>";
		
		break;

case 49:
		
?>
		<caption width:'100%' align='center'>Estadía Promedio</caption>
		<caption width:'100%' align='center'>(Días)</caption>
		
		
		
		<thead width:'100%'  align='center' border='2px'>
           <tr width:'100%'  align='center' border='2px'>
          
            <th scope='col'  align='center' border='2px'>Año</th>
             <th scope='col'  align='center' border='2px'>Mes</th>
			 <th scope='col'  align='center' border='2px'>Nacional*</th>
			 <th scope='col'  align='center' border='2px'>Estado de Puebla</th>
			 <th scope='col'  align='center' border='2px'>Ciudad de Puebla</th>
			 <th scope='col'  align='center' border='2px'>70 destinos DATATUR</th>
		   </tr>
        </thead>
		<tbody align='center'>
		 <?php
		 $antes=0;
	    	$vars=\sim\esta::All();
			?>
			@foreach ($vars as $vari)
			<?php
			echo '<tr>';
			if ($antes!== $vari->Anio){
			echo '<td>'. $vari->Anio .'</td>';
			}
			else{
			echo '<td></td>';	
			};
			$antes=$vari->Anio;

			echo '<td>'. $vari->Mes. '</td>';
			
			
			
			
			if(empty($vari->Nacional )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Nacional, 2, '.', ' ') . '</td>';
			};
			if(empty($vari->Puebla )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Puebla, 2, '.', ' ') . '</td>';
			};
			if(empty($vari->Ciudad )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Ciudad, 2, '.', ' ') . '</td>';
			};
			
			if(empty($vari->destinos)){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->destinos, 2, '.', ' ') . '</td>';
			};
			echo '</tr>';
		
		
			?>
			@endforeach
			<?php
		echo "</tbody>";		
	break;

	case 46:
		?>
		<caption width:'100%' align='center'>Cuartos disponibles</caption>
		<thead width:'100%'  align='center' border='2px'>
        <tr width:'100%'  align='center' border='2px'>
          <th scope='col'  align='center' border='2px'>Año</th>
           <th scope='col'  align='center' border='2px'>Mes</th>
			 <th scope='col'  align='center' border='2px'>Nacional*</th>
			 <th scope='col'  align='center' border='2px'>Estado de Puebla</th>
			 <th scope='col'  align='center' border='2px'>Ciudad de Puebla</th>
			 <th scope='col'  align='center' border='2px'>70 destinos DATATUR</th>
		   </tr>
        </thead>

		<tbody align='center'>
		  
			<?php
			$antes=0;
	    	$vars=\sim\cuartos_dispo::All();
			?>
			@foreach ($vars as $vari)
			<?php
	
			
			echo '<tr>';
			if ($antes!== $vari->Anio){
			echo '<td>'. $vari->Anio . '</td>';
			}
			else{
			echo '<td></td>';	
			};
			$antes=$vari->Anio;
			
			echo '<td>'. $vari->Mes . '</td>';
			
			
			
			
			if(empty($vari->Nacional)){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Nacional, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Puebla )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Puebla, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Ciudad )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Ciudad, 0, '.', ' ') . '</td>';
			};
			
			if(empty($vari->destinos)){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->destinos, 0, '.', ' ') . '</td>';
			};
			echo '</tr>';
		
		?>
		@endforeach
		<?php
		echo "</tbody>";		
		break;

		case 45:
		
		?>
		
	
		<caption width:'100%' align='center'>Llegada de turistas total</caption>
		
		
		<thead width:'100%'  align='center' border='2px'>
          <tr width:'100%'  align='center' border='2px'>
          
             <th scope='col'  align='center' border='2px'>Año</th>
             <th scope='col'  align='center' border='2px'>Mes</th>
			 <th scope='col'  align='center' border='2px'>Nacional*</th>
			 <th scope='col'  align='center' border='2px'>Estado de Puebla</th>
			 <th scope='col'  align='center' border='2px'>Ciudad de Puebla</th>
			 <th scope='col'  align='center' border='2px'>70 destinos DATATUR</th>
		   </tr>
        </thead>
			
			<tbody align='center'>
				<?php
	    	$vars=\sim\llegadatur::All();
	    	$antes=0;
			?>
			@foreach ($vars as $vari)
			<?php		
			echo '<tr>';
			
			
				if ($antes!== $vari->anio){
				echo '<td>'. $vari->anio . '</td>';
			
				}
				else{
				echo '<td></td>';	
				};
		    $antes=$vari->anio;	 
			echo '<td>'. $vari->Mes . '</td>';
			
			
			
			
			if(empty($vari->Nacional )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Nacional, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Puebla )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Puebla, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Ciudad )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Ciudad, 0, '.', ' ') . '</td>';
			};
			
			if(empty($vari->destinos )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->destinos, 0, '.', ' ') . '</td>';
			};
			echo '</tr>';
			
		
		
		?>
		@endforeach
		<?php
		echo "</tbody>";
		break;
		
		
		case 47:
		?>
		<caption width:'100%' align='center'>Cuartos ocupados</caption>
		
		
		<thead width:'100%'  align='center' border='2px'>
           <tr width:'100%'  align='center' border='2px'>
          
             <th scope='col'  align='center' border='2px'>Año</th>
             <th scope='col'  align='center' border='2px'>Mes</th>
			 <th scope='col'  align='center' border='2px'>Nacional*</th>
			 <th scope='col'  align='center' border='2px'>Estado de Puebla</th>
			 <th scope='col'  align='center' border='2px'>Ciudad de Puebla</th>
			 <th scope='col'  align='center' border='2px'>70 destinos DATATUR</th>
		  </tr>
        </thead>
		<tbody align='center'>
			<?php
	    	$antes=0;
	    	$vars=\sim\cuartos_ocupa::All();
			?>
			@foreach ($vars as $vari)
			<?php
			echo '<tr>';
			if ($antes!== $vari->anio){
			echo '<td>'. $vari->anio . '</td>';
			}			
			else{
			echo '<td></td>';	
			};
			$antes=$vari->anio;
			
			
			echo '<td>'. $vari->Mes . '</td>';
			
			
			
			
			if(empty($vari->Nacional )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Nacional, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Puebla )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Puebla, 0, '.', ' ') . '</td>';
			};
			if(empty($vari->Ciudad )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Ciudad, 0, '.', ' ') . '</td>';
			};
			
			if(empty($vari->destinos )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->destinos, 0, '.', ' ') . '</td>';
			};
			echo '</tr>';
		
		?>
		@endforeach
		<?php
		echo "</tbody>";		
		break;
		
		case 48:
		?>
		
		<caption width:'100%' align='center'>Porcentaje de ocupación hotelera</caption>
		<caption width:'100%' align='center'>(%)</caption>
		
		<thead width:'100%'  align='center' border='2px'>
           <tr width:'100%'  align='center' border='2px'>
          
             <th scope='col'  align='center' border='2px'>Año</th>
             <th scope='col'  align='center' border='2px'>Mes</th>
			 <th scope='col'  align='center' border='2px'>Nacional*</th>
			 <th scope='col'  align='center' border='2px'>Estado de Puebla</th>
			 <th scope='col'  align='center' border='2px'>Ciudad de Puebla</th>
			 <th scope='col'  align='center' border='2px'>70 destinos DATATUR</th>
		   </tr>
        </thead>
		<tbody align='center'>
			<?php
			$antes=0;
	    	$vars=\sim\porocupa::All();
			?>
			@foreach ($vars as $vari)
			<?php
			echo '<tr>';
		 if ($antes!== $vari->anio){
			echo '<td>'. $vari->anio . '</td>';
			}
			else{
			echo '<td></td>';	
			};
			$antes=$vari->anio;
			echo '<td>'. $vari->Mes . '</td>';
			
			
			
			
			if(empty($vari->Nacional )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Nacional, 2, '.', ' ') . '</td>';
			};
			if(empty($vari->Puebla )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Puebla, 2, '.', ' ') . '</td>';
			};
			if(empty($vari->Ciudad )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->Ciudad, 2, '.', ' ') . '</td>';
			};
			
			if(empty($vari->destinos )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->destinos, 2, '.', ' ') . '</td>';
			};
			echo '</tr>';
		
		?>
		@endforeach
		<?php
		echo "</tbody>";		
		break;


		case 62:
		?>
		
		<caption width:'100%' align='center'>Inversión Extranjera Directa Nacional</caption>
		<caption width:'100%' align='center'>(Millones de dólares)</caption>
		
		
		
		<thead width:'100%'  align='center' border='2px'>
		<tr width:'100%'  align='center' border='2px'>
		<th></th><th></th><th scope='col'  COLSPAN='4'  align='center' border='2px'>Nacional</th>
		</tr>
        <tr width:'100%'  align='center' border='2px'>
          
             <th scope='col'  align='center' border='2px'>Año</th>
			 <th scope='col'  align='center' border='2px'>Trimestre/</th>
			 <th scope='col'  align='center' border='2px'>Nuevas<br>inversión</th>
			 <th scope='col'  align='center' border='2px'>Reinversiones de <br>Utilidades</th>
			 <th scope='col'  align='center' border='2px'>Cuentas entre<br>compañias</th>
			 <th scope='col'  align='center' border='2px'>Total</th>
		   </tr>
        </thead>
		<?php
			$antes=0;		
	    	$vars=\sim\inver_ext_nac::All();
			?>
			@foreach ($vars as $vari)
			<?php
				echo '<tr>';
				if ($antes!== $vari->Anio){
				echo '<td>'. $vari->Anio . '</td>';
				}
				else{
				echo '<td></td>';	
				};
				$antes=$vari->Anio;
				echo '<td>'. $vari->Trimestre . '</td>';
				
				if(empty($vari->Nuevas )){
				echo '<td>N.D.</td>'; 
				}else{
				echo '<td>'. number_format($vari->Nuevas, 2, '.', ' ') . '</td>';
				};
				
				if(empty($vari->Reinversiones)){
				echo '<td>N.D.</td>'; 
				}else{
				echo '<td>'. number_format($vari->Reinversiones, 2, '.', ' ') . '</td>';
				};
				
				if(empty($vari->companias)){
				echo '<td>N.D.</td>'; 
				}else{
				echo '<td>'. number_format($vari->companias, 2, '.', ' ') . '</td>';
				};
				
				if(empty($vari->Total)){
				echo '<td>N.D.</td>'; 
				}else{
				echo '<td>'. number_format($vari->Total, 2, '.', ' '). '</td>';
				};
				echo '</tr>';
				
				?>
				@endforeach
				<?php
		echo "</tbody>";

		
		break;
		case 63:
		?>
		
		
		
		<caption width:'100%' align='center'>Inversión Extranjera Directa Estado de Puebla</caption>
		<caption width:'100%' align='center'>(Millones de dólares)</caption>
		
		<thead width:'100%'  align='center' border='2px'>
		<tr width:'100%'  align='center' border='2px'>
		<th></th><th></th><th scope='col'  COLSPAN='4'  align='center' border='2px'>Estado de Puebla</th>
		</tr>
           <tr width:'100%'  align='center' border='2px'>
          
             <th scope='col'  align='center' border='2px'>Año</th>
			 <th scope='col'  align='center' border='2px'>Trimestre/</th>
			 <th scope='col'  align='center' border='2px'>Nuevas<br>inversión</th>
			 <th scope='col'  align='center' border='2px'>Reinversiones de <br>Utilidades</th>
			 <th scope='col'  align='center' border='2px'>Cuentas entre<br>compañias</th>
			 <th scope='col'  align='center' border='2px'>Total</th>
		   </tr>
       </thead>


		<tbody align='center'>
		   
			<?php
	    	$antes=0;
	    	$vars=\sim\inverextpue::where('Trimestre', '<>', 'Anual')->take(1000)->get()
			?>
			@foreach ($vars as $vari)
			<?php
				echo '<tr>';
				if ($antes!== $vari->Anio){
				echo '<td>'. $vari->Anio . '</td>';				
				}
				else{
				echo '<td></td>';	
				};
				$antes=$vari->Anio;
				echo '<td>'. $vari->Trimestre . '</td>';
				
				if(empty($vari->Nuevas )){
				echo '<td>N.D.</td>'; 
				}else{
				echo '<td>'. number_format($vari->Nuevas, 2, '.', ' ') . '</td>';
				};
				
				if(empty($vari->Reinversiones)){
				echo '<td>N.D.</td>'; 
				}else{
				echo '<td>'. number_format($vari->Reinversiones, 2, '.', ' ') . '</td>';
				};
				
				if(empty($vari->companias )){
				echo '<td>N.D.</td>'; 
				}else{
				echo '<td>'. number_format($vari->companias, 2, '.', ' ') . '</td>';
				};
				
				if(empty($vari->Total )){
				echo '<td>N.D.</td>'; 
				}else{
				echo '<td>'. number_format($vari->Total, 2, '.', ' '). '</td>';
				};
				echo '</tr>';
		
		
		?>
		@endforeach
		<?php
		echo "</tbody>";		
		break;


		case 91:
		
		?>
		<caption width:'100%' align='center'>POBLACIÓN ECONÓMICAMENTE ACTIVA</caption>
		<caption width:'100%' align='center'>(Número de personas)</caption>
		
		
		
		<thead width:'100%'  align='center' border='2px'>
           <tr width:'100%'  align='center' border='2px'>
          
             <th scope='col'  align='center' border='2px'>Año</th>";
			 <th scope='col'  align='center' border='2px'>Trimestre</th>
			 <th scope='col'  align='center' border='2px'>Nacional</th>
			 <th scope='col'  align='center' border='2px'>Estado de <br>Puebla</th>
			 <th scope='col'  align='center' border='2px'>Ciudad de<br>Puebla</th>
			 <th scope='col'  align='center' border='2px'>Urbana<br>agregado<br>32<br>ciudades</th>
		  </tr>
        </thead>

		<tbody align='center'>
		<?php
		$indice =446564; //
		$lugar = 00;
		$indice1 =447180; //
		$lugar1 = 21;

		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
						if($variable1=="01"){
						echo '<td>I</td>';
						};
						if($variable1=="02"){
						echo '<td>II</td>';
						};
						if($variable1=="03"){
						echo '<td>III</td>';
						};
						if($variable1=="04"){
						echo '<td>IV</td>';
						};
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
			    	$vars=\sim\activa::All();
					?>
					@foreach ($vars as $vari)
					<?php	
					$valor='"'.$vari->Anio.'\/'.$vari->Num.'"';
				
					if ($valor==$array ){
					echo '<td>'. number_format($vari->pue, 2, '.', ' ') .'</td>'; 
					}
					?>
					@endforeach
					<?php
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		
		
					$vars1=\sim\activa::All();
					?>
					@foreach ($vars1 as $vari1)
					<?php	
					$valor1='"'.$vari1->Anio.'\/'.$vari1->Num.'"';
				
					if ($valor1==$array ){
					echo '<td>'. number_format($vari1->urbana, 2, '.', ' ') .'</td>'; 
					}
					?>
					@endforeach
					<?php
		
	

		echo '</tr>';
		
		};
		$i++;
		$i1++;
		$i2++;
		
		
		
		echo "</tbody>";

		
		
		break;
		case 94:
		?>
		
		<caption width:'100%' align='center'>POBLACIÓN ECONÓMICAMENTE ACTIVA OCUPADA</caption>
		<caption width:'100%' align='center'>(Número de personas)</caption>
		
		
		
		<thead width:'100%'  align='center' border='2px'>
          <tr width:'100%'  align='center' border='2px'>
          
             <th scope='col'  align='center' border='2px'>Año</th>
			 <th scope='col'  align='center' border='2px'>Trimestre</th>
			 <th scope='col'  align='center' border='2px'>Nacional</th>";
			 <th scope='col'  align='center' border='2px'>Estado de <br>Puebla</th>
			 <th scope='col'  align='center' border='2px'>Ciudad de<br>Puebla</th>
			 <th scope='col'  align='center' border='2px'>Urbana<br>agregado<br>32<br>ciudades</th>
		   </tr>
        </thead>

		<tbody align='center'>
		<?php
		$indice =446565; //
		$lugar = 00;
		$indice1 =447181; //
		$lugar1 = 21114;

		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
						if($variable1=="01"){
						echo '<td>I</td>';
						};
						if($variable1=="02"){
						echo '<td>II</td>';
						};
						if($variable1=="03"){
						echo '<td>III</td>';
						};
						if($variable1=="04"){
						echo '<td>IV</td>';
						};
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
					
	    $vars=\sim\activa_ocupada::All();
			?>
			@foreach ($vars as $vari)
			<?php	
					$valor='"'.$vari->Anio.'\/'.$vari->Num.'"';
				
					if ($valor==$array ){
					echo '<td>'. number_format($vari->pue, 2, '.', ' ') .'</td>'; 
					}
					
			?>
			@endforeach
			<?php

		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		
					$vars1=\sim\activa_ocupada::All();
						?>
						@foreach ($vars1 as $vari1)
						<?php	
					$valor1='"'.$vari1->Anio.'\/'.$vari1->Num.'"';
				
					if ($valor1==$array ){
					echo '<td>'. number_format($vari1->urbana, 2, '.', ' ') .'</td>'; 
					}
					?>
					@endforeach
					<?php 	
		
	

		echo '</tr>';
		
		};
		$i++;
		$i1++;
		$i2++;
		
		
		
		echo "</tbody>";
		
	break;

	case 65:
		?>
		
		<caption width:'100%' align='center'>POBLACIÓN ECONÓMICAMENTE ACTIVA DESOCUPADA</caption>
		<caption width:'100%' align='center'>(Número de personas)</caption>
		
		
		
		<thead width:'100%'  align='center' border='2px'>
         <tr width:'100%'  align='center' border='2px'>
          
             <th scope='col'  align='center' border='2px'>Año</th>
			 <th scope='col'  align='center' border='2px'>Trimestre</th>
			 <th scope='col'  align='center' border='2px'>Nacional</th>
			 <th scope='col'  align='center' border='2px'>Estado de <br>Puebla</th>
			 <th scope='col'  align='center' border='2px'>Ciudad de<br>Puebla</th>
			 <th scope='col'  align='center' border='2px'>Urbana<br>agregado<br>32<br>ciudades</th>
		   </tr>
        </thead>
		
		
		<tbody align='center'>
		<?php
		$indice =446566; //
		$lugar = 00;
		$indice1 =447182; //
		$lugar1 = 21;

		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
						if($variable1=="01"){
						echo '<td>I</td>';
						};
						if($variable1=="02"){
						echo '<td>II</td>';
						};
						if($variable1=="03"){
						echo '<td>III</td>';
						};
						if($variable1=="04"){
						echo '<td>IV</td>';
						};
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
	    	$vars=\sim\activa_desocupada::All();
			?>
			@foreach ($vars as $vari)
			<?php
			
					$valor='"'.$vari->Anio.'\/'.$vari->Num.'"';
				
					if ($valor==$array ){
					echo '<td>'. number_format($vari->pue, 2, '.', ' ') .'</td>'; 
					}
					
					?>
					@endforeach
					<?php
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		
			$vars1=\sim\activa_desocupada::All();
				?>
				@foreach ($vars1 as $vari1)
				<?php
					$valor1='"'.$vari1->Anio.'\/'.$vari1->Num.'"';
				
					if ($valor1==$array ){
					echo '<td>'. number_format($vari1->urbana, 2, '.', ' ') .'</td>'; 
					}
			
			?>
			@endforeach
			<?php
	

		echo '</tr>';
		
		};
		$i++;
		$i1++;
		$i2++;
		
		
		
		echo "</tbody>";
		
		break;
		case 92:
		?>
		
		<caption width:'100%' align='center'>Tasa de desocupación trimestral</caption>
		<caption width:'100%' align='center'>(%)</caption>
		
		
		
		<thead width:'100%'  align='center' border='2px'>
           <tr width:'100%'  align='center' border='2px'>
          
             <th scope='col'  align='center' border='2px'>Año</th>
			 <th scope='col'  align='center' border='2px'>Trimestre</th>
			 <th scope='col'  align='center' border='2px'>Nacional</th>
			 <th scope='col'  align='center' border='2px'>Estado de <br>Puebla</th>
			 <th scope='col'  align='center' border='2px'>Ciudad de<br>Puebla</th>
			 <th scope='col'  align='center' border='2px'>Urbana<br>agregado<br>32<br>ciudades</th>
		  </tr>
        </thead>

		<tbody align='center'>
		<?php
		$indice =447564; //
		$lugar = 00;
		$indice1 =447587; //
		$lugar1 = 21;
		$indice2 =447624; //
		$lugar2 = 21;

		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$response2 = $inegi->index($indice2, $lugar2);
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
						if($variable1=="01"){
						echo '<td>I</td>';
						};
						if($variable1=="02"){
						echo '<td>II</td>';
						};
						if($variable1=="03"){
						echo '<td>III</td>';
						};
						if($variable1=="04"){
						echo '<td>IV</td>';
						};
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		for($i2=0;$i2<count($response1 ["indices"]);$i2++){
		$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
		$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
		if ($array==$array3){
		$texto4=str_replace('"','',$array4); 
		echo '<td>'.number_format($texto4, 2, '.', ' ') .'</td>';
		};		
		};
		for($i3=0;$i3<count($response2 ["indices"]);$i3++){
		$array5 = json_encode($response2 ['indices'][$i3]['TIME_PERIOD']);
		$array6 = json_encode($response2 ['indices'][$i3]['OBS_VALUE']);
		if ($array==$array5){
		$texto6=str_replace('"','',$array6); 
		echo '<td>'.number_format($texto6, 2, '.', ' ') .'</td>';
		};		
		};
		
	    	$vars=\sim\tasa_deso_trim::All();
			?>
			@foreach ($vars as $vari)
			<?php
			
					$valor1='"'.$vari->Anio.'\/'.$vari->Trimestre.'"';
					
					if ($valor1==$array ){
					if(empty($vari->ciudades )){
					echo '<td>N.D.</td>'; 
					}else{
					echo '<td>'. number_format($vari->ciudades, 2, '.', ' ') . '</td>';
					};
					}
					?>
					@endforeach
					<?php 	
		
	

		echo '</tr>';
		
		};
		$i++;
		$i1++;
		$i2++;
		
		
		
		echo "</tbody>";
		break;
		
		case 70:
		
		?>
		<caption width:'100%' align='center'>Tasa de informalidad laboral 1 *</caption>
		<caption width:'100%' align='center'>(% trimestral)</caption>
		
		
		
		<thead width:'100%'  align='center' border='2px'>
           <tr width:'100%'  align='center' border='2px'>
          
            <th scope='col'  align='center' border='2px'>Año</th>
			 <th scope='col'  align='center' border='2px'>Trimestre</th>
			 <th scope='col'  align='center' border='2px'>Nacional</th>
			 <th scope='col'  align='center' border='2px'>Estado de <br>Puebla</th>
			 <th scope='col'  align='center' border='2px'>Urbana<br>agregado<br>32<br>ciudades</th>
		   </tr>
        </thead>
		<tbody align='center'>
		<?php
		$indice =447707; //
		$lugar = 00;
		

		$response = $inegi->index($indice, $lugar);
		
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		echo '<tr>';
		$antes=0;
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($antes!== $variable){
		echo '<td>'.$variable.'</td>';
		}
		else{
		echo '<td></td>';	
		};
						if($variable1=="01"){
						echo '<td>I</td>';
						};
						if($variable1=="02"){
						echo '<td>II</td>';
						};
						if($variable1=="03"){
						echo '<td>III</td>';
						};
						if($variable1=="04"){
						echo '<td>IV</td>';
						};
		echo '<td>'.number_format($texto2, 2, '.', ' ').'</td>';
		};
		$antes=substr($texto,0,4);
		};
		
				
	    	$vars=\sim\info_lab_t35::All();
			?>
			@foreach ($vars as $vari)
			<?php
					$valor1='"'.$vari->Anio.'\/'.$vari->Trimestre.'"';
					
					if ($valor1==$array ){
					if(empty($vari->Puebla )){
					echo '<td>N.D.</td>'; 
					}else{
					echo '<td>'. number_format($vari->Puebla, 2, '.', ' ') . '</td>';
					};
					if(empty($vari->ciudades )){
					echo '<td>N.D.</td>'; 
					}else{
					echo '<td>'. number_format($vari->ciudades, 2, '.', ' ') . '</td>';
					};
					}
					?>
					@endforeach
					<?php
		
	

		echo '</tr>';
		
		};
		$i++;
		$i1++;
				
		break;

		case 100:
		
		?>
		
		
		<caption width:'100%' align='center'>Ingresos por Remesas</caption>
		<caption width:'100%' align='center'>(Millones de Dólares)</caption>
		
		<thead width:'100%'  align='center' border='2px'>
        <tr width:'100%'  align='center' border='2px'>
          
             <th scope='col'  align='center' border='2px'>Año</th>
             <th scope='col'  align='center' border='2px'>Trimestre</th>
			 <th scope='col'  align='center' border='2px'>Ingresos por Remesas Familiares, TOTAL<br>(Millones de Dólares)</th>
			 <th scope='col'  align='center' border='2px'>Ingresos por Remesas Familiares, Puebla<br>(Millones de Dólares)</th>
			 <th scope='col'  align='center' border='2px'>Distribución Porcentual, Puebla</th>
			 <th scope='col'  align='center' border='2px'>Lugar Nacional, Puebla</th>
			</tr>
			</thead>
			<tbody align='center'>
			<?php
	    	$vars=\sim\remesas::All();
			$antes=0;
			?>
			@foreach ($vars as $vari)
			<?php
			echo '<tr>';
			if ($antes!== $vari->anio){
			echo '<td>'. $vari->anio . '</td>';
			}
			else{
			echo '<td></td>';	
			};			
			$antes= $vari->anio;
			if ($vari->trimestre=="1"){
			echo '<td>I</td>';
			};
			if ($vari->trimestre=="2"){
			echo '<td>II</td>';
			};
			if ($vari->trimestre=="3"){
			echo '<td>III</td>';
			};
			if ($vari->trimestre=="4"){
			echo '<td>IV</td>';
			};
			
			if(empty($vari->remesas )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->remesas, 2, '.', ' ') . '</td>';
			};
			if(empty($vari->ingresos)){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->ingresos, 2, '.', ' ') . '</td>';
			};
			if(empty($vari->porcentual )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->porcentual, 2, '.', ' ') . '</td>';
			};
			
			if(empty($vari->puebla )){
			echo '<td>N.D.</td>'; 
			}else{
			echo '<td>'. number_format($vari->puebla, 0, '.', ' ') . '</td>';
			};
			echo '</tr>';
		
		?>
		@endforeach
		<?php
		echo "</tbody>";		
		break;
		
		
















}
echo '</td></tr><table>';
?>





















  
