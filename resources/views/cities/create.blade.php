@extends('layouts.app')

@section('body-class', 'product-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/city.jpg') }}');">
</div>

<div class="main main-raised">
    <div class="container">

        <div class="section">
            <h2 class="title text-center">Registrar nueva ciudad</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{ url('/cities') }}">
                @csrf

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Nombre de la ciudad</label>
                            <input type="text" class="form-control" name="city_name" value="{{ old('city_name') }}">
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary">Registrar ciudad</button>
                <a href="{{ url('/cities') }}" class="btn btn-default">Cancelar</a>
            </form>
        </div>

    </div>
</div>

@include('includes.footer')
@endsection
