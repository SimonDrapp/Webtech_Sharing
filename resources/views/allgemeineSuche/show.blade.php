<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

    @include('includes.head')
    <title>my-easysharing | allgemeineSuche | show </title>
</head>
<body>

<h1>Automodelle</h1>
<ul>
    @foreach ($autoModelle as $autoModell)
        <li>{{ $autoModell->aModellname }}</li>
    @endforeach
</ul>
</body>
</html>