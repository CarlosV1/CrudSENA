@extends('layouts.admin.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="{{ route('Instructor.store') }}" method="post">
                    @csrf
                    <div class="form-group mt-5">
                        <label for="primer_nombre">Primer Nombre</label>
                        <input name="primer_nombre" id="primer_nombre" type="text" class="form-control" required>
                    </div>
                    <div class="form-group mt-5">
                        <label for="segundo_nombre">Segundo Nombre</label>
                        <input name="segundo_nombre" id="segundo_nombre" type="text" class="form-control">
                    </div>
                    <div class="form-group mt-5">
                        <label for="primer_apellido">Primer Apellido</label>
                        <input name="primer_apellido" id="primer_apellido" type="text" class="form-control" required>
                    </div>
                    <div class="form-group mt-5">
                        <label for="segundo_apellido">Segundo Apellido</label>
                        <input name="segundo_apellido" id="segundo_apellido" type="text" class="form-control" required>
                    </div>
                    <div class="form-group mt-5">
                        <label for="email">Email</label>
                        <input name="email" id="email" type="text" class="form-control" required>
                    </div>
                    <div class="form-group mt-5">
                        <label for="num_Telefono">Telefono</label>
                        <input name="num_Telefono" id="num_Telefono" type="text" class="form-control" required>
                    </div>
                    <div class="form-group mt-5">
                        <label for="num_Documento">Documento</label>
                        <input name="num_Documento" id="num_Documento" type="text" class="form-control" required>
                    </div>

                    <hr>
                    <button type="submit" class="btn btn-primary">GUARDAR NUEVO INSTRUCTOR</button>
                    <a href="{{ route('Instructor.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

@endsection
