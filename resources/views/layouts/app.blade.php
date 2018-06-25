<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Todo List Application</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.navbar')
  <main class="main-content">
    <div class="container">
      @include('inc.messages')
      @yield('content')
    </div>
  </main>

  <footer class="footer">
  <div class="container text-center">
    &copy; Copyright 2018
  </div>
  </footer>
  </body>
</html>
