<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $funcionarios = User::all();
        return view('user.index',compact('funcionarios'));
    }

    public function adicionar(){
        return view('user.adicionar');
    }

    public function salvar(Request $request){
        $dados = $request->all();
        User::create($dados);
        //dd($dados);
        return redirect(route('user.index'));
    }
    public function editar($id){
        $funcionario = User::find($id);
        return view('user.editar',compact('funcionario'));
    }
    public function atualizar(Request $request,$id){
        $dados = $request->all();
        User::find($id)->update($dados);
        //dd($dados);
        return redirect(route('user.index'));
    }
    public function deletar($id){
        User::find($id)->delete();
        return redirect(route('user.index'));
    }
}
