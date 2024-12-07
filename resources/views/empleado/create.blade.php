@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex justify-content-between mt-4">
                <h1>Crear empleado</h1>
                <div>
                    <a href="{{ route('empleado.index') }}" class="btn btn-primary btn-crear">
                        <i class="fa-solid fa-user-large"></i> Listar
                    </a>
                </div>
            </div>

            <div class="alert alert-primary" role="alert">
                Los campos con asteriscos (*) son obligatorios
            </div>

            <div>
                <form class="needs-validation" action="{{ url('/empleado') }}" id="formEmpleado" name="formEmpleado" method="post" enctype="multipart/form-data">
                    @csrf

                    @include('empleado.formEmpleado', ['mode'=>'Guardar', 'areasAll'=>$areas, 'rolesAll'=>$roles])
                    
                </form>

            </div>
        </div>
    </div>
</div>

@endsection