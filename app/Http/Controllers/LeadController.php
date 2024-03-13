<?php

namespace App\Http\Controllers;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Label;

class LeadController extends Controller
{
    public function index(){
        return view('home', ['leads' => Lead::all()]);
    }

    public function create(){
        return view('criar');
    }

    public function update(Request $request, $id) {
        $nome = $request->input('nome');
        $email = $request->input('email');
        $cpf = $request->input('cpf');
        Lead::where('id', $id)->update(['nome' => $nome, 'email' => $email, 'cpf' => $cpf]);
        return redirect()->route('homepageroute')->with("success", "Usuário editado com sucesso");
    }

    public function store(Request $request){
        #$nome = $request -> input();
        $valid = $request->validate([
            'nome' => 'min:6',
            'email' => 'required|unique:leads|max:255',
            'cpf' => 'required|unique:leads|max:11|min:11',
        ]);

        $lead = Lead::create([
            'nome' => $request -> input('nome'),
            'email' => $request -> input('email'),
            'cpf' => $request -> input('cpf')
        ]);

            return redirect()->route('homepageroute')->with("success", "Usuário criado com sucesso");
        }

        public function delete($request){
            $product  =  Lead::where('id' , $request)->first();
            $product->delete();
            return redirect()->route('homepageroute')->with("success", "Usuário deletado com sucesso");
        }
}

