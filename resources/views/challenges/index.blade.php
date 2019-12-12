@extends('layouts.app')
@section('content')
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nome do desafio</th>
        <th scope="col">Descrição do desafio</th>
        <th scope="col">Ação</th>

    </tr>
    </thead>
    <tbody>
    @foreach($challenges as $challenge)
        <tr>
            <th scope="row">{{$challenge->id}}</th>
            <td>{{$challenge->name}}</td>
            <td>{{$challenge->description}}</td>
            <td>
                <a class="btn btn-success" href="{{route('challenges.edit',$challenge->id)}}">Editar</a>
                    <form method="POST" action="{{route('challenges.destroy', $challenge->id)}}">
                        @csrf
                        {!! method_field('delete') !!}
                        <input type="submit" class="btn btn-danger botaoColor apagar" value="Apagar Desafio">
                    </form>
                    
            </td>
        </tr>


    @endforeach

    </tbody>
</table>

    @endsection
