<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Departamento;
use App\Models\Distrito;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */// Obtener todos los clientes
    public function index()
    {
        $clientes = Clientes::orderBy('id', 'desc')->paginate(10);

        return view('cliente.indexCliente', compact('clientes'));

    }


    public function getDistritos($departamentoId)
    {
        $distritos = Distrito::where('cod_departamento', $departamentoId)->get();
        return response()->json($distritos);
    }
    public function create()
    {
        $departamentos = Departamento::all();
        return view('cliente.createCliente', compact('departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'tipo_persona' => 'required|string|max:50',
            'direccion' => 'required|string|max:255',
            'departamento' => 'required|string|max:255',
            'municipio' => 'required|string|max:255',
            'numero_registro' => 'required|string|max:255',
            'nit' => 'required|string|max:255',
            'dui' => 'required|string|max:10',
            'giro' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        $cliente = Clientes::create($validated);

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente creado correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Clientes::findOrFail($id);
        return response()->json($cliente);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = Clientes::findOrFail($id);
        return view('cliente.editCliente', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Clientes::findOrFail($id);
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'tipo_persona' => 'required|string|max:50',
            'direccion' => 'nullable|string|max:255',
            'departamento' => 'required|string|max:255',
            'municipio' => 'required|string|max:255',
            'numero_registro' => 'nullable|string|max:255',
            'nit' => 'nullable|string|max:255',
            'dui' => 'nullable|string|max:10',
            'giro' => 'nullable|string|max:255',
            'telefono' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        $datos = $validated;
        $campos = ['nombre', 'direccion', 'departamento', 'numero_registro', 'nit', 'giro'];

        //Reemplazamos valores vacios por "NA"
        foreach ($campos as $campo) {
            if (empty($datos[$campo])) {
                $datos[$campo] = 'NA';
            }
        }

        $cliente->update($datos);


        return redirect()->route('clientes.index')
            ->with('success', 'Cliente actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Clientes::findOrFail($id);
        $cliente->delete();
        return redirect()->route('clientes.index')
            ->with('success', 'Cliente eliminado correctamente');
    }
}
