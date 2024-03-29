<?php

namespace App\Http\Controllers;

use App\Models\Loja;
use Illuminate\Http\Request;

class LojaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Loja::all();

        // dd($dados);
 
        return view("loja.list", ["dados" => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        

        return view("loja.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([


            "nome" => "required|max:100",
            "cnpj"=> "required",
            "email"=> "required",
            "contato"=> "required",


        ], [
            'nome.required' => "O :attribute é obrigatório",
            'nome.max' => "Só é permitido 100 caracteres",
            'cpnj.required' => "O :attribute é obrigatório",
            'email.required' => "O :attribute é obrigatório",
            'contato.required' => "O :attribute é obrigatório",
           

        ]);

        Loja::create(
            [
                'nome' => $request->nome,
                'cnpj' => $request->cnpj,
                'email' => $request->email,
                'contato' => $request->contato,
               

            ]
        );
        return redirect('loja');
    }

    /**
     * Display the specified resource.
     */
    public function show(Loja $loja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dado = Loja::findOrFail($id);

       


        return view("loja.form", [
            'dado' => $dado,
           
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Loja $loja)
    {
        $request->validate([


            "nome" => "required|max:100",
            "cnpj"=> "required",
            "email"=> "required",
            "contato"=> "required",


        ], [
            'nome.required' => "O :attribute é obrigatório",
            'nome.max' => "Só é permitido 100 caracteres",
            'cpnj.required' => "O :attribute é obrigatório",
            'email.required' => "O :attribute é obrigatório",
            'contato.required' => "O :attribute é obrigatório",
           

        ]);

        Loja::updateOrCreate(
            [
                'nome' => $request->nome,
                'cnpj' => $request->cnpj,
                'email' => $request->email,
                'contato' => $request->contato,
               

            ]
        );
        return redirect('loja');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dado = Loja::findOrFail($id);
        // dd($dado);
        $dado->delete();

        return redirect('loja');
    }

    public function search(Request $request)
    {
        if (!empty($request->modelo)) {
            $dados = Loja::where(
                "nome",
                "like",
                "%" . $request->nome . "%"
            )->get();
        } else {
            $dados = Loja::all();
        }
        // dd($dados);

        return view("loja.list", ["dados" => $dados]);
    }
}
