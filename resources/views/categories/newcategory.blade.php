@extends('layouts.app', ["current" => "categories"])

@section('body')

<div class="card border">
  <div class="card-body">
    <form action="/categories" method="POST">
      @csrf
      <div class="form-group">
        <label for="categoryName">Nome da Categoria</label>
        <input type="text" class="form-control" name="categoryName" id="categoryName" placeholder="Informe o nome da nova categoria">
      </div>

      <button type="submit" class="btn btn-primary btn-sm">Cadastrar</button>
      <a href="/categories" class="btn btn-danger btn-sm">Cancelar</a>
    </form>
  </div>
</div>

@endsection