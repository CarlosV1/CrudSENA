@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <a class="btn btn-primary mt-4 mb-3" href="{{ route('Instructor.create') }}">AGREGAR NUEVO INSTRUCTOR</a>
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
                        @foreach($instructores  as $instructor)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $instructor->num_Documento}}</td>
                                <td>{{ $instructor->primer_nombre}}</td>
                                <td>{{ $instructor->segundo_nombre}}</td>
                                <td>{{ $instructor->primer_apellido}}</td>
                                <td>{{ $instructor->segundo_apellido}}</td>
                                <td>{{ $instructor->email}}</td>
                                <td>{{ $instructor->num_Telefono}}</td>

                                <td>
                                    <form action="{{route('Instructor.destroy',$instructor->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('Instructor.show',$instructor->id) }}" class="btn btn-sm btn-info">Detalles</a>
                                        <a href="{{route('Instructor.edit',$instructor->id)}}" class="btn btn-sm btn-warning">Editar</a>
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
