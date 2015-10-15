	<?php
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
		 
		
		$leye="$";
		$leye2="\n Unidad de Medida \n Millones de Dolares";
		$cell0["v"]="I";
		$cell0["f"]="I";
		$cell1["v"]=$vars[0]->Total;
		$cell1["f"]=$leye.number_format($vars[0]->Total, 2, '.', ',').$leye2;
		$cell2["v"]=$vars[4]->Total;
		$cell2["f"]=$leye.number_format($vars[4]->Total, 2, '.', ',').$leye2;
		$cell3["v"]=$vars[8]->Total;
		$cell3["f"]=$leye.number_format($vars[8]->Total, 2, '.', ',').$leye2;
		if (isset($vars[12])){
		$cell4["v"]=$vars[12]->Total;
		$cell4["f"]=$leye.number_format($vars[12]->Total, 2, '.', ',').$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($vars[16] )){
		$cell5["v"]=$vars[16]->Total;
		$cell5["f"]=$leye.number_format($vars[16]->Total, 2, '.', ',').$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($vars[20])){
		$cell6["v"]=$vars[20]->Total;
		$cell6["f"]=$leye.number_format($vars[20]->Total, 2, '.', ',').$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		}
		$row0["c"]=array($cell0,$cell1,$cell2,$cell3);
		 
		$cell0["v"]="II";
		$cell0["f"]="II";
		$cell1["v"]=$vars[1]->Total;
		$cell1["f"]=$leye.number_format($vars[1]->Total, 2, '.', ',').$leye2;
		$cell2["v"]=$vars[5]->Total;
		$cell2["f"]=$leye.number_format($vars[5]->Total, 2, '.', ',').$leye2;
		$cell3["v"]=$vars[9]->Total;
		$cell3["f"]=$leye.number_format($vars[9]->Total, 2, '.', ',').$leye2;
		if (isset($vars[13])){
		$cell4["v"]=$vars[13]->Total;
		$cell4["f"]=$leye.number_format($vars[13]->Total, 2, '.', ',').$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($vars[17] )){
		$cell5["v"]=$vars[17]->Total;
		$cell5["f"]=$leye.number_format($vars[17]->Total, 2, '.', ',').$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($vars[21])){
		$cell6["v"]=$vars[21]->Total;
		$cell6["f"]=$leye.number_format($vars[21]->Total, 2, '.', ',').$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		}
		$row1["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="III";
		$cell0["f"]="III";
		$cell1["v"]=$vars[2]->Total;
		$cell1["f"]=$leye.number_format($vars[2]->Total, 2, '.', ',').$leye2;
		$cell2["v"]=$vars[6]->Total;
		$cell2["f"]=$leye.number_format($vars[6]->Total, 2, '.', ',').$leye2;
		$cell3["v"]=$vars[10]->Total;
		$cell3["f"]=$leye.number_format($vars[10]->Total, 2, '.', ',').$leye2;
		if (isset($vars[14])){
		$cell4["v"]=$vars[14]->Total;
		$cell4["f"]=$leye.number_format($vars[14]->Total, 2, '.', ',').$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($vars[18] )){
		$cell5["v"]=$vars[18]->Total;
		$cell5["f"]=$leye.number_format($vars[18]->Total, 2, '.', ',').$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($vars[22])){
		$cell6["v"]=$vars[22]->Total;
		$cell6["f"]=$leye.number_format($vars[22]->Total, 2, '.', ',').$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		}
		$row2["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="IV";
		$cell0["f"]="IV";
		$cell1["v"]=$vars[3]->Total;
		$cell1["f"]=$leye.number_format($vars[3]->Total, 2, '.', ',').$leye2;
		$cell2["v"]=$vars[7]->Total;
		$cell2["f"]=$leye.number_format($vars[7]->Total, 2, '.', ',').$leye2;
		$cell3["v"]=$vars[11]->Total;
		$cell3["f"]=$leye.number_format($vars[11]->Total, 2, '.', ',').$leye2;
		if (isset($vars[15])){
		$cell4["v"]=$vars[15]->Total;
		$cell4["f"]=$leye.number_format($vars[15]->Total, 2, '.', ',').$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($vars[19] )){
		$cell5["v"]=$vars[19]->Total;
		$cell5["f"]=$leye.number_format($vars[19]->Total, 2, '.', ',').$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($vars[23])){
		$cell6["v"]=$vars[23]->Total;
		$cell6["f"]=$leye.number_format($vars[23]->Total, 2, '.', ',').$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		}
		$row3["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		
		
		
		//$rows=array($row0,$row1,$row2,$row3,$row4);
		$rows=array();
		array_push($rows,$row0);
		array_push($rows,$row1);
		array_push($rows,$row2);
		array_push($rows,$row3);


		$data=array("cols"=>$cols,"rows"=>$rows);
		//print_r($data);
		echo json_encode($data);