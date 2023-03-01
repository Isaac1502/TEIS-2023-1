@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://assets.jumpseller.com/store/tienda-gamer-medellin/themes/534705/options/93930156/IMG_20221130_002629_006.webp?1671520847" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
           {{ $viewData["computer"]["name"] }}
        </h5>
        <p class="card-text"><strong>Price: </strong>{{ $viewData["computer"]["price"] }}</p>
        <p class="card-text"><strong>Brand: </strong>{{ $viewData["computer"]["brand"] }}</p>
        <p class="card-text"><strong>Category: </strong>{{ $viewData["computer"]["category"] }}</p>
        <p class="card-text"><strong>Keywords: </strong>{{ $viewData["computer"]["keywords"] }}</p>
        <p class="card-text"><strong>Details: </strong>{{ $viewData["computer"]["details"] }}</p>
        <a href="{{ route('computer.delete', ['id'=> $viewData["computer"]["id"]]) }}"
          class="btn bg-primary-del text-white">Delete</a>
      </div>
    </div>
  </div>
</div>
@endsection
