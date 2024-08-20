@extends('base')
@section('conteudo')
@section('titulo', 'Financiamento')






<div class="bg-stone-100 rounded-md">
  <div class="rounded-lg mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-1 lg:px-8">
    <div>
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Selecione uma Opção de Finaciamento</h2>
    
      <p class="mt-4 text-gray-500">Seguem abaixo as opcções de Financiamento disponiveis para o modelo requisitado, as opcoes e taxas seguem as taxas bancarias padroes e as opçoes aceitas pelos vendedores, selecione a opcao que melhor se adequar aos seu Fianciamento.</p>



    </div>

    <div class="  lg:mt-0 lg:w-full lg:max-w-lgg lg:flex-shrink-0 grid ">
        <div class="rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
          <div class="mx-auto max-w-xs px-8">
            <p class="text-base font-semibold text-gray-600">Selecione uma das Opçoes de Financiamento:</p>
            <a href="{{ url('generate-modelo-pdf') }}" class="mt-10 block w-full rounded-md bg-red-700 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 no-underline">Santander</a>
            <span class="text-md font-semibold leading-6 tracking-wide text-gray-600">Taxa de Juros Mensal + TR: 3,5%</span>
            <p class="mt-6 flex items-baseline justify-center gap-x-2">
                <span class="text-lg font-semibold leading-6 tracking-wide text-gray-600">10x</span>
              <span class="text-3xl font-bold tracking-tight text-gray-900">R${{(($dado ->valor)*1.35)/10}},00</span>
              <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">BRL</span>
              <span class="text-lg font-semibold leading-6 tracking-wide text-gray-600">20x</span>
              <span class="text-3xl font-bold tracking-tight text-gray-900">R${{(($dado ->valor)*1.7)/20}},00</span>
              <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">BRL</span>
              <span class="text-lg font-semibold leading-6 tracking-wide text-gray-600">40x</span>
              <span class="text-3xl font-bold tracking-tight text-gray-900">R${{(($dado ->valor)*2.4)/40}},00</span>
              <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">BRL</span>


            </p>

            <a href="{{ url('generate-modelo-pdf') }}" class="mt-10 block w-full rounded-md bg-red-700 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 no-underline">Nubank</a>
            <span class="text-md font-semibold leading-6 tracking-wide text-gray-600">Taxa de Juros Mensal + TR: 4%</span>
            <p class="mt-6 flex items-baseline justify-center gap-x-2">
                <span class="text-lg font-semibold leading-6 tracking-wide text-gray-600">10x</span>
              <span class="text-3xl font-bold tracking-tight text-gray-900">R${{(($dado ->valor)*1.4)/10}},00</span>
              <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">BRL</span>
              <span class="text-lg font-semibold leading-6 tracking-wide text-gray-600">20x</span>
              <span class="text-3xl font-bold tracking-tight text-gray-900">R${{(($dado ->valor)*1.8)/20}},00</span>
              <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">BRL</span>
              <span class="text-lg font-semibold leading-6 tracking-wide text-gray-600">40x</span>
              <span class="text-3xl font-bold tracking-tight text-gray-900">R${{(($dado ->valor)*2.6)/40}},00</span>
              <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">BRL</span>


            </p>

            <a href="{{ url('generate-modelo-pdf') }}" class="mt-10 block w-full rounded-md bg-red-700 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 no-underline">Itau</a>
            <span class="text-md font-semibold leading-6 tracking-wide text-gray-600">Taxa de Juros Mensal + TR: 2%</span>
            <p class="mt-6 flex items-baseline justify-center gap-x-2">
                <span class="text-lg font-semibold leading-6 tracking-wide text-gray-600">10x</span>
              <span class="text-3xl font-bold tracking-tight text-gray-900">R${{(($dado ->valor)*1.2)/10}},00</span>
              <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">BRL</span>
              <span class="text-lg font-semibold leading-6 tracking-wide text-gray-600">20x</span>
              <span class="text-3xl font-bold tracking-tight text-gray-900">R${{(($dado ->valor)*1.4)/20}},00</span>
              <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">BRL</span>
              <span class="text-lg font-semibold leading-6 tracking-wide text-gray-600">40x</span>
              <span class="text-3xl font-bold tracking-tight text-gray-900">R${{(($dado ->valor)*1.8)/40}},00</span>
              <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">BRL</span>


            </p>

            <a href="{{ url('generate-modelo-pdf') }}" class="mt-10 block w-full rounded-md bg-red-700 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 no-underline">Bradesco</a>
            <span class="text-md font-semibold leading-6 tracking-wide text-gray-600">Taxa de Juros Mensal + TR: 8%</span>
            <p class="mt-6 flex items-baseline justify-center gap-x-2">
                <span class="text-lg font-semibold leading-6 tracking-wide text-gray-600">10x</span>
              <span class="text-3xl font-bold tracking-tight text-gray-900">R${{(($dado ->valor)*1.8)/10}},00</span>
              <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">BRL</span>
              <span class="text-lg font-semibold leading-6 tracking-wide text-gray-600">20x</span>
              <span class="text-3xl font-bold tracking-tight text-gray-900">R${{(($dado ->valor)*2.6)/20}},00</span>
              <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">BRL</span>
              <span class="text-lg font-semibold leading-6 tracking-wide text-gray-600">40x</span>
              <span class="text-3xl font-bold tracking-tight text-gray-900">R${{(($dado ->valor)*3.2)/40}},00</span>
              <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">BRL</span>


            </p>

            <p class="mt-6 text-xs leading-5 text-gray-600">Todas as suas transações são protegidas com cryptografia de ponta.<br> Todos os direitos reservados JaguncoLTDA</p>
          </div>
        </div>
      </div>





  </div>


</div>








@stop
