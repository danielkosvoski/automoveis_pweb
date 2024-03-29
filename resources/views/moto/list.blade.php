@extends('base')
@section('conteudo')
@section('titulo', 'Listagem de Automoveis')


<div class="bg-stone-100 rounded-md">
<div class="rounded-lg  items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-1 lg:px-8">

<h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Listagem de Motos</h2>
<dt class="font-medium text-red-700">Confira aqui nossos melhores modelos disponiveis!</dt>

<form action="{{ route('moto.search') }}" method="post">

    <div class="row">
        @csrf
        <div class="col-6">
            <label for=""></label><br>
            <input type="text" name="Modelo" class="form-control"><br>
        </div>
        <div class="col-4" style="margin-top: 22px;">

      

            <button type="submit" class=" w-1/2 rounded-md bg-red-700 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 no-underline"> <i class="fa-solid fa-magnifying-glass"></i> Buscar</button>
            <a href="{{ url('moto/create') }}" class=" w-3/4 rounded-md bg-red-700 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 no-underline"><i class="fa-solid fa-plus"></i> Novo</a>
        </div>
    </div>
</form>

<hr>









<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-700 dark:text-stone-500">
        <thead class="text-xs text-gray-700 uppercase bg-stone-900 dark:bg-stone-800 dark:text-stone-300">
            <tr>
                <th scope="col" class="px-6 py-3">
                     ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Imagem
                </th>
                <th scope="col" class="px-6 py-3">
                    Modelo
                </th>
                <th scope="col" class="px-6 py-3">
                    Marca
                </th>
                <th scope="col" class="px-6 py-3">
                    Ano
                </th>
               
                <th scope="col" class="px-6 py-3">
                    Valor
                </th>
                <th scope="col" class="px-6 py-3">
                    Cidade
                </th>
                <th scope="col" class="px-6 py-3">
                    Comprar
                </th>
                <th scope="col" class="px-6 py-3">
                    Editar
                </th>
                <th scope="col" class="px-6 py-3">
                    Deletar
                </th>
            </tr>


        </thead>
        <tbody>

        @foreach ($dados as $item)

            <tr class="bg-white border-b dark:bg-gray-500 dark:border-gray-700">
                
                <td class="px-6 py-4">
                {{ $item->id }}
                </td>

                @php
                    $nome_imagem = !empty($item->imagem) ? $item->imagem : 'sem_imagem.jpg';
                @endphp

                <td class="px-6 py-4">
                <img src="/storage/{{ $nome_imagem }}" width="150px" alt="imagem" />
                </td>

                <td class="px-6 py-4">
                {{ $item->modelo }}
                </td>

                <td class="px-6 py-4">
                {{ $item->marca->nome ?? '' }}
                </td>

                <td class="px-6 py-4">
                {{ $item->ano }}
                </td>

                <td class="px-6 py-4">
                R${{ $item->valor }},00
                </td>

                <td class="px-6 py-4">
                {{ $item->cidade }}
                </td>

                <td class="px-6 py-4">
               <a href="{{ route('moto.show', $item->id) }}" class=" block w-full rounded-md bg-red-700 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 no-underline">Comprar</a> 
                </td>
                <td class="px-6 py-4">
                <a href="{{ route('moto.edit', $item->id) }} "class=" block w-full rounded-md bg-red-700 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 no-underline">Editar</a> 
                </td>
                <td class="px-6 py-4">
                <form action="{{ route('moto.destroy', $item) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-outline-danger" title="Deletar"
                            onclick="return confirm('Deseja realmente deletar esse registro?')">
                            <i class="fa-solid fa-trash-can"></i></button>
                    </form>
                </td>
            </tr>
           @endforeach
        </tbody>
    </table>
</div>








</div>
</div>

@stop
