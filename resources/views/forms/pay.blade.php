<!-- resources/views/dashboard/investment.blade.php -->
<!-- Specify that we want to extend the index file -->
@extends('index')
<!-- Set the title content to "Pagar" -->
@section('title', 'Pagar')
<!-- Set the "content" section, which will replace "@yield('content')" in the index file we're extending -->
@section('content')
<div class="jumbotron jumbotron-fluid text-dark"
    style="background-image: url('https://source.unsplash.com/1600x900/?money'); background-size: cover;">
    <div class="container transbox">
        <h1 class="display-4">Bienvenido a la sección de pago de servicios</h1>
        <p class="lead">Aqui podra pagar sus servicios disponibles</p>
        <hr class="my-4">
        <p>Recuerde ingresar bien los datos 😎</p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <form action="{{ route('service.pay') }}" method="post">
                @method('POST')
                @csrf
                <div class="form-group">
                    <label for="options">Elige un servicio a pagar</label>
                    <select multiple class="form-control" id="options" name="options" onchange="verifySelect()">
                        @foreach ($services as $item)
                        <option value="{{ $item->service_name }}">{{ $item->service_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="amount">Importe</label>
                    <input type="number" class="form-control" id="amount" name="amount" onchange="verifyInput()" onblur="verifyInput()" oninput="verifyInput()">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-success" id="pay" disabled>Pagar Servicio</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection