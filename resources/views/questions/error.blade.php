@extends('layouts.app')

@section('titre_page')
    Session de quiz
@endsection

@section('content')
<div id="contenu_principal" class="relative flex items-center text-center justify-center md:h-screen  my-12 overflow-hidden text-gray-700">
    <div class="relative z-30 pt-6 md:p-5 sm:p-3 rounded-xl w-4/5 bg-white/90">
        {{ $errorMsg }}
    </div>
</div>
@endsection