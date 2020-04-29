@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Editar paciente</h3>
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
        <form action="{{ url('patients/'.$patient->id) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="form-group">
                <label for="name">Nombre del médico</label>
            <input type="text" name="name" id="" class="form-control" value="{{ old('name', $patient->name) }}" >
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
            <input type="text" name="email" id="" class="form-control" value="{{ old('email', $patient->email) }}" >
            </div>
            <div class="form-group">
                <label for="rut">RUT</label>
            <input type="text" name="rut" id="" class="form-control" value="{{ old('rut', $patient->rut) }}" >
            </div>
            <div class="form-group">
                <label for="address">Dirección</label>
            <input type="text" name="address" id="" class="form-control" value="{{ old('address', $patient->address) }}">
            </div>
            <div class="form-group">
                <label for="phone">Teléfono / móvil</label>
            <input type="text" name="phone" id="" class="form-control" value="{{ old('phone', $patient->phone) }}">
            </div>
            <div class="form-group">
                <label for="password">Contraseña <em> Ingrese un valor sólo si desea modificar la contraseña</em> </label>
            <input type="text" name="password" id="" class="form-control" value="">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>


@endsection