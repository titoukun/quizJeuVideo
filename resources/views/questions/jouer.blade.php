@extends('layouts.app')

@section('titre_page')
    Session de quiz
@endsection

@section('content')
<div id="contenu_principal" class="relative flex items-center text-center justify-center my-12 overflow-hidden text-gray-700">
    <div class="relative z-30 pt-6 md:p-5 sm:p-3 rounded-xl w-4/5 bg-white/90">
        @foreach($questions as $question)
            <h1 class="text-2xl text-center">{{ $question->intitule }}</h1>
            <hr class="color-gray-800 my-6">
            <div class="text-center align-center md:ml-0 ml-6 justify-center">
                <div class="flex items-center mr-4 mb-4  hover:text-red-700">
                    <input type="radio" name="radio-{{ $question->id }}" value="A-{{ $question->id }}" class="w-8 h-8 reponse inline-block mr-2 rounded-full border border-grey cursor-pointer" />
                    <label class="flex items-center cursor-pointer text-xl">
                        {{ $question->reponse_a }}</label>
                </div>
                <div class="flex items-center mr-4 mb-4  hover:text-red-700">
                    <input type="radio" name="radio-{{ $question->id }}" value="B-{{ $question->id }}" class="w-8 h-8 reponse inline-block mr-2 rounded-full border border-grey cursor-pointer"  />
                    <label class="flex items-center cursor-pointer text-xl">
                        {{ $question->reponse_b }}</label>
                </div>
            
                <div class="flex items-center mr-4 mb-4  hover:text-red-700">
                    <input type="radio" name="radio-{{ $question->id }}" value="C-{{ $question->id }}" class="w-8 h-8 reponse inline-block mr-2 rounded-full border border-grey cursor-pointer" />
                    <label class="flex items-center cursor-pointer text-xl">
                        {{ $question->reponse_c }}</label>
                </div>
            
                <div class="flex items-center mr-4 mb-4  hover:text-red-700">
                    <input type="radio" name="radio-{{ $question->id }}" value="D-{{ $question->id }}" class="w-8 h-8 reponse inline-block mr-2 rounded-full border border-grey cursor-pointer"/>
                    <label class="flex items-center cursor-pointer text-xl">
                        {{ $question->reponse_d }}</label>
                </div>
            </div>
        @endforeach

                <div class="flex items-center my-8 w-3/5">
                    <button id="boutonRepondre" class="bg-teal-500 hover:bg-teal-400 text-white font-bold py-2 px-4 border-b-4 border-teal-700 hover:border-teal-500 rounded" type="button">
                    <label for="boutonRepondre" class="flex items-center cursor-pointer text-xl">
                    Donner réponses</label>
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection