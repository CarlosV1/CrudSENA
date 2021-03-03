@extends('layouts.admin.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="{{ route('Aprendiz.update',$aprendices->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group mt-5">
                        <label for="num_Documento">Numero de Documento</label>
                        <input name="num_Documento" id="num_Documento" type="text" class="form-control" value="{{$aprendices->num_Documento}}">
                    </div>
                    <div class="form-group mt-5">
                        <label for="primer_nombre">Primer Nombre</label>
                        <input name="primer_nombre" id="primer_nombre" type="text" class="form-control"value="{{$aprendices->primer_nombre}}">
                    </div>
                    <div class="form-group mt-5">
                        <label for="segundo_nombre">Segundo Nombre</label>
                        <input name="segundo_nombre" id="segundo_nombre" type="text" class="form-control" value="{{$aprendices->segundo_nombre}}">
                    </div>
                    <div class="form-group mt-5">
                        <label for="primer_apellido">Primer Apellido</label>
                        <input name="primer_apellido" id="primer_apellido" type="text" class="form-control" value="{{$aprendices->primer_apellido}}">
                    </div>
                    <div class="form-group mt-5">
                        <label for="segundo_apellido">Segundo Apellido</label>
                        <input name="segundo_apellido" id="segundo_apellido" type="text" class="form-control" value="{{$aprendices->segundo_apellido}}">
                    </div>
                    <div class="form-group mt-5">
                        <label for="email">Email</label>
                        <input name="email" id="email" type="text" class="form-control" value="{{$aprendices->email}}">
                    </div>
                    <div class="form-group mt-5">
                        <label for="num_Telefono">Telefono</label>
                        <input name="num_Telefono" id="num_Telefono" type="text" class="form-control" value="{{$aprendices->num_Telefono}}">
                    </div>


                    <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
                    <a href="{{ route('Aprendiz.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

@endsection



