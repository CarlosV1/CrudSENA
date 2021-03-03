@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <a class="btn btn-primary mt-4 mb-3" href="{{ route('ficha.create') }}">REGISTRAR NUEVA FICHA</a>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Nº</th>
                            <th>CODIGO</th>
                            <th>NOMBRE</th>
                            <th>OPCIONES</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($fichas  as $fichas)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $fichas->codigo}}</td>
                                <td>{{ $fichas->nombre}}</td>
                                <td>
                                    <form action="{{route('ficha.destroy',$fichas->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('ficha.show',$fichas->id) }}" class="btn btn-sm btn-info">Detalles</a>
                                        <a href="{{route('ficha.edit',$fichas->id)}}" class="btn btn-sm btn-warning">Editar</a>
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
