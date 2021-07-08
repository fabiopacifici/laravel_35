<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title', 'La Molinasana')</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>

  <header id="site_header">
    <!-- image -->
    <div class="logo">
      <img src="{{asset('img/marchio-sito-test.png')}}" alt="">
    </div>
    <nav class="menu">
      <a href="{{ route('home') }}" class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">Home</a>
      <a href="{{ route('products') }}" class="{{ Route::currentRouteName() === 'products' ? 'active' : '' }}">Products</a>
      <a href="{{ route('news') }}" class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}">News</a>
    </nav>

  </header>
  <main id="main_content">
    @yield('content')
  </main>
  <footer id="site_footer">Footer Content</footer>

</body>

</html>