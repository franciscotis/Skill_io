@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <strong>{{$challenge->name}}</strong>
                    </div>
                    <div class="card-body">
                    <p>{{$challenge->description}}</p>
                    </div>
                    <div class="card-footer">
                        @if($challenge_user==null)
                            <p>Não enviado</p>
                            <form method="POST" enctype="multipart/form-data" action="{{route('challenge.send',$challenge->id)}}">
                                @csrf
                                <div class="form-group row">
                                    <label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Anexar código') }}</label>

                                    <div class="col-md-6">
                                        <input multiple="multiple" id="code"  data-input="false"  type="file" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" required autocomplete="code" autofocus>

                                        @error('code')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <button class="btn btn-success" type="submit">Enviar Código</button>
                            </form>
                            @else
                        <p>Enviado</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
