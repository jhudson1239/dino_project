<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/master.css">
</head>
<body>

<nav>
    <ul class="nav">
    <li class="nav-item">
        <a class="nav-link active" href="/">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/dino">Dino List</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/blog">News</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/blog">Blog</a>
    </li>
    </ul>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>