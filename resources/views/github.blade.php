@extends('layout')


<div class="container">

    <div class="card  ">
        <h2 class="justify-center">API GitHub </h2>


        <div class="card">
            <form action="{{ route('apigithub.show') }}" method="get">
                <div class="card-header" style="width: 400px;">
                    <input type="text" class="form-input" name="search"
                           placeholder="Buscar Usuario">
                    <div>
                        <button type="submit" class="btn btn-primary">Buscar
                        </button>
                    </div>
                </div>


            </form>
            <hr>
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li><strong style="color: red">Error:</strong> {{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            @if(isset($error))
                <p></p>
                <hr>
            @else
            @endif
            <div class="card-body">
                <div id="endereco">
                    <strong><small class="msg-error" id="error"></small></strong>
                    @if(isset($user->avatar_url))
                        <p><img src="{{$user->avatar_url ?? ''}}" height="100" width="100" style="border-radius: 50px"></p>
                    @else
                    @endif

                    <p><strong>Usuário:</strong> <span>{{$user->login ?? ''}}</span></p>
                    <p><strong>Nome:</strong> <span>{{$user->name ?? ''}}</span></p>
                    <p><strong>Localização:</strong> <span>{{$user->location ?? ''}}</span></p>
                    <p><strong>Empresa:</strong> <span>{{$user->company ?? ''}}</span></p>
                </div>
            </div>
            <div class="justify-center">
                <a type="button" class="btn btn-danger justify-center" href="{{url('/')}}">Voltar</a>
            </div>
        </div>

    </div>

</div>
