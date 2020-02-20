@extends('layouts.app')
@section('content')
<table class="table">
    <thead>
        <tr>
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
                <a class="btn btn-danger botaoColor apagar" href="{{route('detachQualityUser',$quality->id)}}">Apagar Qualidade</a>


            </td>
        </tr>


        @endforeach


    </tbody>
</table>
<div class="container">
    <h3>Adicionar Habilidade</h3>
    <form method="POST" action="{{ route('attachQualityUser'), 1 }}">
        @csrf
        <select name="idQq" class="form-control" id="exampleFormControlSelect1">
            @foreach($all_qualities as $qq )
            <option id="{{$qq->id}}" value="{{$qq->id}}">{{$qq->name}}</option>

            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>

</div>


@endsection