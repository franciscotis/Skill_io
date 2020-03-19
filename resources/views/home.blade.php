@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Bem Vindo, Profissional</div>

                <div class="d-flex card-body justify-content-center">
                    <a href="{{route('home')}} " class="btn-btn success admin-a"><i class="fas fa-id-card fa-5x"></i></a>

                    <!-- <img src="{{ asset('images/admin-user.png') }}" class="rounded-circle"> -->
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body admin-card-body">
                    <a href="{{route('myHabilities')}}" class="btn-btn success admin-a"><i class="fas fa-clipboard-list fa-3x"></i>Minhas Habilidades</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection