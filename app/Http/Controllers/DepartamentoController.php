<?php

namespace App\Http\Controllers;

use App\Http\Resources\DepartamentoIndexResource;
use App\Http\Resources\DepartamentoShowResource;
use App\Models\DepartamentoModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():JsonResponse
    {
       $departamentos = DepartamentoModel::all();
       return response()->json(['success'=>true,"data"=>DepartamentoIndexResource::collection($departamentos)],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DepartamentoModel $request):JsonResponse
    {
        $departamento = DepartamentoModel::create( $request->all());
        return response()->json(["created"=>true,"data"=>$departamento,201]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $name):JsonResponse
    {
        try {
            $departamento = DepartamentoModel::where('nombre', $name)->firstOrFail();
            return response()->json(['success'=>true,"data"=>new DepartamentoShowResource($departamento)],200);
        }
        catch (\Exception $e) {
            return response()->json(['success'=>false,'error' => 'No se encontro la informacion'], 404);
        } 
        catch (\Throwable $th) {
            return response()->json(['success'=>false,'error' => 'Ocurrió un error inesperado'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $name):JsonResponse
    {
        try {
            $departamento = DepartamentoModel::where('nombre', $name)->firstOrFail();            
            $departamento->fill($request->all());
            $departamento->save();
            return response()->json(["data"=>$departamento],202);
        }
        catch (\Exception $e) {
            return response()->json(['error' => 'No se encontro la informacion'], 404);
        } 
        catch (\Throwable $th) {
            return response()->json(['error' => 'Ocurrió un error inesperado'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $name):JsonResponse
    {
        try {
            $departamento = DepartamentoModel::where('nombre', $name)->firstOrFail();
            $departamento->delete();
            return response()->json(["data"=>$name],200);
        }
        catch (\Exception $e) {
            return response()->json(['error' => 'No se encontro la informacion'], 404);
        } 
        catch (\Throwable $th) {
            return response()->json(['error' => 'Ocurrió un error inesperado'], 500);
        }
    }
}