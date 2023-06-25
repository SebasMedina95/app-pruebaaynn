@extends('layouts.app')

@section('title' , 'Dashboard Prueba AYNN')

@section('body-class' , 'product-page')

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
</div>

<div class="main main-raised">
    <div class="container">

        <div class="section">
            <h2 class="title text-center">Dashboard</h2>

                @if (session('notification'))
                    <div class="alert alert-success">
                        {{ session('notification') }}
                    </div>
                @endif

                <ul class="nav nav-pills nav-pills-primary" role="tablist">
                    <li class="active">
                        <a href="#dashboard" role="tab" data-toggle="tab">
                            <i class="material-icons">dashboard</i>
                            Carrito de compras
                        </a>
                    </li>
                    <li>
                        <a href="#tasks" role="tab" data-toggle="tab">
                            <i class="material-icons">list</i>
                            Pedidos realizados
                        </a>
                    </li>
                </ul>

                <hr>

                <p>Tu carrito de compras presenta {{ auth()->user()->order->details->count() }} productos.</p>

                <table class="table table-striped table-hover table-xs">
                    <thead>
                        <tr>
                            <th>Opciones</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (auth()->user()->order->details as $detail)
                        <tr>
                            <td style="width: 10%;">
                                <form method="post" action="{{ url('/order') }}">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input type="hidden" name="order_detail_id" value="{{ $detail->id }}">

                                    <a href="{{ url('/products/'.$detail->product_id) }}" target="_blank" rel="tooltip" title="Ver producto" class="btn btn-info btn-simple btn-xs">
                                        <i class="fa fa-info"></i>
                                    </a>
                                    <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </form>
                            </td>
                            <td>$ {{ $detail->price }}</td>
                            <td>{{ $detail->quantity }}</td>
                            <td>$ {{ $detail->quantity * $detail->price }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="text-right alert alert-warning">
                    <p><strong>Total a pagar:</strong> $ {{ auth()->user()->order->total }}</p>
                </div>


                <div class="text-center">
                    <form method="post" action="{{ url('/ordering') }}">
                        @csrf
                        <input type="hidden" name="total_order" value="{{ auth()->user()->order->total }}">
                        <button class="btn btn-primary btn-round">
                            <i class="material-icons">done</i> Realizar orden
                        </button>
                    </form>

                </div>

        </div>

    </div>

</div>

@include('includes.footer')
@endsection


