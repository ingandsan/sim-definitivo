
<B>DEFINICIÓN</B>:
<table>

<?php
		$vars=\sim\def::where('id_variable', '=', $variable)->take(1000)->get();
		?>
			@foreach ($vars as $vari)
			<?php
		
		echo "<tr WIDTH='100%'><td WIDTH='50%' ALIGN='justify'>". $vari->DATO . ":</td><td WIDTH='50%' ALIGN='justify'>". $vari->DEF . "</tr></td>";			
		
?>
@endforeach
</tr>
</table>
