@extends('layouts.app')

@section('title' , 'Listado de Productos')

@section('body-class' , 'product-page')

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
</div>

<div class="main main-raised">
    <div class="container">

        <div class="section text-center">
            <h2 class="title">Listado general de productos</h2>

            <div class="team">
                <div class="row">

                    <a href="{{ url('/admin/products/create') }}" class="btn btn-primary btn-round">Nuevo producto</a>

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="col-md-2 text-center">Nombre Producto</th>
                                <th class="col-md-5 text-center">Descripción Corta</th>
                                <th class="text-center">Categoría</th>
                                <th class="text-center">Precio</th>
                                <th class="text-center">Cantidad</th>
                                <th class="text-center">Opciones</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($products as $product)
                                <tr>
                                    <td class="text-center">{{ $product->id }}</td>
                                    <td>{{ $product->product_name }}</td>
                                    <td>{{ $product->product_description }}</td>
                                    <td>{{ $product->name ? $product->name : 'Sin Asignar' }}</td>
                                    <td class="text-right">$ {{ $product->product_value }}</td>
                                    <td class="text-center">{{ $product->product_amount }}</td>
                                    <td class="td-actions text-right">
                                        <!-- <form method="post" action="{{ url('/admin/products/'.$product->id) }}">
                                            @csrf -->
                                            <!-- {{ method_field('DELETE') }} -->

                                            <a href="{{ url('/products/'.$product->id) }}" rel="tooltip" title="Ver producto" class="btn btn-info btn-simple btn-xs" target="_blank">
                                                <i class="fa fa-info"></i>
                                            </a>
                                            <a href="{{ url('/admin/products/'.$product->id.'/edit') }}" rel="tooltip" title="Editar producto" class="btn btn-success btn-simple btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ url('/admin/products/'.$product->id.'/images') }}" rel="tooltip" title="Imágenes del producto" class="btn btn-warning btn-simple btn-xs">
                                                <i class="fa fa-image"></i>
                                            </a>
                                            <form style="display: inline-block;" method="post" action="{{ url('/admin/products/'.$product->id.'/delete') }}">
                                                @csrf
                                                <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </form>
                                            <!-- <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                                <i class="fa fa-times"></i>
                                            </button> -->
                                        <!-- </form> -->
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>

                    </table>

                    {{ $products->links('vendor.pagination.bootstrap-4') }}

                </div>
            </div>

        </div>

    </div>

</div>

@include('includes.footer')
@endsection

