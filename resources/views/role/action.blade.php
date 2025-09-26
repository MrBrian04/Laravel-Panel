@extends('plantilla.app')

@section('contenido')
    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">

                        <div class="card-header">
                            <h3 class="card-title">Roles</h3>
                        </div>

                        <div class="card-body">
                            <form action="{{isset($registro)?route('roles.update', $registro->id) : route('roles.store') }}" method="POST" id="formRegistroUsuario">
                                @csrf
                                @if (isset($registro))
                                    @method('PUT')
                                @endif
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Nombre</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $registro->name ??'')}}" required>
                                        @error('name')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                              
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="button" class="btn btn-secondary me-md-2"
                                        onclick="window.location.href='{{ route('roles.index') }}'">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>

                        <div class="card-footer clearfix">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
