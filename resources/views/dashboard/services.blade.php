<!-- resources/views/dashboard/investment.blade.php -->
<!-- Specify that we want to extend the index file -->
@extends('index')
<!-- Set the title content to "Services" -->
@section('title', 'Services')
<!-- Set the "content" section, which will replace "@yield('content')" in the index file we're extending -->
@section('content')
<div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="services-tab" data-toggle="tab" href="#services" role="tab"
                aria-controls="Servicios" aria-selected="true">Servicios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="accepted-tab" data-toggle="tab" href="#accepted" role="tab"
                aria-controls="Aceptados" aria-selected="false">Aceptados</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pending-tab" data-toggle="tab" href="#pending" role="tab" aria-controls="Pendientes"
                aria-selected="false">Pendientes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="rejected-tab" data-toggle="tab" href="#rejected" role="tab"
                aria-controls="Rechazados" aria-selected="false">Rechazados</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="cancelled-tab" data-toggle="tab" href="#cancelled" role="tab"
                aria-controls="Cancelados" aria-selected="false">Cancelados</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="services" role="tabpanel" aria-labelledby="services">
            <div class="row">
                @foreach ($all_services as $item)
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->service_name}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ date('d-m-Y', strtotime($item->created_at)) }}
                            </h6>
                            <a href="/" class="btn btn-primary">Mas Informacion</a>
                        </div>
                    </div>
                </div>
                @endforeach </div>
        </div>
        <div class="tab-pane fade" id="accepted" role="tabpanel" aria-labelledby="accepted">
            <div class="row">
                @foreach ($services_accepted as $item)
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->service_name}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ date('d-m-Y', strtotime($item->created_at)) }}
                            </h6>
                            <p class="card-text text-success">{{ $item->status_name }}</p>
                            <p class="card-text">{{$item->total}}</p>
                            <a href="/" class="btn btn-primary">Mas Informacion</a>

                        </div>
                    </div>
                </div>
                @endforeach</div>
        </div>
        <div class="tab-pane fade" id="pending" role="tabpanel" aria-labelledby="pending">
            <div class="row">
                @foreach ($services_pending as $item)
                <div class="col-3">
                    <form action="{{ route('services.update', $item->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->service_name}}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">
                                    {{ date('d-m-Y', strtotime($item->created_at)) }}
                                </h6>
                                <p class="card-text text-info">{{ $item->status_name }}</p>
                                <p class="card-text">El import total a pagar es de: ${{$item->total}}</p>
                                <button type="submit" class="btn btn-success">Pagar</button>
                            </div>
                        </div>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade" id="rejected" role="tabpanel" aria-labelledby="rejected">
            <div class="row">

                @foreach ($services_rejected as $item)
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->service_name}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ date('d-m-Y', strtotime($item->created_at)) }}
                            </h6>
                            <p class="card-text text-danger">{{ $item->status_name }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade" id="cancelled" role="tabpanel" aria-labelledby="cancelled">
            <div class="row">
                @foreach ($services_cancelled as $item)
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->service_name}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ date('d-m-Y', strtotime($item->created_at)) }}
                            </h6>
                            <p class="card-text text-danger">{{ $item->status_name }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


</div>
@endsection