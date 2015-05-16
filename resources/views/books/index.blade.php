@extends('app')

@section('content')
<div class="row">
	<div class="col-lg-4 col-lg-offset-4">
		<input type="search" id="container-search" value="" class="form-control" placeholder="Filtrar resultados...">
	</div>
</div>
<div class="container" id="searchable-container">
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
	<?php echo $books->render(); ?>
</div>
@endsection