@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                        Administrador Logado
                        <a href="{{route('admin.index')}} " class="btn-btn success">Mostrar Usuários</a>
                        <a href="{{route('challenges.index')}} " class="btn-btn success">Mostrar Desafios</a>
                        <a href="{{route('challenges.create')}} " class="btn-btn success">Criar Desafios</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
