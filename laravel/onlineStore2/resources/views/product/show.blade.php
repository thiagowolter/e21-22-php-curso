@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container my-4">
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('/img/'.$viewData["product"]["image"]) }}" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $viewData["product"]["name"] }}
                    </h5>
                    <p class="card-text">{{ $viewData["product"]["description"] }}</p>
                    <p class="card-text">{{ $viewData["product"]["brand"] }}</p>
                    <p class="card-text">R$ {{ $viewData["product"]["price"] }}</p>
                    <p class="card-text"><small class="text-muted">Add to Cart</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="py-5 text-center container">
    <div class="row py-lg-1">
        <p>
            <a href="{{ route('product.index') }}" class="btn btn-primary my-2">Voltar</a>
        </p>
    </div>
</section>
@endsection