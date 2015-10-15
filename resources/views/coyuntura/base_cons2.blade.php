<?php

			$col1=array();
			$col1["label"]="Trimestre";
			$col1["type"]="string";
			
			$col2=array();
			$col2["label"]="Estado de Puebla\n Millones de Dolares";
			$col2["type"]="number";
			
		
			
			$col8=array();
			$col9=array();
			$col8["id"]= "";
			$col8["role"]= "tooltip";
			$col9["role"]= "tooltip";
			$col8["type"]= "string";
			$col8["p"]=$col9;
			$cols = array($col1,$col2);
			
			$rows=array();
		
			$i=0;
			?>
			@foreach ($vars as $vari)
			
			<?php
			$variable=$vari->Anio;
			$variable1=$vari->Trimestre;
			$cell0["v"]=''.$variable1.("\n").($variable).'';
			if(empty($vari->Total )){
			$cell1["v"]="null";
			}else{
			$cell1["v"]=number_format($vari->Total, 2, '.', ',');
			$cell1["f"]=number_format($vari->Total, 2, '.', ',');
			};		
				
			
			$row[$i]["c"]=array($cell0,$cell1);
			
			array_push($rows,$row[$i]);
			$i=$i+1;
			?>
			@endforeach
		
		<?php
		$data=array("cols"=>$cols,"rows"=>$rows);
		
		echo json_encode($data);
		?>		