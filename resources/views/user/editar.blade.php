@extends('layout.site')
@section('titulo','Funcionarios')

@section('conteudo')
    <div class="container">
        <h3>Editando Funcionario</h3>
        <div class="row">
            <form class="" action="{{route('user.atualizar',$funcionario->id)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="put">
                @include('user._form')

                <button class="btn blue">Atualizar</button>
            </form>
        </div>
    </div>
@endsection
