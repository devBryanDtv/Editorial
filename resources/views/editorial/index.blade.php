@extends('adminlte::page')
@section('content')

       <h2>Editar Editorial</h2>
       
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            @if(session('message'))
                Swal.fire({
                    icon: 'success',
                    title: '{{ session('message') }}',
                    showConfirmButton: false,
                    timer: 1500
                });
            @endif
        });
    </script>
@endsection


