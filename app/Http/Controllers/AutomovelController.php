<?php

namespace App\Http\Controllers;

use App\Models\Automovel;
use App\Models\Marca;
use App\Models\Loja;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class AutomovelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //app/http/Controller
        $dados = Automovel::all();

        // dd($dados);

        return view("automovel.list", ["dados" => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $marcas = Marca::all();
        $lojas = Loja::all();


        return view("automovel.form", ['marcas' => $marcas, 'lojas' => $lojas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //app/http/Controller

        $request->validate([


            "modelo" => "required|max:100",
            "marca_id" => "required",
            "ano" => "required",
            "km" => "required",
            "cor" => "required|max:100",
            "combustivel" => "required|max:100",
            "cambio" => "required|max:100",
            "valor" => "required",
            "cidade" => "required|max:100",
            "loja_id" => "required"


        ], [
            'modelo.required' => "O :attribute é obrigatório",
            'modelo.max' => "Só é permitido 100 caracteres",
            'marca_id.required' => "O :attribute é obrigatório",
            'ano.required' => "O :attribute é obrigatório",
            'km.required' => "O :attribute é obrigatório",
            'cor.required' => "O :attribute é obrigatório",
            'cor.max' => "Só é permitido 100 caracteres",
            'combustivel.required' => "O :attribute é obrigatório",
            'combustivel.max' => "Só é permitido 100 caracteres",
            'cambio.required' => "O :attribute é obrigatório",
            'cambio.max' => "Só é permitido 100 caracteres",
            'valor.required' => "O :attribute é obrigatório",
            'cidade.required' => "O :attribute é obrigatório",
            'cidade.max' => "Só é permitido 100 caracteres",
            'loja_id.required' => "O :attribute é obrigatório",

        ]);

        if ($request->hasFile('imagem')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('imagem')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('imagem')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = 'img/automovel/' . $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('imagem')->storeAs('public', $fileNameToStore);
        } else {
            $fileNameToStore = '';
        }

        Automovel::create(
            [
                'modelo' => $request->modelo,
                'marca_id' => $request->marca_id,
                'ano' => $request->ano,
                'km' => $request->km,
                'cor' => $request->cor,
                'combustivel' => $request->combustivel,
                'cambio' => $request->cambio,
                'valor' => $request->valor,
                'cidade' => $request->cidade,
                'loja_id' => $request->loja_id,
                'imagem' => $fileNameToStore,
            ]
        );
        return redirect('automovel');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dado = Automovel::findOrFail($id);

        $marcas = Marca::all();
        $lojas = Loja::all();



        return view("automovel.modelo", [
            'dado' => $dado,
            'marcas' => $marcas,
            'lojas' => $lojas,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dado = Automovel::findOrFail($id);

        $marcas = Marca::all();
        $lojas = Loja::all();



        return view("automovel.form", [
            'dado' => $dado,
            'marcas' => $marcas,
            'lojas' => $lojas,

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Automovel $automovel)
    {
        $request->validate([


            "modelo" => "required|max:100",
            "marca_id" => "required",
            "ano" => "required",
            "km" => "required",
            "cor" => "required|max:100",
            "combustivel" => "required|max:100",
            "cambio" => "required|max:100",
            "valor" => "required",
            "cidade" => "required|max:100",
            "loja_id" => "required",


        ], [
            'modelo.required' => "O :attribute é obrigatório",
            'modelo.max' => "Só é permitido 100 caracteres",
            'marca_id.required' => "O :attribute é obrigatório",

            'ano.required' => "O :attribute é obrigatório",
            'km.required' => "O :attribute é obrigatório",
            'cor.required' => "O :attribute é obrigatório",
            'cor.max' => "Só é permitido 100 caracteres",
            'combustivel.required' => "O :attribute é obrigatório",
            'combustivel.max' => "Só é permitido 100 caracteres",
            'cambio.required' => "O :attribute é obrigatório",
            'cambio.max' => "Só é permitido 100 caracteres",
            'valor.required' => "O :attribute é obrigatório",
            'cidade.required' => "O :attribute é obrigatório",
            'cidade.max' => "Só é permitido 100 caracteres",
            'loja_id.required' => "O :attribute é obrigatório",

        ]);

        if ($request->hasFile('imagem')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('imagem')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('imagem')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = 'img/automovel/' . $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('imagem')->storeAs('public', $fileNameToStore);
        } else {
            $fileNameToStore = '';
        }

        Automovel::updateOrCreate(
            ['id' => $request->id],
            [
                'modelo' => $request->modelo,
                'marca_id' => $request->marca_id,
                'ano' => $request->ano,
                'km' => $request->km,
                'cor' => $request->cor,
                'combustivel' => $request->combustivel,
                'cambio' => $request->cambio,
                'valor' => $request->valor,
                'cidade' => $request->cidade,
                'loja_id' => $request->loja_id,
                'imagem' => $fileNameToStore,
            ]
        );
        return redirect('automovel');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dado = Automovel::findOrFail($id);
        // dd($dado);
        $dado->delete();

        return redirect('automovel');
    }

    public function search(Request $request)
    {
        //dd($request->modelo);
        if (!empty($request->modelo)) {
            $dados = Automovel::where(
                "modelo",
                "like",
                "%" . $request->modelo . "%"
            )->get();
        } else {
            $dados = Automovel::all();
        }
        // dd($dados);

        return view("automovel.list", ["dados" => $dados]);
    }
}
