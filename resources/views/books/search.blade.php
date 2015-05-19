@extends('app')

@section('content')
<?php $count = 0?>
@if(sizeof($books) > 0)
<div class="container" id="searchable-container">
    <div class="box box-success">
        <h2 class="box-title" style="margin-left: 3%; margin-right: 3%;">Resultados de la busqueda</h2>
        <h5 class="box-title" style="margin-left: 3%; margin-right: 3%;">Aproximadamente <strong><?php echo sizeof($books) ?></strong> coincidencias por página</h5>
        <div class="box-body" style="margin-left: 3%; margin-right: 3%;">
            @foreach($books as $book)
                
            <?php $count++;?>
            <table>
                    <tr>
                        <td style="width: 20%">
                            <a href="{{ url('/books/show',$book->id) }}"><img src="../../../public/images/portada  (<?php echo rand(1, 4)?>).jpg" width="150" height="120"/></a>
                        </td>
                        <td style="width: 80%">
                            <strong>
                                <a style="color: #1a0dab; font-size: 16px" href="{{ url('/books/show',$book->id) }}">
                                    {{$book->title}}
                                </a>
                            </strong>
                            <br/>
                            <font style="font-size: 15px; color: #006621;">Actualizado el 0<?php echo rand(1, 9)?>/<?php echo rand(01, 12)?>/2015</font>
                            <br/>
                            <font style="font-size: 14px">
                            <?php echo substr($book->synopsis, 0, 400) . '...'; ?></font> <a style="color: #1a0dab; text-decoration: underline" href="{{ url('/books/show',$book->id) }}">Más sobre este libro...
                        </td>
                    </tr>
                </table>
                <hr>
            @endforeach
            <?php echo $books->appends(['s' => $input])->render(); ?>
        </div>
    </div>
    @else:
    <div class="container" id="searchable-container">
        <div class="box box-danger">
            <h2 class="box-title">Rsultados de la busqueda</h2>
            <h4 class="box-title">Su busqueda produjo <strong><?php echo sizeof($books) ?></strong> coincidencias con la palabra "{{ $input }}"</h4>
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