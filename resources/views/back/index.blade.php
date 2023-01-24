@extends('back.layouts.main')

@section('title')
    <div class="d-sm-flex align-items-center justify-content-between mg-lg-b-30">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                    <li class="breadcrumb-item"><a href="#">WCommerce</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Vista General</li>
                </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">Vista General</h4>
        </div>
    </div>
@endsection

@section('content')
    @if (empty($product) || empty($payment) || empty($shipment) || empty($category))
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-3">Acciones Recomendadas</h1>
            </div>
        </div>
    @endif
@endsection
