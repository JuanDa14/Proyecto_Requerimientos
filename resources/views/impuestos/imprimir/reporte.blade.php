<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de venta</title>
</head>

<body>
    <div>
        <h1 style="text-align: center;font-weight: bold;">Reporte de Impuestos del {{$año}}</h1>
    </div>
    <div>
        <h3>Nombre de la Empresa : </h3><label>Pasteleria Pimentel</label>
        <h3>Ubicacion : </h3><label>Centro Lima Av. Bolivia 148 Int 552 553 Central (01) 425 -1191</label>
    </div>
    <div>
        <table class="table table-light" style="text-align: center;border:solid 1px;width:100%">
            <thead class="thead-light">
                <tr>
                    <th>Nombre del contador</th>
                    <th>Dni del contador</th>
                    <th>Fecha</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($datos as $item)
                    <tr>
                        <td>{{ $item->contador }}</td>
                        <td>{{ $item->dnicontador }}</td>
                        <td>{{ $item->fecha }}</td>
                        <td>S/ {{ $item->monto}}</td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        <h3>Importe Total :  <span>{{$total}}</span></h3>
    </div>
</body>

</html>
