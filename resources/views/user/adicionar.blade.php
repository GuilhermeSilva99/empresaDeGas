@extends('layout.site')
@section('titulo','Funcionarios')

@section('conteudo')
    <div class="container">
        <h3>Adicionar Funcionario</h3>
        <div class="row">
           <form class="" action="{{route('user.salvar')}}" method="post">
               @csrf
               @include('user._form')

               <button class="btn blue">Salvar</button>
           </form>
        </div>
    </div>
@endsection
