<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
    <title>my-easysharing | Über uns </title>


</head>

<body>
@if(Auth::user() && Auth::user()->isBenutzer())
    @include('includes.header2')
@elseif(Auth::user() && Auth::user()->isAdministrator())
    @include('includes.header3')
@else
    @include('includes.header')
@endif
<div class="parallax">
    <div class="container-fluid bg-1">
        <h1 class="margin">Wer sind wir?</h1>
        <img id="#logo" src="img/logo_new.png" class="img-responsive img-circle" alt="Logo" style="display: inline;">
        <h1>Wir sind die Entwickler dieser Website</h1>
    </div>
</div>
<div class="container-fluid bg-2">
    <h3 class="margin">Was sind wir?</h3>
    <p>Im Rahmen der Veranstaltung Web-Technologien im Wintersemester 2017/2018 der Hochschuule Konstanz haben wir in Gruppenarbeit diese Website erstellt. Hierbei handelt es sich um eine Internetseite welche private Autos und Fahrräder zum Vermieten und Mieten anbietet. <br>Kontaktieren können Sie uns mit dem Kontakformular unter Kontakt.</p>
    <a href="#myModal" id="modal" class="btn btn-default btn-lg">Kontakt</a>
</div>

<div class="container-fluid bg-3">
    <h3 class="margin">Wo sind wir?</h3>
    <p> Sie finden uns an der HTWG Konstanz mit der Adresse Paul-und-Gretel-Dietrich Straße, 78462 Konstanz</p>
</div>
</div>
<div id="googleMap1"></div>
<script>
    function myMap() {
        var myCenter = new google.maps.LatLng(47.6680578, 9.16940969999996);
        var mapCanvas = document.getElementById("googleMap1");
        var mapOptions = {center: myCenter, zoom: 17};
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var marker = new google.maps.Marker({
            position: myCenter,
            map: map,
            title: "Hier befinden wir uns :)"
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwMqjnRKeOyaE7nTvPYtFpqaURd02ZpxE&callback=myMap&v=3.9"></script>



<div class="container">
    <div class="stat">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="milestone-counter">
                <i class="fa fa-user fa-3x"></i>
                <span class="stat-count highlight" data-count="{{$visitor->views}}">0</span>
                <div class="milestone-details">Besucher Webseite</div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="milestone-counter">
                <i class="fa fa-list-alt fa-3x"></i>
                <span class="stat-count highlight" data-count="14">0</span>
                <div class="milestone-details">Angebote</div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="milestone-counter">
                <i class="fa fa-car fa-3x"></i>
                <span class="stat-count highlight" data-count="232">0</span>
                <div class="milestone-details">Erfolge</div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="milestone-counter">
                <i class="fa fa-coffee fa-3x"></i>
                <span class="stat-count highlight" data-count="1000">0</span>
                <div class="milestone-details">Ordered Coffee's</div>
            </div>
        </div>
    </div><!-- stat -->
</div>





<script>

    $('.stat-count').each(function() {
        var $this = $(this),
            countTo = $this.attr('data-count');

        $({ countNum: $this.text()}).animate({
                countNum: countTo
            },

            {
                duration: 8000,
                easing:'linear',
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text(this.countNum);
                    //alert('finished');
                }

            });
    });


</script>
</body>
@include('includes.footer')
</html>
