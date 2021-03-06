@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Seleção de Habilidades</div>

                <div class="card-body">
                            <h3>Selecione as habilidades requeridas</h3>

                            <form method="POST" action="{{ route('selectQualityCompany') }}">
                            @csrf

                            @foreach($all_qualities as $quality)
                            <label for="quality[]"> {{$quality->name}}</label>
                            <input type="checkbox" name="quality[]" value="{{$quality->id}}"><br>
                            @endforeach

                            <button type="submit" class="btn btn-primary">Buscar Profissionais Adequados</button>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
