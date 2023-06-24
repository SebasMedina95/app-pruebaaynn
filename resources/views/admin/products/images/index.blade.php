@extends('layouts.app')

@section('title' , 'Imágenes de Productos')

@section('body-class' , 'product-page')

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
</div>

<div class="main main-raised">
    <div class="container">

        <div class="section text-center">
            <h2 class="title">Imágenes de producto seleccionado "{{ $product->product_name }}" </h2>

            <!-- Cuando elaction esta vacío, la petición se hace sobre la url actual, aprovechemos eso -->
            <form method="post" action="">
                @csrf
                <div class="form-group">
                    <label class="control-label">Coloque aquí la URL de la imagen que desea anexar (recuerde que debe tener una extensión de imagen válida)</label>
                    <input placeholder="URL de la imagen que se desea anexar ..." type="text" class="form-control" name="image_product" value="{{ old('image_product') }}" required>
                </div>

                <button type="submit" class="btn btn-primary btn-round">Subir nueva imagen</button>
                <a href="{{ url('/admin/products') }}" class="btn btn-default btn-round">Volver al listado de productos</a>
            </form>

            <hr>

            <div class="row">
            @foreach ($images as $image)
                <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <img src="{{ $image->image_product }}" style="width: 250px; height: 250px;" >
                        <form method="post" action="">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="hidden" name="image_id_delete" value="{{ $image->id_imagen_product }}">
                            <button type="submit" class="btn btn-danger btn-round">Eliminar imagen</button>

                            <!-- Verificar el featured para saber que imagen se mostrará de producto -->
                            @if ($image->featured)
                                <!-- <button type="button" class="btn btn-info btn-fab btn-fab-mini btn-round" rel="tooltip" title="Imagen portada">
                                    <i class="material-icons">favorite</i>
                                </button> -->
                                <a href="{{ url('/admin/products/'.$product->id.'/images/select/'.$image->id_imagen_product.'/false') }}" title="Quitar como portada" class="btn btn-info btn-fab btn-fab-mini btn-round">
                                    <i class="material-icons">favorite</i>
                                </a>
                            @else
                                <a href="{{ url('/admin/products/'.$product->id.'/images/select/'.$image->id_imagen_product.'/true') }}" title="Colocar como portada" class="btn btn-primary btn-fab btn-fab-mini btn-round">
                                    <i class="material-icons">favorite</i>
                                </a>
                            @endif

                        </form>
                      </div>
                    </div>
                </div>
            @endforeach
            </div>






        </div>

    </div>

</div>

@include('includes.footer')
@endsection

