@extends('layouts.admin.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="{{ route('ficha.store') }}" method="post">
                    @csrf
                    @csrf
                    <div class="form-group mt-5">
                        <label for="codigo">Codigo</label>
                        <input name="codigo" id="codigo" type="text" class="form-control" required>
                    </div>
                    <div class="form-group mt-5">
                        <label for="nombre">Nombre</label>
                        <input name="nombre" id="nombre" type="text" class="form-control" required>
                    </div>


                    <hr>
                    <button type="submit" class="btn btn-primary">GUARDAR NUEVA FICHA</button>
                    <a href="{{ route('ficha.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

@endsection
