<?php
	

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




		$leye2="\n Unidad de Medida:\nDías";
		$cell0["v"]="Enero";
		$cell0["f"]="Enero";
		$cell1["v"]=$vars[1]->Ciudad;
		$cell1["f"]=number_format($vars[1]->Ciudad, 2, '.', ',').$leye2;
		$cell2["v"]=$vars[13]->Ciudad;
		$cell2["f"]=number_format($vars[13]->Ciudad, 2, '.', ',').$leye2;
		if (isset($vars[25]->Ciudad )){
		$cell3["v"]=$vars[25]->Ciudad;
		$cell3["f"]=number_format($vars[25]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($vars[37])){
		$cell4["v"]=$vars[37]->Ciudad;
		$cell4["f"]=number_format($vars[37]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($vars[49] )){
		$cell5["v"]=$vars[49]->Ciudad;
		$cell5["f"]=number_format($vars[49]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($vars[61] )){
		$cell6["v"]=$vars[61]->Ciudad;
		$cell6["f"]=number_format($vars[61]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		}
		$row0["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Febrero";
		$cell0["f"]="Febrero";
		$cell1["v"]=$vars[2]->Ciudad;
		$cell1["f"]=number_format($vars[2]->Ciudad, 2, '.', ',').$leye2;
		$cell2["v"]=$vars[14]->Ciudad;
		$cell2["f"]=number_format($vars[14]->Ciudad, 2, '.', ',').$leye2;
		if (isset($vars[26])){
		$cell3["v"]=$vars[26]->Ciudad;
		$cell3["f"]=number_format($vars[26]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($vars[38])){
		$cell4["v"]=$vars[38]->Ciudad;
		$cell4["f"]=number_format($vars[38]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($vars[50] )){
		$cell5["v"]=$vars[50]->Ciudad;
		$cell5["f"]=number_format($vars[50]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($vars[62] )){
		$cell6["v"]=$vars[62]->Ciudad;
		$cell6["f"]=number_format($vars[62]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		}
		$row1["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Marzo";
		$cell0["f"]="Marzo";
		$cell1["v"]=$vars[3]->Ciudad;
		$cell1["f"]=number_format($vars[3]->Ciudad, 2, '.', ',').$leye2;
		$cell2["v"]=$vars[15]->Ciudad;
		$cell2["f"]=number_format($vars[15]->Ciudad, 2, '.', ',').$leye2;
		if (isset($vars[27])){
		$cell3["v"]=$vars[27]->Ciudad;
		$cell3["f"]=number_format($vars[27]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($vars[39])){
		$cell4["v"]=$vars[39]->Ciudad;
		$cell4["f"]=number_format($vars[39]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($vars[51] )){
		$cell5["v"]=$vars[51]->Ciudad;
		$cell5["f"]=number_format($vars[51]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($vars[63] )){
		$cell6["v"]=$vars[63]->Ciudad;
		$cell6["f"]=number_format($vars[63]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		}
		$row2["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Abril";
		$cell0["f"]="Abril";
		$cell1["v"]=$vars[4]->Ciudad;
		$cell1["f"]=number_format($vars[4]->Ciudad, 2, '.', ',').$leye2;
		$cell2["v"]=$vars[16]->Ciudad;
		$cell2["f"]=number_format($vars[16]->Ciudad, 2, '.', ',').$leye2;
		if (isset($vars[28])){
		$cell3["v"]=$vars[28]->Ciudad;
		$cell3["f"]=number_format($vars[28]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($vars[40])){
		$cell4["v"]=$vars[40]->Ciudad;
		$cell4["f"]=number_format($vars[40]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($vars[52] )){
		$cell5["v"]=$vars[52]->Ciudad;
		$cell5["f"]=number_format($vars[52]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($vars[64] )){
		$cell6["v"]=$vars[64]->Ciudad;
		$cell6["f"]=number_format($vars[64]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		}
		$row3["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		
		$cell0["v"]="Mayo";
		$cell0["f"]="Mayo";
		$cell1["v"]=$vars[5]->Ciudad;
		$cell1["f"]=number_format($vars[5]->Ciudad, 2, '.', ',').$leye2;
		$cell2["v"]=$vars[17]->Ciudad;
		$cell2["f"]=number_format($vars[17]->Ciudad, 2, '.', ',').$leye2;
		if (isset($vars[29]->Ciudad )){
		$cell3["v"]=$vars[29]->Ciudad;
		$cell3["f"]=number_format($vars[29]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($vars[41])){
		$cell4["v"]=$vars[41]->Ciudad;
		$cell4["f"]=number_format($vars[41]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($vars[53] )){
		$cell5["v"]=$vars[53]->Ciudad;
		$cell5["f"]=number_format($vars[53]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($vars[65] )){
		$cell6["v"]=$vars[65]->Ciudad;
		$cell6["f"]=number_format($vars[65]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		}
		$row4["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Junio";
		$cell0["f"]="Junio";
		$cell1["v"]=$vars[6]->Ciudad;
		$cell1["f"]=number_format($vars[6]->Ciudad, 2, '.', ',').$leye2;
		$cell2["v"]=$vars[18]->Ciudad;
		$cell2["f"]=number_format($vars[18]->Ciudad, 2, '.', ',').$leye2;
		if (isset($vars[30]->Ciudad )){
		$cell3["v"]=$vars[30]->Ciudad;
		$cell3["f"]=number_format($vars[30]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($vars[42])){
		$cell4["v"]=$vars[42]->Ciudad;
		$cell4["f"]=number_format($vars[42]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($vars[54] )){
		$cell5["v"]=$vars[54]->Ciudad;
		$cell5["f"]=number_format($vars[54]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($vars[66] )){
		$cell6["v"]=$vars[66]->Ciudad;
		$cell6["f"]=number_format($vars[66]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		}
		$row5["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Julio";
		$cell0["f"]="Julio";
		$cell1["v"]=$vars[7]->Ciudad;
		$cell1["f"]=number_format($vars[7]->Ciudad, 2, '.', ',').$leye2;
		$cell2["v"]=$vars[19]->Ciudad;
		$cell2["f"]=number_format($vars[19]->Ciudad, 2, '.', ',').$leye2;
		if (isset($vars[31]->Ciudad )){
		$cell3["v"]=$vars[31]->Ciudad;
		$cell3["f"]=number_format($vars[31]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($vars[43])){
		$cell4["v"]=$vars[43]->Ciudad;
		$cell4["f"]=number_format($vars[43]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($vars[55] )){
		$cell5["v"]=$vars[55]->Ciudad;
		$cell5["f"]=number_format($vars[55]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($vars[67] )){
		$cell6["v"]=$vars[67]->Ciudad;
		$cell6["f"]=number_format($vars[67]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		}
		$row6["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Agosto";
		$cell0["f"]="Agosto";
		$cell1["v"]=$vars[8]->Ciudad;
		$cell1["f"]=number_format($vars[8]->Ciudad, 2, '.', ',').$leye2;
		$cell2["v"]=$vars[20]->Ciudad;
		$cell2["f"]=number_format($vars[20]->Ciudad, 2, '.', ',').$leye2;
		if (isset($vars[32]->Ciudad )){
		$cell3["v"]=$vars[32]->Ciudad;
		$cell3["f"]=number_format($vars[32]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($vars[44])){
		$cell4["v"]=$vars[44]->Ciudad;
		$cell4["f"]=number_format($vars[44]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($vars[56] )){
		$cell5["v"]=$vars[56]->Ciudad;
		$cell5["f"]=number_format($vars[56]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($vars[68] )){
		$cell6["v"]=$vars[68]->Ciudad;
		$cell6["f"]=number_format($vars[68]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		}
		$row7["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		
		$cell0["v"]="Septiembre";
		$cell0["f"]="Septiembre";
		$cell1["v"]=$vars[9]->Ciudad;
		$cell1["f"]=number_format($vars[9]->Ciudad, 2, '.', ',').$leye2;
		$cell2["v"]=$vars[21]->Ciudad;
		$cell2["f"]=number_format($vars[21]->Ciudad, 2, '.', ',').$leye2;
		if (isset($vars[33]->Ciudad )){
		$cell3["v"]=$vars[33]->Ciudad;
		$cell3["f"]=number_format($vars[33]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($vars[45])){
		$cell4["v"]=$vars[45]->Ciudad;
		$cell4["f"]=number_format($vars[45]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($vars[57] )){
		$cell5["v"]=$vars[57]->Ciudad;
		$cell5["f"]=number_format($vars[57]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($vars[69] )){
		$cell6["v"]=$vars[69]->Ciudad;
		$cell6["f"]=number_format($vars[69]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		}
		$row8["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Octubre";
		$cell0["f"]="Octubre";
		$cell1["v"]=$vars[10]->Ciudad;
		$cell1["f"]=number_format($vars[10]->Ciudad, 2, '.', ',').$leye2;
		$cell2["v"]=$vars[22]->Ciudad;
		$cell2["f"]=number_format($vars[22]->Ciudad, 2, '.', ',').$leye2;
		if (isset($vars[34]->Ciudad )){
		$cell3["v"]=$vars[34]->Ciudad;
		$cell3["f"]=number_format($vars[34]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($vars[46])){
		$cell4["v"]=$vars[46]->Ciudad;
		$cell4["f"]=number_format($vars[46]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($vars[58] )){
		$cell5["v"]=$vars[58]->Ciudad;
		$cell5["f"]=number_format($vars[58]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($vars[70] )){
		$cell6["v"]=$vars[70]->Ciudad;
		$cell6["f"]=number_format($vars[70]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		}
		$row9["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Noviembre";
		$cell0["f"]="Noviembre";
		$cell1["v"]=$vars[11]->Ciudad;
		$cell1["f"]=number_format($vars[11]->Ciudad, 2, '.', ',').$leye2;
		$cell2["v"]=$vars[23]->Ciudad;
		$cell2["f"]=number_format($vars[23]->Ciudad, 2, '.', ',').$leye2;
		if (isset($vars[35]->Ciudad )){
		$cell3["v"]=$vars[35]->Ciudad;
		$cell3["f"]=number_format($vars[35]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($vars[47])){
		$cell4["v"]=$vars[47]->Ciudad;
		$cell4["f"]=number_format($vars[47]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($vars[59] )){
		$cell5["v"]=$vars[59]->Ciudad;
		$cell5["f"]=number_format($vars[59]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($vars[71] )){
		$cell6["v"]=$vars[71]->Ciudad;
		$cell6["f"]=number_format($vars[71]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		}
		$row10["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6);
		 
		$cell0["v"]="Diciembre";
		$cell0["f"]="Diciembre";
		$cell1["v"]=$vars[12]->Ciudad;
		$cell1["f"]=number_format($vars[12]->Ciudad, 2, '.', ',').$leye2;
		$cell2["v"]=$vars[24]->Ciudad;
		$cell2["f"]=number_format($vars[24]->Ciudad, 2, '.', ',').$leye2;
		if (isset($vars[36]->Ciudad )){
		$cell3["v"]=$vars[36]->Ciudad;
		$cell3["f"]=number_format($vars[36]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($vars[48])){
		$cell4["v"]=$vars[48]->Ciudad;
		$cell4["f"]=number_format($vars[48]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($vars[60] )){
		$cell5["v"]=$vars[60]->Ciudad;
		$cell5["f"]=number_format($vars[60]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($vars[72] )){
		$cell6["v"]=$vars[72]->Ciudad;
		$cell6["f"]=number_format($vars[72]->Ciudad, 2, '.', ',').$leye2;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		}
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


		$data=array("cols"=>$cols,"rows"=>$rows);
		//print_r($data);
		echo json_encode($data);
