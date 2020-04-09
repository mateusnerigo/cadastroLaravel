<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded mt-4">

  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ $current == "home" ? 'active' : '' }}">
        <a class="nav-link" href="/">
          Home 
        </a>
      </li>

      <li class="nav-item {{ $current == "products" ? 'active' : '' }}">
        <a class="nav-link" href="/products">
          Produtos 
        </a>
      </li>

      <li class="nav-item {{ $current == "categories" ? 'active' : '' }}">
        <a class="nav-link" href="/categories">
          Categorias 
        </a>
      </li>
    </ul>
  </div>
</nav>