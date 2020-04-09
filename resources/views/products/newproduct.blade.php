@extends('layouts.app', ["current" => "products"])

@section('body')
    
<div class="card border">
  <div class="card-body">
    <form action="/products" method="POST">
      @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="productName">Nome do Produto</label>
          <input type="text" class="form-control" name="productName" id="productName" placeholder="Informe o nome do produto" required autofocus tabindex="1">
        </div>

        <div class="form-group col-md-6">
          <label for="productCategory">Categoria</label>
          <select name="productCategory" id="productCategory" class="form-control" required tabindex="2">
            <option value="" disabled selected>Selecione a categoria do produto</option> 
            @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{$category->name}}</option>  
            @endforeach
          </select> 
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="productStock">Estoque disponível</label>
          <input type="number" class="form-control" name="productStock" id="productStock" min="1" placeholder="Informe a quantidade de itens disponíveis" required tabindex="3">
        </div>

        <div class="form-group col-md-6">
          <label for="productPrice">Preço</label>
          
          <input type="number" class="form-control" name="productPrice" id="productPrice" min="0" placeholder="Informe o preço de venda do produto" required tabindex="4">
        </div>
      </div>

      <button type="submit" class="btn btn-sm btn-primary">Cadastrar</button>
      <a href="/products" class="btn btn-sm btn-danger">Cancelar</a>

    </form>
  </div>
</div>

@endsection