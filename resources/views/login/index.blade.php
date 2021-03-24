@extends('layout.site')
@section('titulo','Pedidos')

@section('conteudo')
    <div class="container">
        <h3>Entrar</h3>
        <div class="row">
            <form class="" action="{{route('site.login.entrar')}}" method="post">
                @csrf
                <div class="input-field">
                    <label>E-mail</label>
                    <input type="text" name="email">
                </div>
                <div class="input-field">
                    <label>Senha</label>
                    <input type="password" name="senha">
                </div>

                <button class="btn blue">Entrar</button>
            </form>
        </div>

    </div>
@endsection
