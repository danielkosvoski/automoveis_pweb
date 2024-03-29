@extends('base')
@section('conteudo')
@section('titulo', 'Formulário de moto')
@php
    if (!empty($dado->id)) {
        $route = route('moto.update', $dado->id);
    } else {
        $route = route('moto.store');
    }
@endphp

<div class="bg-stone-100 rounded-md">
<div class="rounded-lg  items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-1 lg:px-8">

<h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Formulario de moto</h2>
<dt class="font-medium text-red-700">Informe os dados para a criação de um anuncio personalizado para o seu veiculo!</dt>
<form action="{{ $route }}" method="post" enctype="multipart/form-data">



    @csrf

    @if (!empty($dado->id))
        @method('put')
    @endif

    <input type="hidden" name="id"
        value="@if (!empty($dado->id)) {{ $dado->id }}@else{{ '' }} @endif"><br>

    <label for="">Modelo</label><br>
    <input type="text" name="modelo" class="form-control"
        value="@if (!empty($dado->modelo)) {{ $dado->modelo }}@elseif (!empty(old('modelo'))){{ old('modelo') }}@else{{ '' }} @endif"><br>

    <label for="">Marca</label><br>
    <select name="marca_id" class="form-select">
        @foreach ($marcas as $item)
            <option value="{{ $item->id }}">{{ $item->nome }}</option>
        @endforeach
    </select><br>

    <label for="">Ano</label><br>
    <input type="text" name="ano" class="form-control"
        value="@if (!empty($dado->ano)) {{ $dado->ano }}@elseif (!empty(old('ano'))){{ old('ano') }}@else{{ '' }} @endif"><br>

    <label for="">Km</label><br>
    <input type="text" name="km" class="form-control"
        value="@if (!empty($dado->km)) {{ $dado->km }}@elseif (!empty(old('km'))){{ old('km') }}@else{{ '' }} @endif"><br>

    <label for="">Cor</label><br>
    <input type="text" name="cor" class="form-control"
        value="@if (!empty($dado->cor)) {{ $dado->cor }}@elseif (!empty(old('cor'))){{ old('cor') }}@else{{ '' }} @endif"><br>

    <label for="">Combustivel</label><br>
    <input type="text" name="combustivel" class="form-control"
        value="@if (!empty($dado->combustivel)) {{ $dado->combustivel }}@elseif (!empty(old('combustivel'))){{ old('combustivel') }}@else{{ '' }} @endif"><br>

    <label for="">Cambio</label><br>
    <input type="text" name="cambio" class="form-control"
        value="@if (!empty($dado->cambio)) {{ $dado->cambio }}@elseif (!empty(old('cambio'))){{ old('cambio') }}@else{{ '' }} @endif"><br>

    <label for="">Valor</label><br>
    <input type="text" name="valor" class="form-control"
        value="@if (!empty($dado->valor)) {{ $dado->valor }}@elseif (!empty(old('valor'))){{ old('valor') }}@else{{ '' }} @endif"><br>

    <label for="">Cidade</label><br>
    <input type="text" name="cidade" class="form-control"
        value="@if (!empty($dado->cidade)) {{ $dado->cidade }}@elseif (!empty(old('cidade'))){{ old('cidade') }}@else{{ '' }} @endif"><br>




   

    @php
        $nome_imagem = !empty($dado->imagem) ? $dado->imagem : 'sem_imagem.jpg';
    @endphp
   
    <input type="file" class="form-control" name="imagem"
        value="@if (!empty($dado->imagem)) {{ $dado->imagem }}@elseif (!empty(old('imagem'))){{ old('imagem') }}@else{{ '' }} @endif"><br>

    </div>
    <div class="  lg:mt-0 lg:w-full lg:max-w-lgg lg:flex-shrink-0 grid ">
        <div class="rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
          <div class="mx-auto max-w-xs px-8">
         
          <button type="submit" class="mt-2 block w-full rounded-md bg-red-700 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 no-underline">Salvar</button> 
            <a href="{{ url('moto') }}" class="mt-10 block w-full rounded-md bg-red-700 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 no-underline">Voltar</a> 
            <p class="mt-6 text-xs leading-5 text-gray-600">Todas as suas transações são protegidas com cryptografia de ponta.<br> Todos os direitos reservados JaguncoLTDA</p>
          </div>
        </div>
      </div>
    </div>



   
</form>



</div>

@stop
