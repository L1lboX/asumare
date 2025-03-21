@extends('layouts.plantilla')
    @section('contenido')
        <div class="container mt-3">
            <div class="card">
                <div class="card-header mt-2" >
                    <h2 class="text-primary text-center">@lang('main.categories')</h2>
                    <div class="text-center">
                        <a class="btn btn-success btn-center" href="{{route('categorias.create')}}">@lang('main.new')</a>
                    </div>
                </div>
                <div class="card-body">

                    @if(Session::has('mensaje'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        {{Session::get('mensaje')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>                    
                    @endif

                    @if(Session::has('error'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{Session::get('error')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>                    
                    @endif
                    
                    <form action="{{route('categorias.index')}}" method="GET">
                        <div class="input-group">
                            <input type="text" name="texto" class="form-control mt-2" value="{{$texto}}">
                            <div class="input-group-append">
                                <button class="btn btn-primary ml-2" type="submit"><i class="fas fa-search"></i>Buscar</button>
                            </div>
                        </div>
                    </form>
                    <div class="row mt-3">
                        <div class="col-lg-12 table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Opciones</th>
                                        <th>Id</th>  
                                        <th>Nombre</th>
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    @foreach($registros as $reg)
                                    <tr>
                                        <td>
                                            <a href="{{route('categorias.edit', $reg->id)}}" class="btn btn-warning btn-sm">@Lang('main.edit')</a>

                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-eliminar-{{$reg->id}}">@Lang('main.delete')</button>
                                        </td>
                                        <td>{{ $reg->id }}</td>
                                        <td>{{ $reg->nombre }}</td>
                                    </tr>
                                    @include('Categoria.delete')
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center align-items-center height-100">
                                {{ $registros->appends(['texto' => $texto])}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection