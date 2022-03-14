<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tecnologia;
use Illuminate\Http\Request;

class TecnologiaController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:ver-tecnologia | crear-tecnologia | editar-tecnologia | borrar-tecnologia',['only'=>['index']]);
        $this->middleware('permission:crear-tecnologia' ,['only'=>['create','store']]);
        $this->middleware('permission:editar-tecnologia' ,['only'=>['edit','update']]);
        $this->middleware('permission:borrar-tecnologia' ,['only'=>['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tecnologias = Tecnologia::get();
        return view('admin.tecnologia.index',compact('tecnologias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tecnologia.create');
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
            'descTecnologia' => 'required',

        ]);

        Tecnologia::create($request->all());

        return redirect()->route('tecnos.index');
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
        $tecnologias = Tecnologia::find($id);
        return view('admin.tecnologia.edit',compact('tecnologias'));
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
            'descTecnologia' => 'required',

        ]);

        $tecnologias = Tecnologia::find($id)->update($request->all());

        return redirect()->route('tecnos.index');
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
        Tecnologia::find($id)->delete();
        return redirect()->route('tecnos.index');
    }
}
