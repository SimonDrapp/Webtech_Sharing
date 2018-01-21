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
