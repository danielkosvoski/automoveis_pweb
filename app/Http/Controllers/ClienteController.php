<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $dados = Cliente::all();

        // dd($dados);

        return view("cliente.form");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view("cliente.form");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd($request->all());

        $request->validate([
            "nome" => "required|max:100",
            "cpf"=> "required",
            "endereco"=> "required",
            "contato"=> "required",
            "cliente_id"=> "required",
        ], [
            'nome.required' => "O :attribute é obrigatório",
            'nome.max' => "Só é permitido 100 caracteres",
            'cpf.required' => "O :attribute é obrigatório",
            'endereco.required' => "O :attribute é obrigatório",
            'contato.required' => "O :attribute é obrigatório",
            'cliente_id.required' => "O :attribute é obrigatório",
        ]);

        Cliente::create(
            [
                'nome' => $request->nome,
                'cpf' => $request->cpf,
                'endereco' => $request->endereco,
                'contato' => $request->contato,
                'cliente_id' => $request->cliente_id,


            ]
        );
        return redirect('cliente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dado = Cliente::findOrFail($id);




        return view("cliente.form", [
            'dado' => $dado,

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([


            "nome" => "required|max:100",
            "cpf"=> "required",
            "endereco"=> "required",
            "contato"=> "required",
            "cliente_id"=> "required",


        ], [
            'nome.required' => "O :attribute é obrigatório",
            'nome.max' => "Só é permitido 100 caracteres",
            'cpf.required' => "O :attribute é obrigatório",
            'endereco.required' => "O :attribute é obrigatório",
            'contato.required' => "O :attribute é obrigatório",
            'cliente_id.required' => "O :attribute é obrigatório",




        ]);

        Cliente::updateOrCreate(
            [
                'nome' => $request->nome,
                'cpf' => $request->cpf,
                'endereco' => $request->endereco,
                'contato' => $request->contato,
                'cliente_id' => $request->cliente_id,


            ]
        );
        return redirect('cliente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dado = Cliente::findOrFail($id);
        // dd($dado);
        $dado->delete();

        return redirect('cliente');
    }

    public function search(Request $request)
    {
        if (!empty($request->modelo)) {
            $dados = Cliente::where(
                "nome",
                "like",
                "%" . $request->nome . "%"
            )->get();
        } else {
            $dados = Cliente::all();
        }
        // dd($dados);

        return view("cliente.list", ["dados" => $dados]);
    }
}
