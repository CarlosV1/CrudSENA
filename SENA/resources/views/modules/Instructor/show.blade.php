@extends('layouts.admin.app')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-4">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <td>{{ $instructores->id }}</td>
                        </tr>
                        <tr>
                            <th>NUMERO DE DOCUMENTO</th>
                            <td>{{ $instructores->num_Documento }}</td>
                        </tr>
                        <tr>
                            <th>PRIMER NOMBRE</th>
                            <td>{{ $instructores->primer_nombre }}</td>
                        </tr>
                        <tr>
                            <th>SEGIUNDO NOMBRE</th>
                            <td>{{ $instructores->segundo_nombre }}</td>
                        </tr>
                        <tr>
                            <th>APELLIDOS</th>
                            <td>{{ $instructores->primer_apellido }}</td>
                        </tr>
                        <tr>
                            <th>DIRECCION</th>
                            <td>{{ $instructores->segundo_apellido }}</td>
                        </tr>
                        <tr>
                            <th>TELEFONO</th>
                            <td>{{ $instructores->email }}</td>
                        </tr>
                        <tr>
                            <th>NUMERO DE TELEFONO</th>
                            <td>{{ $instructores->num_Telefono }}</td>
                        </tr>

                        <tr>
                            <th>ACTUALIZACION</th>
                            <td>{{ $instructores->updated_at }}</td>
                        </tr>
                    </table>
                    <a class="btn btn-primary btn-sm" href="{{ route('Instructor.index') }}">Volver</a>
                </div>
            </div>
        </div>
    </div>




@endsection
