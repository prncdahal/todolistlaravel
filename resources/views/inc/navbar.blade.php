<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">Todolist</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{Request::is('/')?'active':''}}">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{Request::is('todo/create')?'active':''}}">
        <a class="nav-link" href="/todo/create">Create Todo</a>
      </li>

    </ul>
    <span class="navbar-text">
      Navbar text with an inline element
    </span>
  </div>
</nav>