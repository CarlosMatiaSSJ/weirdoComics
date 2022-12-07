<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <div class="container display-center">
        <h1>Weird'oCómics</h1>
       

    <h2>Ticket de Venta</h2>
    <table>
        <tr>
          <th>Descripción:</th>
          <th>Cantidad:</th> 
          <th>Precio Unitario:</th>
        </tr>
        @foreach ($consultaVenta as $venta)
        <tr>
          <td>{{ $venta->descripcion }}</td>
          <td>{{ $venta->cantidad }}</td> 
          <td>{{ $venta->precio }}</td>
        </tr>
        @endforeach
    </table>
        
    


       
       

    <h3>Total = {{session('totalVenta')}}</h3>

    </div>
    



</body>
</html>