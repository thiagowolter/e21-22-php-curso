@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container my-4">
  <div class="row">
    @foreach ($viewData["products"] as $product)
    <div class="col-md-4 col-lg-3 mb-2">
      <div class="card">
        <img src="{{ asset('/img/'.$product["image"]) }}" class="card-img-top img-card">
        <div class="card-body text-center">
          <a href="{{ route('product.show', ['id'=> $product["id"]]) }}" class="btn bg-primary text-white">{{ $product["name"] }}</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
<section class="py-5 text-center container">
    <div class="row py-lg-1">
        <p>
            <a href="{{ route('home.index') }}" class="btn btn-primary my-2">Voltar</a>
        </p>
    </div>
</section>

@endsection