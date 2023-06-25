@extends('layouts.app')

@section('title' , 'Bienvenido Prueba AYNN')

@section('body-class' , 'landing-page')

<!-- Se que esto no se debe hacer, pero, apliquemos por temas de tiempo: -->
@section('styles')
    <style>
        .team .row .col-md-4 {
            margin-bottom: 5em;
        }
        .team .row {
          display: -webkit-box;
          display: -webkit-flex;
          display: -ms-flexbox;
          display:         flex;
          flex-wrap: wrap;
        }
        .team .row > [class*='col-'] {
          display: flex;
          flex-direction: column;
        }

        .tt-query {
          -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
             -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
                  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        }

        .tt-hint {
          color: #999
        }

        .tt-menu {    /* used to be tt-dropdown-menu in older versions */
          width: 222px;
          margin-top: 4px;
          padding: 4px 0;
          background-color: #fff;
          border: 1px solid #ccc;
          border: 1px solid rgba(0, 0, 0, 0.2);
          -webkit-border-radius: 4px;
             -moz-border-radius: 4px;
                  border-radius: 4px;
          -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
             -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
                  box-shadow: 0 5px 10px rgba(0,0,0,.2);
        }

        .tt-suggestion {
          padding: 3px 20px;
          line-height: 24px;
        }

        .tt-suggestion.tt-cursor,.tt-suggestion:hover {
          color: #fff;
          background-color: #0097cf;

        }

        .tt-suggestion p {
          margin: 0;
        }
    </style>
@endsection

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="title">Prueba Técnica de PHP/Laravel.</h1>
                <h4>Esta es la prueba técnica que se está presentando para <b>AYNN</b> donde se nos pide realizar una aplicación PHP pero usando el Framework de Laravel para todo el tema Backend. Por motivos técnicos y también de conocimientos así como de tiempo, todo el tema Frontend también será implementado en esta aplicación, omitiendo la parte de Angular pero, usando toda la potencia de otras estructuras visuales para cumplir con la el modelo "carrito compras" de la prueba.</h4>
                <br />
                <a href="#" class="btn btn-danger btn-raised btn-lg">
                    <i class="fa fa-play"></i> Aplicación Base, V1.
                </a>
            </div>
        </div>
    </div>
</div>

<div class="main main-raised">
    <div class="container">

        <div class="section text-center">
            <h2 class="title">Productos Disponibles</h2>


            <!-- Buscador -->
            <form class="form-inline" method="get" action="{{ url('/search') }}">
                <input type="text" placeholder="¿Qué producto buscas?" class="form-control" name="query" id="search">
                <button class="btn btn-primary btn-just-icon" type="submit">
                    <i class="material-icons">search</i>
                </button>
            </form>


            <div class="team">
                <div class="row">
                    @foreach($products as $myProduct)
                        <div class="col-md-4">
                            <div class="team-player">
                                <img style="margin-top: 5px; width: 100px; height: 100px;" src="{{ $myProduct->image_product }}" alt="Thumbnail Image" class="img-raised img-circle">
                                <h4 class="title">
                                    <a href="{{ url('/products/'.$myProduct->id) }}">{{ $myProduct->product_name }}</a>


                                    <br>
                                    <small class="text-muted">{{ $myProduct->name }}</small>
                                </h4>
                                <p class="description">{{ $myProduct->product_description }}<a href="#">links</a> for people to be able to follow them outside the site.</p>
                                <!-- <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-instagram"></i></a>
                                <a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-facebook-square"></i></a> -->
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="text-center">
                    {{ $products->links('vendor.pagination.bootstrap-4') }}
                </div>

            </div>

        </div>

    </div>

</div>

@include('includes.footer')
@endsection

