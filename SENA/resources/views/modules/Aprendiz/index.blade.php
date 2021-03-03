@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <a class="btn btn-primary mt-4 mb-3" href="{{ route('Aprendiz.create') }}">AGREGAR NUEVO APRENDIZ</a>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Nº</th>
                            <th>DOCUMENTO DE IDENTIDAD</th>
                            <th>PRIMER NOMBRE</th>
                            <th>SEGUNDO NOMBRE</th>
                            <th>PRIMER APELLIDO</th>
                            <th>SEGUNDO APELLIDO</th>
                            <th>EMAIL</th>
                            <th>TELEFONO</th>
                            <th>OPCIONES</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($aprendices  as $aprendiz)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $aprendiz->num_Documento}}</td>
                                <td>{{ $aprendiz->primer_nombre}}</td>
                                <td>{{ $aprendiz->segundo_nombre}}</td>
                                <td>{{ $aprendiz->primer_apellido}}</td>
                                <td>{{ $aprendiz->segundo_apellido}}</td>
                                <td>{{ $aprendiz->email}}</td>
                                <td>{{ $aprendiz->num_Telefono}}</td>

                                <td>
                                    <form action="{{route('Aprendiz.destroy',$aprendiz->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('Aprendiz.show',$aprendiz->id) }}" class="btn btn-sm btn-info">Detalles</a>
                                        <a href="{{route('Aprendiz.edit',$aprendiz->id)}}" class="btn btn-sm btn-warning">Editar</a>
                                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
@endsection
