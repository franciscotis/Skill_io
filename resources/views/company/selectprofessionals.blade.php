@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                            PÁGINA DE SELEÇÃO DE PROFISSIONAIS<br/>
                            <a href="{{route('qualities.create')}}" class="btn-btn success">Criar Qualidades Requeridas</a><br/>
                            <a href="{{route('qualities.index')}}" class="btn-btn success">Verificar Qualidades cadastradas</a><br/>
                            <a href="#" class="btn-btn success">Selecionar Profissionais conforme a qualidade</a>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
