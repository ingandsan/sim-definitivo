{!!Html::script('https://www.google.com/jsapi' )!!}
{!!Html::script('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js')!!}
 <script type="text/javascript" src="https://www.google.com/jsapi" charset="UTF-8"></script>
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
{!!Html::script('js/coyuntura/chart17.js')!!}

@extends('layouts.principal')
@section ('content') 
<div ALIGN="center">
<DIV  ALIGN="center"><font size="4">Llegada de turistas<br>Ciudad de Puebla</font><br>(Número de Personas)</div>
<div ALIGN="center" id="top_x_div" style="width: 600px; height: 500px; overflow-x: scroll;overflow-y: hidden;"></div>
</div>
<caption align='center'><button align='center'><a href='/impre/45/' target='_blank'><IMG SRC='/images/excel-xls-icon.png' WIDTH='50px' height='50px'></a></button><button align='center' onclick='mos()'><IMG SRC='/images/DEF.png' WIDTH='50px' height='50px'></button><button align='center' onclick='mostrardiv()'><IMG SRC='/images/meta.png' WIDTH='50px' height='50px'></button></caption>
</body>
</html>	
@stop

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
<table id="flotante" style="display:none;" ALIGN="center">
<tr>
<td>
<table WIDTH="100%">
<tr>
<tr><b>METADATO:</b></tr>
<td>Variable:</td>
<?php
		$vars=\sim\meta::where('id_variable', '=', 45)->take(1000)->get();
		?>
		@foreach ($vars as $vari)
		<?php
		echo "<td>". $vari->var . "</td>";
		
?>

</tr>
<tr><td>Unidad de Medida:</td>
<?php
		
		echo "<td>". $vari->um  . "</td>";
		
?>

</tr>
<tr><td>Tema:</td>
<?php
		
		echo "<td>". $vari->tema . "</td>";
		
?>
</tr>
<tr><td>Subtema:</td>
<?php
		
		echo "<td>". $vari->subtema . "</td>";
		
?>
</tr>
<tr><td>Tipo:</td>
<?php
		
		echo "<td>". $vari->tip_var . "</td>";
		
?>
</tr>
<tr><td>Interpretación:</td>
<?php
		
		echo "<td>". $vari->inter . "</td>";
		
?>
</tr>
<tr><td>Periodicidad:</td>
<?php
		
		echo "<td>". $vari->per . "</td>";
		
?>
</tr>
<tr><td>Cobertura Temporalidad Nacional:</td>
<?php
		
		echo "<td>". $vari->Cob_tem_nac . "</td>";
		
?>
</tr>
<tr><td>Cobertura Temporalidad Estatal:</td>
<?php
		
		echo "<td>". $vari->Cob_tem_est . "</td>";
		
?>
</tr>
<tr><td>Cobertura Geográfica:</td>
<?php
		
		echo "<td>". $vari->cob_geo . "</td>";
		
?>
</tr>
<tr><td>Fuente:</td>
<?php
		
		echo "<td>". $vari->fuente . "</td>";
		
?>
</tr>
<tr><td>Nota:</td>
<?php
		echo "<td>". $vari->nota . "</td>";
		
?>
@endforeach
</tr>
</table>
<a href="javascript:cerrar();"><IMG SRC="/images/cerrar.png" WIDTH='50px' height='30px'></a> 
</td> 
</tr> 
</table> 




<table id="flo" style="display:none;" ALIGN="center">
<tr>
<td>
<B>DEFINICIÓN</B>:
<table WIDTH="100%">

<?php
		$vars=\sim\def::where('id_variable', '=', 45)->take(1000)->get();
		?>
			@foreach ($vars as $vari)
			<?php
		
		echo "<tr WIDTH='100%'><td WIDTH='50%' ALIGN='justify'>". $vari->DATO . ":</td><td WIDTH='50%' ALIGN='justify'>". $vari->DEF . "</tr></td>";			
		
?>
@endforeach
</tr>
</table>
<a href="javascript:cer();" ><IMG SRC="/images/cerrar.png" WIDTH='50px' height='30px'></a> 
</td> 
</tr> 
</table> 