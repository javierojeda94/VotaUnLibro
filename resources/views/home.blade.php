@extends('app')

@section('content')

<div class="container">
    <div style="width: 90%; margin: 0 auto; margin-top: 5%">
        <div class="box box-primary">
            <!-- form start -->
            <form role="form" method="get" action="{{ url('books/search') }}">
                <div class="box-body">
                    <div class="form-group">
                        <table style="width: 95%; margin: 0 auto;">
                            <tr><td>
                                    <h3>Busca tu libro favorito {{ Auth::user()->name }}</h3>
                                </td>
                            </tr>
                            <tr><td style="width: 95%">
                                    <input placeholder="Harry Potter, Santa Bilbia, El quijote de la mancha, etc." type="text" name="s" class="form-control"></td><td>
                                    <button type="submit" class="form-control btn btn-primary" style="color: #FFFFF">
                                        Buscar <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </form>
        </div><!-- /.box-body -->
    </div>
    <div style="width: 90%; margin: 0 auto; margin-top: 5%">
        <h3>Ultimos libros registrados!</h3>
        <!-- form start -->
        <div class="col-md-12" style="margin-top: 3%">
            <!-- The time line -->
            <ul class="timeline">
                <!-- timeline time label -->
                <li class="time-label">
                    <span class="bg-red">
                        19 Mayo 2024
                    </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                    <i class="glyphicon glyphicon-book bg-blue"></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> Hace 5 segundos</span>
                        <h3 class="timeline-header">
                            <strong>Libro: </strong><a href="#">Harry Potter y la Piedra Filosofal</a>
                            <br><strong>Autor: </strong><a>J. K. Rowling</a>
                        </h3>
                        <div class="timeline-body">
                            Harry Potter se ha quedado huérfano y vive en casa de sus abominables tíos y del insoportable primo Dudley. Harry se siente muy triste y solo, hasta que un buen día recibe una carta que cambiará su vida para siempre. En ella le comunican que ha sido aceptado como alumno en el colegio interno Hogwarts de magia y hechicería.
                        </div>
                    </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline item -->
                <li>
                    <i class="glyphicon glyphicon-book bg-blue"></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> Hace 10 minutos</span>
                        <h3 class="timeline-header">
                            <strong>Libro: </strong><a href="#">Don Quijote De La Mancha</a>
                            <br><strong>Autor: </strong><a>Miguel de Cervantes</a>
                        </h3>
                        <div class="timeline-body">
                            A lo largo de todo el libro a Don Quijote y Sancho Panza les suceden varias aventuras, todas ellas relacionadas con las caballerías, Don Quijote conoce a la perfección todos los libros de este género, sus personajes, diálogos… ¿Acaso un loco sería capaz de recordar tantas cosas? Un loco hace cosas sin sentido, está mal de la cabeza pero este hidalgo se basa en un ideal, una cosa en la que tiene tanta fe que para él se transforma en real; parémonos a pensar sólo un segundo. 
                        </div>
                    </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline item -->
                <li>
                    <i class="glyphicon glyphicon-book bg-blue"></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> Hace 1 hora</span>
                        <h3 class="timeline-header">
                            <strong>Libro: </strong><a href="#">Cien años de soledad</a>
                            <br><strong>Autor: </strong><a>Gabriel Garcia Marquez</a>
                        </h3>
                        <div class="timeline-body">
                            La historia se centra en la familia Buendía, durante seis generaciones, desde José Arcadio Buendía y su mujer Úrsula, pertenecientes a una de las familias fundadoras del pueblo donde se desarrolla la trama-Macondo- hasta la sexta, Aureliano Babilonia. Se encuentra enmarcada en el principio del S. XX y se puede apreciar la guerra entre liberales y conservadores en la que se ve envuelto el Coronel Aureliano Buendía, perteneciente a la segunda generación,  así como la llegada de los americanos a Macondo que instalan una bananera.
                        </div>
                    </div>
                </li>
                <!-- END timeline item -->
                <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
