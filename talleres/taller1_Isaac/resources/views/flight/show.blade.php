@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
           {{ $viewData["flight"]["name"] }}
        </h5>
        <p class="card-text"><strong>Id: </strong>{{ $viewData["flight"]["id"] }}</p>
        <p class="card-text"><strong>Type: </strong>{{ $viewData["flight"]["type"] }}</p>
        <p class="card-text"><strong>Price: </strong>{{ $viewData["flight"]["price"] }}</p>
        <a href="{{ route('flight.delete', ['id'=> $viewData["flight"]["id"]]) }}"
          class="btn bg-primary-del text-white">Delete</a>
      </div>
    </div>
  </div>
</div>
@endsection
