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
                            <a class="btn btn-success admin-edit-td" href="{{route('challenges.edit',$challenge->id)}}">Editar</a>
                            <form method="POST" action="{{route('challenges.destroy', $challenge->id)}}">
                                @csrf
                                {!! method_field('delete') !!}
                                <input type="submit" class="btn btn-danger botaoColor apagar admin-remove-td" value="Apagar Desafio">
                            </form>

                        </td>
                    </tr>


                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection