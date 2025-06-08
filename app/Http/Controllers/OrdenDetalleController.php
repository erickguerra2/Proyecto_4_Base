namespace App\Http\Controllers;

use App\Models\VistaOrdenDetalle;
use App\Models\OrdenReparacion;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class OrdenDetalleController extends Controller
{
    public function index()
    {
        $ordenes = VistaOrdenDetalle::all();
        return view('ordenes.index', compact('ordenes'));
    }

    public function create()
    {
        $vehiculos = Vehiculo::all();
        return view('ordenes.create', compact('vehiculos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_vehiculo' => 'required|exists:vehiculo,id_vehiculo',
            'estado' => 'required|string|max:100',
            'total_estimado' => 'required|numeric|min:0',
        ]);

        OrdenReparacion::create($request->all());
        return redirect()->route('ordenes.index')->with('success', 'Orden creada correctamente.');
    }

    public function edit($id)
    {
        $orden = OrdenReparacion::findOrFail($id);
        $vehiculos = Vehiculo::all();
        return view('ordenes.edit', compact('orden', 'vehiculos'));
    }

    public function update(Request $request, $id)
    {
        $orden = OrdenReparacion::findOrFail($id);
        $orden->update($request->all());
        return redirect()->route('ordenes.index')->with('success', 'Orden actualizada.');
    }

    public function destroy($id)
    {
        $orden = OrdenReparacion::findOrFail($id);
        $orden->delete();
        return redirect()->route('ordenes.index')->with('success', 'Orden eliminada.');
    }
}
