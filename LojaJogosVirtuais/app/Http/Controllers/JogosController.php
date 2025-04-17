<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function AllGames(){
        return Jogos::all();
    }
    public function VirtualGames(Request $request){
        $jogos = Jogos::create(request->all());
        return response()->json($jogos, 201);
    }
    public function store(Request $request){
        $jogos = Jogos::create($request->all());
        return response()->json($tarefa, 201);
    }
    public function show($id){
        return Jogos::findOrFail($id);
    }
    public function update(Request $request, $id){
        $jogos = Jogos::findOrFail($id);

        if($request->has('preco')){
            $jogos->preco = $request->input('preco');
            $jogos->save();

            return response()->json(["message"=>"preço atualizado com sucesso"], 200);
        }
    }
    public function destroy($id){
        Jogos::findOrFail($id)->delete();
        return response()->json(["message"=>"Jogo Deletado"], 200);
    }
}
