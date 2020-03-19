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
                        @endif
                        @endforeach
                        <td>
                            <a class="btn btn-danger botaoColor apagar admin-remove-td" href="{{route('detachQualityUser',$quality->id)}}">Apagar Qualidade</a>


                        </td>
                    </tr>


                    @endforeach


                </tbody>
            </table>
            <div class="container">
                <h4>Adicionar Habilidade</h4>
                <form method="POST" action="{{ route('attachQualityUser') }}">
                    <div class="row">
                        <div class="col-md-8">
                            @csrf
                            <select name="idQq" class="form-control" id="exampleFormControlSelect1">
                                @foreach($all_qualities as $qq )
                                <option id="{{$qq->id}}" value="{{$qq->id}}">{{$qq->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 skill-level">
                            <div class="skill-level-number">
                                <label for="number">Nível de experiência</label>
                                <input class="skill-input" type="number" min="1" max="5" id="level" name="level" value="0">
                            </div>

                            <button type="submit" class="btn btn-primary btn-skill">Adicionar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection