@extends('layouts.app')

@section('title', 'Listado de categorías')

@section('body-class', 'product-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/city.jpg') }}');">
</div>

<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title">Listado de ciudades</h2>

            <div class="team">
                <div class="row">
                    <a href="{{ url('/cities/create') }}" class="btn btn-primary btn-round">Nueva ciudad</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col-md-2 text-center">Nombre</th>
                                <th class="text-right">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cities as $key => $city)
                            <tr>
                                <td>{{ $city->city_name }}</td>
                                <td class="td-actions text-right">
                                    <form method="post" action="{{ url('/cities/'.$city->id) }}">
                                        @csrf
                                        {{ method_field('DELETE') }}

                                        <input type="hidden" name="city_id_delete" value="{{ $city->id }}">
                                        <a href="{{ url('/cities/'.$city->id.'/edit') }}" rel="tooltip" title="Editar ciudad" class="btn btn-success btn-simple btn-xs">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $cities->links() }}
                </div>
            </div>
        </div>
    </div>

</div>

@include('includes.footer')
@endsection
