@extends('app')

@section('content')
@if(sizeof($books) > 0)
<div class="container" id="searchable-container">
    <div class="box box-success">
        <h2 class="box-title" style="margin-left: 3%; margin-right: 3%;">Resultados de la busqueda</h2>
        <h5 class="box-title" style="margin-left: 3%; margin-right: 3%;">Aproximadamente <strong><?php echo sizeof($books) ?></strong> coincidencias por página</h5>
        <div class="box-body" style="margin-left: 3%; margin-right: 3%;">
            @foreach($books as $book)
                <table>
                    <tr>
                        <td>
                            <a href="{{ url('/books/show',$book->id) }}"><img src="{{ asset('/images/empty_book.jpg') }}" height="10%" /></a>
                        </td>
                        <td>
                            <strong><a style="color: #141823; font-size: 14px" href="{{ url('/books/show',$book->id) }}">{{$book->title}}</a></strong><br/>
                            {{$book->synopsis}} <a style="color: #1a0dab; text-decoration: underline" href="{{ url('/books/show',$book->id) }}">Más sobre este libro...
                        </td>
                    </tr>
                </table>
                <hr>
            @endforeach
            <?php echo $books->render(); ?>
        </div>
    </div>
    @else:
    <div class="container" id="searchable-container">
        <div class="box box-danger">
            <h2 class="box-title">Rsultados de la busqueda</h2>
            <h4 class="box-title">Su busqueda produjo <strong><?php echo sizeof($books) ?></strong> coincidencias con la palabra "palabra buscada"</h4>
            <div class="box-body">
                <div>
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
                <!-- /.box-body -->
            </div>
        </div>
    </div>
    @endsection