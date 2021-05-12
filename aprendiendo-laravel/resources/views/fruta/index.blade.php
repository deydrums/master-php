<h1>Listado de frutas</h1>

<ul>
    @foreach($frutas as $frutas) 
        <li>{{$frutas->nombre}}</li>
    @endforeach
</ul>