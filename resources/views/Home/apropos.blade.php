@extends('layouts.app')

@section('titre_page')
    Page d'accueil
@endsection

@section('content')
<div id="contenu_principal" class="relative flex items-center text-left justify-center my-12 overflow-hidden text-gray-700">
    <div class="relative z-30 pt-6 p-5 rounded-xl w-4/5 bg-white/90">
        <div class="mb-6">
            <h2 class="text-2xl font-bold">Cette application a été crée par Titou-Kun, Streamer, Youtubeur et <span class="line-through">agent de la paix</span> développeur web avant tout. </h2>
            <p class="text-lg my-2">Je m'appelle Tristan, j'ai bientôt 29 ans et je suis un développeur web, féru de jeux vidéos notamment rétros, et ma licence préféré EVER est Crash Bandicoot (qui hélas est sous l'égide de Microsoft, sniff...).</p>
        </div>
        <div class="mb-6">
            <h2 class="text-2xl font-bold">Pourquoi avoir fait cette application ?</h2>
            <p class="text-lg my-2">Grand fan de jeu vidéo que je suis, je voudrais tester la culture de chacun des joueurs. Et que chacun puisse le faire de n'importe où, avec n'importe quel support (smartphone, tablette, PC, télé connectée si vous êtes des gros foufous).</p>
        </div>
        <div class="mb-6">
            <h2 class="text-2xl font-bold">Quelles sont les technologies utilisées ?</h2>
                <ul class="text-lg my-2">
                    <li> - HTML5</li>
                    <li> - Tailwind (Framework CSS)</li>
                    <li> - jQuery (Framework JavaScript)</li>
                    <li> - Laravel (Framework PHP)</li>
                    <li> - Système de Gestion de Base de Données MySQL</li>
                </ul>
        </div>
        <div class="mb-6">
            <h2 class="text-2xl font-bold">Où peut-on te retrouver ?</h2>
                <ul class="text-lg my-2">
                    <li>Sur Discord -> <a href="https://discord.gg/8SDwBp7">Sur mon serveur</a></li>
                    <li>Sur ma chaîne Twitch -> <a href="https://twitch.tv/titou_kun">Ici</a></li>
                    <li>Sur ma chaîne YouTube -> <a href="https://www.youtube.com/channel/UC9WT6eywYEAiI-eCa2H_rMw">La marmite de Titou</a></li>
                </ul>
        </div>
    </div>
</div>
@endsection