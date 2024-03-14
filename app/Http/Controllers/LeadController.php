<?php

namespace App\Http\Controllers;
use App\Models\Lead;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Label;

class LeadController extends Controller
{
    public function index(){
        $leads = Lead::paginate(5);
        return view('home', [
            'leads' => $leads
        ]);
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
            $product = Lead::where('id' , $request)->first();
            $product->delete();
            return redirect()->route('homepageroute')->with("success", "Usuário deletado com sucesso");
        }
        public function search(Request $request) {
            if ($request-> input("busca")) {
                    $leads = Lead::where('nome', 'LIKE', '%'.$request->input("busca").'%')->latest()->paginate(15);
                    return view('home', [
                        'leads' => $leads
                    ]);
            }else {
                return redirect()->back()->with('message', 'Busca vazia');
            }
        }

}

