@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex justify-content-between mt-4">
                <h1>Editar empleado</h1>
                <div>
                    <a href="{{ route('empleado.create') }}" class="btn btn-primary btn-crear">
                        <i class="fa-solid fa-user-large"></i> Crear
                    </a>
                    <a href="{{ route('empleado.index') }}" class="btn btn-primary btn-crear">
                        <i class="fa-solid fa-user-large"></i> Listar
                    </a>
                </div>
            </div>
            <div class="alert alert-primary" role="alert">
                Los campos con asteriscos (*) son obligatorios
            </div>
            <div>
                <form class="needs-validation" id="formEmpleado" name="formEmpleado" action="{{ url('/empleado/'.$empleado->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                {{method_field('PUT')}}
                @include('empleado.formEmpleado', ['mode'=>'Actualizar', 'areasAll'=>$areas, 'rolesAll'=>$roles])
                </form>
            </div>
        </div>
    </div>
</div>
@endsection