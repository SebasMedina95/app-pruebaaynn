@extends('layouts.app')

@section('body-class', 'profile-page')

@section('content')

<div class="header header-filter" style="background-image: url('/img/examples/city.jpg');"></div>

<div class="main main-raised">
    <div class="profile-content">
        <div class="container">
            <div class="row">
                <div class="profile">
                    <div class="avatar">
                        @foreach ($imagesLeft as $image)
                            <img src="{{ $image->image_product }}" style="position: absolute; width: 70%; height: 20%;" alt="Circle Image" class="img-circle img-responsive img-raised">
                        @endforeach
                    </div>
                    <div class="name">
                        <h3 class="title"> {{ $product->product_name }} </h3>
                        <h6>{{ $category->name }}</h6>
                    </div>
                </div>
            </div>
            <div class="description text-center">
                <p>$ {{ $product->product_value }}</p>
                <p> {{ $product->product_long_description }}  </p>
            </div>


            @if (session('notification'))
                <div class="alert alert-success">
                    {{ session('notification') }}
                </div>
            @endif


            <div class="text-center">
                @if (auth()->check())
                    <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#modalAddToCart">
                        <i class="material-icons">add</i> Añadir a la Orden
                    </button>
                @else
                    <a href="{{ url('/login?redirect_to='.url()->current()) }}" class="btn btn-primary btn-round">
                        <i class="material-icons">add</i> Añadir a la Orden
                    </a>
                @endif
            </div>




            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="profile-tabs">
                        <div class="nav-align-center">

                            <div class="tab-content gallery">
                                <div class="tab-pane active" id="studio">
                                    <div class="row">
                                        <div class="col-md-6">
                                            @foreach ($imagesLeft as $image)
                                                <img src="{{ $image->image_product }}" class="img-rounded" />
                                            @endforeach
                                        </div>
                                        <div class="col-md-6">
                                            @foreach ($imagesRight as $image)
                                                <img src="{{ $image->image_product }}" class="img-rounded" />
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End Profile Tabs -->
                </div>
            </div>

        </div>
    </div>
</div>



<div class="modal fade" id="modalAddToCart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Seleccione la cantidad que desea agregar</h4>
      </div>
      <form method="post" action="{{ url('/order') }}">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <div class="modal-body">
            <input type="number" name="quantity" value="1" class="form-control">
            <input readonly type="hidden" name="price" value="{{ $product->product_value }}" class="form-control">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-info btn-simple">Añadir a la orden</button>
        </div>
      </form>
    </div>
  </div>
</div>




@include('includes.footer')
@endsection

