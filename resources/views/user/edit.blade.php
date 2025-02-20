@extends('layouts.plantilla')
    @section('contenido')

    <div class="container mt-3">
        <div class="card">
            <div class="card-header" >
            Editar Usuario 
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 table-responsive">
                        <form action="{{route('user.update', ['user'=>$registro])}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="nombre">Ingrese Nombre</label>
                                        <input type="hidden" name="id" value="{{$registro->id}}">
                                        <input type="text" name="nombre" class="form-control" value="{{$registro->name}}" required>
                                        @error('nombre')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="nombre">Ingrese Email</label>
                                        <input type="hidden" name="id" value="{{$registro->id}}">
                                        <input type="email" name="email" class="form-control" value="{{$registro->email}}" required>
                                        @error('nombre')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="nombre">Ingrese Password</label>
                                        <input type="hidden" name="id" value="{{$registro->id}}">
                                        <input type="password" name="password" class="form-control" value="{{$registro->password}}" required>
                                        @error('nombre')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <button type="submit" name="button"  class="btn btn-primary mt-2">Actualizar</button>
                                        <button type="reset" name="button"  class="btn btn-secondary mt-2">Cancelar</button>
                                        <a  class="btn btn-outline-success mt-2" href="{{route('user.index')}}">Regresar</a>
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