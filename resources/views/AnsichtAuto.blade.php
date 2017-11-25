<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
    <title>my-easysharing | Ansicht</title>
</head>
<body>
@include('includes.header')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/header2.jpg" alt="Bild vom Auto1">
                        <div class="carousel-caption">
                            <h10>Einfach so!</h10>
                            <p>It's always a fun to make this f*** page</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/header1.jpg" alt="Bild vom Auto2">
                        <div class="carousel-caption">
                            <h10>Einfach so ein zweites Bild!</h10>
                            <p>It's always a lot shit to make this f*** page</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/car2.jpg" alt="Bild vom Auto3">
                        <div class="carousel-caption">
                            <h10>Einfach so nochmaaaal!</h10>
                            <p>It's always a fuck to make this f*** page</p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="conatiner">
    <div class="row">
        <div class="col-lg-12 lol">
            <div class="form-group">
                <input class="form-control" id="datevon2" type="text" name="date"
                       placeholder="DD/MM/YYYY">
            </div>
            <div class="form-group">
                <button id="buttonVon2" type="button" class="btn btn-basic">
                    <span class="glyphicon glyphicon-calendar"></span></button>
            </div>
            <div class="form-group">
                <input class="form-control" id="datebis2" type="text" name="date"
                       placeholder="DD/MM/YYYY">
            </div>
            <div class="form-group">
                <button id="buttonBis2" type="button" class="btn btn-basic">
                    <span class="glyphicon glyphicon-calendar"></span></button>
            </div>
        </div>
    </div>
</div>


@include('includes.footer')
</body>
</html>
