<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProvinciaRequest;
use App\Models\DepartamentoModel;
use App\Models\ProvinciaModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class provinciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $departamento_name): JsonResponse
    {
        try {
            $departamento = DepartamentoModel::where('nombre', $departamento_name)->firstOrFail();
           
            $provincias = $departamento->provincias()->get(); 
            
            return response()->json($provincias,200);
            
        } catch (\Exception $e) {
            return response()->json(['error' => "No se encontro la informacion"], 404);
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Ocurrió un error inesperado'], 500);
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProvinciaRequest $request, string $departamento_name): JsonResponse
    {
        try {
            $departamento = DepartamentoModel::where('nombre', $departamento_name)->firstOrFail();
           
            $data = $request->all();
            $data['departamento_id'] = $departamento->id;
            $provincia = ProvinciaModel::create( $data);
            
            return response()->json(["created"=>true,"data"=>$provincia,201]);
            
        } catch (\Exception $e) {
            return response()->json(['error' => "No se encontro la informacion"], 404);
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Ocurrió un error inesperado'], 500);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $name): JsonResponse
    {
        try {
            $provincia = ProvinciaModel::where('nombre', $name)->firstOrFail();
            return response()->json(["data"=>$provincia],200);
        }
        catch (\Exception $e) {
            return response()->json(['error' => 'No se encontro la informacion'], 404);
        } 
        catch (\Throwable $th) {
            return response()->json(['error' => 'Ocurrió un error inesperado'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $name): JsonResponse
    {
        try {
            $provincia = ProvinciaModel::where('nombre', $name)->firstOrFail();            
            $provincia->fill($request->all());
            $provincia->save();
            return response()->json(["data"=>$provincia],202);
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
    public function destroy(string $name): JsonResponse
    {
        try {
            $provincia = ProvinciaModel::where('nombre', $name)->firstOrFail();
            $provincia->delete();
            return response()->json(["message"=>"Se elimino ".$name],200);
        }
        catch (\Exception $e) {
            return response()->json(['error' => 'No se encontro la informacion'], 404);
        } 
        catch (\Throwable $th) {
            return response()->json(['error' => 'Ocurrió un error inesperado'], 500);
        }
    }
}