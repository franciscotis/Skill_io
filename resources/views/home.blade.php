@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    
                            Olá Usuário!
                            <a href="{{route('myHabilities')}}" class="btn-btn success">Minhas Habilidades</a>

                        

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
