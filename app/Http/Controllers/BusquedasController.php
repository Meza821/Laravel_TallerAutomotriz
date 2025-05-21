<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Service;
use Illuminate\Http\Request;

class BusquedasController extends Controller
{
   public function buscarServicio(Request $request)
   {
      $termino = $request->get('term');
      $resultados = Service::where('nombre', 'LIKE', '%' . $termino . '%')
         ->take(10)
         ->get(['id', 'nombre', 'precio', 'descripcion']);

         return response()->json($resultados);
   }
   public function buscarServicioPorCodigo(Request $request)
   {
      $termino = $request->get('term');
      $resultados = Service::where('id', 'LIKE', '%' . $termino . '%')
         ->take(10)
         ->get(['id', 'nombre', 'precio', 'descripcion']);

         return response()->json($resultados);
   }


   public function buscarCliente(Request $request)
   {
      $termino = $request->get('term');
      $resultados = Clientes::where('dui', 'LIKE', '%' . $termino . '%')
         ->take(10)
         ->get();

         return response()->json($resultados);
   }


}

