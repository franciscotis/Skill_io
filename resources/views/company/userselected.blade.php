@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuário Selecionado</div>

                <div class="card-body">
                            <!-- <h1>Usuário selecionado</h1> -->
                            @if($qualified_user != null)
                            <h2>Nome:</h2>
                            <p>{{$qualified_user->name}}</p>
                            @else
                            <p>Não foi selecionado nenhum usuário pelos seus filtros</p>
                            @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
