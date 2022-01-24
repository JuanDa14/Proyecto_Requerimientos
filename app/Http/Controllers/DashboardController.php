<?php

namespace App\Http\Controllers;

use App\Models\Boleta;
use App\Models\DetalleBoleta;
use App\Models\Empleado;
use App\Models\Impuesto;
use App\Models\OrdenCompra;
use App\Models\Producto;
use App\Models\Reporteventa;
use App\Models\User;
use App\Models\Ventaempleado;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:entrar.dashboard')->only('dashboard');
    }

    public function dashboard()
    {
        $numv = count(Boleta::all());
        $nume = count(User::all()->where('estado','!=','Eliminado'));
        $nump = count(Producto::all()->where('estado','!=','Agotado'));
        $numoc = count(OrdenCompra::all()->where('estado','=','Archivada'));
        $numreporte = "";
        $ganancias = DetalleBoleta::sum('importe');
        $impuestos = Impuesto::sum('monto');
        $empleadoMes = "";

        $ordenCompras = OrdenCompra::latest()->take(7)->get();
        $empleados = Empleado::latest()->take(4)->where('idtipoEmpleado','!=',1)->orderByDesc('id')->get();
        $ventas = Boleta::all();
        $tamaño = 12;
        $data = [];
        $año = getdate();
        for ($i = 0; $i < 12; $i++) {
            $venta = count(Boleta::whereMonth('created_at', $i + 1)->whereYear('created_at', $año["year"])->get());
            $data[$i] = $venta;
        }
        return view('dashboard', compact('numv', 'nume', 'nump', 'numoc', 'ordenCompras', 'data', 'tamaño', 'empleados', 'ganancias', 'numreporte', 'empleadoMes', 'impuestos'));
    }
}
