<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\StoreServiceRequest;
class ServiceController extends Controller
{
    /**
     * Mostrar el listado de servicios.
     */
    public function index()
    {
        $services = Service::orderBy('id', 'desc')->paginate(10);
        return view('services.index', compact('services'));
    }

    /**
     * Mostrar el formulario para crear un nuevo servicio.
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Guardar un servicio recién creado.
     */
    public function store(StoreServiceRequest $request)
    {
        //Ya se validaron los datos con el metodo StoreServiceRequest :p

        Service::create($request->validated());

        //Redireccionar con mensaje
        return redirect()->route('services.index')
            ->with('success', 'servicio creado correctamente');

    }

    /**
     * Mostrar un servicio en específico (opcional).
     */
    // public function show(string $id)
    // {
    //     $service = Service::find0rFail($id);
    //     return view('services.show', compact('service'));
    // }

    /**
     * Mostrar el formulario para editar un servicio.
     */
    public function edit(string $id)
    {
        $service = Service::findOrFail($id);
        return view('services.edit', compact('service'));
    }

    /**
     * Actualizar un servicio existente.
     */
    public function update(Request $request, string $id)
    {
        //Validar
        $request->validate([
            'nombre' => 'required|string|max:100',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric|min:0',
        ]);


        // Buscar y actualizar
        $service = Service::findOrFail($id);
        $service->update($request->all());

        return redirect()->route('services.index')
            ->with('sucess', 'servicio actualizado correctamente');
    }

    /**
     * Eliminar un servicio.
     */
    public function destroy(string $id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('services.index')
            ->with('sucess', 'Servicio eliminado correctamente');
    }


}
