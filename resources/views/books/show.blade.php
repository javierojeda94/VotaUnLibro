@extends('app')

@section('content')
<div class="container">
    <div class="box box-solid">
        <div class="box-header with-border">
            <h3><a href="#">Harry Potter y la Piedra Filosofal</a></h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table style="width: 95%; margin: 0 auto">
                <tr>
                    <td style="width: 30%;"><a href=""><img src="../../../images/hp1.jpg" style="margin: 0 auto;" width="240" height="320"/></td>
                    <td style="width: 70%">
                        <h5>Libro: <strong>Harry Potter y la Piedra Filosofal</strong></h5>
                        <h5>Autor: <strong>J. K. Rowling</strong></h5>
                        <h5>Editorial: <strong>Salamandra, letras de bolsillo.</strong></h5>
                        <h5>Edición: <strong>Marzo del 2012, Barcelona, España.</strong></h5>
                        <strong>Sinopsis: </strong>Harry Potter se ha quedado huérfano y vive en casa de sus abominables tíos y 
                        del insoportable primo Dudley. Harry se siente muy triste y solo, hasta que un buen día 
                        recibe una carta que cambiará su vida para siempre. En ella le comunican que ha sido aceptado 
                        como alumno en el colegio interno Hogwarts de magia y hechicería. A partir de ese momento, la 
                        suerte de Harry da un vuelco espectacular. En esa escuela tan especial aprenderá encantamientos, 
                        trucos fabulosos y tácticas de defensa contra las malas artes. Se convertirá en el campeón escolar 
                        de quidditch, especie de fútbol aéreo que se juega montado sobre escobas, y se hará un puñado de
                        buenos amigos... aunque también algunos temibles enemigos. Pero sobre todo, conocerá los secretos 
                        que le permitirán cumplir con su destino. Pues, aunque no lo parezca a primera vista, Harry no es 
                        un chico normal y corriente. ¡Es un verdadero mago!
                    </td>
                </tr>
            </table>
            <hr>
            <h4>Reseñas del libro</h4>
            <table style="width: 90%;">
                <tr>
                    <td style="width: 80px; height: 80px;"> <img src="../../../images/avatar.png" style="margin: 0 auto;" width="60px" height="60px"/></td>
                    <td>
                        <h5>@<strong style="color: #52a3ed">Audrey J. Anderson ~ </strong><font style="color: #B0BEC5;">Enviado el 0<?php echo rand(1, 9) ?>/<?php echo rand(01, 12) ?>/2015 a las 0<?php echo rand(1, 9) ?>:0<?php echo rand(1, 9) ?> PM</font></h5>
                        <p>waaa ya te lo leistee :O ya aun nada :/ es que los quiero en fisico T_T y siempre encuentro el ultimo xD.. Ya quiero leerlo</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 60px; height: 60px;"><img src="../../../images/avatar3.png" style="margin: 0 auto;" width="60px" height="60px"/></td>
                    <td>
                        <h5>@<strong style="color: #52a3ed">Sofia Martínez ~ </strong><font style="color: #B0BEC5;">Enviado el 0<?php echo rand(1, 9) ?>/<?php echo rand(01, 12) ?>/2015 a las 0<?php echo rand(1, 9) ?>:0<?php echo rand(1, 9) ?> PM</font></h5>
                        <p>Yo cuando pequeña me leí unos 10 capítulos porque en el colegio me "obligaron" a hacerlo pero luego conocí sus películas y ahí me enamoré jeje así que aún no le doy la oportunidad a los libros (que me han dicho son mil veces mejor).</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 60px; height: 60px;"><img src="../../../images/avatar2.png" style="margin: 0 auto;" width="60px" height="60px"/></td>
                    <td>
                        <h5>@<strong style="color: #52a3ed">Rebeca Favila ~ </strong><font style="color: #B0BEC5;">Enviado el 0<?php echo rand(1, 9) ?>/<?php echo rand(01, 12) ?>/2015 a las 0<?php echo rand(1, 9) ?>:0<?php echo rand(1, 9) ?> PM</font></h5>
                        <p>Me encano este libro♥ bueno..toda la saga, haha. Vi un poco de la pelicula, no completa. Me alegra que te gustara el libro :3 saludos!</p>
                    </td>
                </tr>
            </table>
            <hr>
            @if (!Auth::guest())
            <h4>Escribe una reseña</h4>
            <div >
                <div class="well bg-gray">
                    <form accept-charset="UTF-8" action="{{ url('review/new',$book->id) }}" method="POST">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                        <input required placeholder="Escribe tu nombre de usuario" type="text" name="title" class="form-control" style="padding: 5px 15px; margin-bottom: 5px; border-radius: 6px; width: 50%">
                        <textarea required id="new_review" name="long_review" 
                                  placeholder="Escribe tu reseña..." rows="5" style="padding: 15px; border-radius: 6px; width: 100%"></textarea>
                        <button class="btn btn-success" type="submit">Agregar reseña</button>
                    </form>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div>
    @else:
    <!-- Add code to login -->
    @endif
</div>
@endsection