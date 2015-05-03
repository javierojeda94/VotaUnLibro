@extends('app')

@section('content')
<div class="container">
	@if (isset($u))
		Bienvenido {{ $u->email }}
	@else
		[Login]
	@endif
</div>
@endsection