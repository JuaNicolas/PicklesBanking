<!-- resources/views/dashboard/investment.blade.php -->
<!-- Specify that we want to extend the index file -->
@extends('index')
<!-- Set the title content to "Crear Servicio" -->
@section('title', 'Crear Servicio')
<!-- Set the "content" section, which will replace "@yield('content')" in the index file we're extending -->
@section('content')
<div class="jumbotron jumbotron-fluid text-dark"
    style="background-image: url('https://source.unsplash.com/1600x900/?services'); background-size: cover;">
    <div class="container transbox">
        <h1 class="display-4">Bienvenido a la sección de crear servicios</h1>
        <p class="lead">Aqui podra cargar nuevos servicios para luego pagarlos</p>
        <hr class="my-4">
        <p>Recuerde ingresar bien los datos 😎</p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <form action="{{ route('service.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre del Servicio</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="numRef">Numero de Referencia</label>
                    <input type="text" class="form-control" name="numRef" id="numRef">
                </div>
                <div class="form-group text-right">
                    <input type="submit" class="btn btn-primary" value="Crear Servicio">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection