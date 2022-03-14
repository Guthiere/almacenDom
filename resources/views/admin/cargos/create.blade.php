@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear Cargos</h3>
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

                    <form action="{{ route('cargos.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="descripcion">Título Cargo</label>
                                   <input type="text" name="descripcion" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">

                                <div class="form-floating">
                                    <label for="observacion">Observaciones</label>
                                    <textarea class="form-control" name="observacion" style="height: 100px"></textarea>
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
