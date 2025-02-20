<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $texto = $request->get('texto');

        $registros = User::where('name','LIKE','%'.$texto.'%')->orWhere('id','LIKE','%'.$texto.'%')->orderBy('name','asc')->paginate(10);
       return view('user.index',compact(['registros','texto']));
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $registro = new User();
        $registro->name = $request->input('nombre');
        $registro->email = $request->input('email');
        $registro->password = bcrypt($request->input('password'));
        $registro->save();

        return redirect()->route('user.index')->with('mensaje','Nuevo Usuario '.$registro->nombre.' agerado correctamente');
        



    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $registro = User::findOrFail($id);
        return view('user.edit', compact('registro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $registro = User::findOrFail($id);
        $registro->name = $request->input('nombre');
        $registro->email = $request->input('email');
        if ($request->filled('password')) {
            $registro->password = bcrypt($request->input('password'));
        }
        $registro->save();
        return redirect()->route('user.index')->with('mensaje','Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $registro = User::findOrFail($id);
            $registro->delete();
            return redirect()->route('user.index')->with('mensaje','Registro '.$registro->nombre.' eliminado con exito');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('user.index')->with('error','Error al eliminar el registro');
        }
    }
}