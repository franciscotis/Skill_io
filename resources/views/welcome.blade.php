@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="container">
                    <div class="row">
                        @foreach($challenges as $challenge)
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header"><h3>{{$challenge->name}}</h3></div>
                                <div class="card-body">
                                <p>{{$challenge->description}}</p>
                                </div>
                                <div class="card-footer">
                                    @if(Auth::check())
                                <a href="{{route('challenges.show',$challenge->id)}}" class="btn btn-outline-success">Ver mais</a>
                                        @else
                                        <a href="{{route('login')}}" class="btn btn-outline-success">Login</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    @endsection
