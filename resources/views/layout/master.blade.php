<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>@yield('title')</title>
</head>
<body>
  <div class='bg-background'>
    @include('layout.includes.header')
    <main>
      @yield('content')
    </main>
    @include('layout.includes.footer')
  </div>
</body>
</html>