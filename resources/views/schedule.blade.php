@extends('layouts.panel')

@section('content')

<form action="{{ url('/schedule') }}" method="post">
    @csrf
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Gestionar horario</h3>
                </div>
                <div class="col text-right">
                <button type="submit" class="btn btn-sm btn-success">
                    Guardar cambios
                </button>
                </div>
            </div>
        </div> 
        <div class="card-body">
            @if (session('notification'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('notification') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
        </div>
        <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Día</th>
                        <th scope="col">Activo</th>
                        <th scope="col">Turno día</th>
                        <th scope="col">Turno tarde / noche</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($days as $key => $day)
                        <tr>
                            <th>{{ $day }}</th>
                            <th>
                                <label class="custom-toggle">
                                <input type="checkbox" name="active[]" value="{{ $key }}">
                                    <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                                </label> 
                            </th>
                            <th>
                                <div class="row">
                                    <div class="col">
                                        <select name="morning_start[]" id="" class="form-control">
                                            @for ($i=5; $i<=11; $i++ )
                                                <option value="{{ $i }}:00">{{ $i }}:00</option>
                                                <option value="{{ $i }}:30">{{ $i }}:30</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select name="morning_end[]" id="" class="form-control">
                                            @for ($i=5; $i<=11; $i++ )
                                                <option value="{{ $i }}:00">{{ $i }}:00</option>
                                                <option value="{{ $i }}:30">{{ $i }}:30</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </th>
                            <th>
                                <div class="row">
                                    <div class="col">
                                        <select name="afternoon_start[]" id="" class="form-control">
                                            @for ($i=1; $i<=11; $i++ )
                                                <option value="{{ $i+12 }}:00">{{ $i+12  }}:00</option>
                                                <option value="{{ $i+12 }}:30">{{ $i+12  }}:30</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select name="afternoon_end[]" id="" class="form-control">
                                            @for ($i=1; $i<=11; $i++ )
                                                <option value="{{ $i+12 }}:00">{{ $i+12  }}:00</option>
                                                <option value="{{ $i+12 }}:30">{{ $i+12  }}:30</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
</form>


@endsection