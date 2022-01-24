
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte Mensual</title>
</head>

<body>
    <div>
        <h1 style="text-align: center;font-weight: bold;">Reporte de ventas de {{$meses[$mes]}} del {{$año}} </h1>
    </div>
    <div>
        <h3>Nombre de la Empresa : </h3><label>Pasteleria Pimentel</label>
        <h3>Ubicacion : </h3><label>Centro Lima Av. Bolivia 148 Int 552 553 Central (01) 425 -1191</label>
    </div>
    <div>
        <h4 id="importe">Importe Total: {{$importeTotal[0]->importe}}</h4>
    </div>
    <div>
            <table class="table table-light" style="text-align: center;border:solid 1px;width:100%">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Empleado</th>
                                    <th>Cliente</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Importe Vendido</th>
                                    <th>Mes</th>
                                    <th>Año</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datos as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->empleado}}</td>
                                        <td>{{$item->cliente}}</td>
                                        <td>{{$item->producto}}</td>
                                        <td>{{$item->cantidad}}</td>
                                        <td>{{$item->precio}}</td>
                                        <td>{{$item->importe}}</td>
                                        <td>{{$meses[$mes]}}</td>
                                        <td>{{$año}}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
    </div>
</body>

</html>


