<!DOCTYPE html>
<html>
<head>

    @include('includes.head')
    <title>my-easysharing | Home </title>
</head>
<body id="benutzer1">
    @include('includes.header3')

    <div class="change" style="margin-top:70px">
    <div class="container">
        <div class="row" id="tableadmin">
        <table class="table table-hover" id="adminrechte">
            <thead>
            <tr>
                <th >Name</th>
                <th >E-Mail</th>
                <th>Telefonnummer</th>
                <th>Benutzer</th>
                <th >Admin</th>
            </tr>
            </thead>

            <tbody>

            @foreach($users as $user)
                <tr class="tableadmin2">
                    <form action="{{route('benutzerRechte')}}" method="post">
                        <td >{{$user->name}}</td>
                        <td >{{$user->email}}<input type="hidden" name="email" value="{{$user->email}}"></td>
                        <td >{{$user->telephonenumber}}</td>
                        <td ><input type="checkbox" {{$user->hasRole('Benutzer') ? 'checked' : ''}} name="role_benutzer"></td>
                        <td ><input type="checkbox" {{$user->hasRole('Admin') ? 'checked' : ''}} name="role_admin"></td>

                        {{csrf_field()}}

                        <td><button type="submit" class="btn btn-success col-xs-12">Rechte ändern</button></td>

                    </form>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
    </div>


    @include('includes.footer')
</body>

</html>