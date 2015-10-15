hola


<table>
<tr><td>Variable:</td>
<?php
		$vars=\sim\meta::where('id_variable', '=', $variable)->take(1000)->get();
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
