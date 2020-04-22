
<table class="table" border="1" style="margin-top:50px;">
  <thead>
    <tr>
      <th scope="col">Articulo</th>
      <th scope="col">Categoria</th>
      <th scope="col">Proveedor</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>
  <tbody>
  @foreach($articulos as $articulo)
    @foreach($categorias as $cat)
    @foreach($proveedores as $pro)
        <tr>
        <th>{{$articulo->description}}</th>
        <td>{{$cat->description}}</td>
        <td>{{$pro->description}}</td>
        <td>{{$articulo->precio}}</td>
        </tr>
        @endforeach
        @endforeach
    @endforeach
  </tbody>
</table>
<a href="{{route('wel')}}">Volver a buscar</a>