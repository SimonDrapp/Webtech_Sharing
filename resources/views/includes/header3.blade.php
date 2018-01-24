
<header>


    <nav class="navbar navbar-fixed-top navbar-inverse">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">
                <img id="brand-image" src="{{asset('img/logo_new.png')}}" alt="Logo">
                <h3 id="brand-text">my-easysharing</h3>
            </a>


            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right ">
                    <li class="home2"><a href="/">Startseite</a></li>
                    <li class="vermietenheader2"><a href="{{ route('Vermieten') }}">Vermieten</a></li>
                    <li id="benutzer2"><a href="{{route('admin')}}">Benutzer</a></li>
                    <li id="nachrichten2"><a href="{{ route('nachricht') }}">Nachrichten</a></li>
                    <li id="ueberuns2"><a href="{{ route('ueberUns') }}">Über uns</a></li>
                    <li class="dropdown">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                </ul>
            </div>
        </div>
    </nav>
</header>