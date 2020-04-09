@extends('layouts.app', ["current" => "products"])

@section('body')

<div class="card border">
  <div class="card-body">
    <h5 class="card-title">
      Produtos cadastrados
    </h5>

@if (count($products) > 0)
    <table class="table table-ordered table-hover">
      <thead>
        <tr>
          <th>Código</th>
          <th>Nome</th>
          <th>Estoque</th>
          <th>Preço</th>
          <th>Gerenciar</th>
        </tr>
      </thead>
      <tbody>
  @foreach ($products as $product)
      <tr>
        <th>{{ $product->id }}</th>
        <th>{{ $product->name }}</th>
        <th>{{ $product->stock }}</th>
        <th>{{ $product->price }}</th>
        <th>
          <a href="/products/edit/{{ $product->id }}" class="btn btn-sm btn-primary">Editar</a>
          <a href="/products/delete/{{ $product->id }}" class="btn btn-sm btn-danger">Excluir</a>
        </th>
      </tr>
  @endforeach
      </tbody>
    </table>
@else
    <h4 class="mt-4">
      Não há produtos cadastrados. Clique no botão abaixo para cadastrar um novo produto.
    </h4>
@endif
  </div>
</div>

<div class="card-footer">
  <a href="/products/new" class="btn btn-primary mb-3 mt-2">
    Cadastrar produtos
  </a>
</div>

@endsection