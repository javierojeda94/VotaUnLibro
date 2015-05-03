@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"></div>
				<div class="panel-body">
					Bienvenido {{ Auth::user()->name }}
					<div>
						<h3>¿Qué libro te interesa buscar?</h3>
		            	<form method="get" action="{{ url('books/search') }}">
		            		<div class="row">
					            <div class="col-md-8">
					            	<input placeholder="Escribe aquí el nombre del libro..." type="text" name="s" class="form-control">
					            </div>
					            <button class="btn btn-info col-md-2" type="submit">
					            	Buscar <i class="glyphicon glyphicon-search"></i>
					            </button>
				            </div>
			            </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
