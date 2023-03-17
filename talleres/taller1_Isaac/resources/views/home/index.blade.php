@extends('layouts.app')
@section('title', 'Parcial 01')
@section('content')
<div class="text-center">
  <a class="btn bg-primary text-white" href="{{ route('flight.create') }}">Register flights</a>
  <a class="btn bg-ternary text-white" href="{{ route('flight.index') }}">List flights</a>
  <a class="btn bg-ternary text-white" href="{{ route('flight.index') }}">flight statistics</a>
</div>
@endsection
