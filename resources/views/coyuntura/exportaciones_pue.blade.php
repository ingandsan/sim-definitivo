{!!Html::script('https://www.google.com/jsapi' )!!}
{!!Html::script('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js')!!}
 <script type="text/javascript" src="https://www.google.com/jsapi" charset="UTF-8"></script>
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 <script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1.1',language: 'en','packages':['line', 'corechart']}]}"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>     
{!!Html::script('js/coyuntura/chart20.js')!!}

@extends('layouts.principal')
@section ('content') 
<div class="col-xs-12 col-sm-6 col-md-8">
<DIV ALIGN="center"><h3>Exportaciones Estado de Puebla<br>Por grandes grupos de actividad económica<br>Millones de dolares</h3></div>
<div id="top_x_div" style="width: 530px; height: 300px; "></div>
</div>
</body>
</html>	
@stop
