@extends('layouts.app', ["current" => "categories"])

@section('body')

<div class="card border">
  <div class="card-body">
    <form action="/categories/{{ $category->id }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="categoryName">Editar Categoria</label>
        <input type="text" 
          class="form-control
            {{ $errors->has('categoryName') ? 'is-invalid' : '' }}" 
          name="categoryName" 
          id="categoryName" 
          placeholder="Informe o novo nome da nova categoria" 
          value="{{ $category->name }}">

          @if ($errors->has('categoryName'))
        <div class="invalid-feedback">
          {{ $errors->first('categoryName') }}
        </div>
          @endif
      </div>

      <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
      <a href="/categories" class="btn btn-danger btn-sm">Cancelar</a>
    </form>
  </div>
</div>

@endsection