@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                    <tr class="admin-tr">
                        <th scope="col">#</th>
                        <th scope="col">Nome da qualidade</th>
                        <th scope="col">Descrição da qualidade</th>
                        <th scope="col">Nível</th>
                        <th scope="col">Validada</th>
                        <th scope="col">Ação</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($qualities as $quality)
                        <tr>
                            <th scope="row">{{$quality->id}}</th>
                            <td>{{$quality->name}}</td>
                            <td>{{$quality->description}}</td>
                            @foreach($qu as $qq)
                                @if($qq->quality_id == $quality->id)
                                    <td>{{$qq->level}}</td>
                                    <td>{{$qq->validated == 0? "Não" : "Sim"}}</td>
                                @endif
                            @endforeach
                            <td>
                            @foreach($qu as $qq)
                                @if($qq->quality_id == $quality->id)
                                    @if(!$qq->validated)
                                            <a class="btn btn-outline-success  " href="{{route('user.validateQuality',["id"=> $user->id, "quality" =>$quality->id])}}"> Validar Qualidade</a>
                                        @endif
                                @endif
                            @endforeach
                            </td>
                        </tr>


                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
