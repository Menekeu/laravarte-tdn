<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}">{{config('app.name')}}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="{{set_active_route('home')}}"><a href="{{route('home')}}">Home</a></li>
                <li class="{{set_active_route('about')}}"><a href="{{route('about')}}">About</a></li>
                <li><a href="#contact">Artisans</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                       role="button" aria-haspopup="true" aria-expanded="false">
                        Planet
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="https://laravel.com">Laravel.com</a></li>
                        <li><a href="https://laravel.io">Laravel.io</a></li>
                        <li><a href="https://laracarts.com">Laracarts</a></li>
                        <li><a href="https://larajobs.com">Larajobs</a></li>
                        <li><a href="https://laravel-news.com">Laravel news</a></li>
                        <li><a href="https://larachat.com">Larachat</a></li>
                    </ul>
                </li>
                <li class="{{set_active_route('contact')}}"><a href="{{route('contact')}}">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right row">
                <li>
                    <form name="language" action="{{route('lang')}}" method="POST">
                        {{ csrf_field() }}
                        <select name="lan" id="language" onchange="this.form.submit();">
                            <option value="fr" {{Session::get('applocale') ==='fr' ? 'selected' : ''}}>{{__('messages.francais')}}</option>
                            <option value="en" {{Session::get('applocale') ==='en' ? 'selected' : ''}}>{{__('messages.anglais')}}</option>
                        </select>
                    </form>
                </li>
                @guest
                    <li class="{{set_active_route('login')}}"><a href="{{route('login')}}">Login</a></li>
                    <li class="{{set_active_route('register')}}"><a href="{{route('register')}}">Register</a></li>
                @else
                    <li>
                        <img src="">
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <span class="glyphicon glyphicon-log-user"></span>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <span class="glyphicon glyphicon-log-out"></span>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>

        </div><!--/.nav-collapse -->
    </div>
</nav>