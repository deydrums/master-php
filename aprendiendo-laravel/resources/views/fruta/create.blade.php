<h1>Crear una fruta</h1>
<form action="{{action('FrutaController@save')}}" method="post">
    {{csrf_field()}}
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">
    <br>
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion">
    <br>
    <label for="precio">Precio</label>
    <input type="number" name="precio">
    <br>
    <input type="submit" value="Guardar">
</form>