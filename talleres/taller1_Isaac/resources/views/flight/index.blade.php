@extends('layouts.app')
@section('title', 'Flights')
@section('content')
<div class="row">
  @foreach ($viewData["flights"] as $flight)
  <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
      <div class="card-body text-center">
        <a href="{{ route('flight.show', ['id'=> $flight["id"]]) }}"
          class="btn bg-primary text-white">{{ $flight["name"] }}</a>
        <p class="card-text"><strong>Id: </strong>{{ $flight["id"] }}</p>
        <p class="card-text"><strong>Name: </strong>{{ $flight["name"] }}</p>
        <p class="card-text"><strong>Type: </strong>{{ $flight["type"] }}</p>
        <p class="card-text"><strong>Price: </strong>{{ $flight["price"] }}</p>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
