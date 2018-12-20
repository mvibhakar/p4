<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', config('app.name'))</title>
    <meta charset='utf-8'>

    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">
    <link rel="stylesheet" href="/css/p4.css">
</head>
<body>

@if(session('alert'))
    <div class="alert alert-danger mb-0" role="alert">
        {{ session('alert') }}
    </div>
@endif

<header>
    <nav class="navbar navbar-expand navbar-dark bg-primary">
        <a class="navbar-brand" href="/">music moods</a>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">moods</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/songs">songs</a>
                </li>
            </ul>
         </div>
    </nav>
</header>


<section id='main'>
    @yield('content')
</section>

</body>
</html>