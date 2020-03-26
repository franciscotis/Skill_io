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
                    <a href="{{route('challenges.users')}} " class="btn-btn success admin-a"><i class="fas fa-list fa-3x"></i>Desafios dos Usuários</a>
                    </div>
            </div>
            <div class="container">
                <div class="graficos">
                    <div class="row">
                        <div class="col-sm-3">
                            <canvas id="users" width="100" height="100"></canvas>
                            <canvas id="challenges" width="100" height="100"></canvas>

                        </div>
                        <div class="col-sm-9">
                            <canvas id="challengesusers" width="400" height="300"></canvas>
                        </div>
                        <hr>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="{{ asset('/node_modules/chart.js/dist/Chart.js') }}" defer></script>
<script src="{{ asset('js/admin.js') }}" defer></script>
@endsection
