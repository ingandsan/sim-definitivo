<?PHP

		include_once('inegifacil/INEGI_library.php');
		$inegi = new INEGI_library();

		if ($variable=="01"){
		$indice = 383216; //
		$lugar = 00;
		$response = $inegi->index($indice, $lugar);
		$col1=array();
		$col1["label"]="Año";
		$col1["type"]="string";
		//print_r($col1);
		$col2=array();
		$col2["label"]="Nacional";
		$col2["type"]="number";
	
		//print_r($col2);
		$cols = array($col1,$col2);
		//print_r($cols);
		
		$rows =array();
		
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i]['OBS_VALUE']);
		$texto=str_replace('"','',$array); 
		$texto=str_replace('\/','',$texto); 
		$texto2=str_replace('"','',$array2); 
		
		
		$cell0["v"]=$texto;
		$cell1["v"]=$texto2;
		$cell2["v"]='$600K in our first year!';
		$row[$i]["c"]=array($cell0,$cell1, $cell2);	
		array_push($rows,$row[$i]);			
		};		 
		}; 
		
		if ($variable=="02"){
		$indice = 383237; //
		$lugar = 21;
		$response = $inegi->index($indice, $lugar);
		$col1=array();
		$col1["label"]="Año";
		$col1["type"]="string";
		//print_r($col1);
		$col2=array();
		$col2["label"]="Estado de Puebla";
		$col2["type"]="number";
		//print_r($col2);
		$cols = array($col1,$col2);
		//print_r($cols);
		
		$rows =array();
		
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i]['OBS_VALUE']);
		$texto=str_replace('"','',$array); 
		$texto=str_replace('\/','',$texto); 
		$texto2=str_replace('"','',$array2); 
		
		
		$cell0["v"]=$texto;
		$cell1["v"]=$texto2;
		$row[$i]["c"]=array($cell0,$cell1);	
		array_push($rows,$row[$i]);			
		};		 
		}; 
		
		
		if ($variable=="03"){
		
		$indice = 386879; //
		$lugar = 00;
		$indice1 = 386900; //
		$lugar1 = 21;
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$col1=array();
		$col1["label"]="Año";
		$col1["type"]="string";
		//print_r($col1);
		$col2=array();
		$col2["label"]="Nacional";
		$col2["type"]="number";
		//print_r($col2);
		$col3=array();
		$col3["label"]="Estado de Puebla";
		$col3["type"]="number";
		
		$col8=array();
		$col9=array();
		$col8["id"]= "";
		$col8["role"]= "tooltip";
		$col9["role"]= "tooltip";
		$col8["type"]= "string";
		$col8["p"]=$col9;	
		$dato="%";
		//print_r($col2);
		$cols = array($col1,$col2,$col3);
		//print_r($cols);
		
		$rows =array();
	
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
		
	
		$cell0["v"]=$texto;
		$cell1["v"]=number_format($texto2,2);
		$cell1["f"]=number_format($texto2,2).$dato;
		if ( $texto==$texto11){
		$cell2["v"]= number_format($texto12,2);
		$cell2["f"]= number_format($texto12,2).$dato;
		};	
		$row[$i]["c"]=array($cell0,$cell1,$cell2);	
		array_push($rows,$row[$i]);			
		};		 
		}; 

		if ($variable=="04"){
		$indice = 428050; //
		$lugar = 00;
		$response = $inegi->index($indice, $lugar);
		$col1=array();
		$col1["label"]="Trimestre";
		$col1["type"]="string";
		//print_r($col1);
		$col2=array();
		$col2["label"]="Índice";
		$col2["type"]="number";
		//print_r($col2);
		$cols = array($col1,$col2);
		//print_r($cols);
		
		$rows =array();
		$dato="%";
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i]['OBS_VALUE']);
		$texto=str_replace('"','',$array); 
		$texto=str_replace('\/','',$texto); 
		$texto2=str_replace('"','',$array2); 
		
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($variable1=="01"){
			$variable1="I";
		};
		if ($variable1=="02"){
			$variable1="II";
		};
		if ($variable1=="03"){
			$variable1="III";
		};
		if ($variable1=="04"){
			$variable1="IV";
		};
		$cell0["v"]=''.$variable1.("\n").($variable).'';
		$cell1["v"]=number_format($texto2, 2, '.', ' ');
		$row[$i]["c"]=array($cell0,$cell1);	
		array_push($rows,$row[$i]);			
		};		 
		
		}
		if ($variable=="05"){
		$dato="%";
		$indice = 428091; //
		$lugar = 00;
		$response = $inegi->index($indice, $lugar);
		$col1=array();
		$col1["label"]="Trimestre";
		$col1["type"]="string";
		//print_r($col1);
		$col2=array();
		$col2["label"]="Variación % anual";
		$col2["type"]="number";
		//print_r($col2);
		$cols = array($col1,$col2);
		//print_r($cols);
		
		$rows =array();
		
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i]['OBS_VALUE']);
		$texto=str_replace('"','',$array); 
		$texto=str_replace('\/','',$texto); 
		$texto2=str_replace('"','',$array2); 
		
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($variable1=="01"){
			$variable1="I";
		};
		if ($variable1=="02"){
			$variable1="II";
		};
		if ($variable1=="03"){
			$variable1="III";
		};
		if ($variable1=="04"){
			$variable1="IV";
		};
		$cell0["v"]=''.$variable1.("\n").($variable).'';
		$cell1["v"]=number_format($texto2, 2, '.', ' ');
		$cell1["f"]=number_format($texto2, 2, '.', ' ').$dato;
		$row[$i]["c"]=array($cell0,$cell1);	
		array_push($rows,$row[$i]);			
		};		 
		
		}
		
		if ($variable=="06"){
		$indice = 428128; //
		$lugar = 00;
		$dato="%";
		$response = $inegi->index($indice, $lugar);
		$col1=array();
		$col1["label"]="Trimestre";
		$col1["type"]="string";
		//print_r($col1);
		$col2=array();
		$col2["label"]="Índice";
		$col2["type"]="number";
		//print_r($col2);
		$cols = array($col1,$col2);
		//print_r($cols);
		
		$rows =array();
		
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i]['OBS_VALUE']);
		$texto=str_replace('"','',$array); 
		$texto=str_replace('\/','',$texto); 
		$texto2=str_replace('"','',$array2); 
		
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($variable1=="01"){
			$variable1="I";
		};
		if ($variable1=="02"){
			$variable1="II";
		};
		if ($variable1=="03"){
			$variable1="III";
		};
		if ($variable1=="04"){
			$variable1="IV";
		};
		$cell0["v"]=''.$variable1.("\n").($variable).'';
		$cell1["v"]=number_format($texto2, 2, '.', ' ');
		$row[$i]["c"]=array($cell0,$cell1);	
		array_push($rows,$row[$i]);			
		};		 
		
		}
		
		if ($variable=="07"){
		$dato="%";
		$indice = 428160; //
		$lugar = 00;
		$response = $inegi->index($indice, $lugar);
		$col1=array();
		$col1["label"]="Trimestre";
		$col1["type"]="string";
		//print_r($col1);
		$col2=array();
		$col2["label"]="Variación % anual";
		$col2["type"]="number";
		//print_r($col2);
		$cols = array($col1,$col2);
		//print_r($cols);
		
		$rows =array();
		
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i]['OBS_VALUE']);
		$texto=str_replace('"','',$array); 
		$texto=str_replace('\/','',$texto); 
		$texto2=str_replace('"','',$array2); 
		
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($variable1=="01"){
			$variable1="I";
		};
		if ($variable1=="02"){
			$variable1="II";
		};
		if ($variable1=="03"){
			$variable1="III";
		};
		if ($variable1=="04"){
			$variable1="IV";
		};
		$cell0["v"]=''.$variable1.("\n").($variable).'';
		$cell1["v"]=number_format($texto2, 2, '.', ' ');
		$cell1["f"]=number_format($texto2, 2, '.', ' ').$dato;
		$row[$i]["c"]=array($cell0,$cell1);	
		array_push($rows,$row[$i]);			
		};		 
		
		}
		
		if ($variable=="08"){
		$dato="%";
		$indice = 428196; //
		$lugar = 00;
		$response = $inegi->index($indice, $lugar);
		$col1=array();
		$col1["label"]="Trimestre";
		$col1["type"]="string";
		//print_r($col1);
		$col2=array();
		$col2["label"]="Índice";
		$col2["type"]="number";
		//print_r($col2);
		$cols = array($col1,$col2);
		//print_r($cols);
		
		$rows =array();
		
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i]['OBS_VALUE']);
		$texto=str_replace('"','',$array); 
		$texto=str_replace('\/','',$texto); 
		$texto2=str_replace('"','',$array2); 
		
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($variable1=="01"){
			$variable1="I";
		};
		if ($variable1=="02"){
			$variable1="II";
		};
		if ($variable1=="03"){
			$variable1="III";
		};
		if ($variable1=="04"){
			$variable1="IV";
		};
		$cell0["v"]=''.$variable1.("\n").($variable).'';
		$cell1["v"]=number_format($texto2, 2, '.', ' ');
		$row[$i]["c"]=array($cell0,$cell1);	
		array_push($rows,$row[$i]);			
		};		 
		
		}
		if ($variable=="09"){
		$dato="%";
		$indice = 428237; //
		$lugar = 00;
		$response = $inegi->index($indice, $lugar);
		$col1=array();
		$col1["label"]="Trimestre";
		$col1["type"]="string";
		//print_r($col1);
		$col2=array();
		$col2["label"]="variación % anual";
		$col2["type"]="number";
		//print_r($col2);
		$cols = array($col1,$col2);
		//print_r($cols);
		
		$rows =array();
		
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i]['OBS_VALUE']);
		$texto=str_replace('"','',$array); 
		$texto=str_replace('\/','',$texto); 
		$texto2=str_replace('"','',$array2); 
		
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($variable1=="01"){
			$variable1="I";
		};
		if ($variable1=="02"){
			$variable1="II";
		};
		if ($variable1=="03"){
			$variable1="III";
		};
		if ($variable1=="04"){
			$variable1="IV";
		};
		$cell0["v"]=''.$variable1.("\n").($variable).'';
		$cell1["v"]=number_format($texto2, 2, '.', ' ');
		$cell1["f"]=number_format($texto2, 2, '.', ' ').$dato;
		$row[$i]["c"]=array($cell0,$cell1);	
		array_push($rows,$row[$i]);			
		};		 
		
		}
		if ($variable=="10"){
		$dato="%";
		$indice = 428274; //
		$lugar = 00;
		$response = $inegi->index($indice, $lugar);
		$col1=array();
		$col1["label"]="Trimestre";
		$col1["type"]="string";
		//print_r($col1);
		$col2=array();
		$col2["label"]="Índice";
		$col2["type"]="number";
		//print_r($col2);
		$cols = array($col1,$col2);
		//print_r($cols);
		
		$rows =array();
		
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i]['OBS_VALUE']);
		$texto=str_replace('"','',$array); 
		$texto=str_replace('\/','',$texto); 
		$texto2=str_replace('"','',$array2); 
		
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($variable1=="01"){
			$variable1="I";
		};
		if ($variable1=="02"){
			$variable1="II";
		};
		if ($variable1=="03"){
			$variable1="III";
		};
		if ($variable1=="04"){
			$variable1="IV";
		};
		$cell0["v"]=''.$variable1.("\n").($variable).'';
		$cell1["v"]=number_format($texto2, 2, '.', ' ');
		$row[$i]["c"]=array($cell0,$cell1);	
		array_push($rows,$row[$i]);			
		};		 
		
		}
		
		if ($variable=="11"){
		$dato="%";
		$indice = 428306; //
		$lugar = 00;
		$response = $inegi->index($indice, $lugar);
		$col1=array();
		$col1["label"]="Índice";
		$col1["type"]="string";
		//print_r($col1);
		$col2=array();
		$col2["label"]="variación % anual";
		$col2["type"]="number";
		//print_r($col2);
		$cols = array($col1,$col2);
		//print_r($cols);
		
		$rows =array();
		
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i]['OBS_VALUE']);
		$texto=str_replace('"','',$array); 
		$texto=str_replace('\/','',$texto); 
		$texto2=str_replace('"','',$array2); 
		
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($variable1=="01"){
			$variable1="I";
		};
		if ($variable1=="02"){
			$variable1="II";
		};
		if ($variable1=="03"){
			$variable1="III";
		};
		if ($variable1=="04"){
			$variable1="IV";
		};
		$cell0["v"]=''.$variable1.("\n").($variable).'';
		$cell1["v"]=number_format($texto2, 2, '.', ' ');
		$cell1["f"]=number_format($texto2, 2, '.', ' ').$dato;
		$row[$i]["c"]=array($cell0,$cell1);	
		array_push($rows,$row[$i]);			
		};		 
		
		}

		if ($variable=="12"){
			$indice = 215803; //
			$lugar = 00;
			$response = $inegi->index($indice, $lugar);
			$col1=array();
			$col1["label"]="Mes";
			$col1["type"]="string";
			//print_r($col1);
			$col2=array();
			$col2["label"]="Estado de Puebla \n Número de Personas";
			$col2["type"]="number";
			//print_r($col2);
			$cols = array($col1,$col2);
			//print_r($cols);
		
			$rows =array();
		
			for($i=0;$i<count($response ["indices"]);$i++){
			$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
			$array2 = json_encode($response ['indices'][$i]['OBS_VALUE']);
			$texto=str_replace('"','',$array); 
			$texto=str_replace('\/','',$texto); 
			$texto2=str_replace('"','',$array2); 
			
			$variable=substr($texto,0,4);
			$variable1=substr($texto,4,2);
			if ($variable1=="01"){
				$variable1="ENERO";
			};
			if ($variable1=="02"){
				$variable1="FEBRERO";
			};
			if ($variable1=="03"){
				$variable1="MARZO";
			};
			if ($variable1=="04"){
				$variable1="ABRIL";
			};
			if ($variable1=="05"){
				$variable1="MAYO";
			};
			if ($variable1=="06"){
				$variable1="JUNIO";
			};
			if ($variable1=="07"){
				$variable1="JULIO";
			};
			if ($variable1=="08"){
				$variable1="AGOSTO";
			};
			if ($variable1=="09"){
				$variable1="SEPTIEMBRE";
			};
			if ($variable1=="10"){
				$variable1="OCTUBRE";
			};
			if ($variable1=="11"){
				$variable1="NOVIEMBRE";
			};
			if ($variable1=="12"){
				$variable1="DICIEMBRE";
			};
			
			$cell0["v"]=''.$variable1.("\n").($variable).'';
			$cell1["v"]=$texto2;
			$row[$i]["c"]=array($cell0,$cell1);	
			array_push($rows,$row[$i]);			
			};		 
			}
		
		if ($variable=="13"){
		$indice = 447564; //
		$lugar = 00;
		$indice1 = 447587; //
		$lugar1 = 21;
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$col1=array();
		$col1["label"]="Trimestre";
		$col1["type"]="string";
		//print_r($col1);
		$col2=array();
		$col2["label"]="Nacional";
		$col2["type"]="number";
		//print_r($col2);
		$col3=array();
		$col3["label"]="Estado de Puebla";
		$col3["type"]="number";
		
		$col8=array();
		$col9=array();
		$col8["id"]= "";
		$col8["role"]= "tooltip";
		$col9["role"]= "tooltip";
		$col8["type"]= "string";
		$col8["p"]=$col9;	
		$dato="%";
		//print_r($col2);
		$cols = array($col1,$col2,$col3);
		//print_r($cols);
		
		$rows =array();
	
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
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($variable1==01){
		$variable1="I";	
		};
		if ($variable1==02){
		$variable1="II";	
		};
		if ($variable1==03){
		$variable1="III";	
		};
		if ($variable1==04){
		$variable1="IV";	
		};
		$cell0["v"]=$variable1."\n".$variable;
		$cell1["v"]=number_format($texto2,2);
		$cell1["f"]=number_format($texto2,2).$dato;
		if ( $texto==$texto11){
		$cell2["v"]= number_format($texto12,2);
		$cell2["f"]= number_format($texto12,2).$dato;
		};	
		$row[$i]["c"]=array($cell0,$cell1,$cell2);	
		array_push($rows,$row[$i]);			
		};		 
		};

		


		
		
		if ($variable=="15"){
		$indice = 444862; //
		$lugar = 21;
		$indice1 = 444666; //
		$lugar1 = 00;
		
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		
		$col1=array();
		$col1["label"]="mes";
		$col1["type"]="string";
		//print_r($col1);
		
		//print_r($col2);
		$col3=array();
		$col3["label"]="Nacional";
		$col3["type"]="number";
		//print_r($col2);
		$col2=array();
		$col2["label"]="Estado de Puebla";
		$col2["type"]="number";
		$cols = array($col1,$col2,$col3);
		//print_r($cols);
		
		$rows =array();
		$dato="%";
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
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
		if ($antes!== $variable1){
		
						if($variable1=="01"){
						$variable1="ENERO";
						};
						if($variable1=="02"){
						$variable1="FEBRERO";
						};
						if($variable1=="03"){
						$variable1="MARZO";
						};
						if($variable1=="04"){
						$variable1="ABRIL";
						};
						if($variable1=="05"){
						$variable1="MAYO";
						};
						if($variable1=="06"){
						$variable1="JUNIO";
						};
						if($variable1=="07"){
						$variable1="JULIO";
						};
						if($variable1=="08"){
						$variable1="AGOSTO";
						};
						if($variable1=="09"){
						$variable1="SEPTIEMBRE";
						};
						if($variable1=="10"){
						$variable1="OCTUBRE";
						};
						if($variable1=="11"){
						$variable1="NOVIEMBRE";
						};
						if($variable1=="12"){
						$variable1="DICIEMBRE";
						};
		$cell0["v"]=''.$variable1.("\n").($variable).'';
		}
		else{
		$cell0["v"]="null";	
		};
				
				$cell1["v"]=number_format($texto2, 2, '.', ' ');
				$cell1["f"]=number_format($texto2, 2, '.', ' ').$dato;
				};
				$antes=substr($texto,0,4);
				};
				for($i2=0;$i2<count($response1 ["indices"]);$i2++){
				$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
				$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
				if ($array==$array3){
				$texto4=str_replace('"','',$array4); 
				
				$cell2["v"]=number_format($texto4, 2, '.', ' ');
				$cell2["f"]=number_format($texto4, 2, '.', ' ').$dato;
			
				
				
				};		
				};
				
				
				
				
				
				$row[$i]["c"]=array($cell0,$cell1,$cell2);
			
				
				//$rows=array($row0,$row1,$row2,$row3,$row4);
				array_push($rows,$row[$i]);
				};
			
		
		};

		if ($variable=="16"){
		$indice = 216279; //
		$lugar = 21;
		$indice1 =216238; //
		$lugar1 = 00;
		
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		
		$col1=array();
		$col1["label"]="mes";
		$col1["type"]="string";
		//print_r($col1);
		
		//print_r($col2);
		$col3=array();
		$col3["label"]="Nacional";
		$col3["type"]="number";
		//print_r($col2);
		$col2=array();
		$col2["label"]="Ciudad de Puebla";
		$col2["type"]="number";
		$cols = array($col1,$col2,$col3);
		//print_r($cols);
		
		$rows =array();
		$dato="%";
		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
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
		if ($antes!== $variable1){
		
						if($variable1=="01"){
						$variable1="ENERO";
						};
						if($variable1=="02"){
						$variable1="FEBRERO";
						};
						if($variable1=="03"){
						$variable1="MARZO";
						};
						if($variable1=="04"){
						$variable1="ABRIL";
						};
						if($variable1=="05"){
						$variable1="MAYO";
						};
						if($variable1=="06"){
						$variable1="JUNIO";
						};
						if($variable1=="07"){
						$variable1="JULIO";
						};
						if($variable1=="08"){
						$variable1="AGOSTO";
						};
						if($variable1=="09"){
						$variable1="SEPTIEMBRE";
						};
						if($variable1=="10"){
						$variable1="OCTUBRE";
						};
						if($variable1=="11"){
						$variable1="NOVIEMBRE";
						};
						if($variable1=="12"){
						$variable1="DICIEMBRE";
						};
		$cell0["v"]=''.$variable1.("\n").($variable).'';
		}
		else{
		$cell0["v"]="null";	
		};
				
				$cell1["v"]=number_format($texto2, 2, '.', ' ');
				$cell1["f"]=number_format($texto2, 2, '.', ' ').$dato;
				};
				$antes=substr($texto,0,4);
				};
				for($i2=0;$i2<count($response1 ["indices"]);$i2++){
				$array3 = json_encode($response1 ['indices'][$i2]['TIME_PERIOD']);
				$array4 = json_encode($response1 ['indices'][$i2]['OBS_VALUE']);
				if ($array==$array3){
				$texto4=str_replace('"','',$array4); 
				
				$cell2["v"]=number_format($texto4, 2, '.', ' ');
				$cell2["f"]=number_format($texto4, 2, '.', ' ').$dato;
			
				
				
				};		
				};
				
				
				
				
				
				$row[$i]["c"]=array($cell0,$cell1,$cell2);
			
				
				//$rows=array($row0,$row1,$row2,$row3,$row4);
				array_push($rows,$row[$i]);
				};
		
		}

		if ($variable=="20"){
		
		$indice = 438000; //
		$lugar = 00;
		$indice1 = 438004; //
		$lugar1 = 21;
		$response = $inegi->index($indice, $lugar);
		$response1 = $inegi->index($indice1, $lugar1);
		$col1=array();
		$col1["label"]="Año";
		$col1["type"]="string";
		//print_r($col1);
		$col2=array();
		$col2["label"]="Total";
		$col2["type"]="number";
		//print_r($col2);
		$col3=array();
		$col3["label"]="Manufactura";
		$col3["type"]="number";
		$col4=array();
		$col4["label"]="Estado de Puebla";
		$col4["type"]="number";
		$col8=array();
		$col9=array();
		$col8["id"]= "";
		$col8["role"]= "tooltip";
		$col9["role"]= "tooltip";
		$col8["type"]= "string";
		$col8["p"]=$col9;	
		//print_r($col2);
		$cols = array($col1,$col2,$col3);
		//print_r($cols);
		
		$rows =array();
		
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
		
	
		$cell0["v"]=$texto;
		$cell0["f"]=$texto;
		$cell1["v"]=$texto2;
		$cell1["f"]="$".number_format($texto2, 2, '.', ',');
		if ( $texto==$texto11){
		$cell2["v"]=$texto12;
		$cell2["f"]="$".number_format($texto12, 2, '.', ',');
		
		};	
		$row[$i]["c"]=array($cell0,$cell1,$cell2);	
		array_push($rows,$row[$i]);			
		};		 
		};




		














		$data=array("cols"=>$cols,"rows"=>$rows);
		//print_r($data);

		echo json_encode($data);