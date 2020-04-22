<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
   
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>

    
    <form action="{{ route('buscar')}}" method="post">
        @csrf
        <label for="" >Nombre</label>
        <input type="text" name="name" id="name" style="margin-top:20px;">
        <br>
        <label for="">Categoria</label>
        <input type="text" name="categoria" id="categoria" style="margin-top:20px;">
        <br>
        <label for="">Proveedorr</label>
        <input type="text" name="proveedor" id="proveedor" style="margin-top:20px;">
        <br>
        <label for="">Precio Minimo</label>
        <input type="text" name="precio_min" id="precio_min" style="margin-top:20px;">
        <br>
        <label for="">Precio Maximo</label>
        <input type="text" name="precio_max" id="precio_mix" style="margin-top:20px;">
        <br>
        <button class="btn btn-dark" id="refresh" href>Buscar</button>
    </form>
    <table class="table" border="1" style="margin-top:50px;">
  <thead>
    <tr>
      <th scope="col">Articulo</th>
      <th scope="col">Categoria</th>
      <th scope="col">Proveedor</th>
      <th scope="col">Precio Min</th>
      <th scope="col">Precio Max</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th></th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
    </body>
</html>
