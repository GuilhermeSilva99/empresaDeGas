@extends('layout.site')
@section('titulo','Pedidos')

@section('conteudo')
    <div class="container">
        <h3>Adicionar Pedido</h3>
        <div class="row">
            <form class="" action="{{route('pedido.atualizar',$registro->id)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="put">
                @include('pedido._form')

                <button class="btn blue">Atualizar</button>
            </form>
        </div>

    </div>
@endsection
