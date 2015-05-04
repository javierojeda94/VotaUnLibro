@extends('app')

@section('content')
<div class="container">
	<form class="well" action="{{ url('books/store') }}" method="POST">
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <div class="row">
            <div class="col-md-6">
                <label>Título del libro</label> 
                <input class="form-control" type="text" name="title" required style="padding: 5px 15px; margin: 0 10% 5px 0; border-radius: 6px; width: 100%">  
                <label>Last Name</label>
                <input class="form-control" type="text" style="padding: 5px 15px; margin: 0 10% 5px 0; border-radius: 6px; width: 100%">
                <label>Email Address</label> 
				<input class="form-control" type="text" style="padding: 5px 15px; margin: 0 10% 5px 0; border-radius: 6px; width: 100%"> 
            </div>
    
            <div class="col-md-6">
                <label>Sinopsis</label> 
                <textarea required name="synopsis" rows="10" style="padding: 15px; border-radius: 6px; width: 100%"></textarea>
    			<button class="btn btn-info pull-right" type="submit">Agregar</button>
            </div>

        </div>
    </form>
</div>
@endsection