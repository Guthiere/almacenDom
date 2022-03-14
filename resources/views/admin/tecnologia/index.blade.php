@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Gestión Administrativa Tecnologias</h3>
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
                                    <th style="color:#fff;">Tecnologia</th>
                                    <th style="color:#fff;">Observaciones Tecnologia</th>
                                    <th style="color:#fff;">Acciones</th>
                              </thead>
                              <tbody>

                            @foreach ($tecnologias as $tecnologia)
                            <tr>
                                <td style="display: none;">{{ $departamento->id }}</td>
                                <td>{{ $tecnologias->descTecnologia }}</td>
                                <td>{{ $tecnologias->observacion }}</td>
                                <td>
                                    <form action="{{ route('deptos.destroy',$tecnologias->id) }}" method="POST">
                                        @can('editar-departamento')
                                        <a class="btn btn-info" href="{{ route('deptos.edit',$tecnologias->id) }}">Editar</a>
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
              
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
