@extends('app')

@section('content')
<div class="container" id="searchable-container">
	@if(sizeof($books) > 0):
		<div class="row">
			<div class="col-lg-4 col-lg-offset-4">
				<input type="search" id="container-search" value="" class="form-control" placeholder="Filtrar resultados...">
			</div>
		</div>
		@foreach($books as $book)
		<div class="book">
			<div class="book_brief">
				<h1>{{$book->title}}</h1>
				<p>{{$book->synopsis}}</p>
				<a href="{{ url('/books/show',$book->id) }}">Ver detalles...</a>
			</div>
			<hr >
		</div>
		@endforeach
	@else:
		<div>
			<h1 class="text-center">Lo lamentamos pero no encontramos ninguna coincidencia...</h1>
			<h2>¿Desea realizar otra búsqueda?</h2>
			<div>
            	<form method="get" action="{{ url('books/search') }}">
            		<div class="row">
			            <div class="col-md-6">
			            	<input placeholder="Escribe aquí el nombre del libro..." type="text" name="s" class="form-control">
			            </div>
			            <button class="btn btn-info col-md-2" type="submit">
			            	Buscar <i class="glyphicon glyphicon-search"></i>
			            </button>
		            </div>
	            </form>
			</div>
		</div>
	@endif
</div>
@endsection