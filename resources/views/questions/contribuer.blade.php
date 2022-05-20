@extends('layouts.app')

@section('titre_page')
    Contribuer
@endsection

@section('content')
<div id="contenu_principal" class="relative flex items-center text-center justify-center my-12 overflow-hidden text-gray-700">
<form class="w-4/5  bg-white/90" action="" method="POST">
    @csrf
  <div class="flex flex-wrap md:p-5 sm:p-3">
    
    <!-- Champ caché, qui déterminera si l'on est en mode édition ou création -->
    <input type="hidden" id="id_question" name="id_question" value="{{ $question->id != null ? $question->id : -1 }}">

    <!-- Intitulé de la question -->
    <div class="w-full md:w-full px-3 my-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="intitule">
        Intitulé de la question
      </label>
      <input class="appearance-none block w-full bg-gray-50 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="intitule" name="intitule" type="text" value="{{ $question->intitule != null ? $question->intitule : "" }}" placeholder="Qu'est ce que la vie ?">
    </div>
    
    <!-- Réponse A -->
    <div class="w-full md:w-1/2 px-3 my-2">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="reponse_a">
        Réponse A
      </label>
      <input class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="reponse_a" name="reponse_a" type="text" placeholder="La réponse A" value="{{ $question->reponse_a != null ? $question->reponse_a : "" }}">
    </div>

    <!-- Réponse B -->
    <div class="w-full md:w-1/2 px-3 my-2">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="reponse_b">
        Réponse B
      </label>
      <input class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="reponse_b" name="reponse_b" type="text" placeholder="La réponse B" value="{{ $question->reponse_b != null ? $question->reponse_b : "" }}">
    </div>

    <!-- Réponse C -->
    <div class="w-full md:w-1/2 px-3 my-2">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="reponse_c">
        Réponse C
      </label>
      <input class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="reponse_c" name="reponse_c" type="text" placeholder="La réponse C" value="{{ $question->reponse_c != null ? $question->reponse_c : "" }}">
    </div>

    <!-- Réponse D -->
    <div class="w-full md:w-1/2 px-3 my-2">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="reponse_d">
        Réponse D
      </label>
      <input class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="reponse_d" name="reponse_d" type="text" placeholder="La réponse D" value="{{ $question->reponse_d != null ? $question->reponse_d : "" }}">
    </div>

    <!-- Bonne réponse -->
    <div class="w-full md:w-1/2 px-3 my-2">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="bonne_reponse">
        Bonne réponse
      </label>
      <div class="relative">
            <select class="block appearance-none w-full bg-gray-50 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="bonne_reponse" name="bonne_reponse" value="{{ $question->bonne_reponse != null ? $question->bonne_reponse : "" }}">
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option>
            </select>
       </div>
    </div>

    <!-- Explications -->
    <div class="w-full md:w-full px-3 my-2">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="explication">
        Explications
      </label>
      <textarea class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="explication" name="explication" placeholder="Explications concernant la réponse...">{{ $question->explication != null ? $question->explication : "" }}</textarea>
    </div>

    <!-- Bouttons de confirmation -->
    
    <!-- Boutton de confirmation -->
    <div class="w-full md:w-1/2 px-3 my-2">
        <button class="bg-teal-500 hover:bg-teal-400 text-white font-bold py-2 px-4 border-b-4 border-teal-700 hover:border-teal-500 rounded" type="submit">
          {{ $question->id == null ? "Envoyer !" : "Modifier !" }}
        </button>
    </div>

    <!-- Remise à Zéro -->
    <div class="w-full md:w-1/2 px-3 my-2">
        <button class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded" type="button">
          {{ $question->id == null ? "Remise à zéro" : "Annuler !" }}
        </button>
    </div>
  </div>
</form>
</div>

@endsection