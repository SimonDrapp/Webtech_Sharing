<!DOCTYPE html>
<html>
<head>

    @include('includes.head')
    <title>my-easysharing | Home </title>
</head>
<body>
@include('includes.header3')

<div class="change" style="margin-top:70px">
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
            </thead>
            <tbody>
            @foreach($nachricht as $nachrichten)
                <tr>
                        <td>{{$nachrichten->firstname}}</td>
                        <td>{{$nachrichten->lastname}}</td>
                        <td>{{$nachrichten->email}}</td>
                        <td>{{$nachrichten->mobile}}</td>
                        <td>{{$nachrichten->subject}}</td>
                        <td>{{$nachrichten->message}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('includes.footer')
</body>

</html>