@extends('layouts.plantilla')
    @section('contenido')

    <div class="container mt-3">
        <div class="card">
            <div class="card-header" >
                Nueva Producto 
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 table-responsive">
                        <form action="{{route('productos.store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="nombre">Ingrese Nombre</label>
                                        <input type="text" required name="nombre" class="form-control" >
                                        @error('nombre')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="nombre">Seleccione una categoria</label>
                                        <select required name="categoriaID" class="form-control" >
                                            @foreach($categorias as $cat)
                                            <option value="{{$cat->id}}">{{$cat->nombre}}</option>
                                            @endforeach
                                        </select>
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