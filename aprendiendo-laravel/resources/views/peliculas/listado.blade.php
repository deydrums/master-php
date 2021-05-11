<!-- Imprimir por pantalla -->
<h1>{{$titulo}}</h1>
<h2>{{$listado[1]}}</h2>
<p>{{date('Y-m-d')}}</p>

<!--Comentarios-->
<!--Esto es un comentario HTML-->
<?php 
//Esto es un comentario PHP
?>
{{--Esto es un comentario BLADE --}}

<!--Mostrar si existe-->
<?=isset($director)? $director: "No hay director"; ?>
<br>
{{$director ?? 'No hay director'}}
<br>
<!--Condicionales-->
@if($titulo && count($listado) >= 5)
    <h1>El titulo existe y es este: {{$titulo}} y el listado es mayor a 5<h1>
@elseif($titulo)
    <h1>El titulo existe y el listado no es mayor a 5</h1>
@else
    <h1>El titulo no existe</h1>
@endif