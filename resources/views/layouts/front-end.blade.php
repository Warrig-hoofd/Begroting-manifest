<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <meta name="author" content="Tim Joosten">

    <title> Help de regering </title>

    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    {{-- IE10 vieuwport hack for Surface/Desktop Windows 8 bug --}}
    <link rel="stylesheet" href="{{ asset('assets/css/ie-10-viewport-bug-workaround.css') }}">
</head>
<body class="background front-end">
{{-- Navigation bar --}}
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="/">Red de begroting.</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">

        </div>
    </div>
</nav>

{{-- Content --}}
<div class="container">
    @yield('content')
</div>

{{-- Javascript --}}
<script src=""></script>
<script src=""></script>
</body>
</html>
