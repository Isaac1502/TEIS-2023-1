@extends('layouts.app')
@section('title', 'Taller 01')
@section('content')
<div class="text-center">
  <a class="btn bg-primary text-white" href="{{ route('computer.create') }}">Create PC</a>
  <a class="btn bg-ternary text-white" href="{{ route('computer.index') }}">List PC</a>
</div>
@endsection
