@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Bem Vinda, Empresa</div>

                <div class="d-flex card-body justify-content-center">
                    <a href="{{route('home')}} " class="btn-btn success admin-a"><i class="fas fa-building fa-5x"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body admin-card-body">
                    <a href="{{route('selectProf')}}" class="btn-btn success admin-a"><i class="fas fa-clipboard-check fa-3x"></i>Selecionar Profissionais</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection