@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Gestión Administrativa Ubicaciones Venta</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">


                        @can('crear-blog')
                        <a class="btn btn-warning" href="{{ route('ubic.create') }}">Nuevo</a>
                        @endcan

                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Ubicación</th>
                                    <th style="color:#fff;">Observaciones Ubicación</th>
                                    <th style="color:#fff;">Acciones</th>
                              </thead>
                              <tbody>

                            @foreach ($ubicasiones as $ubicasion)
                            <tr>
                                <td style="display: none;">{{ $ubicasion->id }}</td>
                                <td>{{ $ubicasion->descUbicacion }}</td>
                                <td>{{ $ubicasion->observacion }}</td>
                                <td>
                                    <form action="{{ route('ubic.destroy',$ubicasion->id) }}" method="POST">
                                        @can('editar-ubicasion')
                                        <a class="btn btn-info" href="{{ route('ubic.edit',$ubicasion->id) }}">Editar</a>
                                        @endcan
                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-ubicasion')
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
                            {!! $ubicasiones->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
