<!DOCTYPE>
<html>
    <head>
        @include('includes.head')
        <title>my-easysharing | Autovermietung</title>
    </head>


    <body>
        @include('includes.header')

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-md-3">
                    <div class="buttonUndText">
                        <p class="Text">Marke</p>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Auswählen
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <li role="option"><a role="menu" tabindex="-1">Audi</a></li>
                                <li role="option"><a role="menu" tabindex="-1">BMW</a></li>
                                <li role="option"><a role="menu" tabindex="-1">Mercedes-Benz</a></li>
                                <li role="option"><a role="menu" tabindex="-1">Volkswagen</a></li>
   <!--                             <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1">Abarth</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1">AC</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1">Acura</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1">Alfa Romeo</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1">ALPINA</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1">Artega</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1">Asia Motors</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1">Aston Martin</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1">Austin</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1">Austin Healey</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1">Bentley</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1">Borgward</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1">Brilliance</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1">Bugatti</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1">Buick</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1">Cadillac</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-md-3">
                    <div class="buttonUndText">
                        <p class="Text">Modell</p>
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Auswählen
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                    <li role="option"><a role="menu" tabindex="-1">#</a></li>
                                    <li role="option"><a role="menu" tabindex="-1">#</a></li>
                                    <li role="option"><a role="menu" tabindex="-1">#</a></li>
                                    <li role="option"><a role="menu" tabindex="-1">#</a></li>
                                </ul>
                            </div>
                    </div>
                </div>


                <div class="col-xs-6 col-md-3">
                    <div class="buttonUndText">
                        <p class="Text">Autotyp</p>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Auswählen
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <li role="option"><a role="menu" tabindex="-1">#</a></li>
                                <li role="option"><a role="menu" tabindex="-1">#</a></li>
                                <li role="option"><a role="menu" tabindex="-1">#</a></li>
                                <li role="option"><a role="menu" tabindex="-1">#</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-md-3">
                    <div class="buttonUndText">
                        <p class="Text">Baujahr</p>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Auswählen
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <li role="option"><a role="menu" tabindex="-1">#</a></li>
                                <li role="option"><a role="menu" tabindex="-1">#</a></li>
                                <li role="option"><a role="menu" tabindex="-1">#</a></li>
                                <li role="option"><a role="menu" tabindex="-1">#</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <div class="buttonUndText">
                        <p class="Text">Kraftstoff</p>
                            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Auswählen
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <li role="option"><a role="menu" tabindex="-1">#</a></li>
                                <li role="option"><a role="menu" tabindex="-1">#</a></li>
                                <li role="option"><a role="menu" tabindex="-1">#</a></li>
                                <li role="option"><a role="menu" tabindex="-1">#</a></li>
                            </ul>
                    </div>
                </div>

                <div class="col-xs-6 col-md-6">
                    <div class="buttonUndText">
                        <p class="Text">Details</p>
                        <textarea></textarea>
                    </div>
                </div>
            </div>
        </div>

    <!--    @include('includes.footer') -->
    </body>



</html>