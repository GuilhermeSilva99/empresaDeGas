<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'name'=>"kiko",
            'email'=>"admin@gmail.com",
            'password'=>bcrypt("123456"),
            'cargo'=>'ADMIN',
            'telefone'=>"87 9.9999-9999",

        ];
        if(User::where('email','=',$dados['email'])->count()){
            $usuario = User::where('email','=',$dados['email'])->first();
            $usuario->update($dados);
        }else{
            User::create($dados);
        }
    }
}
