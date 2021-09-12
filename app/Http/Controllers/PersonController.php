<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personas;

class PersonController extends Controller
{

    //Se hace los Join con las tablas relacionadas para que traigan los nombres correspondientes

    public function index(){
        $users = personas::select('tipo_documens.TipoDocumen','profecions.profecions','nivel_educativos.NivelEducativo','personas.identificacion','personas.nombre','personas.apellido','personas.direccion','personas.telefono','personas.email','personas.estado','personas.created_at','personas.updated_at')
        ->join('tipo_documens', 'personas.tipo_documens_id', '=', 'tipo_documens.id')
        ->join('profecions', 'personas.profecions_id', '=', 'profecions.id')
        ->join('nivel_educativos', 'personas.nivel_educativos_id', '=', 'nivel_educativos.id')
        ->where('estado',1)
        ->paginate(20);
        return response()->json(['users' => $users],201);
    }


    public function store(Request $request){
        try{
            $person = new personas();

            $person->identificacion  = $request->identificacion;
            $person->nombre = $request->nombre;
            $person->apellido = $request->apellido;
            $person->direccion = $request->direccion;
            $person->telefono = $request->telefono;
            $person->email = $request->email;
            $person->estado = $request->estado;
            $person->tipo_documens_id = $request->tipo_documens_id;
            $person->profecions_id = $request->profecions_id;
            $person->nivel_educativos_id = $request->nivel_educativos_id;


            $person->save();

            return $this->success_response($person);

        }catch(\Throwable $th){
            return $this->error_response($th->getmessage());
        }
    }


    public function update(Request $request){
        try {

            $person = personas::find($request->id); //Busca en personas

            $person->identificacion  = $request->identificacion;
            $person->nombre = $request->nombre;
            $person->apellido = $request->apellido;
            $person->direccion = $request->direccion;
            $person->telefono = $request->telefono;
            $person->email = $request->email;

            $person->tipo_documens_id = $request->tipo_documens_id;
            $person->profecions_id = $request->profecions_id;
            $person->nivel_educativos_id = $request->nivel_educativos_id;


            $person->save();

            return $this->success_response($person);

        } catch (\Throwable $th) {
            return $this->error_response($th->getmessage());
        }
    }


    public function state(Request $request){
        try {
        $person = personas::find($request->id);
        $person->estado = $request->estado;
        $person->save();

        return $this->success_response($person);

        } catch (\Throwable $th) {
            return $this->error_response($th->getmessage());
        }
    }

    public function error_response($error){
        return response()->json([
            'message' => 'error',
            'data' => $error
        ],501);
    }

    public function success_response($data){
        return response()->json([
            'message' => 'success',
            'data' => $data
        ],201);

    }
}
