<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<header>
<body class="bg-dark">
  <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 text-white bg-dark border-bottom shadow-sm">
    <p class="h5 my-0 mr-auto fw-normal">Галерея статей</p>
    <a class="btn btn-warning mr-3" href="/">Головна</a>
    <a class="btn btn-warning" href="/addArtical">Статті</a>
  </header>
<div class="container">
  @yield('main_content')
</div>

</body>
</html>