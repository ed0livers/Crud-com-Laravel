@extends('templates.template')

@section('content')
<h1 class="text-center">LIVRARIA DIGITAL</h1> <hr>

<div class="text-center">

<a href="{{url('books/create')}}">
          <button class="btn btn-success mt-3 mb-4">Cadastrar</button>
        </a>
</div>

<div class="col-8 m-auto">
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Título</th>
      <th scope="col">Autor</th>
      <th scope="col">Preço</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

@foreach($book as $books)
<?php 
    $user=$books->find($books->id)->relUsers;
?>
<tr>
      <th scope="row">{{$books->id}}</th>
      <td>{{$books->title}}</td>
      <td>{{$user->name}}</td>
      <td>{{$books->price}}</td>
      <td>
        <a href="{{url("books/$books->id")}}">
          <button class="btn btn-dark">Visualizar</button>
        </a>

        <a href="{{url("books/$books->id/edit")}}">
          <button class="btn btn-primary">Editar</button>

          <a href="">
          <button class="btn btn-danger">Deletar</button>
        </a>
        </a>
      </td>
    </tr>

@endforeach() 
  </tbody>
</table>
</div>
@endsection