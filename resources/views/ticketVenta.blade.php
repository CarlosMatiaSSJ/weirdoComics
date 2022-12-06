<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket de Venta</title>

     <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css\styles.css')}}">
  <script src="{{asset('js/funciones.js')}}"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container display-center">
        <h1>Weird'oCómics</h1>
       

    <h2>Ticket de Venta</h2>

    <thead>
        <tr>
            <td>Cantidad:</td>
            <td>Descripción:</td>
            <td>Precio Unitario:</td>
           
        </tr>
    </thead>


    @foreach ($consultaVenta as $venta)
        <tbody>
            <tr>

                <td>{{ $venta->descripcion }}</td>
                <td>{{ $venta->cantidad }} </td>
                <td>{{ $venta->precio }} </td>

            </tr>


        </tbody>
        


    </table>
    @endforeach

    <h3>Total = {{session('totalVenta')}}</h3>

    </div>
    



</body>
</html>