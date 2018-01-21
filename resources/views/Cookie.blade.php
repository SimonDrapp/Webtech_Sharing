<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

    @include('includes.head')
    <title>my-easysharing | Home </title>
</head>
<body>


@if(Auth::user() && Auth::user()->isBenutzer())
    @include('includes.header2')
@elseif(Auth::user() && Auth::user()->isAdministrator())
    @include('includes.header3')
@else
    @include('includes.header')
@endif


        <section class="cookie_content">
        <h1 id="CookieUeberschrift"><b>Cookie-Richtlinien</b></h1>

            <div class="cookie_div">

        <p class="CookieTeilüberschrift"><b>Was sind Cookies?</b></p>
            <p>My-easysharing nutzt auf der Website Cookies, um den reibungslosen Ablauf der Dienstleistungen von My-easysharing zu gewährleisten. Wenn Sie unsere Dienstleistungen in Anspruch nehmen, werden Cookies auf ihrem Computer oder Ihrem sonstigen Endgerät (z.B. Smartphone oder Tablet) abgelegt. My-easysharing kann auf diese Cookies zugreifen.
                Cookies sind kleine Textdateien, die auf Ihrer Festplatte oder Ihrem Speicher abgelegt werden. Cookies können Ihrem Computer und Ihren Dateien keinen Schaden zufügen.</p>

        <p class="CookieTeilüberschrift"><b>Welche Cookies nutzt My-Easysharing?</b></p>
                <p>My-easysharing nutzt die folgenden Cookies:</br>

                <u>Technische Cookies:</u> My-easysharing ist bestrebt eine nutzerfreundliche Website bereitzustellen und diese kontinuierlich für Sie zu verbessern. Um dieses Ziel zu erreichen nutzt My-easysharing „Technische Cookies“, um Ihnen z.B. unsere Plattform zu präsentieren, um zu garantieren, dass unsere Website einwandfrei funktioniert, um Nutzerprofile zu erstellen, um sich anmelden zu können und um Reservierungen abschließen zu können.
                „Technische Cookies“ sind notwendig, damit unsere Website funktionieren kann.</br>

                <u>Funktionale Cookies:</u> My-easysharing nutzt „Funktionale Cookies“, um sich Ihre bevorzugten Einstellungen (z.B. Ihren Nutzernamen, Ihr Passwort, Ihre Sprache, etc.) zu merken, und um Ihnen zu helfen die Website möglichst effektiv und effizient zu nutzen.
                „Funktionale Cookies“ sind nicht notwendig, um die Website zu betreiben, aber sie erhöhen die Nutzerfreundlichkeit.</br>

                Cookies werden nie länger als absolut notwendig gespeichert. Wir möchten Sie darauf hinweisen, dass Sie jederzeit alle Cookies in Ihren Browser-Einstellungen löschen können.</br>

                Wenn My-easysharing die personenbezogenen Daten eines Cookies sammelt gelten die Datenschutzrichtlinien von My-easysharing. Wenn ein Dritter die personenbezogenen Daten eines Cookies sammelt gelten die Datenschutzrichtlinien des Dritten.</br>

                Nur My-easysharing hat Zugriff auf My-easysharing Cookies. Cookies, die von Dritten platziert worden, können von diesen abgerufen werden.</br>

                Dies Cookies sind dauerhaft auf Ihrem Computer gesichert. Wir weisen Sie darauf hin, dass sie alle Cookies über die Einstellung in Ihrem Browser löschen können.</p>


         <p class="CookieTeilüberschrift"><b>Wie können Cookies gelöscht oder Ihrer Nutzung widersprochen werden?</b></p>

                <p>Sie können selbst entscheiden, ob Sie der Nutzung von Cookies zustimmen oder nicht. Sie können außerdem die Einstellungen ihres Browsers derart anpassen, dass Ihr Browser Sie darauf hinweist, wenn ein Server ein Cookie setzen möchte oder, dass Ihr Browser Server blockt, die Cookies setzen möchten.
                   Da jeder Browser unterschiedlich ist, möchten wir Sie bitte, auf die Einstellungshilfe Ihres Browsers zurückzugreifen, wenn Sie Ihre Cookie-Einstellungen ändern möchten.
                   Weiterhin können Sie sich dazu entschließen kostenlose Tools zu installieren, die Ihnen eine einfache Übersicht über die von Ihnen genutzten Cookies geben und Sie dabei unterstützen Cookies zu deaktivieren
                   Sollten Sie sich entschließen Cookies zu löschen, könnte es passieren, dass bestimmte Dienste von My-easysharing nicht von Ihnen in Anspruch genommen werden können.</p>
    </div>
        </section>

    @include('includes.footer')
</body>
</html>