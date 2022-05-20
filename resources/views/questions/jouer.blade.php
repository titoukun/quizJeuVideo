@extends('layouts.app')

@section('titre_page')
    Session de quiz
@endsection

@section('content')
<div id="contenu_principal" class="relative flex items-center text-center justify-center md:h-screen  my-12 overflow-hidden text-gray-700">
    <div class="relative z-30 pt-6 md:p-5 sm:p-3 rounded-xl w-4/5 bg-white/90">
        <h1 class="text-2xl text-center">Question n°1 : Pourquoi la vie ?</h1>
        <hr class="color-gray-800 my-6">
        <div class="text-center align-center justify-center">
            <div class="flex items-center mr-4 mb-4  hover:text-red-700">
                <input id="radio1" type="radio" name="radio" class="w-8 h-8 reponse inline-block mr-2 rounded-full border border-grey cursor-pointer" />
                <label for="radio1" class="flex items-center cursor-pointer text-xl">
                Best choice</label>
            </div>

            <div class="flex items-center mr-4 mb-4  hover:text-red-700">
                <input id="radio2" type="radio" name="radio" class="w-8 h-8 reponse inline-block mr-2 rounded-full border border-grey cursor-pointer"  />
                <label for="radio2" class="flex items-center cursor-pointer text-xl">
                Second choice</label>
            </div>
    
            <div class="flex items-center mr-4 mb-4  hover:text-red-700">
                <input id="radio3" type="radio" name="radio" class="w-8 h-8 reponse inline-block mr-2 rounded-full border border-grey cursor-pointer" />
                <label for="radio3" class="flex items-center cursor-pointer text-xl">
                Third choice</label>
            </div>
    
            <div class="flex items-center mr-4 mb-4  hover:text-red-700">
                <input id="radio4" type="radio" name="radio"  class="w-8 h-8 reponse inline-block mr-2 rounded-full border border-grey cursor-pointer"/>
                <label for="radio4" class="flex items-center cursor-pointer text-xl">
                Fourth choice</label>
            </div>
        </div> 
    </div>
</div>
@endsection