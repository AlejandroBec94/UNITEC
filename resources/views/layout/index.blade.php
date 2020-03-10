<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>UNTEC Test</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


</head>

<style>

    footer {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
    }

    main {
        flex: 1 0 auto;
    }


</style>
<body>

<nav>
    <div class="nav-wrapper" style="background-color: #1f6fb2;">
        <a href="#" class="brand-logo" style="margin-left: 19px;">@yield('titleSection')</a>
    </div>
</nav>
<div style="margin-top: 20px;">
    @yield('content')
</div>



<!-- Compiled and minified JavaScript -->

</body>
</html>
