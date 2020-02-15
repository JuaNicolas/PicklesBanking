<!-- resources/views/dashboard/investment.blade.php -->
<!-- Specify that we want to extend the index file -->
@extends('index')
<!-- Set the title content to "Investments" -->
@section('title', 'Investments')
<!-- Set the "content" section, which will replace "@yield('content')" in the index file we're extending -->
@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Saldo disponible {{$salary}}</h1>
        </div>
    </div>

    <div class="row">
        @foreach ($investments as $item)
        <div class="col-6 col-md-4 col-lg-3">
            <div class="card  border-success mb-3">
                <h5 class="card-header text-center text-muted">
                    Acciones
                </h5>
                <div class="card-body text-center">
                    <h5 class="card-title">{{$item->bussiness}}</h5>
                    <p class="card-text">Valor unitario ${{ $item->unit_value }}</p>
                    <p class="card-text">Cantidad de acciones compradas {{ $item->share_stock_amount }}</p>
                    <p class="card-text">Por un total de ${{ $item->amount }}</p>
                    <a href="{{ route('investment.sell', ['id' => $item->id]) }}" class="btn btn-block btn-info text-white">Vender</a>
                    <a href="{{ route('investment.buy', ['id' => $item->id]) }}" class="btn btn-block btn-success">Comprar</a>
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