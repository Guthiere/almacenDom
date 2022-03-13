@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Creacion de Usuarios</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @if ($errors->any())
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                <strong>¡Revise los campos!</strong>
                                @foreach ($errors as $error)
                                    <span class="badge badge-danger">{{$error}}</span>
                                @endforeach

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            @endif

                            <form action="{{route('usuarios.store')}}" method="POST">
                              @csrf
                              <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                         <label for="name">Nombre</label>
                                         <input class="form-control" type="text" name="name" autofocus required tabindex="1" placeholder="Ingrese el Nombre del Usuario">
                                      </div>
                                  </div>

                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <label for="email">E-mail</label>
                                       <input class="form-control" type="email" name="email"  required tabindex="2" placeholder="Ingrese el e-mail del Usuario">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <label for="password">Password</label>
                                       <input class="form-control" type="text" name="password"  required tabindex="3" placeholder="Ingrese el password del Usuario">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <label for="confirm-password">Confirme Password</label>
                                       <input class="form-control" type="text" name="confirm-password" autofocus required tabindex="4" placeholder="confirme el Password del  Usuario">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <label for="">Roles</label>
                                       {!! Form::select('roles[]', $roles,[], array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <button class=" btn btn-primary" type="submit">Guardar</button>
                                    </div>
                                </div>

                              </div>


                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

