@extends('templates.template')

@section ('content')

<div class="col-8 m-auto">
<h1 class="text-center">Visualizar</h1> <hr>

  <?php 
      $user=$book->find($book->id)->relUsers
  ?>
  
Título: {{$book->title}}<br>
Páginas: {{$book->pages}}<br>
Preço: R$ {{$book->price}}<br>
Autor: {{$user->name}}<br>
Email do autor:{{$user->email}}<br>

<a href="{{url('books')}}">
          <button class="btn btn-success mt-3 mb-4" >Voltar</button>
        </a>
</div>


@endsection