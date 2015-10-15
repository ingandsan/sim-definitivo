<?php
		include_once('inegifacil/INEGI_library.php');
		$inegi = new INEGI_library();
		$indice = 447624; //
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
		$col2["label"]="Ciudad de Puebla";
		$col2["type"]="number";
		//print_r($col2);
		$col3=array();
		$col3["label"]="Urbana agregado 32 ciudades";
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
		?>
		@foreach ($vars as $vari)
		<?php
		$valor1='"'.$vari->Anio.'\/'.$vari->Trimestre.'"';
		if ($valor1==$array ){
		if(empty($vari->ciudades )){
		$cell2["v"]="null"; 
		}else{
		$cell2["v"]=number_format($vari->ciudades, 2, '.', ' ');
		$cell2["f"]=number_format($vari->ciudades, 2, '.', ' ').$dato;
		};
		};
		
		?>
		@endforeach
		<?php
		$row[$i]["c"]=array($cell0,$cell1,$cell2);	
		array_push($rows,$row[$i]);	
		};
		

			$data=array("cols"=>$cols,"rows"=>$rows);
			//print_r($data);
			echo json_encode($data);