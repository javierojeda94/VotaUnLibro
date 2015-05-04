@extends('app')

@section('content')
<div class="container">
	<h1 class="text-center">Bienvenido {{ $user->name }}</h1>
	<div class="row">
		<div class="col-md-6 ">
			<h3 class="text-center">Los libros que tú has subido</h3>
			@if(sizeof($user->books) > 0)
			<ul>
				<div class="row">
					@foreach($user->books as $book)
					<li class="col-md-6">
						<h5><a href="{{ url('books/show',$book->id) }}">{{ $book->title }}</a></h5>
					</li>
					@endforeach
				</div>
			</ul>
			@else
			<h4>Todavía no has subido ningún libro</h4>
			<a href="{{ url('books/new') }}">
				<button class="btn btn-info">Subir mi primer libro</button>
			</a>
			@endif
		</div>
		<div class="col-md-6 ">
			<h3 class="text-center">Reseñas que has escrito</h3>
			<ul>
				<div class="row">
					@foreach ($user->reviews as $review)
					<li class="col-md-6">
						<h5><a href="{{ url('books/show',$review->book->id) }}">{{ $review->title }}</a></h5>
						<p>{{ $review->book->title }}</p>
					</li>
					@endforeach
				</div>
			</ul>
		</div>
	</div>
</div>
@endsection