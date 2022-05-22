<nav class="flex items-center justify-between flex-wrap bg-[#101843] p-6 border-b-2 text-xl">
  <div class="flex items-center flex-shrink-0 text-white mr-6">
  <img src="{{ asset('images/MarioIcon2.png') }}" class="fill-current h-8 w-8 mr-2" width="54" height="54"> 
  <span class="font-semibold lg:text-xl text-3xl tracking-tight">Quiz Jeux Vidéos</span>
  </div>
  <div class="block lg:hidden">
    <button id="burger" class="flex items-center px-3 py-2 border rounded text-grey-200 border-grey-400 hover:text-500-red hover:border-red">
      <svg class="text-white text-lg fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div id="menu" class="w-full md:block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">
      <a href="{{ route('questions.jouer') }}" class="block lg:text-xl text-2xl mt-8 lg:inline-block lg:mt-0 text-white hover:text-red-500 hover:border-white mr-4">
        Jouer !
      </a>
      <a href="{{ route('questions.contribuer') }}" class="block lg:text-xl text-2xl mt-4 lg:inline-block lg:mt-0 text-white hover:text-red-500 hover:border-white mr-4">
        Contribuer
      </a>
      <a href="{{ route('apropos') }}" class="block lg:text-xl text-2xl mt-4 lg:inline-block lg:mt-0 text-white  hover:text-red-500 hover:border-white mr-4">
        A propos de l'appli
      </a>
      @auth
      <a href="{{ route('questions.affichage') }}" class="block lg:text-xl text-2xl mt-4 lg:inline-block lg:mt-0 text-white hover:text-red-500 hover:border-white mr-4">
        Gestion des questions
      </a>
      <a href="#" class="block lg:text-xl text-2xl mt-4 lg:inline-block lg:mt-0 text-white hover:text-red-500 hover:border-white mr-4">
        Gestion des membres
      </a>
      @endauth
    </div>
    <div>
      
      @auth
          <div class="inline-block px-4 py-2 leading-none text-white  mt-12 lg:mt-0">
            Bonjour {{ Auth::user()->name }}</div>
            <form method="POST" class="inline-block px-4 py-2 leading-none border rounded text-white text-xl border-white hover:border-transparent hover:text-red-500 hover:bg-white mt-12 lg:mt-0" type="submit"action="{{ route('logout') }}">
              @csrf
              <button>Déconnexion</button>
          </form> 


      @endauth
      @guest
      <div class="text-center items-center">
        <a href="{{ route('register') }}" class="inline-block px-4 py-2 leading-none border rounded text-white text-xl border-white hover:border-transparent hover:text-red-500 hover:bg-white mt-12 lg:mt-0">
          Inscription</a>
        <a href="{{ route('login') }}" class="inline-block px-4 py-2 leading-none border rounded text-white text-xl border-white hover:border-transparent hover:text-red-500 hover:bg-white mt-12 lg:mt-0">
          Connexion</a>
      @endguest
      </div>
    </div>
  </div>
</nav>