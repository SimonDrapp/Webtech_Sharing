
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
                    <li class="active"><a href="/">Startseite</a></li>
                    <li><a href="{{ route('Vermieten') }}">Vermieten</a></li>
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
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sprachen<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Deutsch</a></li>
                            <li><a href="#">Englisch</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>