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
        <h1 style="text-align: center;font-weight: bold;">Factura Electrónica</h1>
    </div>
    <div>
        <h3>Numero de venta : <span>{{ $idboleta }}</span></h3>
        <h3>R.U.C. {{ $idboleta * 365249 }}</h3>
    </div>
    <div>
        <h3>Fecha : {{ date('d-m-y', strtotime($boleta->created_at)) }}</h3>
    </div>
    <div>
        <h3>Nombre de la Empresa : </h3><label>Pasteleria Pimentel</label>
        <h3>Ubicacion : </h3><label>Centro Lima Av. Bolivia 148 Int 552 553 Central (01) 425 -1191</label>
    </div>
    <div>
        <h3>Cliente : </h3><label>{{ $cliente }}</label>
    </div>
    <div>
        <h3>Vendedor : </h3><label>{{ $vendedor->nombre }} {{ $vendedor->apellidos }}</label>
    </div>
    <div>
        <table class="table table-light" style="text-align: center;border:solid 1px;width:100%">
            <thead class="thead-light">
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Importe x Producto</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < count($ArrayProductos); $i++)
                    <tr>
                        <td>{{ $ArrayProductos[$i] }}</td>
                        <td>{{ $Arraycantidades[$i] }}</td>
                        <td>{{ $ArrayPrecio[$i] }}</td>
                        <td>S/{{ $ArrayImporte[$i] }}</td>
                    </tr>
                @endfor
            </tbody>
        </table>
        <div style="text-align: right;margin-top: 20px;">
            <label>Importe Total : S/{{ $importeTotal }}</label>
        </div>
    </div>
</body>

</html>
