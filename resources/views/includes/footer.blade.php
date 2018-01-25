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
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sozialeNetzwerke" align="center">
                        <a class="social-network facebook" title="Facebook"></a>
                        <a class="social-network instagram" title="Instagram"></a>
                        <a class="social-network twitter" title="Twitter"></a>
                        <a class="social-network linkedin" title="LinkedIn"></a>
                        <a class="social-network youtube" title="YouTube"></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</footer>
<script>
    $(document).ready(function() {

        var docHeight = $(window).height();
        var footerHeight = $('.footer').height();
        var footerTop = $('.footer').position().top + footerHeight;

        if (footerTop < docHeight) {
            $('.footer').css('margin-top', (docHeight - footerTop) + 'px');
        }
    });
</script>
<!-- contact form -->
@include('includes.Kontakt')


