@extends('layouts.plantilla')
    @section('contenido')

    <div class="container mt-3">
        <div class="card">
            <div class="card-header" >
                Registro de usuarios
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 table-responsive">
                        <form action="{{route('user.store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="nombre">Ingrese Nombre</label>
                                        <input type="text" name="nombre" class="form-control" required>
                                        @error('nombre')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="nombre">Ingrese Email</label>
                                        <input type="text" name="email" class="form-control" required>
                                        @error('nombre')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="nombre">Ingrese Contraseña</label>
                                        <input type="password" name="password" class="form-control" required>
                                        @error('nombre')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                
    
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <button type="submit" name="button"  class="btn btn-primary mt-2">Registrar</button>
                                        <button type="reset" name="button"  class="btn btn-secondary mt-2">Cancelar</button>
                                        <a  class="btn btn-outline-success mt-2" href="{{route('categorias.index')}}">Regresar</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection