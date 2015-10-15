{!!Html::script('https://www.google.com/jsapi' )!!}
{!!Html::script('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js')!!}
 <script type="text/javascript" src="https://www.google.com/jsapi" charset="UTF-8"></script>
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
{!!Html::script('js/coyuntura/chart5.js')!!}

@extends('layouts.principal')
@section ('content') 
<div class="col-xs-12 col-sm-6 col-md-8">
<DIV  ALIGN="center"><h3>Indicador global de la actividad económica (ITAEE)<br>Estado de Puebla<br>(Variación % anual respecto al mismo trimestre del año anterior)</h3></div>
<div id="top_x_div" style="width: 530px; height: 300px; overflow-x: scroll;overflow-y: hidden;"></div>
</div>
</body>
</html>	
@stop
