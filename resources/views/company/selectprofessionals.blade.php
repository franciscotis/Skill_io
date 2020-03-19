@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard - Seleção de Profissionais</div>

                <div class="card-body admin-card-body">
                    <a href="{{route('qualities.create')}}" class="btn-btn success admin-a"><i class="fas fa-plus-square fa-3x"></i>Criar Qualidades Requeridas</a>
                    <a href="{{route('qualities.index')}}" class="btn-btn success admin-a"><i class="fas fa-list fa-3x"></i>Verificar Qualidades cadastradas</a>
                    <a href="{{route('selectUserPerQuality')}}" class="btn-btn success admin-a"><i class="fas fa-user-check fa-3x"></i>Selecionar Profissionais conforme a qualidade</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection