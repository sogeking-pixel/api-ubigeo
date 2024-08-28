<?php

namespace App\Http\Controllers;

use App\Http\Requests\DistritoRequest;
use App\Models\DepartamentoModel;
use App\Models\DistritoModel;
use App\Models\ProvinciaModel;
use Illuminate\Http\JsonResponse;


class DistritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $departamento_name,string $provincia_name): JsonResponse
    {
        //findOrFail
        try {
            
            $departamento = DepartamentoModel::where('nombre', $departamento_name)->firstOrFail();
            $provincia = ProvinciaModel::where('nombre', $provincia_name)->firstOrFail();
            $provinciaExiste = $departamento->provincias()->where('nombre', $provincia->nombre)->exists();
            
            if(!$provinciaExiste){
                throw new \Exception('No existe esa provincia en ' . $departamento->nombre);
            }
            
            $distritos =$provincia->distritos()->get();
            return response()->json($distritos,200);
            
        } catch (\Exception $e) {
            return response()->json(['error' => 'No se encontro la informacion'], 404);
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Ocurrió un error inesperado'], 500);
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DistritoRequest $request, string $departamento_name, string $provincia_name): JsonResponse
    {
       try {
            $departamento = DepartamentoModel::where('nombre', $departamento_name)->firstOrFail();
            $provincia = ProvinciaModel::where('nombre', $provincia_name)->firstOrFail();
            
            $provinciaExiste = $departamento->provincias()->where('nombre', $provincia->nombre)->exists();            
            if(!$provinciaExiste){
                throw new \Exception('No existe esa provincia en ' . $departamento->nombre);
            }
            
            $data = $request->all();
            $data['provincia_id'] = $provincia->id;
            
            $distrito = DistritoModel::create( $data);
            
            return response()->json(["created"=>true,"data"=>$distrito,201]);
            
        } catch (\Exception $e) {
            return response()->json(['error' => "No se encontro la informacion"], 404);
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Ocurrió un error inesperado'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $name)
    {
        
        try {
            $distrito = DistritoModel::where('nombre', $name)->firstOrFail();
            return response()->json(["data"=>$distrito],200);
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
    public function update(DistritoRequest $request, string $name)
    {
        try {
            $distrito = DistritoModel::where('nombre', $name)->firstOrFail();
            
            //fill para actualizar
            $distrito->fill($request->all());

            $distrito->save();

            return response()->json(["data"=>$distrito],202);
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
    public function destroy(string $name)
    {
         try {
            $distrito = DistritoModel::where('nombre', $name)->firstOrFail();
            $distrito->delete();
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