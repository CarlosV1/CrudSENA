@extends('layouts.admin.app')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-4">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <td>{{ $aprendices->id }}</td>
                        </tr>
                        <tr>
                            <th>NUMERO DE DOCUMENTO</th>
                            <td>{{ $aprendices->num_Documento }}</td>
                        </tr>
                        <tr>
                            <th>PRIMER NOMBRE</th>
                            <td>{{ $aprendices->primer_nombre }}</td>
                        </tr>
                        <tr>
                            <th>SEGIUNDO NOMBRE</th>
                            <td>{{ $aprendices->segundo_nombre }}</td>
                        </tr>
                        <tr>
                            <th>APELLIDOS</th>
                            <td>{{ $aprendices->primer_apellido }}</td>
                        </tr>
                        <tr>
                            <th>DIRECCION</th>
                            <td>{{ $aprendices->segundo_apellido }}</td>
                        </tr>
                        <tr>
                            <th>TELEFONO</th>
                            <td>{{ $aprendices->email }}</td>
                        </tr>
                        <tr>
                            <th>NUMERO DE TELEFONO</th>
                            <td>{{ $aprendices->num_Telefono }}</td>
                        </tr>

                        <tr>
                            <th>ACTUALIZACION</th>
                            <td>{{ $aprendices->updated_at }}</td>
                        </tr>
                    </table>
                    <a class="btn btn-primary btn-sm" href="{{ route('Aprendiz.index') }}">Volver</a>
                </div>
            </div>
        </div>
    </div>




@endsection
