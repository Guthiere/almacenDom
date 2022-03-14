@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Gestión Administrativa Departamentos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">


                        @can('crear-blog')
                        <a class="btn btn-warning" href="{{ route('deptos.create') }}">Nuevo</a>
                        @endcan

                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Depatamento</th>
                                    <th style="color:#fff;">Observaciones Departamento</th>
                                    <th style="color:#fff;">Acciones</th>
                              </thead>
                              <tbody>

                            @foreach ($departamentos as $departamento)
                            <tr>
                                <td style="display: none;">{{ $departamento->id }}</td>
                                <td>{{ $departamento->descDepartamento }}</td>
                                <td>{{ $departamento->observacion }}</td>
                                <td>
                                    <form action="{{ route('deptos.destroy',$departamento->id) }}" method="POST">
                                        @can('editar-departamento')
                                        <a class="btn btn-info" href="{{ route('deptos.edit',$departamento->id) }}">Editar</a>
                                        @endcan
                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-departamento')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $departamentos->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
