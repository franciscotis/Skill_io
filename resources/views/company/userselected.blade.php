@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                            <h1>Usuário selecionado</h1>
                            @if($qualified_user != null)
                            <h1>Nome:</h1>
                            <p>{{$qualified_user->name}}</p>
                            @else
                            <p>Não foram selecionados nenhum usuário pelos seus filtros</p>
                            @endif
                            

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
