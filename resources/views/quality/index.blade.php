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
                        <th scope="col">Ação</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($qualities as $quality)
                    <tr>
                        <th scope="row">{{$quality->id}}</th>
                        <td>{{$quality->name}}</td>
                        <td>{{$quality->description}}</td>
                        <td>
                            <a class="btn btn-success admin-edit-td" href="{{route('qualities.edit',$quality->id)}}">Editar</a>
                            <form method="POST" action="{{route('qualities.destroy', $quality->id)}}">
                                @csrf
                                {!! method_field('delete') !!}
                                <input type="submit" class="btn btn-danger botaoColor apagar admin-remove-td" value="Apagar Qualidade">
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