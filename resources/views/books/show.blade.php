@extends('app')

@section('content')
<div class="container">
	<h1>{{ $book->title }}</h1>
	<p>{{ $book->synopsis }}</p>
	<h3>Reviews</h3>
	<ul>
		@foreach($reviews as $review)
		<li>
			<h5>{{$review->title}}</h5>
			<p>{{$review->long_review}}</p>
		</li>
		@endforeach
	</ul>
	<hr>
	@if (!Auth::guest()):
	<div class="container">
		<h2>Escribe una reseña</h2>
		<div class="row">
			<div class="well">
				<form accept-charset="UTF-8" action="{{ url('review/new',$book->id) }}" method="POST">
					<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					<input required placeholder="Escribe el título de tu reseña..." type="text" name="title" class="form-control" style="padding: 5px 15px; margin-bottom: 5px; border-radius: 6px; width: 50%">
					<textarea required id="new_review" name="long_review" 
					placeholder="Escribe tu reseña..." rows="5" style="padding: 15px; border-radius: 6px; width: 100%"></textarea>
					<button class="btn btn-info" type="submit">Agregar reseña</button>
				</form>
			</div>
		</div>
	</div>
	@else:
		<!-- Add code to login -->
	@endif
</div>
@endsection