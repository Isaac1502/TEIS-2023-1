@extends('layouts.app')
@section('title', 'PCs')
@section('content')
<div class="row">
  @foreach ($viewData["computers"] as $computer)
  <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
      <img src="https://assets.jumpseller.com/store/tienda-gamer-medellin/themes/534705/options/93930156/IMG_20221130_002629_006.webp?1671520847" class="card-img-top img-card">
      <div class="card-body text-center">
        <a href="{{ route('computer.show', ['id'=> $computer["id"]]) }}"
          class="btn bg-primary text-white">{{ $computer["name"] }}</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
