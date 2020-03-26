@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                    <tr class="admin-tr">
                        <th scope="col">#</th>
                        <th scope="col">Nome do desafio</th>
                        <th scope="col">Descrição do desafio</th>
                        <th scope="col">Usuário</th>
                        <th scope="col">Enviado em</th>
                        <th scope="col">Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($challenges as $challenge)
                        <tr>
                            <th scope="row">{{$challenge->challenges->id}}</th>
                            <td>{{$challenge->challenges->name}}</td>
                            <td>{{$challenge->challenges->description}}</td>
                            <td>{{$challenge->user->name}}</td>
                            <td>{{$challenge->created_at->diffForHumans()}}</td>
                            <td><a href="{{route('downloadCode',$challenge->id)}}" class="btn btn-success">Baixar código</a></td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            {{$challenges->render()}}
        </div>
    </div>

@endsection
