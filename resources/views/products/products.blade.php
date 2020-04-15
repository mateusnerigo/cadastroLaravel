@extends('layouts.app', ["current" => "products"])

@section('body')

<div class="card border">
  <div class="card-body">
    <h5 class="card-title">
      Produtos cadastrados
    </h5>

    <table class="table table-ordered table-hover">
      <thead>
        <tr>
          <th>Código</th>
          <th>Nome</th>
          <th>Estoque</th>
          <th>Preço</th>
          <th>Categoria</th>
          <th>Gerenciar</th>
        </tr>
      </thead>
      
      <tbody>
      
      </tbody>
    </table>
  </div>
  
  <div class="card-footer">
    <button role="button" class="btn btn-primary mb-3 mt-2">
      Cadastrar produtos
    </button>
  </div>
</div>
  
@endsection