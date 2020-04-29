@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Nueva especialidad</h3>
            </div>
            <div class="col text-right">
            <a href="{{ url('specialties') }}" class="btn btn-sm btn-default">Cancelar y volver</a>
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
    <form action="{{ url('specialties/'.$specialty->id) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="form-group">
                <label for="name">Nombre de la especialidad</label>
            <input type="text" name="name" id="" class="form-control" value="{{ old('name', $specialty->name) }}" required>
            </div>
            <div class="form-group">
                <label for="name">Descripción de la especialidad</label>
            <input type="text" name="description" id="" class="form-control" value="{{ old('description', $specialty->description) }}">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>


@endsection