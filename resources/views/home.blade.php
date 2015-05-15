@extends('app')

@section('content')

<div class="container">
    <div style="width: 80%; margin: 0 auto; margin-top: 18%">
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
                  </div><!-- /.box-body -->
                </form>
              </div>
          </div>
</div>
@endsection
