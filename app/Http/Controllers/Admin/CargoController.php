<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cargo;
use App\Models\Departamento;

class CargoController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:ver-cargo | crear-cargo | editar-cargo | borrar-cargo',['only'=>['index']]);
        $this->middleware('permission:crear-cargo' ,['only'=>['create','store']]);
        $this->middleware('permission:editar-cargo' ,['only'=>['edit','update']]);
        $this->middleware('permission:borrar-cargo' ,['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cargos = Cargo::paginate(5);
        return view('admin.cargos.index', compact('cargos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.cargos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'descripcion' => 'required',

        ]);

        Cargo::create($request->all());

        return redirect()->route('cargos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cargo $cargo)
    {
        //
        return view('admin.cargos.edit',compact('cargo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cargo $cargo)
    {
        //
        request()->validate([
            'descripcion' => 'required',
        ]);

        $cargo->update($request->all());

        return redirect()->route('cargos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cargo $cargo)
    {
        //
        $cargo->delete();
        return redirect()->route('cargos.index');
    }
}
