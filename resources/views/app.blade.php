<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>VotaUnLibro</title>


        <!-- Fonts -->
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/AdminLTE.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/AdminLTE.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/shadowbox.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/js/shadowbox.js') }}" rel="stylesheet">
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->
    </head>
    <body style="background: whitesmoke;">
        <nav style="background: rgb(1, 117, 178);" class="navbar navbar-findcond navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}"><strong style="color: white">Vota un libro</strong></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#" style="color: white"><strong>Añadir libro</strong><span class="sr-only">(current)</span></a></li>
                        <li class="active"><a href="#" style="color: white"><strong>Ultimos libros</strong><span class="sr-only">(current)</span></a></li>
                        <li class="active"><a href="#" style="color: white"><strong>Nosotros</strong><span class="sr-only">(current)</span></a></li>
                        <ul class="nav navbar-nav navbar-right">
                            @if (Auth::guest())
                            <li><a href="{{ url('/auth/login') }}">Iniciar sesión</a></li>
                            <li><a href="{{ url('/auth/register') }}">Registrar</a></li>
                            @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><strong style="color: white">{{ Auth::user()->name }}</strong> <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/profile') }}">Ver perfil</a></li>
                                    <li><a href="{{ url('/auth/logout') }}">Cerrar sesión</a></li>
                                </ul>
                            </li>
                            @endif
                        </ul>
                    </ul>
                    <form class="navbar-form navbar-right search-form" method="get" action="{{ url('books/search') }}">
                        <input size="27" placeholder="Harry Potter, La Bilbia, etc." type="text" name="s" class="form-control">
                        <button type="submit" class="form-control btn btn-default" style="color: #FFFFF"/>
                        Buscar <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-default">
            <div class="header">
                <div class="container-fluid">
                    <table>
                        <tr>
                        <div class="">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>
                    </table>
                </div>
            </div>
        </nav>
        @yield('content')

        <!-- Scripts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>
        <script type="text/javascript">
$(function () {
    $('#searchable-container').searchable({
        searchField: '#container-search',
        selector: '.book',
        childSelector: '.book_brief',
        show: function (elem) {
            elem.slideDown(100);
        },
        hide: function (elem) {
            elem.slideUp(100);
        }
    })
});
        </script>
    </body>
</html>
