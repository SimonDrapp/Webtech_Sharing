<footer class="footer">
    <nav class="navbar navbar-inverse navbar-bottom">
        <div class="container-fluid2">
            <ul class="nav navbar-nav">
                <li><a href="#myModal" id="modal">Kontakt</a></li>
                <li><a href="/Impressum">Impressum</a></li>
                <li><a href="/Cookie">Cookie-Richtlinien</a></li>
                <li><a href="/AGB">AGB</a></li>
            </ul>
        </div>
    </nav>
</footer>
<script>
    $(document).ready(function() {

        var docHeight = $(window).height();
        var footerHeight = $('.footer').height();
        var footerTop = $('.footer').position().top + footerHeight;

        if (footerTop < docHeight) {
            $('.footer').css('margin-top', 10+ (docHeight - footerTop) + 'px');
        }
    });
</script>
<!-- contact form -->
@include('includes.Kontakt')


