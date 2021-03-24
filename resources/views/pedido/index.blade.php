@extends('layout.site')
@section('titulo','Pedidos')

@section('conteudo')
    <div class="container">
        <h3>Lista de Pedidos </h3>

        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Descrição</th>
                        <th>Funcionario</th>
                        <th>Ação</th>
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
                            <td>
                                <a class="btn yellow" href="{{route('pedido.concluir',$registro->id)}}">Entregar</a>
                                <a class="btn green" href="{{route('pedido.editar',$registro->id)}}">Editar</a>
                                <a class="btn red" href="{{route('pedido.deletar',$registro->id)}}">Deletar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn blue" href="{{route('pedido.adicionar')}}">Adicionar</a>
            <a class="btn blue" href="{{route('pedido.finalizado')}}">Finalizados</a>
        </div>
    </div>
@endsection
