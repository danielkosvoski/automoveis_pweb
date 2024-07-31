<?php

namespace App\Http\Controllers;

use App\Models\Financiamento;
use App\Models\Automovel;

use Illuminate\Http\Request;

class FinanciamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Financiamento::all();

        // dd($dados);
 
        return view("financiamento.list", ["dados" => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        

        return view("financiamento.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([


            "nome" => "required|max:100",
            "taxa"=> "required",
       

        ], [
            'nome.required' => "O :attribute é obrigatório",
            'nome.max' => "Só é permitido 100 caracteres",
            'taxa.required' => "O :attribute é obrigatório",
           

        ]);

        Financiamento::create(
            [
                'nome' => $request->nome,
                'taxa' => $request->taxa,
             
               

            ]
        );
        return redirect('financiamento');
    }

    /**
     * Display the specified resource.
     */
    public function show(Financiamento $financiamento)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dado = Financiamento::findOrFail($id);

       


        return view("financiamento.form", [
            'dado' => $dado,
           
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Financiamento $financiamento)
    {
        $request->validate([


            "nome" => "required|max:100",
            "taxa"=> "required",
          


        ], [
            'nome.required' => "O :attribute é obrigatório",
            'nome.max' => "Só é permitido 100 caracteres",
            'taxa.required' => "O :attribute é obrigatório",
           
           

        ]);

        Financiamento::updateOrCreate(
            [
                'nome' => $request->nome,
                'taxa' => $request->taxa,
            
               

            ]
        );
        return redirect('financiamento');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dado = Financiamento::findOrFail($id);
        // dd($dado);
        $dado->delete();

        return redirect('financiamento');
    }

    public function search(Request $request)
    {
        if (!empty($request->modelo)) {
            $dados = Financiamento::where(
                "nome",
                "like",
                "%" . $request->nome . "%"
            )->get();
        } else {
            $dados = Financiamento::all();
        }
        // dd($dados);

        return view("financiamento.list", ["dados" => $dados]);
    }
}
