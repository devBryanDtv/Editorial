@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-7 pl-0">
            <form action="{{ route('editoriales.store') }}" method="post" enctype="multipart/form-data" style="text-align: left;">
                @csrf
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h1>Crear</h1>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" />
                </div>
                <div class="form-group">
                    <label for="domicilio">Descripción</label>
                    <textarea class="form-control" id="domicilio" name="domicilio">{{ old('domicilio') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="correo">E-mail</label>
                    <input type="text" class="form-control" id="correo" name="correo" value="{{ old('correo') }}" />
                </div>
                <button type="submit" class="btn btn-success">Guardar Editorial</button>
            </form>
        </div>
    </div>
</div>
@endsection
