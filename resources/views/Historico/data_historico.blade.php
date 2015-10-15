<?PHP

		include_once('inegifacil/INEGI_library.php');
		$inegi = new INEGI_library();

		if ($variable=="01"){
		$col1=array();
		$col1["label"]="Trimestre";
		$col1["type"]="string";
		//print_r($col1);
		$col2=array();
		$col2["id"]="ÍNDICE";
		$col2["label"]="2013";
		$col2["type"]="number";
		$col3=array();
		$col3["id"]="ÍNDICE";
		$col3["label"]="2014";
		$col3["type"]="number";
		//print_r($col2);
		$col4=array();
		$col4["id"]="ÍNDICE";
		$col4["label"]="2015";
		$col4["type"]="number";
		$col5=array();
		$col5["id"]="ÍNDICE";
		$col5["label"]="2016";
		$col5["type"]="number";
		
		$col8=array();
		$col9=array();
		$col8["id"]= "";
		$col8["role"]= "tooltip";
		$col9["role"]= "tooltip";
		$col8["type"]= "string";
		$col8["p"]=$col9;	
		$cols = array($col1,$col2,$col3,$col4,$col5,$col8);
		//print_r($cols);
		
		$indice =428050; //
		$lugar = 00;
		
		$response = $inegi->index($indice, $lugar);
		

		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($variable >="2013"){
		
		$nombres [] =number_format($texto2, 2, '.', ' ');
		};
		};
		};
		};
	
		$leye="Unidad de Medida:\nÍndice";
		$enter="\n";
		$leye2="Porcentaje";
		$leye3="Número de Personas";
		$cell0["v"]="I";
	    $cell0["f"]="I";
		$cell1["v"]=$nombres [0];
		
		$cell1["f"]=$nombres [0].$enter.$leye;
		$cell2["v"]=$nombres [4];
		$cell2["f"]=$nombres [4].$enter.$leye;
		$cell3["v"]=$nombres [8];
		$cell3["f"]=$nombres [8].$enter.$leye;
		if (isset($nombres [12] )){
		$cell4["v"]=$nombres [12];
		$cell4["f"]=$nombres [12].$enter.$leye;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [16] )){
		$cell5["v"]=$nombres [16];
		$cell5["f"]=$nombres [16].$enter.$leye;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [20] )){
		$cell6["v"]=$nombres [20];
		$cell6["f"]=$nombres [20].$enter.$leye;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [24] )){
		$cell7["v"]=$nombres [24];
		$cell7["f"]=$nombres [24].$enter.$leye;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};	
		$row0["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		
		$cell0["v"]="II";
		$cell0["f"]="II";
		$cell1["v"]=$nombres [1];
		$cell1["f"]=$nombres [1].$enter.$leye;
		$cell2["v"]=$nombres [5];
		$cell2["f"]=$nombres [5].$enter.$leye;
		if (isset($nombres [9] )){
		$cell3["v"]=$nombres [9];
		$cell3["f"]=$nombres [9].$enter.$leye;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		
		if (isset($nombres [13] )){
		$cell4["v"]=$nombres [13];
		$cell4["f"]=$nombres [13].$enter.$leye;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [17] )){
		$cell5["v"]=$nombres [17];
		$cell5["f"]=$nombres [17].$enter.$leye;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [21] )){
		$cell6["v"]=$nombres [21];
		$cell6["f"]=$nombres [21].$enter.$leye;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [25] )){
		$cell7["v"]=$nombres [25];
		$cell7["f"]=$nombres [25].$enter.$leye;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};
		$row1["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		 
		$cell0["v"]="III";
		$cell0["f"]="III";
		$cell1["v"]=$nombres [2];
		$cell1["f"]=$nombres [2].$enter.$leye;
		$cell2["v"]=$nombres [6];
		$cell2["f"]=$nombres [6].$enter.$leye;
		if (isset($nombres [10] )){
		$cell3["v"]=$nombres [10];
		$cell3["f"]=$nombres [10].$enter.$leye;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($nombres [14] )){
		$cell4["v"]=$nombres [14];
		$cell4["f"]=$nombres [14].$enter.$leye;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [18] )){
		$cell5["v"]=$nombres [18];
		$cell5["f"]=$nombres [18].$enter.$leye;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [22] )){
		$cell6["v"]=$nombres [22];
		$cell6["f"]=$nombres [22].$enter.$leye;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [26] )){
		$cell7["v"]=$nombres [26];
		$cell7["f"]=$nombres [26].$enter.$leye;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};
		$row2["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		 
		$cell0["v"]="IV";
		$cell0["f"]="IV";
		$cell1["v"]=$nombres [3];
		$cell1["f"]=$nombres [3].$enter.$leye;
		$cell2["v"]=$nombres [7];
		$cell2["f"]=$nombres [7].$enter.$leye;
		if (isset($nombres [11] )){
		$cell3["v"]=$nombres [11];
		$cell3["f"]=$nombres [11].$enter.$leye;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($nombres [15] )){
		$cell4["v"]=$nombres [15];
		$cell4["f"]=$nombres [15].$enter.$leye;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [19] )){
		$cell5["v"]=$nombres [19];
		$cell5["f"]=$nombres [19].$enter.$leye;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [23] )){
		$cell6["v"]=$nombres [23];
		$cell6["f"]=$nombres [23].$enter.$leye;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [27] )){
		$cell7["v"]=$nombres [27];
		$cell7["f"]=$nombres [27].$enter.$leye;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};
		$row3["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		
		//$rows=array($row0,$row1,$row2,$row3,$row4);
		$rows=array();
		array_push($rows,$row0);
		array_push($rows,$row1);
		array_push($rows,$row2);
		array_push($rows,$row3);
		}

		if ($variable=="02"){
		$col1=array();
		$col1["label"]="Mensual";
		$col1["type"]="string";
		//print_r($col1);
		$col2=array();
		$col2["label"]="2013";
		$col2["type"]="number";
		$col3=array();
		$col3["label"]="2014";
		$col3["type"]="number";
		//print_r($col2);
		$col4=array();
		$col4["label"]="2015";
		$col4["type"]="number";
		$col5=array();
		$col5["label"]="2016";
		$col5["type"]="number";
		
		$col8=array();
		$col9=array();
		$col8["id"]= "";
		$col8["role"]= "tooltip";
		$col9["role"]= "tooltip";
		$col8["type"]= "string";
		$col8["p"]=$col9;	
		$cols = array($col1,$col2,$col3,$col4,$col5,$col8);
		//print_r($cols);
		$leye="Unidad de Medida:\nÍndice";
		$enter="\n";
		$leye2="Unidad de Medida:\nPorcentaje";
		$leye3="Unidad de Medida:\nNúmero de Personas"; 
		
		
		
		
		$indice =215803; //
		$lugar = 00;
		
		$response = $inegi->index($indice, $lugar);
		

		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($variable >="2013"){
		
		$nombres [] =number_format($texto2, 0, ',', '.');
		$nom [] =number_format($texto2, 0, '.', ',');
		
		};
		};
		};
		};
	
		$leye="Unidad de Medida:\nNúmero de Personas";
		$enter="\n";
		$leye2="Porcentaje";
		$leye3="Número de Personas";
		
		
		$cell0["v"]="Enero";
	    $cell0["f"]="Enero";
		$cell1["v"]=$nombres [0];
		
		$cell1["f"]=$nom [0].$enter.$leye;
		$cell2["v"]=$nombres [12];
		$cell2["f"]=$nom [12].$enter.$leye;
		$cell3["v"]=$nombres [24];
		$cell3["f"]=$nom [24].$enter.$leye;
		if (isset($nombres [36] )){
		$cell4["v"]=$nombres [36];
		$cell4["f"]=$nom [36].$enter.$leye;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [48] )){
		$cell5["v"]=$nombres [48];
		$cell5["f"]=$nom [48].$enter.$leye;;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [60] )){
		$cell6["v"]=$nombres [60];
		$cell6["f"]=$nom [60].$enter.$leye;;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [72] )){
		$cell7["v"]=$nombres [72];
		$cell7["f"]=$nom [72].$enter.$leye;;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};	
		$row0["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		
		$cell0["v"]="Febrero";
		$cell0["f"]="Febrero";
		$cell1["v"]=$nombres [1];
		
		$cell1["f"]=$nom [1].$enter.$leye;
		$cell2["v"]=$nombres [13];
		$cell2["f"]=$nom [13].$enter.$leye;
		$cell3["v"]=$nombres [25];
		$cell3["f"]=$nom [25].$enter.$leye;
		if (isset($nombres [37] )){
		$cell4["v"]=$nombres [37];
		$cell4["f"]=$nom [37].$enter.$leye;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [49] )){
		$cell5["v"]=$nombres [49];
		$cell5["f"]=$nom [49].$enter.$leye;;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [61] )){
		$cell6["v"]=$nombres [61];
		$cell6["f"]=$nom [61].$enter.$leye;;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [73] )){
		$cell7["v"]=$nombres [73];
		$cell7["f"]=$nom [73].$enter.$leye;;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};	
		$row1["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		 
		$cell0["v"]="Marzo";
		$cell0["f"]="Marzo";
		$cell1["v"]=$nombres [2];
		
		$cell1["f"]=$nom [2].$enter.$leye;
		$cell2["v"]=$nombres [14];
		$cell2["f"]=$nom [14].$enter.$leye;
		$cell3["v"]=$nombres [26];
		$cell3["f"]=$nom [26].$enter.$leye;
		if (isset($nombres [38] )){
		$cell4["v"]=$nombres [38];
		$cell4["f"]=$nom [38].$enter.$leye;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [50] )){
		$cell5["v"]=$nombres [50];
		$cell5["f"]=$nom [50].$enter.$leye;;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [62] )){
		$cell6["v"]=$nombres [62];
		$cell6["f"]=$nom [62].$enter.$leye;;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [74] )){
		$cell7["v"]=$nom [74];
		$cell7["f"]=$nombres [74].$enter.$leye;;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};	
		$row2["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		 
		$cell0["v"]="Abril";
		$cell0["f"]="Abril";
		$cell1["v"]=$nombres [3];
		
		$cell1["f"]=$nom [3].$enter.$leye;
		$cell2["v"]=$nombres [15];
		$cell2["f"]=$nom [15].$enter.$leye;
		$cell3["v"]=$nombres [27];
		$cell3["f"]=$nom [27].$enter.$leye;
		if (isset($nombres [39] )){
		$cell4["v"]=$nom [39];
		$cell4["f"]=$nombres [39].$enter.$leye;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [51] )){
		$cell5["v"]=$nombres [51];
		$cell5["f"]=$nom [51].$enter.$leye;;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [63] )){
		$cell6["v"]=$nombres [63];
		$cell6["f"]=$nom [63].$enter.$leye;;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [75] )){
		$cell7["v"]=$nombres [75];
		$cell7["f"]=$nom [75].$enter.$leye;;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};	
		$row3["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		
		
		$cell0["v"]="Mayo";
		$cell0["f"]="Mayo";
		$cell1["v"]=$nombres [4];
		
		$cell1["f"]=$nom [4].$enter.$leye;
		$cell2["v"]=$nombres [16];
		$cell2["f"]=$nom [16].$enter.$leye;
		$cell3["v"]=$nombres [28];
		$cell3["f"]=$nom [28].$enter.$leye;
		if (isset($nombres [40] )){
		$cell4["v"]=$nombres [40];
		$cell4["f"]=$nom [40].$enter.$leye;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [52] )){
		$cell5["v"]=$nombres [52];
		$cell5["f"]=$nom [52].$enter.$leye;;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [64] )){
		$cell6["v"]=$nombres [64];
		$cell6["f"]=$nom [64].$enter.$leye;;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [76] )){
		$cell7["v"]=$nombres [76];
		$cell7["f"]=$nom [76].$enter.$leye;;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};	
		$row4["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		
		
		
		$cell0["v"]="Junio";
		$cell0["f"]="Junio";
		$cell1["v"]=$nombres [5];
		
		$cell1["f"]=$nombres [5].$enter.$leye;
		$cell2["v"]=$nombres [17];
		$cell2["f"]=$nom [17].$enter.$leye;
		$cell3["v"]=$nombres [29];
		$cell3["f"]=$nom [29].$enter.$leye;
		if (isset($nombres [41] )){
		$cell4["v"]=$nombres [41];
		$cell4["f"]=$nom [41].$enter.$leye;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [53] )){
		$cell5["v"]=$nombres [53];
		$cell5["f"]=$nom [53].$enter.$leye;;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [65] )){
		$cell6["v"]=$nombres [65];
		$cell6["f"]=$nom [65].$enter.$leye;;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [77] )){
		$cell7["v"]=$nombres [77];
		$cell7["f"]=$nom [77].$enter.$leye;;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};	
		$row5["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		
		
		
		$cell0["v"]="Julio";
		$cell0["f"]="Julio";
		$cell1["v"]=$nombres [6];
		
		$cell1["f"]=$nom [6].$enter.$leye;
		$cell2["v"]=$nombres [18];
		$cell2["f"]=$nom [18].$enter.$leye;
		$cell3["v"]=$nombres [30];
		$cell3["f"]=$nom [30].$enter.$leye;
		if (isset($nombres [42] )){
		$cell4["v"]=$nom [42];
		$cell4["f"]=$nombres [42].$enter.$leye;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [54] )){
		$cell5["v"]=$nombres [54];
		$cell5["f"]=$nom [54].$enter.$leye;;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [66] )){
		$cell6["v"]=$nombres [66];
		$cell6["f"]=$nom [66].$enter.$leye;;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [78] )){
		$cell7["v"]=$nombres [78];
		$cell7["f"]=$nom [78].$enter.$leye;;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};	
		$row6["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		
		
		
		$cell0["v"]="Agosto";
		$cell0["f"]="Agosto";
		$cell1["v"]=$nombres [7];
		
		$cell1["f"]=$nom [7].$enter.$leye;
		$cell2["v"]=$nombres [19];
		$cell2["f"]=$nom [19].$enter.$leye;
		if (isset($nombres [31] )){
		$cell3["v"]=$nombres [31];
		$cell3["f"]=$nom [31].$enter.$leye;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($nombres [43] )){
		$cell4["v"]=$nombres [43];
		$cell4["f"]=$nom [43].$enter.$leye;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [55] )){
		$cell5["v"]=$nombres [55];
		$cell5["f"]=$nom [55].$enter.$leye;;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [67] )){
		$cell6["v"]=$nombres [67];
		$cell6["f"]=$nom [67].$enter.$leye;;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [79] )){
		$cell7["v"]=$nombres [79];
		$cell7["f"]=$nom [79].$enter.$leye;;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};	
		$row7["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		
		
		$cell0["v"]="Septiembre";
		$cell0["f"]="Septiembre";
		$cell1["v"]=$nombres [8];
		
		$cell1["f"]=$nom [8].$enter.$leye;
		$cell2["v"]=$nombres [20];
		$cell2["f"]=$nom [20].$enter.$leye;
		if (isset($nombres [32] )){
		$cell3["v"]=$nombres [32];
		$cell3["f"]=$nom [32].$enter.$leye;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($nombres [44] )){
		$cell4["v"]=$nombres [44];
		$cell4["f"]=$nom [44].$enter.$leye;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [56] )){
		$cell5["v"]=$nombres [56];
		$cell5["f"]=$nom [56].$enter.$leye;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [68] )){
		$cell6["v"]=$nombres [68];
		$cell6["f"]=$nom [68].$enter.$leye;;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [80] )){
		$cell7["v"]=$nombres [80];
		$cell7["f"]=$nom [80].$enter.$leye;;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};	
		$row8["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		
		
		$cell0["v"]="Octubre";
		$cell0["f"]="Octubre";
		$cell1["v"]=$nombres [9];
		
		$cell1["f"]=$nom [9].$enter.$leye;
		$cell2["v"]=$nombres [21];
		$cell2["f"]=$nom [21].$enter.$leye;
		if (isset($nombres [33] )){
		$cell3["v"]=$nombres [33];
		$cell3["f"]=$nom [33].$enter.$leye;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($nombres [45] )){
		$cell4["v"]=$nombres [45];
		$cell4["f"]=$nom [45].$enter.$leye;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [57] )){
		$cell5["v"]=$nombres [57];
		$cell5["f"]=$nom [57].$enter.$leye;;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [69] )){
		$cell6["v"]=$nombres [69];
		$cell6["f"]=$nom [69].$enter.$leye;;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [81] )){
		$cell7["v"]=$nombres [81];
		$cell7["f"]=$nom [81].$enter.$leye;;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};	
		$row9["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		
		$cell0["v"]="Noviembre";
		$cell0["f"]="Noviembre";
		$cell1["v"]=$nombres [10];
		
		$cell1["f"]=$nom [10].$enter.$leye;
		$cell2["v"]=$nombres [22];
		$cell2["f"]=$nom [22].$enter.$leye;
		if (isset($nombres [34] )){
		$cell3["v"]=$nombres [34];
		$cell3["f"]=$nom [34].$enter.$leye;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($nombres [46] )){
		$cell4["v"]=$nombres [46];
		$cell4["f"]=$nom [46].$enter.$leye;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [58] )){
		$cell5["v"]=$nombres [58];
		$cell5["f"]=$nom [58].$enter.$leye;;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [70] )){
		$cell6["v"]=$nombres [70];
		$cell6["f"]=$nom [70].$enter.$leye;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [82] )){
		$cell7["v"]=$nombres [82];
		$cell7["f"]=$nom [82].$enter.$leye;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};	
		$row10["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		
		
		$cell0["v"]="Diciembre";
		$cell0["f"]="Diciembre";
		$cell1["v"]=$nombres [11];
		
		$cell1["f"]=$nom [11].$enter.$leye;
		$cell2["v"]=$nombres [23];
		$cell2["f"]=$nom [23].$enter.$leye;
		if (isset($nombres [35] )){
		$cell3["v"]=$nombres [35];
		$cell3["f"]=$nom [35].$enter.$leye;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($nombres [47] )){
		$cell4["v"]=$nombres [47];
		$cell4["f"]=$nom [47].$enter.$leye;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [59] )){
		$cell5["v"]=$nombres [59];
		$cell5["f"]=$nom [59].$enter.$leye;;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [71] )){
		$cell6["v"]=$nombres [71];
		$cell6["f"]=$nom [71].$enter.$leye;;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [83] )){
		$cell7["v"]=$nombres [83];
		$cell7["f"]=$nom [83].$enter.$leye;;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};	
		$row11["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		//$rows=array($row0,$row1,$row2,$row3,$row4);
		$rows=array();
		array_push($rows,$row0);
		array_push($rows,$row1);
		array_push($rows,$row2);
		array_push($rows,$row3);
		array_push($rows,$row4);
		array_push($rows,$row5);
		array_push($rows,$row6);
		array_push($rows,$row7);
		array_push($rows,$row8);
		array_push($rows,$row9);
		array_push($rows,$row10);
		array_push($rows,$row11);
		
		}		
		
		
		
		
		
		
		
		
		if ($variable=="03"){
		$col1=array();
		$col1["label"]="Mensual";
		$col1["type"]="string";
		//print_r($col1);
		$col2=array();
		$col2["label"]="2013";
		$col2["type"]="number";
		$col3=array();
		$col3["label"]="2014";
		$col3["type"]="number";
		//print_r($col2);
		$col4=array();
		$col4["label"]="2015";
		$col4["type"]="number";
		$col5=array();
		$col5["label"]="2016";
		$col5["type"]="number";
		$col6=array();
		
		$col8=array();
		$col9=array();
		$col8["id"]= "";
		$col8["role"]= "tooltip";
		$col9["role"]= "tooltip";
		$col8["type"]= "string";
		$col8["p"]=$col9;
		$cols = array($col1,$col2,$col3,$col4,$col5,$col8);
		//print_r($cols);
		 
		
		$indice =444862; //
		$lugar = 00;
		
		
		$response = $inegi->index($indice, $lugar);
	

		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($variable >="2013"){
		
		$nombres [] =number_format($texto2, 2, '.', ' ');
		};
		};
		};
		};
	
		$leye2="%";
		
		$cell0["v"]="Enero";
		$cell0["f"]="Enero";
		$cell1["v"]=$nombres [0];
		$cell1["f"]=$nombres [0].$leye2;
		$cell2["v"]=$nombres [12];
		$cell2["f"]=$nombres [12].$leye2;
		$cell3["v"]=$nombres [24];
		$cell3["f"]=$nombres [24].$leye2;
		if (isset($nombres [36] )){
		$cell4["v"]=$nombres [36];
		$cell4["f"]=$nombres [36].$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [48] )){
		$cell5["v"]=$nombres [48];
		$cell5["f"]=$nombres [48].$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [60] )){
		$cell6["v"]=$nombres [60];
		$cell6["f"]=$nombres [60].$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		$row0["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Febrero";
		$cell0["f"]="Febrero";
		$cell1["v"]=$nombres [1];
		$cell1["f"]=$nombres [1].$leye2;
		$cell2["v"]=$nombres [13];
		$cell2["f"]=$nombres [13].$leye2;
		$cell3["v"]=$nombres [25];
		$cell3["f"]=$nombres [25].$leye2;
		if (isset($nombres [37] )){
		$cell4["v"]=$nombres [37];
		$cell4["f"]=$nombres [37].$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [49] )){
		$cell5["v"]=$nombres [49];
		$cell5["f"]=$nombres [49].$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [61] )){
		$cell6["v"]=$nombres [61];
		$cell6["f"]=$nombres [61].$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		$row1["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Marzo";
		$cell1["v"]=$nombres [2];
		$cell1["f"]=$nombres [2].$leye2;
		$cell2["v"]=$nombres [14];
		$cell2["f"]=$nombres [14].$leye2;
		$cell3["v"]=$nombres [26];
		$cell3["f"]=$nombres [26].$leye2;
		if (isset($nombres [38] )){
		$cell4["v"]=$nombres [38];
		$cell4["f"]=$nombres [38].$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [50] )){
		$cell5["v"]=$nombres [50];
		$cell5["f"]=$nombres [50].$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [62] )){
		$cell6["v"]=$nombres [62];
		$cell6["f"]=$nombres [62].$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		$row2["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Abril";
		$cell1["v"]=$nombres [3];
		$cell1["f"]=$nombres [3].$leye2;
		$cell2["v"]=$nombres [15];
		$cell2["f"]=$nombres [15].$leye2;
		$cell3["v"]=$nombres [27];
		$cell3["f"]=$nombres [27].$leye2;
		if (isset($nombres [39] )){
		$cell4["v"]=$nombres [39];
		$cell4["f"]=$nombres [39].$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [51] )){
		$cell5["v"]=$nombres [51];
		$cell5["f"]=$nombres [51].$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [63] )){
		$cell6["v"]=$nombres [63];
		$cell6["f"]=$nombres [63].$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		$row3["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		
		$cell0["v"]="Mayo";
		$cell1["v"]=$nombres [4];
		$cell1["f"]=$nombres [4].$leye2;
		$cell2["v"]=$nombres [16];
		$cell2["f"]=$nombres [16].$leye2;
		$cell3["v"]=$nombres [28];
		$cell3["f"]=$nombres [28].$leye2;
		if (isset($nombres [40] )){
		$cell4["v"]=$nombres [40];
		$cell4["f"]=$nombres [40].$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [52] )){
		$cell5["v"]=$nombres [52];
		$cell5["f"]=$nombres [52].$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [64] )){
		$cell6["v"]=$nombres [64];
		$cell6["f"]=$nombres [64].$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		$row4["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Junio";
		$cell0["f"]="Junio";
		$cell1["v"]=$nombres [5];
		$cell1["f"]=$nombres [5].$leye2;
		$cell2["v"]=$nombres [17];
		$cell2["f"]=$nombres [17].$leye2;
		$cell3["v"]=$nombres [29];
		$cell3["f"]=$nombres [29].$leye2;
		if (isset($nombres [41] )){
		$cell4["v"]=$nombres [41];
		$cell4["f"]=$nombres [41].$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [53] )){
		$cell5["v"]=$nombres [53];
		$cell5["f"]=$nombres [53].$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [65] )){
		$cell6["v"]=$nombres [65];
		$cell6["f"]=$nombres [65].$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		$row5["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Julio";
		$cell0["f"]="Julio";
		$cell1["v"]=$nombres [6];
		$cell1["f"]=$nombres [6].$leye2;
		$cell2["v"]=$nombres [18];
		$cell2["f"]=$nombres [18].$leye2;
		$cell3["v"]=$nombres [30];
		$cell3["f"]=$nombres [30].$leye2;
		if (isset($nombres [42] )){
		$cell4["v"]=$nombres [42];
		$cell4["f"]=$nombres [42].$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [54] )){
		$cell5["v"]=$nombres [54];
		$cell5["f"]=$nombres [54].$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [66] )){
		$cell6["v"]=$nombres [66];
		$cell6["f"]=$nombres [66].$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		$row6["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Agosto";
		$cell0["f"]="Agosto";
		$cell1["v"]=$nombres [7];
		$cell1["f"]=$nombres [7].$leye2;
		$cell2["v"]=$nombres [19];
		$cell2["f"]=$nombres [19].$leye2;
		if (isset($nombres [31] )){
		$cell3["v"]=$nombres [31];
		$cell3["f"]=$nombres [31].$leye2;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($nombres [43] )){
		$cell4["v"]=$nombres [43];
		$cell4["f"]=$nombres [43].$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [55] )){
		$cell5["v"]=$nombres [55];
		$cell5["f"]=$nombres [55].$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [67] )){
		$cell6["v"]=$nombres [67];
		$cell6["f"]=$nombres [67].$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		$row7["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		
		$cell0["v"]="Septiembre";
		$cell0["f"]="Septiembre";
		$cell1["v"]=$nombres [8];
		$cell1["f"]=$nombres [8].$leye2;
		$cell2["v"]=$nombres [20];
		$cell2["f"]=$nombres [20].$leye2;
		if (isset($nombres [32] )){
		$cell3["v"]=$nombres [32];
		$cell3["f"]=$nombres [32].$leye2;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($nombres [44] )){
		$cell4["v"]=$nombres [44];
		$cell4["f"]=$nombres [44].$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [56] )){
		$cell5["v"]=$nombres [56];
		$cell5["f"]=$nombres [56].$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [68] )){
		$cell6["v"]=$nombres [68];
		$cell6["f"]=$nombres [68].$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		$row8["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Octubre";
		$cell0["f"]="Octubre";
		$cell1["v"]=$nombres [9];
		$cell1["f"]=$nombres [9].$leye2;
		$cell2["v"]=$nombres [21];
		$cell2["f"]=$nombres [21].$leye2;
		if (isset($nombres [33] )){
		$cell3["v"]=$nombres [33];
		$cell3["f"]=$nombres [33].$leye2;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($nombres [45] )){
		$cell4["v"]=$nombres [45];
		$cell4["f"]=$nombres [45].$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [57] )){
		$cell5["v"]=$nombres [57];
		$cell5["f"]=$nombres [57].$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [69] )){
		$cell6["v"]=$nombres [69];
		$cell6["f"]=$nombres [69].$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		$row9["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Noviembre";
		$cell0["f"]="Noviembre";
		$cell1["v"]=$nombres [10];
		$cell1["f"]=$nombres [10].$leye2;
		$cell2["v"]=$nombres [22];
		$cell2["f"]=$nombres [22].$leye2;
		if (isset($nombres [34] )){
		$cell3["v"]=$nombres [34];
		$cell3["f"]=$nombres [34].$leye2;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($nombres [46] )){
		$cell4["v"]=$nombres [46];
		$cell4["f"]=$nombres [46].$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [58] )){
		$cell5["v"]=$nombres [58];
		$cell5["f"]=$nombres [58].$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [70] )){
		$cell6["v"]=$nombres [70];
		$cell6["f"]=$nombres [70].$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		$row10["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Diciembre";
		$cell0["f"]="Diciembre";
		$cell1["v"]=$nombres [11];
		$cell1["f"]=$nombres [11].$leye2;
		$cell2["v"]=$nombres [23];
		$cell2["f"]=$nombres [23].$leye2;
		if (isset($nombres [35] )){
		$cell3["v"]=$nombres [35];
		$cell3["f"]=$nombres [35].$leye2;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($nombres [47] )){
		$cell4["v"]=$nombres [47];
		$cell4["f"]=$nombres [47].$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [59] )){
		$cell5["v"]=$nombres [59];
		$cell5["f"]=$nombres [59].$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [71] )){
		$cell6["v"]=$nombres [71];
		$cell6["f"]=$nombres [71].$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		$row11["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		
		
		//$rows=array($row0,$row1,$row2,$row3,$row4);
		$rows=array();
		array_push($rows,$row0);
		array_push($rows,$row1);
		array_push($rows,$row2);
		array_push($rows,$row3);
		array_push($rows,$row4);
		array_push($rows,$row5);
		array_push($rows,$row6);
		array_push($rows,$row7);
		array_push($rows,$row8);
		array_push($rows,$row9);
		array_push($rows,$row10);
		array_push($rows,$row11);
		
		} 
		
		if ($variable=="04"){
		$col1=array();
		$col1["label"]="Trimestre";
		$col1["type"]="string";
		//print_r($col1);
		$col2=array();
		$col2["label"]="2013";
		$col2["type"]="number";
		$col3=array();
		$col3["label"]="2014";
		$col3["type"]="number";
		//print_r($col2);
		$col4=array();
		$col4["label"]="2015";
		$col4["type"]="number";
		$col5=array();
		$col5["label"]="2016";
		$col5["type"]="number";
		
		$col8=array();
		$col9=array();
		$col8["id"]= "";
		$col8["role"]= "tooltip";
		$col9["role"]= "tooltip";
		$col8["type"]= "string";
		$col8["p"]=$col9;
		$cols = array($col1,$col2,$col3,$col4,$col5,$col8);
		//print_r($cols);
		 
		
		
		$indice =447624; //
		$lugar = 00;
		
		$response = $inegi->index($indice, $lugar);
		

		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($variable >="2013"){
		
		$nombres [] =number_format($texto2, 2, '.', ' ');
		};
		};
		};
		};
	
		$leye="%";
		$enter="";
		$leye2="Porcentaje";
		$leye3="Número de Personas";
		$cell0["v"]="I";
	    $cell0["f"]="I";
		$cell1["v"]=$nombres [0];
		
		$cell1["f"]=$nombres [0].$enter.$leye;
		$cell2["v"]=$nombres [4];
		$cell2["f"]=$nombres [4].$enter.$leye;
		$cell3["v"]=$nombres [8];
		$cell3["f"]=$nombres [8].$enter.$leye;
		if (isset($nombres [12] )){
		$cell4["v"]=$nombres [12];
		$cell4["f"]=$nombres [12].$enter.$leye;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [16] )){
		$cell5["v"]=$nombres [16];
		$cell5["f"]=$nombres [16].$enter.$leye;;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [20] )){
		$cell6["v"]=$nombres [20];
		$cell6["f"]=$nombres [20].$enter.$leye;;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [24] )){
		$cell7["v"]=$nombres [24];
		$cell7["f"]=$nombres [24].$enter.$leye;;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};	
		$row0["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		
		$cell0["v"]="II";
		$cell0["f"]="II";
		$cell1["v"]=$nombres [1];
		$cell1["f"]=$nombres [1].$enter.$leye;;
		$cell2["v"]=$nombres [5];
		$cell2["f"]=$nombres [5].$enter.$leye;;
		if (isset($nombres [9] )){
		$cell3["v"]=$nombres [9];
		$cell3["f"]=$nombres [9].$enter.$leye;;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		
		if (isset($nombres [13] )){
		$cell4["v"]=$nombres [13];
		$cell4["f"]=$nombres [13].$enter.$leye;;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [17] )){
		$cell5["v"]=$nombres [17];
		$cell5["f"]=$nombres [17].$enter.$leye;;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [21] )){
		$cell6["v"]=$nombres [21];
		$cell6["f"]=$nombres [21].$enter.$leye;;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [25] )){
		$cell7["v"]=$nombres [25];
		$cell7["f"]=$nombres [25].$enter.$leye;;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};
		$row1["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		 
		$cell0["v"]="III";
		$cell0["f"]="III";
		$cell1["v"]=$nombres [2];
		$cell1["f"]=$nombres [2].$enter.$leye;;
		$cell2["v"]=$nombres [6];
		$cell2["f"]=$nombres [6].$enter.$leye;;
		if (isset($nombres [10] )){
		$cell3["v"]=$nombres [10];
		$cell3["f"]=$nombres [10].$enter.$leye;;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($nombres [14] )){
		$cell4["v"]=$nombres [14];
		$cell4["f"]=$nombres [14].$enter.$leye;;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [18] )){
		$cell5["v"]=$nombres [18];
		$cell5["f"]=$nombres [18].$enter.$leye;;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [22] )){
		$cell6["v"]=$nombres [22];
		$cell6["f"]=$nombres [22].$enter.$leye;;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [26] )){
		$cell7["v"]=$nombres [26];
		$cell7["f"]=$nombres [26].$enter.$leye;;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};
		$row2["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		 
		$cell0["v"]="IV";
		$cell0["f"]="IV";
		$cell1["v"]=$nombres [3];
		$cell1["f"]=$nombres [3].$enter.$leye;;
		$cell2["v"]=$nombres [7];
		$cell2["f"]=$nombres [7].$enter.$leye;;
		if (isset($nombres [11] )){
		$cell3["v"]=$nombres [11];
		$cell3["f"]=$nombres [11].$enter.$leye;;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($nombres [15] )){
		$cell4["v"]=$nombres [15];
		$cell4["f"]=$nombres [15].$enter.$leye;;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [19] )){
		$cell5["v"]=$nombres [19];
		$cell5["f"]=$nombres [19].$enter.$leye;;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [23] )){
		$cell6["v"]=$nombres [23];
		$cell6["f"]=$nombres [23].$enter.$leye;;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [27] )){
		$cell7["v"]=$nombres [27];
		$cell7["f"]=$nombres [27].$enter.$leye;;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};
		$row3["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		
		//$rows=array($row0,$row1,$row2,$row3,$row4);
		$rows=array();
		array_push($rows,$row0);
		array_push($rows,$row1);
		array_push($rows,$row2);
		array_push($rows,$row3);
		
		} 
		
		
		
		
		
		
		
		if ($variable=="05"){
		$col1=array();
		$col1["label"]="Trimestre";
		$col1["type"]="string";
		//print_r($col1);
		$col2=array();
		$col2["label"]="2013";
		$col2["type"]="number";
		$col3=array();
		$col3["label"]="2014";
		$col3["type"]="number";
		//print_r($col2);
		$col4=array();
		$col4["label"]="2015";
		$col4["type"]="number";
		$col5=array();
		$col5["label"]="2016";
		$col5["type"]="number";
		
		$col8=array();
		$col9=array();
		$col8["id"]= "";
		$col8["role"]= "tooltip";
		$col9["role"]= "tooltip";
		$col8["type"]= "string";
		$col8["p"]=$col9;
		$cols = array($col1,$col2,$col3,$col4,$col5,$col8);
		//print_r($cols);
		 
		$indice =447587; //
		$lugar = 00;
		
		$response = $inegi->index($indice, $lugar);
		

		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($variable >="2013"){
		
		$nombres [] =number_format($texto2, 2, '.', ' ');
		};
		};
		};
		};
	
		$leye="%";
		$enter="";
		$leye2="Porcentaje";
		$leye3="Número de Personas";
		$cell0["v"]="I";
	    $cell0["f"]="I";
		$cell1["v"]=$nombres [0];
		
		$cell1["f"]=$nombres [0].$enter.$leye;
		$cell2["v"]=$nombres [4];
		$cell2["f"]=$nombres [4].$enter.$leye;
		$cell3["v"]=$nombres [8];
		$cell3["f"]=$nombres [8].$enter.$leye;
		if (isset($nombres [12] )){
		$cell4["v"]=$nombres [12];
		$cell4["f"]=$nombres [12].$enter.$leye;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [16] )){
		$cell5["v"]=$nombres [16];
		$cell5["f"]=$nombres [16].$enter.$leye;;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [20] )){
		$cell6["v"]=$nombres [20];
		$cell6["f"]=$nombres [20].$enter.$leye;;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [24] )){
		$cell7["v"]=$nombres [24];
		$cell7["f"]=$nombres [24].$enter.$leye;;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};	
		$row0["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		
		$cell0["v"]="II";
		$cell0["f"]="II";
		$cell1["v"]=$nombres [1];
		$cell1["f"]=$nombres [1].$enter.$leye;;
		$cell2["v"]=$nombres [5];
		$cell2["f"]=$nombres [5].$enter.$leye;;
		if (isset($nombres [9] )){
		$cell3["v"]=$nombres [9];
		$cell3["f"]=$nombres [9].$enter.$leye;;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		
		if (isset($nombres [13] )){
		$cell4["v"]=$nombres [13];
		$cell4["f"]=$nombres [13].$enter.$leye;;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [17] )){
		$cell5["v"]=$nombres [17];
		$cell5["f"]=$nombres [17].$enter.$leye;;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [21] )){
		$cell6["v"]=$nombres [21];
		$cell6["f"]=$nombres [21].$enter.$leye;;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [25] )){
		$cell7["v"]=$nombres [25];
		$cell7["f"]=$nombres [25].$enter.$leye;;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};
		$row1["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		 
		$cell0["v"]="III";
		$cell0["f"]="III";
		$cell1["v"]=$nombres [2];
		$cell1["f"]=$nombres [2].$enter.$leye;;
		$cell2["v"]=$nombres [6];
		$cell2["f"]=$nombres [6].$enter.$leye;;
		if (isset($nombres [10] )){
		$cell3["v"]=$nombres [10];
		$cell3["f"]=$nombres [10].$enter.$leye;;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($nombres [14] )){
		$cell4["v"]=$nombres [14];
		$cell4["f"]=$nombres [14].$enter.$leye;;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [18] )){
		$cell5["v"]=$nombres [18];
		$cell5["f"]=$nombres [18].$enter.$leye;;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [22] )){
		$cell6["v"]=$nombres [22];
		$cell6["f"]=$nombres [22].$enter.$leye;;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [26] )){
		$cell7["v"]=$nombres [26];
		$cell7["f"]=$nombres [26].$enter.$leye;;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};
		$row2["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		 
		$cell0["v"]="IV";
		$cell0["f"]="IV";
		$cell1["v"]=$nombres [3];
		$cell1["f"]=$nombres [3].$enter.$leye;;
		$cell2["v"]=$nombres [7];
		$cell2["f"]=$nombres [7].$enter.$leye;;
		if (isset($nombres [11] )){
		$cell3["v"]=$nombres [11];
		$cell3["f"]=$nombres [11].$enter.$leye;;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($nombres [15] )){
		$cell4["v"]=$nombres [15];
		$cell4["f"]=$nombres [15].$enter.$leye;;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [19] )){
		$cell5["v"]=$nombres [19];
		$cell5["f"]=$nombres [19].$enter.$leye;;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [23] )){
		$cell6["v"]=$nombres [23];
		$cell6["f"]=$nombres [23].$enter.$leye;;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [27] )){
		$cell7["v"]=$nombres [27];
		$cell7["f"]=$nombres [27].$enter.$leye;;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};
		$row3["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		
		
		
		
		//$rows=array($row0,$row1,$row2,$row3,$row4);
		$rows=array();
		array_push($rows,$row0);
		array_push($rows,$row1);
		array_push($rows,$row2);
		array_push($rows,$row3);
		
		}
		
		
		if ($variable=="06"){
		$col1=array();
		$col1["label"]="Mensual";
		$col1["type"]="string";
		//print_r($col1);
		$col2=array();
		$col2["label"]="2013";
		$col2["type"]="number";
		$col3=array();
		$col3["label"]="2014";
		$col3["type"]="number";
		//print_r($col2);
		$col4=array();
		$col4["label"]="2015";
		$col4["type"]="number";
		$col5=array();
		$col5["label"]="2016";
		$col5["type"]="number";
		$col8=array();
		$col9=array();
		$col8["id"]= "";
		$col8["role"]= "tooltip";
		$col9["role"]= "tooltip";
		$col8["type"]= "string";
		$col8["p"]=$col9;
		$cols = array($col1,$col2,$col3,$col4,$col5,$col8);
		//print_r($cols);
		 
		$indice =216192; //
		$lugar = 00;
		
		
		$response = $inegi->index($indice, $lugar);
	

		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($variable >="2013"){
		
		$nombres [] =number_format($texto2, 2, '.', ' ');
		};
		};
		};
		};
	
		$leye2="%";
		
		$cell0["v"]="Enero";
		$cell0["f"]="Enero";
		$cell1["v"]=$nombres [0];
		$cell1["f"]=$nombres [0].$leye2;
		$cell2["v"]=$nombres [12];
		$cell2["f"]=$nombres [12].$leye2;
		$cell3["v"]=$nombres [24];
		$cell3["f"]=$nombres [24].$leye2;
		if (isset($nombres [36] )){
		$cell4["v"]=$nombres [36];
		$cell4["f"]=$nombres [36].$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [48] )){
		$cell5["v"]=$nombres [48];
		$cell5["f"]=$nombres [48].$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [60] )){
		$cell6["v"]=$nombres [60];
		$cell6["f"]=$nombres [60].$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		$row0["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Febrero";
		$cell0["f"]="Febrero";
		$cell1["v"]=$nombres [1];
		$cell1["f"]=$nombres [1].$leye2;
		$cell2["v"]=$nombres [13];
		$cell2["f"]=$nombres [13].$leye2;
		$cell3["v"]=$nombres [25];
		$cell3["f"]=$nombres [25].$leye2;
		if (isset($nombres [37] )){
		$cell4["v"]=$nombres [37];
		$cell4["f"]=$nombres [37].$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [49] )){
		$cell5["v"]=$nombres [49];
		$cell5["f"]=$nombres [49].$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [61] )){
		$cell6["v"]=$nombres [61];
		$cell6["f"]=$nombres [61].$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		$row1["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Marzo";
		$cell0["f"]="Marzo";
		$cell1["v"]=$nombres [2];
		$cell1["f"]=$nombres [2].$leye2;
		$cell2["v"]=$nombres [14];
		$cell2["f"]=$nombres [14].$leye2;
		$cell3["v"]=$nombres [26];
		$cell3["f"]=$nombres [26].$leye2;
		if (isset($nombres [38] )){
		$cell4["v"]=$nombres [38];
		$cell4["f"]=$nombres [38].$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [50] )){
		$cell5["v"]=$nombres [50];
		$cell5["f"]=$nombres [50].$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [62] )){
		$cell6["v"]=$nombres [62];
		$cell6["f"]=$nombres [62].$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		$row2["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Abril";
		$cell0["f"]="Abril";
		$cell1["v"]=$nombres [3];
		$cell1["f"]=$nombres [3].$leye2;
		$cell2["v"]=$nombres [15];
		$cell2["f"]=$nombres [15].$leye2;
		$cell3["v"]=$nombres [27];
		$cell3["f"]=$nombres [27].$leye2;
		if (isset($nombres [39] )){
		$cell4["v"]=$nombres [39];
		$cell4["f"]=$nombres [39].$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [51] )){
		$cell5["v"]=$nombres [51];
		$cell5["f"]=$nombres [51].$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [63] )){
		$cell6["v"]=$nombres [63];
		$cell6["f"]=$nombres [63].$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		$row3["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		
		$cell0["v"]="Mayo";
		$cell0["f"]="Mayo";
		$cell1["v"]=$nombres [4];
		$cell1["f"]=$nombres [4].$leye2;
		$cell2["v"]=$nombres [16];
		$cell2["f"]=$nombres [16].$leye2;
		$cell3["v"]=$nombres [28];
		$cell3["f"]=$nombres [28].$leye2;
		if (isset($nombres [40] )){
		$cell4["v"]=$nombres [40];
		$cell4["f"]=$nombres [40].$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [52] )){
		$cell5["v"]=$nombres [52];
		$cell5["f"]=$nombres [52].$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [64] )){
		$cell6["v"]=$nombres [64];
		$cell6["f"]=$nombres [64].$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		$row4["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Junio";
		$cell0["f"]="Junio";
		$cell1["v"]=$nombres [5];
		$cell1["f"]=$nombres [5].$leye2;
		$cell2["v"]=$nombres [17];
		$cell2["f"]=$nombres [17].$leye2;
		$cell3["v"]=$nombres [29];
		$cell3["f"]=$nombres [29].$leye2;
		if (isset($nombres [41] )){
		$cell4["v"]=$nombres [41];
		$cell4["f"]=$nombres [41].$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [53] )){
		$cell5["v"]=$nombres [53];
		$cell5["f"]=$nombres [53].$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [65] )){
		$cell6["v"]=$nombres [65];
		$cell6["f"]=$nombres [65].$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		$row5["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Julio";
		$cell0["f"]="Julio";
		$cell1["v"]=$nombres [6];
		$cell1["f"]=$nombres [6].$leye2;
		$cell2["v"]=$nombres [18];
		$cell2["f"]=$nombres [18].$leye2;
		$cell3["v"]=$nombres [30];
		$cell3["f"]=$nombres [30].$leye2;
		if (isset($nombres [42] )){
		$cell4["v"]=$nombres [42];
		$cell4["f"]=$nombres [42].$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [54] )){
		$cell5["v"]=$nombres [54];
		$cell5["f"]=$nombres [54].$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [66] )){
		$cell6["v"]=$nombres [66];
		$cell6["f"]=$nombres [66].$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		$row6["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Agosto";
		$cell0["f"]="Agosto";
		$cell1["v"]=$nombres [7];
		$cell1["f"]=$nombres [7].$leye2;
		$cell2["v"]=$nombres [19];
		$cell2["f"]=$nombres [19].$leye2;
		if (isset($nombres [31] )){
		$cell3["v"]=$nombres [31];
		$cell3["f"]=$nombres [31].$leye2;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($nombres [43] )){
		$cell4["v"]=$nombres [43];
		$cell4["f"]=$nombres [43].$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [55] )){
		$cell5["v"]=$nombres [55];
		$cell5["f"]=$nombres [55].$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [67] )){
		$cell6["v"]=$nombres [67];
		$cell6["f"]=$nombres [67].$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		$row7["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		
		$cell0["v"]="Septiembre";
		$cell0["f"]="Septiembre";
		$cell1["v"]=$nombres [8];
		$cell1["f"]=$nombres [8].$leye2;
		$cell2["v"]=$nombres [20];
		$cell2["f"]=$nombres [20].$leye2;
		if (isset($nombres [32] )){
		$cell3["v"]=$nombres [32];
		$cell3["f"]=$nombres [32].$leye2;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($nombres [44] )){
		$cell4["v"]=$nombres [44];
		$cell4["f"]=$nombres [44].$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [56] )){
		$cell5["v"]=$nombres [56];
		$cell5["f"]=$nombres [56].$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [68] )){
		$cell6["v"]=$nombres [68];
		$cell6["f"]=$nombres [68].$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		$row8["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Octubre";
		$cell0["f"]="Octubre";
		$cell1["v"]=$nombres [9];
		$cell1["f"]=$nombres [9].$leye2;
		$cell2["v"]=$nombres [21];
		$cell2["f"]=$nombres [21].$leye2;
		if (isset($nombres [33] )){
		$cell3["v"]=$nombres [33];
		$cell3["f"]=$nombres [33].$leye2;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($nombres [45] )){
		$cell4["v"]=$nombres [45];
		$cell4["f"]=$nombres [45].$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [57] )){
		$cell5["v"]=$nombres [57];
		$cell5["f"]=$nombres [57].$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [69] )){
		$cell6["v"]=$nombres [69];
		$cell6["f"]=$nombres [69].$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		$row9["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Noviembre";
		$cell0["f"]="Noviembre";
		$cell1["v"]=$nombres [10];
		$cell1["f"]=$nombres [10].$leye2;
		$cell2["v"]=$nombres [22];
		$cell2["f"]=$nombres [22].$leye2;
		if (isset($nombres [34] )){
		$cell3["v"]=$nombres [34];
		$cell3["f"]=$nombres [34].$leye2;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($nombres [46] )){
		$cell4["v"]=$nombres [46];
		$cell4["f"]=$nombres [46].$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [58] )){
		$cell5["v"]=$nombres [58];
		$cell5["f"]=$nombres [58].$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [70] )){
		$cell6["v"]=$nombres [70];
		$cell6["f"]=$nombres [70].$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		$row10["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Diciembre";
		$cell0["f"]="Diciembre";
		$cell1["v"]=$nombres [11];
		$cell1["f"]=$nombres [11].$leye2;
		$cell2["v"]=$nombres [23];
		$cell2["f"]=$nombres [23].$leye2;
		if (isset($nombres [35] )){
		$cell3["v"]=$nombres [35];
		$cell3["f"]=$nombres [35].$leye2;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($nombres [47] )){
		$cell4["v"]=$nombres [47];
		$cell4["f"]=$nombres [47].$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [59] )){
		$cell5["v"]=$nombres [59];
		$cell5["f"]=$nombres [59].$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [71] )){
		$cell6["v"]=$nombres [71];
		$cell6["f"]=$nombres [71].$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		$row11["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		//$rows=array($row0,$row1,$row2,$row3,$row4);
		$rows=array();
		array_push($rows,$row0);
		array_push($rows,$row1);
		array_push($rows,$row2);
		array_push($rows,$row3);
		array_push($rows,$row4);
		array_push($rows,$row5);
		array_push($rows,$row6);
		array_push($rows,$row7);
		array_push($rows,$row8);
		array_push($rows,$row9);
		array_push($rows,$row10);
		array_push($rows,$row11);
		}
		$data=array("cols"=>$cols,"rows"=>$rows);
		//print_r($data);

		echo json_encode($data);