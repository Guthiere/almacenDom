@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Ubicasión</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>
                                @foreach ($errors->all() as $error)
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif




                    <form action="{{route('ubic.update',$ubicasiones->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="descUbicacion">Ubicaciones</label>
                                   <input type="text" name="descUbicacion" class="form-control" value="{{$ubicasiones->descUbicacion}}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">

                                <div class="form-floating">
                                    <label for="observacion">Observaciones</label>
                                    <textarea class="form-control" name="observacion" style="height: 100px">{{$ubicasiones->observacion}}</textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                    </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
