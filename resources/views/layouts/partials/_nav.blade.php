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
                {{--<li><a href="#contact">Artisans</a></li>--}}
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
                    @empty(!Auth::user()->profile)
                        <li>
                            <img src="{{asset('users/'.Auth::user()->profile)}}" style="height: 40px;width: 40px;margin: 5px auto;border-radius: 50px;">
                        </li>
                    @endempty
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                           role="button" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a data-toggle="modal" data-target="#editProfile" style="cursor:pointer">
                                    <span class="glyphicon glyphicon-user"></span>
                                    {{ __('messages.profile') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{'picturesEvents'}}" style="cursor:pointer">
                                    <span class="glyphicon glyphicon-headphones"></span>
                                    {{ __('messages.events') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    <span class="glyphicon glyphicon-log-out"></span>
                                    {{ __('messages.logout') }}
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('events.create')}}" style="color: #f30c0c;font-size: 18px;cursor: pointer;">
                            <span class="glyphicon glyphicon-plus"></span>
                        </a>
                    </li>
                @endguest
            </ul>

        </div><!--/.nav-collapse -->
    </div>
</nav>