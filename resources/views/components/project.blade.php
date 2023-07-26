<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Css -->
  <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
  <link rel="stylesheet" href={{ asset('css/style.css') }}>
  <title>App Name - @yield('title')</title>
</head>

<body>
  <div class="container">
    @yield('content')
  </div>


  <!-- js -->
  <script src={{ asset('js/bootstrap.min.js') }}></script>
</body>

</html>