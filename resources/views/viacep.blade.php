@extends('layout')


<div class="container">

    <div class="card">
        <h2 class="justify-center">API VIACEP </h2>


        <div class="card-inner">
            <div class="card-header row">

                <form action="{{ route('apiviacep.consulta') }}" method="get">
                    <input type="text" class="form-input" name="search"
                           placeholder="Buscar Cep">

                    <button type="submit" class="btn btn-primary">Buscar
                    </button>
                </form>

            </div>
            <div class="row">
                <form method="post" action="{{route('apiviacep.limpar')}}">
                    @csrf
                    <button type="submit" class="btn btn-danger">Limpar</button>
                </form>
                <form method="post" action="{{route('exportar')}}">
                    @csrf
                    <button type="submit" class="btn btn-success">Exportar</button>
                </form>
            </div>
        </div>
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
        @if(isset($data))

            <table>
                <thead>
                <tr>
                    <th>CEP</th>
                    <th>Logradouro</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                </tr>
                </thead>
                <tbody>
                @foreach($consultas as $item)
                    <tr>
                        <td>{{ $item['cep'] }}</td>
                        <td>{{ $item['logradouro'] }}</td>
                        <td>{{ $item['bairro'] }}</td>
                        <td>{{ $item['localidade'] }}</td>
                        <td>{{ $item['uf'] }}</td>

                    </tr>
                @endforeach

                </tbody>
            </table>
        @endif
        <div class="justify-center">
            <a type="button" class="btn btn-danger justify-center" href="{{url('/')}}">Voltar</a>
        </div>
    </div>

</div>

</div>
