<nav class="flex items-center justify-between flex-wrap bg-transparent p-6 border-b-2 text-xl">
  <div class="flex items-center flex-shrink-0 text-white mr-6">
  <img src="{{ asset('images/MarioIcon2.png') }}" class="fill-current h-8 w-8 mr-2" width="54" height="54"> 
  <span class="font-semibold text-xl tracking-tight">Quiz Jeux Vidéos</span>
  </div>
  <div class="block lg:hidden">
    <button class="flex items-center px-3 py-2 border rounded text-grey-200 border-grey-400 hover:text-500-red hover:border-red">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">
      <a href="{{ route('questions.jouer') }}" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-red-500 hover:border-white text-xl mr-4">
        Jouer !
      </a>
      <a href="{{ route('questions.contribuer') }}" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-red-500 hover:border-white text-xl mr-4">
        Contribuer
      </a>
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white text-xl hover:text-red-500 hover:border-white text-xl mr-4">
        A propos de l'appli
      </a>
      @auth
      <a href="{{ route('questions.affichage') }}" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-red-500 hover:border-white text-xl mr-4">
        Gestion des questions
      </a>
      <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-red-500 hover:border-white text-xl mr-4">
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
      <a href="{{ route('register') }}" class="inline-block px-4 py-2 leading-none border rounded text-white text-xl border-white hover:border-transparent hover:text-red-500 hover:bg-white mt-12 lg:mt-0">
        Inscription</a>
      <a href="{{ route('login') }}" class="inline-block px-4 py-2 leading-none border rounded text-white text-xl border-white hover:border-transparent hover:text-red-500 hover:bg-white mt-12 lg:mt-0">
        Connexion</a>
      @endguest
    </div>
  </div>
</nav>