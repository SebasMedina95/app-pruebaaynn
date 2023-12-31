@extends('layouts.app')

@section('title' , 'Bienvenido Prueba AYNN')

@section('body-class' , 'product-page')

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
</div>

<div class="main main-raised">
    <div class="container">

        <div class="section">
            <h2 class="title">Editar producto seleccionado</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{ url('/admin/products/'.$product->id.'/edit') }}">
                @csrf

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Nombre del producto</label>
                            <input type="text" class="form-control" name="product_name" value="{{ old('product_name', $product->product_name) }}">
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group label-floating">
                            <label class="control-label">Precio del producto</label>
                            <input type="number" step="0.01" class="form-control" name="product_value" value="{{ old('product_value', $product->product_value) }}">
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group label-floating">
                            <label class="control-label">Cantidad del producto</label>
                            <input type="number" class="form-control" name="product_amount" value="{{ old('product_amount', $product->product_amount) }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                         <div class="form-group label-floating">
                            <label class="control-label">Descripción corta</label>
                            <input type="text" class="form-control" name="product_description" value="{{ old('product_description', $product->product_description) }}">
                        </div>
                    </div>

                    <div class="col-sm-12">
                         <div class="form-group label-floating">
                            <textarea class="form-control" placeholder="Descripción extensa del producto" rows="5" name="product_long_description">{{ old('product_long_description', $product->product_long_description) }}</textarea>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Categoría del producto</label>
                            <select class="form-control" name="category_id">
                                <option value="0">General</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if($category->id == old('category_id', $product->category_id)) selected @endif>
                                    {{ $category->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                </div>

                <div class="text-center col-sm-12">

                    <button class="btn btn-primary">Guardar cambios</button>

                    <a href="{{ url('/admin/products') }}" class="btn btn-default">Cancelar</a>

                </div>

            </form>

        </div>

    </div>

</div>

@include('includes.footer')
@endsection

