<nav class="navbar navbar-light bg-white justify-content-between">
    <a class="navbar-brand" href="/">Scores-Laravel</a>
    <ul class="nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</nav>

@auth

@canany(['add-match', 'add-team'])
<nav class="nav nav-pills nav-fill">
    @can('add-team')
        <a href="/team/create" class="nav-item nav-link bg-dark text-light">Création d'une équipe</a>
    @endcan
    @can('add-match')
        <a href="/match/create" class="nav-item nav-link bg-dark text-light">Ajouter un match</a>
    @endcan
</nav>
@endcanany
@endauth