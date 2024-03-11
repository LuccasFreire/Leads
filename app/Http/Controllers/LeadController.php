<?php

namespace App\Http\Controllers;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeadController extends Controller
{
    public function index(){

        return view('home', ['leads' => Lead::all()]);
    }

    public function salvar(Request $request, $id) {
        $nome = $request->input('nome');
        $email = $request->input('email');
        $cpf = $request->input('cpf');

        Lead::where('id', $id)->update(['nome' => $nome, 'email' => $email, 'cpf' => $cpf]);
        return redirect()->route('homepageroute')->with("success", "Usuário editado com sucesso");
    }
}
