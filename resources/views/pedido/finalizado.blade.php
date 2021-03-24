@extends('layout.site')
@section('titulo','Pedidos')

@section('conteudo')
    <div class="container">
        <h3>Lista de Pedidos Finalizados</h3>
        <div class="row">
            <table>
                <thead>
                <tr>
                    <th>Data</th>
                    <th>Descrição</th>
                    <th>Funcionario</th>
                    <th>Entregador</th>
                </tr>

                </thead>
                <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->data_inicial }}</td>
                        <td>{{ $registro->descricao }}</td>
                        @foreach($funcionarios as $funcionario)
                            @if($funcionario->id == $registro->funcionario_id)
                                <td>{{ $funcionario->name }}</td>
                            @endif
                        @endforeach
                        @foreach($funcionarios as $funcionario)
                            @if($funcionario->id == $registro->entregador_id)
                                <td>{{ $funcionario->name }}</td>
                            @endif
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn blue" href="{{route('pedido.index')}}">Pendentes</a>
        </div>
    </div>
@endsection
