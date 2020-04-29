@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Nuevo paciente</h3>
            </div>
            <div class="col text-right">
            <a href="{{ url('patients') }}" class="btn btn-sm btn-default">Cancelar y volver</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{-- <span class="alert-icon"><i class="ni ni-like-2"></i></span> --}}
            @foreach ($errors->all() as $error)
            <li>{{ $error }} </li>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
           
        @endif
    <form action="{{ url('/patients') }}" method="POST">
        @csrf
            <div class="form-group">
                <label for="name">Nombre del paciente</label>
            <input type="text" name="name" id="" class="form-control" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
            <input type="text" name="email" id="" class="form-control" value="{{ old('email') }}" required>
            </div>
            <div class="form-group">
                <label for="rut">RUT</label>
            <input type="text" name="rut" id="" class="form-control" value="{{ old('rut') }}" required>
            </div>
            <div class="form-group">
                <label for="address">Dirección</label>
            <input type="text" name="address" id="" class="form-control" value="{{ old('address') }}">
            </div>
            <div class="form-group">
                <label for="phone">Teléfono / móvil</label>
            <input type="text" name="phone" id="" class="form-control" value="{{ old('phone') }}">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
            <input type="text" name="password" id="" class="form-control" value="{{ str_random(6) }}">
            </div>  
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>


@endsection