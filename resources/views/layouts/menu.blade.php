<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('materialize/css/materialize.css')}}">
</head>
<body>
    <nav>
        <div class="nav-wrapper indigo accent-3">
          <a href="#" class="brand-logo">Logo</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">JavaScript</a></li>
          </ul>
        </div>
    </nav>
    {{-- Container --}}
    <div class="container">
        @yield('contenido')
    </div>
    <script src="{{asset('materialize/js/materialize.js')}}"></script>
</body>
</html>