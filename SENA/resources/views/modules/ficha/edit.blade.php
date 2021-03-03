@extends('layouts.admin.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('ficha.update',$fichas->id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group mt-5">
                    <label for="codigo">Numero de Documento</label>
                    <input name="codigo" id="codigo" type="text" class="form-control" value="{{$fichas->codigo}}">
                </div>
                <div class="form-group mt-5">
                    <label for="nombre">Nombre</label>
                    <input name="nombre" id="nombre" type="text" class="form-control"value="{{$fichas->nombre}}">
                </div>

                <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
                <a href="{{ route('ficha.index') }}">Cancelar</a>
            </form>
        </div>
    </div>
</div>

@endsection



