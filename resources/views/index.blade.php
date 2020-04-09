@extends('layouts.app', ["current" => "home"])

@section('body')

<div class="jumbotron bg-light border border-secondary">
  <div class="row">
    <div class="card-deck">
      
      <div class="card border border-primary">
        <div class="card-body">
          <h5 class="card-title">
            Produtos
          </h5>
          
          <a href="/products/new" 
            class="btn btn-primary mb-3 mt-2">
              Cadastrar produtos
          </a>
          
          <p class="card-text">
            Aqui você pode cadastrar todos os seus produtos.
            Só não se esqueça de cadastrar previamente as categorias
          </p>
        </div>
      </div>
      
      <div class="card border border-primary">
        <div class="card-body">
          <h5 class="card-title">
            Categorias
          </h5>
          
          <a href="/categories/new" 
            class="btn btn-primary mb-3 mt-2">
              Cadastrar categorias
          </a>

          <p>
            Cadastre as categorias dos seus produtos agora!
          </p>
        </div>
      </div>

    </div> <!-- fim .card-deck -->
  </div> <!-- fim .row -->
</div> <!-- fim .jumbotrom -->

@endsection