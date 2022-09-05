@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="row">
  @foreach ($viewData["persons"] as $person)
  <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
      <img src="{{ asset('/img/'.$person["image"]) }}" class="card-img-top img-card">
      <div class="card-body text-center">
        <a href="{{ route('person.show', ['id'=> $person["id"]]) }}"
          class="btn bg-primary text-white">{{ $person["name"] }}</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
