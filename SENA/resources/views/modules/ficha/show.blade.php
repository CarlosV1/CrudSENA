
@extends('layouts.admin.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-4">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <td>{{ $fichas->id }}</td>
                        </tr>
                        <tr>
                            <th>CODIGO</th>
                            <td>{{ $fichas->codigo }}</td>
                        </tr>
                        <tr>
                            <th>NOMBRE</th>
                            <td>{{ $fichas->nombre }}</td>
                        </tr>
                    </table>
                    <a class="btn btn-primary btn-sm" href="{{ route('ficha.index') }}">Volver</a>
                </div>
            </div>
        </div>
    </div>

@endsection




