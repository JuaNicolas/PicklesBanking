<!-- resources/views/dashboard/balance.blade.php -->
<!-- Specify that we want to extend the index file -->
@extends('index')
<!-- Set the title content to "Balance" -->
@section('title', 'Balance')
<!-- Set the "content" section, which will replace "@yield('content')" in the index file we're extending -->
@section('content')
<div class="jumbotron">
    <h1 class="display-4">Balance Financiero</h1>
    <p class="lead">Donde se encontra la información sobre sus movimientos</p>
    <hr class="my-4">
    <p>En Pickles Banking otorgamos un resumen de cuentas. El dinero total disponible en su cuenta es de ${{$balance}}.
    </p>
    {{-- Open modal --}}
    <button class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="#moreInformation">Para tener
        mas informacíon</button>
</div>


<div class="container">
    <table class="table table-hover table-striped table-borderless">
        <thead class="thead-light">
            <tr>
                <th scope="col">Fecha</th>
                <th scope="col">Servicio</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Importe</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movement as $item)
            <tr>
                <th scope="row">{{ date('d-m-Y', strtotime($item->created_at)) }}</th>
                <td>{{ $item->service_name }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->total }}</td>

                @switch ($item->status_name)
                @case ('Aceptado')
                <td class="text-success">{{ $item->status_name }}</td>
                @break;
                @case ('Pendiente')
                <td class="text-info">{{ $item->status_name }}</td>
                @break;
                @case ('Cancelado')
                @case ('Rechazado')
                <td class="text-danger">{{ $item->status_name }}</td>
                @break;
                @endswitch
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


{{-- Modal--}}
<div class="modal fade" id="moreInformation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Balance Financiero</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>En la sección de balances se muestra información detallada de los ultimos movimientos del usuario
                    ordenados desde el más reciente</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection