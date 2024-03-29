@extends('base')
@section('conteudo')
@section('titulo', 'Listagem de Automoveis')






<div class="bg-stone-100 rounded-md">
  <div class="rounded-lg mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-1 lg:px-8">
    <div>
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $dado->modelo }}</h2>
      <dt class="font-medium text-red-700">{{ $dado->modelo }}, {{ $dado->marca->nome ?? '' }}, {{ $dado->ano }}, {{ $dado->cor }}</dt>
      <p class="mt-4 text-gray-500">No ano de 1975, somado à remodelação visual da linha e do lançamento da Caravan, houve a entrada de uma nova versão de luxo, em substituição à Gran Luxo, batizada de Comodoro, que trazia diferenciais como o interior com apliques de jacarandá, meio teto de vinil Las Vegas (exclusivo para o modelo coupé) e um filete pintado na linha de cintura da carroceria. Em 1980, a versão Comodoro seria reposicionada como opção intermediária na linha Opala (permanecendo até o encerramento desta) em função do lançamento da versão Diplomata, mas como versão topo de linha para a station wagon Caravan, esta lançada na versão Diplomata somente em 1986. </p>

      <br>
      <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-4 sm:gap-y-16 lg:gap-x-8">
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-large text-red-700">Modelo</dt>
          <dd class="mt-2 text-sm text-gray-500">{{ $dado->modelo }}<br><br>A modelo de carro refere-se à versão ou tipo específico de carro fabricado pelo fabricante. Geralmente, estes são identificados por nomes ou por uma série de caracteres, incluindo números e letras.</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-large text-red-700">Marca</dt>
          <dd class="mt-2 text-sm text-gray-500">{{ $dado->marca->nome ?? '' }}<br><br>Marcas de automóveis são frequentemente batizadas com os sobrenomes de seus fundadores. A lista é grande: Chevrolet, Citroën, Ferrari, Honda, Rolls e Royce. </dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-large text-red-700">Ano</dt>
          <dd class="mt-2 text-sm text-gray-500">{{ $dado->ano }}<br><br>Um ano corresponde ao intervalo aproximado de tempo que a Terra demora para completar uma volta em torno do Sol. Os anos têm uma duração de 365 dias, 5 horas, 48 minutos e 46 segundos.</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-large text-red-700">Quilometragem</dt>
          <dd class="mt-2 text-sm text-gray-500">{{ $dado->km }}<br><br>Substantivo feminino Ação ou efeito de quilometrar, medir em quilômetros. Área, extensão ou quantidade que se refere aos quilômetros percorridos por: um carro usado possui, geralmente, uma alta quilometragem.</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-large text-red-700">Cor</dt>
          <dd class="mt-2 text-sm text-gray-500">{{ $dado->cor }}<br><br>A cor é uma percepção visual provocada pela ação de um feixe de fótons sobre células especializadas da retina, que transmitem, através de informação pré-processada ao nervo óptico, impressões para o sistema nervoso.</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-large text-red-700">Combustivel</dt>
          <dd class="mt-2 text-sm text-gray-500">{{ $dado->combustivel }}<br><br>Combustível é uma substância que reage com o oxigênio liberando energia, usualmente de modo vigoroso, na forma de calor, chamas e gases. Supõe a liberação da energia nele contida em forma de energia potencial a uma forma utilizável.</dd>
        </div>
        
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-large text-red-700">Cambio</dt>
          <dd class="mt-2 text-sm text-gray-500">{{ $dado->cambio }}<br><br>O câmbio, que também atende pelo termo transmissão, é um componente mecânico utilizado pelos veículos motorizados para transmitir a força produzida pelo motor às rodas.</dd>
        </div>
        <div class="border-t border-gray-200 pt-4">
          <dt class="font-large text-red-700">Cidade</dt>
          <dd class="mt-2 text-sm text-gray-500">{{ $dado->cidade }}<br><br>Uma cidade é um grande assentamento humano. Pode ser definida como um lugar permanente e densamente povoado com limites administrativamente definidos cujos membros trabalham principalmente em tarefas não agrícolas</dd>
        </div>
      </dl>
    </div>
    
    <div class="  lg:mt-0 lg:w-full lg:max-w-lgg lg:flex-shrink-0 grid ">
        <div class="rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
          <div class="mx-auto max-w-xs px-8">
            <p class="text-base font-semibold text-gray-600">Compre agora, direto para sua Garagem!</p>
            <p class="mt-6 flex items-baseline justify-center gap-x-2">
              <span class="text-5xl font-bold tracking-tight text-gray-900">R${{ $dado->valor }},00</span>
              <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">BRL</span>
            </p>
            <a href="{{ url('automovel') }}" class="mt-10 block w-full rounded-md bg-red-700 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 no-underline">Comprar Agora</a>
            <p class="mt-6 text-xs leading-5 text-gray-600">Todas as suas transações são protegidas com cryptografia de ponta.<br> Todos os direitos reservados JaguncoLTDA</p>
          </div>
        </div>
      </div>
    


   

  </div>

 
</div>








@stop
