@extends('layout.site')
@section('titulo','Pedidos')

@section('conteudo')
    <div class="container">
        <h3>Adicionar Pedido</h3>
        <div class="row">
            <form class="" action="{{route('pedido.finalizar',$registro->id)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="put">
                <div class="input-field">
                    <label>Descrição</label>
                    <input type="text" name="descricao" value="{{isset($registro->descricao)?$registro->descricao:''}}" readonly>
                </div>
                <div class="input-field">
                    <label>Funcionario ID</label>
                    <input type="text" name="funcionario_id" value="{{isset($registro->funcionario_id)?$registro->funcionario_id:''}}" readonly>
                </div>
                <div class="input-field">
                    <label>Entregador ID</label>
                    <input type="text" name="entregador_id" value="">
                </div>


                <button class="btn blue">Finalizar</button>
            </form>
        </div>

    </div>
@endsection
