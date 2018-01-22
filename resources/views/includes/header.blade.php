
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
                    <li class="aktiv"><a href="/">Startseite</a></li>
                    <li><a href="{{ route('signup') }}">Registrieren</a></li>
                    <li><a href="{{ route('signin') }}">Einloggen</a></li>
                    <li><a href="#myModal2" data-toggle="modal" data-target="#myModal2">Vermieten</a></li>
                    <li><a href="{{ route('ueberUns') }}">Über uns</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title">Anmeldung erforderlich</h4>
                </div>
                <div class="modal-body">
                    <p>Um eine Vermietung durchzuführen müssen Sie sich Einloggen/Registrieren.</p>
                </div>
                <div class="modal-footer">
                    <a href="/Vermieten"><button type="submit" class="btn btn-primary" data-target="/Vermiete">Jetzt Einloggen/Registrieren</button></a>
                </div>
            </div>
        </div>
    </div>


</header>