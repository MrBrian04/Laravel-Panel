@extends('plantilla.app')
@section('contenido')
<div class="app-content">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h3 class="card-title">Usuarios</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div>
                            <form action="" method="get">
                                <div class="input-group">
                                    <input name="texto" type="text" class="form-control" value=""
                                        placeholder="Ingrese texto a buscar">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-search"></i>
                                            Buscar</button>
                                        <a href="" class="btn btn-primary">Nuevo</a>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="table-responsive mt-2">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 400px">Opciones</th>
                                        <th style="width: 150px">ID</th>
                                        <th style="width: 400px">Nombre</th>
                                        <th style="width: 500px">Correo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="#"class="btn btn-warning btn-md">
                                                <i class="bi bi-pencil-fill"></i>
                                            </a>
                                            <button class="btn btn-danger btn-md" data-bs-toggle="modal" data-bs-target="#modal-eliminar-01">
                                                <i class="bi bi-trash-fill"></i>

                                            </button>
                                        </td>
                                        <td>1</td>
                                        <td>Brayan Vergel G.</td>
                                        <td>MrBrianVeGa@gmail.com</td>

                                    </tr>
                                    @include('usuario.delete')
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-end">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->

        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
@endsection