@extends('layouts.app')
@section("title", $viewData["title"])
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Create a computer</div>
          <div class="card-body">
            @if($errors->any())
            <ul id="errors" class="alert alert-danger list-unstyled">
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
            @endif

            <form method="POST" action="{{ route('computer.save') }}">
              @csrf
              <input type="text" class="form-control mb-2" placeholder="Enter name" name="name" value="{{ old('name') }}" />
              <input type="text" class="form-control mb-2" placeholder="Enter price" name="price" value="{{ old('price') }}" />
              <input type="text" class="form-control mb-2" placeholder="Submit photo (as string)" name="photo" value="{{ old('photo') }}" />
              <input type="text" class="form-control mb-2" placeholder="Enter brand" name="brand" value="{{ old('brand') }}" />
              <input type="text" class="form-control mb-2" placeholder="Enter category" name="category" value="{{ old('category') }}" />
              <input type="text" class="form-control mb-2" placeholder="Enter keywords" name="keywords" value="{{ old('keywords') }}" />
              <input type="text" class="form-control mb-2" placeholder="Enter details" name="details" value="{{ old('details') }}" />
              <input type="submit" class="btn btn-primary" value="Send" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
