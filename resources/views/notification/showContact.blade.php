<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nachrichtendetails</title>
</head>
<body>


<section>
    <h2>Nachricht {{$contact->id}}:</h2>

    <table style='border: solid 1px black;'>

            <tr>
                <td>Name</td>
                <td>{{$contact->lastname}}, {{$contact->firstname}}</td>
            </tr>
            <tr>
                <td>E-Mail</td>
                <td>{{$contact->email}}</td>
            </tr>
            <tr>
                <td>Telefonnummer:</td>
                <td>{{$contact->mobile}}</td>
            </tr>
            <tr>
                <td>Betreff</td>
                <td>{{$contact->subject}}</td>
            </tr>
            <tr>
                <td>Nachricht</td>
                <td>{!!  $contact->message !!}</td>
            </tr>
    </table>
</section>
</body>
</html>