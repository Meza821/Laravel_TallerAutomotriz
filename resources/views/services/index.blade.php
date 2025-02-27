@extends('layouts.app')

@section('content')
    <h1>Listado de servicios</h1>

    @if(session('success'))
        <div class="alert alert-sucess">{{session('sucess')}}</div>
    @endif

    <a href="{{route('services.create') }}" class="btn btn-primary">Crear servicio</a>
    <table class="table table-bordered mt3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @forelse($services as $service)
                <tr>
                    <td>{{$service->id}}</td>
                    <td>{{$service->nombre}}</td>
                    <td>{{$service->descripcion}}</td>
                    <td>{{$service->precio}}</td>
                    <td>

                        <a href="{{route('services.edit', $service->id)}}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{route('services.destroy', $service->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger"
                                onclick="return confirm(' ¿Seguro de que deseas eliminar este servicio? ')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No hay servicios registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!--Paginación-->
    {{$services->links() }}
@endsection