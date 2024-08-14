<?php

namespace App\Http\Controllers;

use App\Models\Moto;
use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class MotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       //app/http/Controller
       $dados = Moto::all();

       // dd($dados);

       return view("moto.list", ["dados" => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $marcas = Marca::all();

        return view("moto.form",['marcas'=>$marcas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //app/http/Controller

         $request->validate([


            "modelo" => "required|max:100",
            "marca_id"=> "required",
            "ano"=> "required",
            "km"=> "required",
            "cor"=> "required|max:100",
            "combustivel"=> "required|max:100",
            "valor" => "required",
            "cidade"=> "required|max:100",


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
            'valor.required' => "O :attribute é obrigatório",
            'cidade.required' => "O :attribute é obrigatório",
            'cidade.max' => "Só é permitido 100 caracteres",

        ]);


        if ($request->hasFile('imagem')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('imagem')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('imagem')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = 'img/moto/' . $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('imagem')->storeAs('public', $fileNameToStore);
        } else {
            $fileNameToStore = '';
        }

        Moto::create(
            [
                'modelo' => $request->modelo,
                'marca_id' => $request->marca_id,
                'ano' => $request->ano,
                'km' => $request->km,
                'cor' => $request->cor,
                'combustivel' => $request->combustivel,
                'valor' => $request->valor,
                'cidade' => $request->cidade,

            ]
        );
        return redirect('moto');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dado = Moto::findOrFail($id);

        $marcas = Marca::all();



        return view("moto.modelo", [
            'dado' => $dado,
            'marcas'=> $marcas,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dado = Moto::findOrFail($id);

        $marcas = Marca::all();


        return view("moto.form", [
            'dado' => $dado,
            'marcas'=> $marcas
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Moto $moto)
    {
        $request->validate([


            "modelo" => "required|max:100",
            "marca_id"=> "required",
            "ano"=> "required",
            "km"=> "required",
            "cor"=> "required|max:100",
            "combustivel"=> "required|max:100",
            "valor" => "required",
            "cidade"=> "required|max:100",


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
            'valor.required' => "O :attribute é obrigatório",
            'cidade.required' => "O :attribute é obrigatório",
            'cidade.max' => "Só é permitido 100 caracteres",

        ]);


        if ($request->hasFile('imagem')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('imagem')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('imagem')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = 'img/moto/' . $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('imagem')->storeAs('public', $fileNameToStore);
        } else {
            $fileNameToStore = '';
        }

        Moto::updateOrCreate(
            ['id' => $request->id],
            [
                'modelo' => $request->modelo,
                'marca_id' => $request->marca_id,
                'ano' => $request->ano,
                'km' => $request->km,
                'cor' => $request->cor,
                'combustivel' => $request->combustivel,
                'valor' => $request->valor,
                'cidade' => $request->cidade,

            ]
        );
        return redirect('moto');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dado = Moto::findOrFail($id);
        // dd($dado);
        $dado->delete();

        return redirect('moto');
    }

    public function search(Request $request)
    {


        if (!empty($request->modelo)) {
            $dados = Moto::where(
                "modelo",
                "like",
                "%" . $request->modelo . "%"
            )->get();
        } else {
            $dados = Moto::all();
        }
        // dd($dados);

        return view("moto.list", ["dados" => $dados]);
    }
}
