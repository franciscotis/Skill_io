@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Bem Vindo, Administrador</div>

                <div class="d-flex card-body justify-content-center">
                    <a href="{{route('home')}} " class="btn-btn success admin-a"><i class="fas fa-user-cog fa-5x"></i></a>

                    <!-- <img src="{{ asset('images/admin-user.png') }}" class="rounded-circle"> -->
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body admin-card-body">
                    <a href="{{route('admin.index')}} " class="btn-btn success admin-a"><i class="fas fa-users fa-3x"></i>Mostrar Usuários</a>
                    <a href="{{route('challenges.index')}} " class="btn-btn success admin-a"><i class="fas fa-tasks fa-3x"></i>Mostrar Desafios</a>
                    <a href="{{route('challenges.create')}} " class="btn-btn success admin-a"><i class="fas fa-plus-square fa-3x"></i>Criar Desafios</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection