@extends('layout.site')
@section('titulo','Funcionarios')

@section('conteudo')
    <div class="container">
        <h3>Lista de Funcionarios</h3>
        <div class="row">
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>cargo</th>
                    <th>Ação</th>
                </tr>

                </thead>
                <tbody>
                @foreach($funcionarios as $funcionario)
                    <tr>
                        <td>{{ $funcionario->id }}</td>
                        <td>{{ $funcionario->name }}</td>
                        <td>{{ $funcionario->telefone }}</td>
                        <td>{{ $funcionario->cargo }}</td>
                        <td>
                            <a class="btn green" href="{{route('user.editar',$funcionario->id)}}">Editar</a>
                            <a class="btn red" href="{{route('user.deletar',$funcionario->id)}}">Deletar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn blue" href="{{route('user.adicionar')}}">Adicionar</a>
        </div>
    </div>
@endsection
