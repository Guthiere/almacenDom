<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:ver-departamento | crear-departamento | editar-departamento | borrar-departamento',['only'=>['index']]);
        $this->middleware('permission:crear-departamento' ,['only'=>['create','store']]);
        $this->middleware('permission:editar-departamento' ,['only'=>['edit','update']]);
        $this->middleware('permission:borrar-departamento' ,['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $departamentos = Departamento::paginate(5);
        return view('admin.departamentos.index', compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.departamentos.create');
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
            'descDepartamento' => 'required',

        ]);

        Departamento::create($request->all());

        return redirect()->route('deptos.index');
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
    public function edit($id)
    {
        //
        $departamentos = Departamento::find($id);
        return view('admin.departamentos.edit',compact('departamentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        request()->validate([
            'descDepartamento' => 'required',

        ]);

        $departamento = Departamento::find($id)->update($request->all());

        return redirect()->route('deptos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Departamento::find($id)->delete();
        return redirect()->route('deptos.index');
    }
}
