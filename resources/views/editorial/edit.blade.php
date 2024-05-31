




@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-7 pl-0">
            <form action="{{ route('editoriales.update', $editorial->id)}}" method="post" enctype="multipart/form-data" style="text-align: left;">

            @csrf <!-- Protección contra ataques ya implementado en laravel  https://www.welivesecurity.com/la-es/2015/04/21/vulnerabilidad-cross-site-request-forgery-csrf/-->
           @method('PUT')
           @if($errors->any())
               <div class="alert alert-danger">
                   <ul>
                       @foreach($errors->all() as $error)
                           <li>{{$error}}</li>
                       @endforeach
                   </ul>
               </div>
           @endif

                <h1>Editar</h1>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$editorial->nombre}}" />
                </div>
                <div class="form-group">
                    <label for="domicilio">Descripción</label>
                    <textarea class="form-control" id="domicilio" name="domicilio">{{$editorial->domicilio}}</textarea>
                </div>
                <div class="form-group">
                    <label for="correo">E-mail</label>
                    <textarea class="form-control" id="correo" name="correo">{{$editorial->correo}}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Guardar Editorial</button>
            </form>
        </div>
    </div>
</div>
@endsection
