<h1>{{$fruta->nombre}}</h1>
<p>
{{$fruta->descripcion}}
</p>

<a href="{{action('FrutaController@delete',['id'=>$fruta->id])}}">Eliminar</a>
<a href="">Actualizar</a>