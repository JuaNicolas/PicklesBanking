<!-- resources/views/dashboard/investment.blade.php -->
<!-- Specify that we want to extend the index file -->
@extends('index')
<!-- Set the title content to "Services" -->
@section('title', 'Services')
<!-- Set the "content" section, which will replace "@yield('content')" in the index file we're extending -->
@section('content')
<div class="jumbotron jumbotron-fluid text-dark"
    style="background-image: url('https://source.unsplash.com/1600x900/?services'); background-size: cover;">
    <div class="container transbox">
        <h1 class="display-4">Bienvenido a la sección de servicios</h1>
        <p class="lead">Aqui podra cargar nuevos servicios o ir a la sección de pago de servicios</p>
        <hr class="my-4">
        <p>Recuerde ingresar bien los datos 😎</p>
        <a href="{{ route('service.formCreate') }}" class="btn btn-lg btn-info">Subir un
            servicio</a>
        <a href="{{ route('service.formPay') }}" class="btn btn-lg btn-success">Pagar
            servicio</a>
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach ($services as $item)
        <div class="col-6 col-md-4 col-lg-3 mb-3">
            <div class="card  border-primary">
                <h5 class="card-header text-center text-muted">
                    Acciones
                </h5>
                <div class="card-body text-center">
                    <h5 class="card-title">{{$item->service_name}}</h5>
                    <p class="card-text">Código de referencia {{ $item->reference_number }}</p>
                </div>
                <div class="card-footer text-center text-muted">
                    <h6 class="card-subtitle mb-2 text-muted">{{ date('d-m-Y', strtotime($item->created_at)) }}</h6>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection