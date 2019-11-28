@extends('layouts.app')
@section('content')
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Admin?</th>
        <th scope="col">Company?</th>
        <th scope="col">Ação</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->admin == 1 ? "Sim" : "Não"}}</td>
            <td>{{$user->company == 1 ? "Sim" : "Não"}}</td>
            <td>
                <a class="btn btn-success" href="{{route('admin.edit',$user->id)}}">Editar</a>
                @if($user->id != Auth::id())
                    <form method="POST" action="{{route('admin.destroy', $user->id)}}">
                        @csrf
                        {!! method_field('delete') !!}
                        <input type="submit" class="btn btn-danger botaoColor apagar" value="Apagar Usuário">
                    </form>
                    @endif
            </td>
        </tr>


    @endforeach

    </tbody>
</table>

    @endsection
