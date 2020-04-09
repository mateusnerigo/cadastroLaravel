@extends('layouts.app', ["current" => "categories"])

@section('body')

<div class="card border">
  <div class="card-body">
    <h5 class="card-title">
      Categorias cadastradas
    </h5>
@if (count($categories) > 0)
    <table class="table table-ordered table-hover">
      <thead>
        <tr>
          <th>Código</th>
          <th>Nome da Categoria</th>
          <th>Gerenciar</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
          <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>
              <a href="/categories/edit/{{ $category->id }}" class="btn btn-sm btn-primary">Editar</a>
              <a href="/categories/delete/{{ $category->id }}" class="btn btn-sm btn-danger">Excluir</a>
            </td>
          </tr>
            
        @endforeach
      </tbody>
    </table>
@else
    <h4 class="mt-4">
      Não há categorias cadastradas. Clique no botão abaixo para cadastrar uma nova categoria.
    </h4>
@endif
  </div>
</div>

<div class="card-footer">
  <a href="/categories/new" 
    class="btn btn-primary mb-3 mt-2">
      Cadastrar categorias
  </a>
</div>

@endsection