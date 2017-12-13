<!DOCTYPE html>
<html>
<body>
    <section>
        <h2>Folgende Nachrichten existieren in der Datenbank:</h2>

        <table style='border: solid 1px black;'>
            <tr><th>Nachname</th><th>Vorname</th><th>E-Mail</th><th>Thema</th>

            @foreach($contacts as $contact)

                <tr>
                    <td>{{$contact->lastname}}</td>
                    <td>{{$contact->firstname}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->subject}}</td>
                    <td><a href="/NachrichtAnzeigen/{{$contact->id}}">anschauen</a></td>
                </tr>
            @endforeach
        </table>
    </section>

</body>
</html>





