@extends('layout.site')
@section('titulo','Pedidos')

@section('conteudo')
    <div class="container">
        <h3>Adicionar Pedido</h3>
        <div class="row">
            <form class="" action="{{route('pedido.salvar')}}" method="post">
                @csrf
                @include('pedido._form')

                <button class="btn blue">Salvar</button>
            </form>
        </div>

    </div>
@endsection
