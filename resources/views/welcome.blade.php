<!-- resources/views/welcome.blade.php -->
<!-- Specify that we want to extend the index file -->
@extends('index')
<!-- Set the title content to "Welcome" -->
@section('title', 'Welcome')
<!-- Set the "content" section, which will replace "@yield('content')" in the index file we're extending -->
@section('content')
<div class="jumbotron text-light"
    style="background-image: url('https://source.unsplash.com/1600x900/?bussiness'); background-size: cover">
    <div class="container transbox">
        <h1 class="display-3">Administra tus cuentas de modo fácil</h1>
        <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam in quia natus magnam ducimus
            quas molestias velit vero maiores. Eaque sunt laudantium voluptas. Fugiat molestiae ipsa delectus iusto vel
            quod.</p>
        <a href="/dashboard/balance" class="btn btn-success btn-lg my-2">Mira tus últimos movimientos</a>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Conveniente</h5>
                    <p class="card-text">Administra todas tus cuentas en un mismo lugar, olvidese de ir al banco!</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mejores Precios</h5>
                    <p class="card-text">Tenemos una estrecha relacion con las agencias de servicios mas reconocidas del
                        país</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Fácil de usar</h5>
                    <p class="card-text">Organiza todo con un click, no se preocupe por tener que entender como
                        funciona, úselo</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection