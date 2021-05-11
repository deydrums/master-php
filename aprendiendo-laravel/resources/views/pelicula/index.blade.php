<h1>{{$titulo}}</h1>
<p>(Accion index del controlador PeliculasController)</p>
@if(isset($pagina))
    <h3> La pagina es: {{$pagina}}</h3>
@endif

<a href="{{action('PeliculaController@detalle')}}">Ir al detalle</a>
<br>
<a href="{{route('detalle.pelicula',['id'=>12])}}">Ir al detalle</a>