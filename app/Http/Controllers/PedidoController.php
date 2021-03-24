<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use App\Models\Pedido;
use App\Models\User;

class PedidoController extends Controller
{
    public function index(){
        $funcionarios = User::all();
        $pedidos = Pedido::all();
        $registros = array();
        foreach ($pedidos as $registro){
            if ($registro->entregador_id == null){
                array_unshift($registros,$registro);
            }
        }

        return view('pedido.index',compact('registros','funcionarios'));
    }

    public function adicionar(){
        return view('pedido.adicionar');
    }

    public function salvar(Request $request){
        $dados = $request->all();
        $pedido = array(
            'descricao' => $dados['descricao'],
            'funcionario_id'=>$dados['funcionario_id'],
            'data_inicial'=>Date::now(),
        );
        Pedido::create($pedido);
        return redirect(route('pedido.index'));
    }
    public function editar($id){
        $registro = Pedido::find($id);
        return view('pedido.editar',compact('registro'));

    }
    public function atualizar(Request $request,$id){
        $dados = $request->all();
        $pedidoAnteior = Pedido::find($id);
        $pedido = array(
            'descricao' => $dados['descricao'],
            'funcionario_id'=>$dados['funcionario_id'],
            'data_inicial'=>$pedidoAnteior->data_inicial,
        );
        Pedido::find($id)->update($pedido);
        return redirect(route('pedido.index'));
    }
    public function deletar($id){
        Pedido::find($id)->delete();
        return redirect(route('pedido.index'));
    }
    public function concluir($id){
        $registro = Pedido::find($id);
        return view('pedido.concluir',compact('registro'));
    }
    public function finalizar(Request $request, $id){
        $dados = $request->all();
        $pedidoAnteior = Pedido::find($id);
        $pedido = array(
            'descricao' => $dados['descricao'],
            'funcionario_id'=>$dados['funcionario_id'],
            'data_inicial'=>$pedidoAnteior->data_inicial,
            'entregador_id'=>$dados['entregador_id'],
        );
        Pedido::find($id)->update($pedido);
        return redirect(route('pedido.index'));
    }
    public function finalizado(){
        $funcionarios = User::all();
        $pedidos = Pedido::all();
        $registros = array();
        foreach ($pedidos as $registro){
            if ($registro->entregador_id != null){
                array_unshift($registros,$registro);
            }
        }
        return view('pedido.finalizado',compact('registros','funcionarios'));
    }
}
