@extends('layouts.app')
@section('title'. $viewData["title"])
@section('content')

<body>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://uploaddeimagens.com.br/images/004/009/309/original/dortmund-22-23-kit-1.jpg?1662220310" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://uploaddeimagens.com.br/images/004/009/311/original/psg-nike-2022-2023-camiseta-qwr.jpg?1662220353" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="https://uploaddeimagens.com.br/images/004/009/312/original/2022-23-home-kit-player-gallery-05052022-cover.jpg?1662220382" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Soccer.com Store</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p><br><br>
      </div>
    </div>
    <div class="row" margin-top="30px">
      <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/img/bvb.jpg') }}" class="img-fluid rounded">
      </div>
      <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/img/psg.jpg') }}" class="img-fluid rounded">
      </div>
      <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/img/liverpool.jpg') }}" class="img-fluid rounded">
      </div>
      <p><br>
          <a href="{{ route('product.index') }}" class="btn btn-primary my-2">Ver Todas Camisas</a>
        </p>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  @endsection