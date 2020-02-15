<!-- resources/views/dashboard/investment.blade.php -->
<!-- Specify that we want to extend the index file -->
@extends('index')
<!-- Set the title content to "Investments" -->
@section('title', 'Investments')
<!-- Set the "content" section, which will replace "@yield('content')" in the index file we're extending -->
@section('content')

<div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="myStocks-tab" data-toggle="tab" href="#myStocks" role="tab"
                aria-controls="Servicios" aria-selected="true">Mis acciones</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="buyStocks-tab" data-toggle="tab" href="#buyStocks" role="tab"
                aria-controls="Aceptados" aria-selected="false">Comprar Acciones</a>
        </li>

    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="myStocks" role="tabpanel" aria-labelledby="myStocks">
            <div class="row">
                @foreach ($investment_movements as $item)
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->stock_name}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ date('d-m-Y', strtotime($item->created_at)) }}
                            </h6>
                            <p class="card-text">Valor unitario ${{ $item->unit_value }}</p>
                            <p class="card-text">Cantidad de acciones compradas {{ $item->amount }}</p>
                            <p class="card-text">Por un total de ${{ $item->total }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade" id="buyStocks" role="tabpanel" aria-labelledby="buyStocks">
            <div class="row">
                @foreach ($share_stocks as $item)
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Accion {{$item->stock_name}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ date('d-m-Y', strtotime($item->created_at)) }}
                            </h6>


                            <p class="card-text text-success">Valor de cada accion: ${{ $item->unit_value }}</p>

                            <button type="button" class="btn btn-primary" onclick="getInformation({{$item->id}})"
                                data-toggle="modal" data-target="#exampleModal">Comprar acciones</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Example label</label>
                            <input type="text" class="form-control" id="formGroupExampleInput"
                                placeholder="Example input placeholder">
                        </div>
                        <p id="total"></p>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" onclick="change()">Comprar</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection