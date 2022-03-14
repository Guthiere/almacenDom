<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ubicacion;
use Illuminate\Http\Request;

class UbicacionController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:ver-ubicacion | crear-ubicacion | editar-ubicacion | borrar-ubicacion',['only'=>['index']]);
        $this->middleware('permission:crear-ubicacion' ,['only'=>['create','store']]);
        $this->middleware('permission:editar-ubicacion' ,['only'=>['edit','update']]);
        $this->middleware('permission:borrar-ubicacion' ,['only'=>['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ubicasiones = Ubicacion::paginate(5);
        return view('admin.ubicasiones.index',compact('ubicasiones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.ubicasiones.create');
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
            'descUbicacion' => 'required',

        ]);

        Ubicacion::create($request->all());

        return redirect()->route('ubic.index');
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
        $ubicasiones = Ubicacion::find($id);
        return view('admin.ubicasiones.edit',compact('ubicasiones'));
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
            'descUbicacion' => 'required',

        ]);
        $ubicasiones = Ubicacion::find($id)->update($request->all());

        return redirect()->route('ubic.index');

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
        Ubicacion::find($id)->delete();
        return redirect()->route('ubic.index');
    }
}
